<?php

namespace app\models;
use yii\base\Model;

class Language extends Model
{
    static $lans = [
        'en-US'=>'English',
        'zh-CN'=>'中文',
        'zh-TW'=>'中文繁体',
    ];
}