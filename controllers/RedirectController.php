<?php

namespace app\controllers;

use Yii;
use yii\helpers\Url;
use yii\web\Controller;

class RedirectController extends Controller
{
    public function redirectToLogin()
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect('/login');
        }
    }
}
