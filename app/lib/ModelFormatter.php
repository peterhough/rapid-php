<?php

namespace app\lib;

class ModelFormatter implements \RedBean_IModelFormatter
{
    /**
     * Set the format of models
     * - \app\model namespace
     * 
     * @param string $model
     * @return string
     */
    public function formatModel($model) {
        return '\\app\\model\\' . $model;
    }

}