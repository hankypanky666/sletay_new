<?php

namespace frontend\models;

use yii;

class SendRequestToAvia
{
    public $data;

    function __construct($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-Access-Token: 60ff5cfe2432fe19aff54b94ba750dcd"));
        $response = curl_exec($ch);
        curl_close($ch);

        $this->data = json_decode($response);
    }

    //if aviasales return true success
    public function ifSuccess(){
        if($this->data->success == 1){
            return true;
        }
        return false;
    }
}
