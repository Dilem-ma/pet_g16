<?php
/**
 * Created by PhpStorm.
 * User: Dilemma丶
 * Date: 2017/3/28
 * Time: 1:41
 */

namespace app\assets;

use yii\web\AssetBundle;

class CreateCaseCheckAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'css/jquery.toastmessage.css',
        'css/loading.css',
        'css/styles.css',
        'css/upload.css',
    ];
    public $js = [
        'js/controllers/CreateCaseCheckCtrl.js',
        'js/controllers/OuterCtrl.js',
        'js/jquery.toastmessage.js',

    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'app\assets\AngularAsset',
    ];
}