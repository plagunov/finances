<?php

namespace app\modules\finances\controllers;

use yii\web\Controller;

/**
 * Default controller for the `finances` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionIncome()
    {
        return $this->render('index', [
            'operation' => 'income',
        ]);
    }

    public function actionConsumption()
    {
        return $this->render('index', [
            'operation' => 'consumption',
        ]);
    }
}
