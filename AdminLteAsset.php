<?php
/**
 * Created by PhpStorm.
 * User: phpNT - http://phpnt.com
 * Date: 22.04.2016
 * Time: 13:47
 */

namespace phpnt\adminLTE;

use yii\base\Exception;
use yii\web\AssetBundle as BaseAdminLteAsset;

class AdminLteAsset extends BaseAdminLteAsset
{
    public $sourcePath = '@bower/admin-lte/dist';

    public $css = [
        'css/adminlte.css',
        'css/alt/adminlte.components.css',
        'css/alt/adminlte.core.css',
        'css/alt/adminlte.extra-components.css',
        'css/alt/adminlte.pages.css',
        'css/alt/adminlte.plugins.css',
    ];

    public $js = [
        'js/adminlte.min.js'
    ];

    public $image = [
        'admin-lte/dist/img'
    ];

    public $depends = [
        'phpnt\fontAwesome\FontAwesomeAsset'
    ];
}
