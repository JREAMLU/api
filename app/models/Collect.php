<?php

class CollectModel extends _RedisModel {

    const USER_KEY = 'openid:nickname';

    public function setIPInfo($key, $data) {
        $redis = $this->redis('collect');
        return $redis->zAdd($key, time(), $data);
    }

    public function setOpenID($data) {
        $redis = $this->redis('collect');
        return $redis->sAdd(self::USER_KEY, $data);
    }

    public function getUsers($nickname = '') {
        $redis = $this->redis('collect');
        $it = NULL;
        // don't return empty results until we're done
        $redis->setOption(Redis::OPT_SCAN, Redis::SCAN_RETRY);

        $users = [];
        while ($arr_mems = $redis->sScan(self::USER_KEY, $it, '*' . $nickname)) {
            foreach ($arr_mems as $str_mem) {
                $users[] = $str_mem;
            }
        }

        return $users;
    }

    public function getIPInfoByKey($key, $start, $end) {
        $redis = $this->redis('collect');
        return $redis->zRevRange($key, $start, $end);
    }
}