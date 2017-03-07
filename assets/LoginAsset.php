<?php
/**
 * Created by PhpStorm.
 * User: easonyan
 * Date: 2/23/2017
 * Time: 5:00 PM
 */

namespace app\assets;


use yii\web\AssetBundle;

class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'css/lrtk.css',
    ];
    public $js = [
        'js/login.js',
        'js/controllers/LoginCtrl.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'app\assets\AngularAsset',
        'app\assets\SweetAlertAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
    ];
}