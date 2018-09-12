<?php

class CollectController extends _BaseController {

    public function ipAction() {
        $req_params = $this->getRawData(true);
        $collect = new Collect();
        $collect->setIP($req_params);

        $this->responeJSON();
    }

    public function ipinfoAction() {
        $req_params = $this->getRawData(true);
        $collect = new Collect();
        $info = $collect->getIPInfo($req_params);

        $this->responeJSON($info);
    }

    public function searchusersAction() {
        $req_params = $this->getRawData(true);
        $collect = new Collect();
        $users = $collect->getUsers($req_params);

        $this->responeJSON($users);
    }
}
