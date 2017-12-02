<?php
/**
 * 语音回复处理类
 *
 * [WeEngine System] Copyright (c) 2013 WE7.CC
 */
defined('IN_IA') or exit('Access Denied');

class Ewei_shoppingModuleProcessor extends WeModuleProcessor
{

    public function respond()
    {
        global $_W;
        $str = $this->message['content'];
        $url = "\"http://www.tuling123.com/openapi/api?key=2983f0c71ebb41c2a3dba7099e49cb8b&info=";
        //获取图灵机器人返回的数据
        $data = file_get_contents($url . $str);
        $data = json_decode($data);
        return $this->respText($data->text);
    }
}
