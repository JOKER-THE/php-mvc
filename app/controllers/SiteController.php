<?php

namespace app\controllers;

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
        echo 'index page';
    }
}