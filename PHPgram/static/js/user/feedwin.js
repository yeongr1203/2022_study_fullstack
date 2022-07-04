const url = new URL(location.href);

function getFeedList() {
    if(!feedObj) { return; }
    feedObj.showLoading();            
    const param = {
        page: feedObj.currentPage++,
        iuser : url.searchParams.get('iuser')
    }
    fetch('/user/feed' + encodeQueryString(param))
    .then(res => res.json())
    .then(list => {                
        feedObj.makeFeedList(list);                
    })
    .catch(e => {
        console.error(e);
        feedObj.hideLoading();
    });
}
getFeedList();



(function() {
    const gData = document.querySelector('#gData');

    const btnFollow = document.querySelector('#btnFollow');
    if(btnFollow) { // 타인의 feed에 왔다는 것.
        btnFollow.addEventListener('click', function() {
            const param = {
                toiuser: parseInt(gData.dataset.toiuser)
            };
            console.log(param);
            // console.log('이벤트 클릭');  // 처음 먼저 찍어서 값 나오는지 확인.
            const follow = btnFollow.dataset.follow;
            console.log('follow :' + follow);
            const followUrl = '/user/follow';
            switch(follow) {
                case '1':   // 팔로우 취소
                    // fetch(followUrl);
                    fetch(followUrl + encodeQueryString(param),{method: 'DELETE'})
                        // get, delete는 encodeQueryString(queryString)으로 날림.
                    .then(res => res.json())
                    .then(res => {
                        // console.log('res : ' + res);
                        if('res:'+res){
                            btnFollow.dataset.follow = '0';
                            btnFollow.classList.remove('btn-outline-secondary');
                            btnFollow.classList.add('btn-primary');
                            if(btnFollow.dataset.youme === '1'){
                                
                                btnFollow.innerText = '맞팔로우';
                            }
                            btnFollow.innerText = '팔로우';
                        }
                    });
                    break;
                case '0':   // 팔로우 등록
                    fetch(followUrl, {
                        method: 'POST',
                        body: JSON.stringify(param)
                        // put, post stringify를 주로 사용.
                    })
                    .then(res=> res.json())
                    .then(res => {
                        if(res.result){
                            btnFollow.dataset.follow = '1';
                            btnFollow.classList.remove('btn-primary');
                            btnFollow.classList.add('btn-outline-secondary');
                            if(btnFollow.dataset.youme === '1' && btnFollow.dataset.meyou === '0'){
                                btnFollow.innerText = '맞팔로우';
                            }
                            btnFollow.innerText = '팔로우 취소';
                        }
                    });
                    break;
            }
        });
    }
})();