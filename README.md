LabelWidget Extension for Yii 2
===============================

LabelWidget renders an label bootstrap component.

[![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](http://www.yiiframework.com/)
[![Latest Stable Version](https://poser.pugx.org/kosoukhov/yii2-labelwidget/v/stable)](https://packagist.org/packages/kosoukhov/yii2-labelwidget)
[![Total Downloads](https://poser.pugx.org/kosoukhov/yii2-labelwidget/downloads)](https://packagist.org/packages/kosoukhov/yii2-labelwidget)
[![Latest Unstable Version](https://poser.pugx.org/kosoukhov/yii2-labelwidget/v/unstable)](https://packagist.org/packages/kosoukhov/yii2-labelwidget)
[![License](https://poser.pugx.org/kosoukhov/yii2-labelwidget/license)](https://packagist.org/packages/kosoukhov/yii2-labelwidget)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist kosoukhov/yii2-labelwidget:dev-master
```

or add

```
"kosoukhov/yii2-labelwidget": "dev-master"
```

to the require section of your `composer.json` file.


How to use
----------

**View**:

```php
<?php
use kosoukhov\widget\LabelWidget;

echo LabelWidget::widget([
    'condition' => 1,
        'rules' => [
            '1' => ['text' => 'Yes', 'class' => 'success'], 
            '0' => ['text' => 'No', 'class' => 'danger'],
        ],
]);
?>
```

'class' must be in: default|primary|success|info|warning|danger
