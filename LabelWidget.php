<?php

namespace kosoukhov\widget;

use yii\bootstrap\Widget;
use yii\bootstrap\Html;

/**
 * LabelWidget renders an label bootstrap component.
 *
 * For example,
 *
 * ```php
 * echo LabelWidget::widget([
 *     'condition' => 1,
 *     'rules' => [
 *         '1' => ['text' => 'Yes', 'class' => 'success'], 
 *         '0' => ['text' => 'No', 'class' => 'danger'],
 *     ],
 * ]);
 * ```
 * 'class' must be in: default|primary|success|info|warning|danger
 *
 * @see https://github.com/kosoukhov/yii2-LabelWidget
 * @author Vadim Kosoukhov <kosoukhov@gmail.com>
 */
class LabelWidget extends Widget {

	/**
	 * @var array conditional for check
	 */
	public $condition = [];

	/**
	 * @var array rules for render label contains text and class
	 */
	public $rules = [
		'0' => ['text' => 'No', 'class' => 'danger'],
		'1' => ['text' => 'Yes', 'class' => 'success'],
	];

	/**
     * @inheritdoc
     */
	public function run() {
		echo Html::tag('span', $this->rules[$this->condition]['text'], ['class' => ['label', 'label-' . $this->rules[$this->condition]['class']]]);
	}

}
