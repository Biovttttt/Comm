<?php session_start();?>
 <link rel="stylesheet" href="bootstrap/css/bootstrap.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
 <img src="img/KGTU.jpg" style="
    margin-left: 600px;
    width: 150px;
">
    <h2 style="
    margin-top: -80px;
    margin-left: 100px; 
    background-color: 
">Приёмная комиссия</h2> 
    <h2 style="
    margin-top: -50px;
    margin-left: 900px; 
"> <?php echo $_SESSION["name_rol"]; ?></h2> 
<?php 
if (isset($_SESSION['auth'])==true and $_SESSION['rol1']==2 ){
echo ' 
<a style="
margin-top:90px;
    margin-left:120px;  
" href="index.php"/>Главная
<a style="
margin-top:80px;
    margin-left: 10px; 
" href="outTalon.php"/>Ранжированный список</a>
<a style="
margin-top: 50px;
    margin-left: 10px;  
" href="sqlinsert.php"/>Регистрация Абитурента на контракт
<a style="
margin-top:80px;
    margin-left: 82px; 
" href="location.php"/>выход</a>

';
} 
if (isset($_SESSION['auth'])==true and $_SESSION['rol1']==3 ){
 echo '
<a style="
margin-top: 50px;
    margin-left: 10px;  
"  href="plan_nabora.php"/>Добавит план набора
<a style="
margin-top: 50px;
    margin-left: 10px;  
" href="outplan.php"/>План набора
<a style="
margin-top:80px;
    margin-left: 80px; 
" href="location.php"/>выход</a>
';
}
if (isset($_SESSION['auth'])==true and $_SESSION['rol1']==1 ){
    echo '

<a style="
margin-top: 50px;
    margin-left: 10px;  
" href="sqlinsertDocument.php"/>Отчет по Специальности на текущего времени 

<a style="
margin-top:80px;
    margin-left: 80px; 
" href="location.php"/>выход</a>
';}
else{
     echo '
  
 <h2 style="
    margin-top: -50px;
    margin-left: 900px; 
">===</h2> 
<a style="
margin-top: -50px;
    margin-left: 1000px;  
" href="auth1.php"/>вход</a>
';
}


?> 