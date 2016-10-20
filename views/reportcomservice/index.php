<?php
use yii\helpers\Html;

?>
<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr class="info">
            <th>ลำดับ</th>
            <th>รหัสรับงาน</th>
            <th>ยี่ห้อ</th>
            <th>รายละเอียดปัญหา</th>
            <th></th>
        </tr>
    </thead>
    <tbody>

        <?php
        foreach ($data as $i => $item) {

            echo '<tr>';
            echo '<td>'.($i+1).'</td>';
            echo '<td>'.$item['com_service_id'].'</td>';
            echo '<td>'.$item['brand'].'</td>';
            echo '<td>'.$item['problem'].'</td>';
           // echo '<td>'.Html::a('<span class="glyphicon glyphicon-list-alt"></span>', ['/report_com_detail','id'=>$item['com_service_id']]).'</td>';
            echo '</tr>';
        }
        
      
        ?>
    </tbody>
</table>