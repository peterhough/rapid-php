<?php

namespace app\lib;

class ModelFormatter implements \RedBean_IModelFormatter
{
    /**
     * Set the format of models
     * - \app\models namespace
     * - model{name} filename
     * 
     * @param string $model
     * @return string
     */
    public function formatModel($model) {
        return '\\app\\models\\model' . $model;
    }

}