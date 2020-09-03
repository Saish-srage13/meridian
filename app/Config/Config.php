<?php 

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Config extends BaseConfig
{
    public $layoutsDirViewPath = DIRECTORY_SEPARATOR .'layouts';

    public $adminAssetsCssDir =  'assets'. DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'css' ;
    public $adminAssetsJsDir =  'assets'. DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'js';
    public $adminAssetsDir =  'assets'. DIRECTORY_SEPARATOR . 'admin'  ;

    public $frontAssetsDir =  'assets'. DIRECTORY_SEPARATOR . 'front'  ;

    public $uploadsDir =  'public'. DIRECTORY_SEPARATOR . 'uploads'  ;

}