<?php

namespace app\modules\v2;

use app\models\User;
use app\models\Users;
use yii\filters\AccessControl;
use yii\filters\auth\HttpBasicAuth;

class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\v2\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        \Yii::$app->user->enableSession = false;

        // custom initialization code goes here
    }

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => HttpBasicAuth::class,
            'auth' => function($username,$password){
            if ($user = Users::find()->where(['username'=>$username])->one() and !empty($password) and
            $user->validatePassword($password)){
                return$user;
            }
            return null;
            },
        ];
        $behaviors['access'] = [
            'class' => AccessControl::class,
            'rules' => [
                [
                    'allow' => true,
                    'roles' => ['@'],
                ],
            ],
        ];
        return $behaviors;
    }

}