<?php

class ApiController extends _BaseController {

    public function ipinfoAction() {
        $req_params = $this->getRawData(true);
        $api = new Api();

        $this->responeJSON(
            $api->getIP($req_params['ip'])
        );
    }

    public function ipAction() {
        $this->responeJSON(['ip' => $_SERVER['REMOTE_ADDR']]);
    }
}
