<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html"/>
    <meta name="author" content="admin"/>
   <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
   <link href="css/style.css" rel="stylesheet" type="text/css" />

	<title>Регистрация</title>
</head>
<body>
<?php
    include("application/views/header_ar.php");
?>


<div style="padding:0px; margin-left: 33%;">
<h1>Регистрация <br/></h1>
<?php

	echo form_open('main/reg_prover');
    echo validation_errors();
    echo "<br>";
    echo "<br>";
    echo "Введите логин<br>";
    echo form_input('login',$this->input->post['login']);
    echo "<br>Введите ПАРОЛЬ<br>";
    echo form_password('password1','');
    echo "<br>Введите ПАРОЛЬ еще раз<br>";
    echo form_password('password2','');
    echo "<br>";
    //echo $image;
    //echo "Введите код с картинки<br>";
   // echo form_input('kap','');
    echo "<br>";
    echo form_submit('submit', 'Регистрация');
    echo form_close();
    //print_r($this->session->all_userdata());
    echo "<br>";
    echo "<br>";
?>

</div>
<?php
    include("application/views/futer.php");
?>
</body>
</html>