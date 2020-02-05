<?php

namespace app\models;

/**
 * Модель "Данные" содержит, как ни странно, данные.
 * пример работы с моделями
 *
 */
class Data
{
    /**
     * Метод, отвечающий за отображение всех данных
     *
     */
    public function get() :array
    {
        $data = [
        	0 => [
        		'id' => 1,
        		'value' => 'example-1'
        	],
        	1 => [
        		'id' => 2,
        		'value' => 'example-2'
        	],
        	2 => [
        		'id' => 3,
        		'value' => 'example-3'
        	],
        	3 => [
        		'id' => 4,
        		'value' => 'example-4'
        	],
        	4 => [
        		'id' => 5,
        		'value' => 'example-5'
        	]
        ];

        return $data;
    }
}
