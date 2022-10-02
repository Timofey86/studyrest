<?php

namespace app\controllers;

use app\models\Order;
use yii\rest\ActiveController;

class OrderController extends BaseApiController
{
    public $modelClass = Order::class;

}