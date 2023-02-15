<?php 
 
 require('../admin/inc/db_config.php');
 require('../admin/inc/essentials.php');


 if(isset($_POST['register']))
 {
    if($data['pass'] != $data['cpass']){
        echo 'pass_mismatch';
        exit;
    }
 }

  
?>