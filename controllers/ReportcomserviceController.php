<?php

namespace app\controllers;

class ReportcomserviceController extends \yii\web\Controller
{
    public function actionIndex() {
        //สร้างการเชื่อมต่อ
        $conn = \Yii::$app->db;
        //คำสั่ง sql
        $sql = 'SELECT c.brand,s.* FROM com_service s
                LEFT JOIN com c on c.com_id=s.com_id';
        //สร้าง query
        $cmd = $conn->createCommand($sql);
        //run query
        $data = $cmd->queryAll();

        //print_r($data);
        //die();
        return $this->render('index', ['data' => $data]);
    }

}
