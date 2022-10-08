<?php

namespace app\controllers\v2;

use app\controllers\BaseApiController;
use app\models\Product;
use yii\helpers\ArrayHelper;

class ProductController extends BaseApiController
{
    public $modelClass = Product::class;

    public function actionColors()
    {
        return [12,144,625];
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