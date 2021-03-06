<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class AdminThemeAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/admin/layout/';
    public $css = [
        'css/themes/default.css',
        'css/custom.css',
    ];
    public $depends = [
        'wfcreations\metronic\bundles\CoreAsset',
        'wfcreations\metronic\bundles\globalassets\MetronicAsset',
        'wfcreations\metronic\bundles\globalassets\ComponentsRoundedAsset',
        'wfcreations\metronic\bundles\globalassets\PluginsAsset',
        'wfcreations\metronic\bundles\admin\AdminLayoutAsset',
        'wfcreations\metronic\bundles\admin\QuickSidebarAsset',
    ];

}
