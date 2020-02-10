<?php

namespace app\controllers;

use core\View;
use app\models\Data;

/**
 * Главный контроллер проекта
 *
 */
class SiteController
{
    /**
     * Отображение главной страницы
     *
     */
    public function actionIndex() :void
    {
        View::render('index');
    }

    /**
     * Отображение страницы с данными
     *
     */
    public function actionData() :void
    {
    	$model = new Data();
    	$model = $model->get();

        View::render('data', [
        	'model' => $model
        ]);
    }

    /**
     * Функция с параметрами
     *
     * @param integer $integer
     * @param string $string
     */
    public function actionParams(int $integer, string $string) :void
    {
        var_dump($integer);
        var_dump($string);
    }
}