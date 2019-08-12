<div class="row">
<div id="conteinir" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:0px solid #cc0000;">
<div  style="padding:0px;">
<div style=" padding:0px; margin-left: 33%;">
<?php
if (!isset($_SESSION['admin'])){
?>
<h1 >Авторизация<br/></h1>
<?php 
	echo form_open('main/login_prover');
    echo validation_errors();
    echo "Введите логин<br>";
    echo form_input('login','');
    echo "<br>Введите пароль<br>";
    echo form_password('password1','');
    echo "<br>";
    echo "<br>";
    echo form_submit('submit', 'Войти');
    echo form_close();
    echo "<br>";
    }
    else{
?>
</div>




<?php

echo '<div class="row">';
echo '<div id="conteinir" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:0px solid #cc0000;">';


echo '<table border="2"  width="1140">';
 echo '<tr>';
    echo "<td><b>№</b></td>";
    echo "<td><b>Имя</b></td>";
    echo "<td><b>Email</b></td>";
    echo "<td><b>Телефон</b></td>";
    echo "<td><b>Сообщение</b></td>";
    echo "<td><b>Дата</b></td>";
    
    echo '</tr>';
foreach($query->result() as $r){
    echo '<tr>';
    echo "<td>".$r->id."</td>";
    echo "<td>".$r->name."</td>";
    echo "<td>".$r->email."</td>";
    echo "<td>".$r->phone."</td>";
    echo "<td>".$r->text."</td>";
    echo "<td>".$r->date."</td>";
    echo '</tr>';
        } 
echo '</table>';
echo '</div>';
echo '</div>';
}
?>
<br>
<?php
	if (!isset($_SESSION['id_sess'])){
?>
<?php
	}
    else{
?>
<a href="<?php echo base_url().'index.php/main/vixod'?>" class="btn btn-primary" > Выход</a>
<?php
	}
   // print_r($_SESSION);
?>
<br>
<br>



</div>