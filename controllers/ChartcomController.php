<?php

namespace app\controllers;

class ChartcomController extends \yii\web\Controller
{
    public function actionIndex()
    {
       //สร้างการเชื่อมต่อ
        $conn = \Yii::$app->db;
        //คำสั่ง sql
        $sql = 'SELECT t.com_type_name,COUNT(c.com_id)as cdata FROM com c
                LEFT JOIN com_type t on t.com_type_id=c.com_type_id
                GROUP BY c.com_type_id';
        //สร้าง query
        $cmd = $conn->createCommand($sql);
        //run query
        $data = $cmd->queryAll();
       foreach ($data as $item) {
            $chart[]=['name'=>$item['com_type_name'],'data'=>[intval($item['cdata'])]];
        }

        //print_r($data);
        //die();
        return $this->render('index', ['chart' => $chart]);
    }

}
