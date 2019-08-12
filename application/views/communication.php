<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html"/>
    <meta name="author" content="admin"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="yandex-verification" content="dec63dc4e38e4514"/>
    <meta name='wmail-verification' content='aba1721d10c5915e8efb0020a64e3dd0' />
    <link href="<?php echo base_url()?>css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="<?php	echo base_url();?>/image/favicon.ico" type="image/x-icon" />

	<title>Связаться с нами</title>
</head>
<body>
<?php
    include("application/views/header.php");
?>
<div class="row">
<div id="conteinir" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:0px solid #cc0000;">
<div  style="padding:0px; margin-left: 20%;">
<form id="conteinir" method="post" action="<?php echo base_url()."index.php/main/milotpr" ?>">

  <!--Тег задает заголовок для групповых элементов-->
  <legend><h2>Оставьте сообщение:</h2></legend>
  Ваше имя: 
  <br />
  <!--Устанавливает однострочное текстовое поле ввода:-->
  <input type="text" name="name">
  <br />
  <!--Используется для полей ввода, которые должны содержать адрес электронной почты.-->
  E-mail:
  <br />
  <input type="text" name="email">
  <br />
  Номер телефона:
  <br />
  <input type="text" name="phone">
  <br />
  Сообщение:
  <!--Тег разрешает многострочный ввод текста.-->
  <br />
  <textarea rows="10" cols="45" name="message2"></textarea>
  <br />
  <!--Устанавливает кнопку для отправки данных формы в обработчик формы.-->
  <input type="submit" value="Отправить сообщение">
  <br />
  <br />

</form>
</div>
</div>
</div>
<?php
    include("application/views/futer.php");
?>
</body>
</html>