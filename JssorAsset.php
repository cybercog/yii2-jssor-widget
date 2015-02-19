<?php

/**
 * Jssor Asset
 * @author xjflyttp <xjflyttp@gmail.com>
 * @see http://www.jssor.com
 */

namespace xj\jssor;

use yii\web\AssetBundle;

class JssorAsset extends AssetBundle {

    public $sourcePath;
    public $basePath = '@webroot/assets';
    public $publishOptions = ['forceCopy' => YII_DEBUG];
    public $css = [];
    public $js = [];
    public $depends = ['yii\web\JqueryAsset'];

    private function getJs() {
        return [
            YII_DEBUG ? 'js/jssor.js' : 'js/jssor.min.js',
            YII_DEBUG ? 'js/jssor.slider.js' : 'js/jssor.slider.min.js',
        ];
    }

    public function init() {
        $this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets';
        if (empty($this->js)) {
            $this->js = $this->getJs();
        }
        return parent::init();
    }

}
