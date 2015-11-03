<?php
/**
 * Created by PhpStorm.
 * User: hanky
 * Date: 14.10.2015
 * Time: 20:47
 */

namespace common\components;

class Request extends \yii\web\Request

{
    public $web;
    public $adminUrl;

    public function getBaseUrl()
    {
        return str_replace($this->web, "", parent::getBaseUrl()) . $this->adminUrl;
    }

    public function resolvePathInfo()
    {
        if ($this->getUrl() === $this->adminUrl) {
            return "";
        } else {
            return parent::resolvePathInfo();
        }
    }
}