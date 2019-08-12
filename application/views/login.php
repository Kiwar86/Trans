<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html"/>
    <meta name="author" content="admin"/>
   <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
   <link href="css/style.css" rel="stylesheet" type="text/css" />

	<title>Авторизация</title>
</head>
<body >
<?php
    include("application/views/header_ar.php");
?>

<div style=" padding:0px; margin-left: 33%;">
<h1 >Авторизация<br/></h1>
<?php 
	echo form_open('main/login_prover');
    echo validation_errors();
    echo "Введите логин<br>";
    echo form_input('login','');
    echo "<br>Введите ПАРОЛЬ<br>";
    echo form_password('password1','');
    echo "<br>";
    echo "<br>";
    echo form_submit('submit', 'Войти');
    echo form_close();
    echo "<br>";
?>
<a class="btn btn-primary" href="<?php
	echo base_url().'index.php/main/reg'
?>">Регистрация</a>
</div>
<br />
<br />
<?php
    include("application/views/futer.php");
?>
</body>
</html>