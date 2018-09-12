<?php

use App\Lib\Common;
use App\Lib\Requester;

class Api {
    public function getIP($ip) {
        $com = new Common();
        return $com->ip2region($ip);
    }
}