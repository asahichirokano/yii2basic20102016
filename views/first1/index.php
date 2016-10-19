<?php
/* @var $this yii\web\View */
?>
<h1><?php echo $title; ?></h1>


<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr class="success">
        <th>key</th>    
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
       <tbody>
    <?php 
    foreach ($person as $key=>$value){
    //echo $key.' : '.$item['fname'].'/'.$item['lname'].'/'.$item['email'].'<br>';

//echo '<hr>';


     echo '<tr>';
     echo '<td>'.($key+1).'</td>';
     echo '<td>'.$value['fname'].'</td>';
     echo '<td>'.$value['lname'].'</td>';
     echo '<td>'.$value['email'].'</td>';
     echo '</tr>';
    }
     ?>
    </tbody>
  </table>
