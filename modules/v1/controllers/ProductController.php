<?php

namespace app\modules\v1\controllers;

use app\controllers\BaseApiController;
use app\modules\v1\models\Product;
use yii\helpers\ArrayHelper;

/**
 * Default controller for the `v1` module
 */
class ProductController extends BaseApiController
{
    public $modelClass = Product::class;

    public function actionColors()
    {
        //return ArrayHelper::map(Product::find()->select('color')->groupBy('color')->all(),'color','color');
        return ['yes it is v1'];
    }
}
