<?php
require_once 'Orm.php';
require_once 'Orm.php';
class Model extends Orm
{
    public  function Query(){
        return "SELECT *FROM tabla";
    } /// SELECT *FROM 

    public  function select(){}/// columnas
}

$model = new Model;

echo $model->Query();

