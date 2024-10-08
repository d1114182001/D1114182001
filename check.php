<?php
    $account=$_GET['account'];
    $pt = $_GET['password'];
    $check=$_GET['check'];

    echo '帳號: '. $account. ',密碼: ' . $pt . ',驗證碼 :' . $check;
?>