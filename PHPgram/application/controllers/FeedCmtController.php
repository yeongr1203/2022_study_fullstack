<?php
namespace application\controllers;

class FeedCmtController extends Controller {

    public function index() {
        switch(getMethod()) {
            case _POST:
                $json = getJson();
                return [_RESULT => $this->model->insFeedCmt($json)];
            // feed 더보기
            case _GET:
                $ifeed = isset($_GET["ifeed"]) ? intval($_GET["ifeed"]) : 0;
                $param = [ "ifeed" => $ifeed ];
                return $this->model->selFeedCmtList($param);
        }

    }
}