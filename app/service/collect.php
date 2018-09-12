<?php

use App\Lib\Requester;

class Collect {
    public function setIP($params) {
        $url = sprintf(
            'https://api.weixin.qq.com/sns/jscode2session?appid=%s&secret=%s&js_code=%s&grant_type=authorization_code',
            'wx626b9c307f23c0fb',
            'e8f5222e90b77bee2acdfde98eec99ad',
            $params['code']
        );
        $resp = Requester::Curl([
            'url' => $url,
            'method' => 'GET',
        ]);

        if ($resp[0]['openid'] == null) {
            return;
        }

        $info = $params;
        unset($info['code']);
        $info['timestamp'] = time();

        $key = $resp[0]['openid'] . '-' . $params['nickname'];
        $collect = new CollectModel();
        $collect->setOpenID($key);
        $collect->setIPInfo($key, json_encode($info));
        return true;
    }

    public function getIPInfo($params) {
        $collect = new CollectModel();
        $user_ip_info = $collect->getIPInfoByKey($params['key'], $params['start'], $params['end']);
        $infos = [];
        foreach ($user_ip_info as $key => $val) {
            $info = json_decode($val, true);
            $info['date'] = date('Y-m-d H:i:s', $info['timestamp']);
            $infos[] = $info;
        }

        return [
            'count' => count($infos),
            'list' => $infos,
        ];
    }

    public function getUsers($params) {
        $collect = new CollectModel();
        $users = $collect->getUsers(trim($params['nickname']));
        return [
            'count' => count($users),
            'list' => $users,
        ];
    }
}