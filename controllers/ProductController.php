<?php

namespace app\controllers;

use app\models\Order;
use app\models\Product;
use yii\helpers\ArrayHelper;

class ProductController extends BaseApiController
{
    public $modelClass = Product::class;

    public function actionColors()
    {
        return ArrayHelper::map(Product::find()->select('color')->groupBy('color')->all(),'color','color');
    }

//    public function actions()
//    {
//        $actions = parent::actions();
//        $actions['index']['prepareDataProvider'] = [$this, 'pDAp'];
//        return $actions;
//    }
//
//    public function pDAp()
//    {
//
//        return Yii::createObject([
//            'class' => ActiveDataProvider::class,
//            'query' => Order::find(),
//        ]);
//    }
}