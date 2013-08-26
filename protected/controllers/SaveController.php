<?php

class SaveController extends Controller
{
    public function actionIndex()
    {
        if(isset($_POST['c']) && isset($_POST['y'])){
            echo $this->renderPartial('index', array('code'=>$_POST['c'], 'pass'=>$_POST['y']), true);
        }
    }
}