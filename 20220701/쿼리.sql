CREATE database phpgramphpgram;

CREATE TABLE t_user(
   iuser INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
   email VARCHAR(50) NOT NULL,   
   pw VARCHAR(100),
   nm VARCHAR(5) NOT NULL,
   cmt VARCHAR(50) DEFAULT '' COMMENT '코멘트',
   mainimg VARCHAR(50),
   regdt DATETIME DEFAULT NOW(),
   UNIQUE(email)
);

CREATE TABLE `t_user_follow` (
    `fromiuser` INT UNSIGNED NOT NULL,
    `toiuser` INT UNSIGNED NOT NULL,
    `regdt` DATETIME NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`fromiuser`, `toiuser`) USING BTREE,
    FOREIGN KEY (`fromiuser`) REFERENCES `t_user` (`iuser`),
    FOREIGN KEY (`toiuser`) REFERENCES `t_user` (`iuser`)
);

CREATE TABLE `t_user_img` (
    `iuser` INT(20) UNSIGNED NOT NULL,
    `img` VARCHAR(50) NOT NULL,
    `regdt` DATETIME NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`iuser`, `img`),
    FOREIGN KEY (`iuser`) REFERENCES `t_user` (`iuser`)
);

CREATE TABLE t_feed(
   ifeed INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
   location VARCHAR(20),
   ctnt TEXT,
   iuser INT UNSIGNED NOT NULL,
   regdt DATETIME DEFAULT NOW(),
   FOREIGN KEY (iuser) REFERENCES t_user(iuser)
);

CREATE TABLE t_feed_img(
   ifeed INT UNSIGNED NOT NULL,
   img VARCHAR(50) NOT NULL,
   PRIMARY KEY(ifeed, img),
   FOREIGN KEY (ifeed) REFERENCES t_feed(ifeed)
);

CREATE TABLE t_feed_cmt(
   icmt INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
   ifeed INT UNSIGNED NOT NULL,
   iuser INT UNSIGNED NOT NULL,
   cmt VARCHAR(200) NOT NULL,
   regdt DATETIME DEFAULT NOW(),
   FOREIGN KEY (ifeed) REFERENCES t_feed(ifeed),
   FOREIGN KEY (iuser) REFERENCES t_user(iuser)
);

CREATE TABLE t_feed_fav(
   ifeed INT UNSIGNED,
   iuser INT UNSIGNED,
   regdt DATETIME DEFAULT NOW(),
   PRIMARY KEY(ifeed, iuser),
   FOREIGN KEY (ifeed) REFERENCES t_feed(ifeed),
   FOREIGN KEY (iuser) REFERENCES t_user(iuser)
);

CREATE TABLE t_dm(
    idm INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    regdt DATETIME DEFAULT NOW(),
    lastmsg VARCHAR(200) NOT NULL,
    lastdt DATETIME DEFAULT NOW()
);

CREATE TABLE t_dm_user(
    idm INT UNSIGNED,
    iuser INT UNSIGNED,
    PRIMARY KEY(idm, iuser),
    FOREIGN KEY(idm) REFERENCES t_dm(idm),
    FOREIGN KEY(iuser) REFERENCES t_user(iuser)
);

CREATE TABLE t_dm_msg(
     idm INT UNSIGNED,
     seq INT UNSIGNED,
     iuser INT UNSIGNED,
     msg VARCHAR(200) NOT NULL,
     regdt DATETIME DEFAULT NOW(),
     PRIMARY KEY(idm, seq),
     FOREIGN KEY(idm) REFERENCES t_dm(idm),
     FOREIGN KEY(iuser) REFERENCES t_user(iuser)
);


/* 2022-06-29 수업*/
SELECT A.ifeed, A.location, A.ctnt, A.iuser, A.regdt
		, C.nm AS writer, C.mainimg
		, IFNULL(E.cnt, 0)  AS favCnt
		/* IFNULL(E.cnt, 0) => E.cnt 가 없을 땐 NULL로 표현하지 말고 0으로 표현*/
		/* , CASE WHEN D.ifeed, IS NULL THEN 0 ELSE 1 END AS isFAv */
FROM t_feed A
INNER JOIN t_user C
ON A.iuser = C.iuser
LEFT JOIN (										-- 너도있고 나도있는것만 띄울때는 INNER JOIN
	SELECT ifeed, COUNT(ifeed) AS cnt	/* COUNT(ifeed) AS cnt는 ifeed를 카운트한 수 => cnt로 변경 */
	FROM t_feed_fav
	GROUP BY ifeed
) E
ON A.ifeed = E.ifeed
ORDER BY A.ifeed DESC
LIMIT 0, 15;

/* --- 2번유저가 좋아요 누른 피드는 = 1, 안누른 피드 = 0 으로 나타내기. --- */

SELECT A.ifeed, A.location, A.ctnt, A.iuser, A.regdt
		, C.nm AS writer, C.mainimg
		, IFNULL(E.cnt, 0) AS favCnt
--		, IFNULL(F.cft, 0) AS isFav
-- 	, CASE WHEN F.ifeed IS NULL THEN 0 ELSE 1 END AS isFav
		, IF(F.ifeed IS NULL, 0, 1) AS isFav
FROM t_feed A
INNER JOIN t_user C
ON A.iuser = C.iuser
LEFT JOIN (
	SELECT ifeed, COUNT(ifeed) AS cnt	
	FROM t_feed_fav
	GROUP BY ifeed
) E
ON A.ifeed = E.ifeed
LEFT JOIN (						
	SELECT ifeed,
	-- IFNULL을 사용 할 때,  
	/* COUNT(ifeed) AS cft 추가 / WHERE 절 아래에 GROUP BY ifeed */
	FROM t_feed_fav
	WHERE iuser = 2
) F
ON A.ifeed = F.ifeed
ORDER BY A.ifeed DESC
LIMIT 0, 15;

/* -------------  022.07.01  -------------- */

-- 내가 쓴 게시물 값(갯수) 가져오기
-- 내풀이
SELECT count(A.ifeed), A.iuser, B.email, B.nm, B.cmt
FROM t_feed A
INNER JOIN t_user B
ON A.iuser = B.iuser
GROUP BY A.iuser 
HAVING A.iuser = 2;
/* 하나의 그룹에서 묶고 그 안에서 where절을 사요할 경우에는 
그룹바이를 사용 한 후 having을 사용.
만약, 그룹을 묶지 않고 찾은 후 그룹으로 묶어준다면,
Where절을 먼저 사용 한 후 group by를 해서 찾는다.
where = having 같은를 가지고 있다.
*/
-- 1번작성
SELECT iuser, email, nm, cmt, mainimg
FROM t_user
WHERE iuser = 2;
-- 2번작성 
SELECT COUNT(ifeed) AS feedCnt
FROM t_feed
WHERE iuser = 1;

-- 1번 2번 합친 총 풀이 = 선생님풀이
SELECT iuser, email, nm, cmt, mainimg
	, (SELECT COUNT(ifeed) FROM t_feed WHERE iuser = 1) AS feedCnt
FROM t_user
WHERE iuser=2;

-- 오후 -------------------------------------------------
-- 피드 팔로우
SELECT COUNT(fromiuser)
FROM t_user_follow
WHERE fromiuser = 3
AND toiuser =1 ;

SELECT COUNT(fromiuser)
FROM t_user_follow
WHERE fromiuser = 1
AND toiuser =2 ;

SELECT iuser, email, nm, cmt, mainimg
		, (SELECT COUNT(ifeed) FROM t_feed WHERE iuser = 3 ) AS feedCnt
		, (SELECT COUNT(fromiuser) FROM t_user_follow WHERE fromiuser = 3 AND toiuser = 2 ) AS youme
		, (SELECT COUNT(fromiuser) FROM t_user_follow WHERE fromiuser = 2 AND toiuser = 3 ) AS meyou
FROM t_user
WHERE iuser = 3
;		
-- 팔로워 = 타인이->나  // 팔로우 = 나 -> 타인 
SELECT COUNT(fromiuser) AS f_you
FROM t_user_follow
WHERE toiuser = 3;

SELECT COUNT(toiuser) AS f_Me
FROM t_user_follow
WHERE fromiuser = 3;