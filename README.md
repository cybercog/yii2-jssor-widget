# yii2-jssor-widget
http://www.jssor.com/

composer.json
---------
```json
"require": {
    "xj/yii2-jssor-widget": "*"
},
```
In View
---------
```php
use xj\jssor\JssorAsset;
JssorAsset::register($this);
```

In Assets depends
-----------
```php
public $depends = [
    'xj\jssor\JssorAsset',
];
```
