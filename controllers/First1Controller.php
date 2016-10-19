<?php

namespace app\controllers;

class First1Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $title = 'กำลังพัฒนาระบบ ด้วย Yii2 FrameWork';
        $person = [
            ['fname' => 'สมชาย', 'lname' => 'ใจดี', 'email' => 'som@hotmail.com'],
            ['fname' => 'สมหญิง', 'lname' => 'ใจงาม', 'email' => 'ying@hotmail.com'],
            ['fname' => 'สมศรี', 'lname' => 'งามมาก', 'email' => 'sri@hotmail.com']
        ];
        return $this->render('index',['title'=>$title,'person'=>$person]);
    }

}
