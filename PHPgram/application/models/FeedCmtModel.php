<?php
namespace application\Models;
use PDO;

class FeedCmtModel extends Model {

    public function insFeedCmt(&$param) {
        $sql =
        "   INSERT INTO t_feed_cmt
            (ifeed, iuser, cmt)
            VALUES
            (:ifeed, :iuser, :cmt)        
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":ifeed", $param["ifeed"]);
        $stmt->bindValue(":iuser", getIuser());
        $stmt->bindValue(":cmt", $param["cmt"]);
        $stmt -> execute();
        return intval($this->pdo->lastInsertId());
    }

    public function selFeedCmt($param) {
        $sql = 
        "   SELECT G.*, COUNT(G.icmt) - 1 AS ismore
            FROM (  -- 댓글이 더 있는지 없는지 찾기위해 서브쿼리로 작성.                
                SELECT A.icmt, A.cmt, A.regdt, A.ifeed
                        , B.iuser, B.nm AS writer, B.mainimg AS writerimg
                FROM t_feed_cmt A
                INNER JOIN t_user B
                ON A.iuser = B.iuser	-- 댓글 쓴 사람의 정보를 필요로 해서 INNER JOIN, ON 까지 함.
                WHERE A.ifeed = :ifeed
                ORDER BY A.icmt DESC	-- 최신글보이게 (내림차순)
                LIMIT 2					-- 최대 2개만 가져온다는 뜻.
            ) G
            GROUP BY G.ifeed
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt -> bindValue(":ifeed", $param["ifeed"]);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);


    }
}