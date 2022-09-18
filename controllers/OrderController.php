<?php

namespace app\controllers;

use app\models\Order;
use yii\rest\ActiveController;

class OrderController extends ActiveController
{
    public $modelClass = Order::class;

}