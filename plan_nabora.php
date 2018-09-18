<?php session_start();?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<head>

	<?php 
require_once 'header.php';
	?>

	<title></title>

	<form action="plan_nabora.php" method="post">
 <p>Выберите Факультет</p>

 <select  name="faculty" size="3" multiple="">
              <!--   <option  value="2">Технологический</option>  -->
             
                <option value="1">Информацонной Технологии</option>  
              </select>
              <br>
 <p>Выберите специальность</p>

               <select name="spes" size="3" multiple="">
                <option  value="1">Программная инженерия</option> 
                <option value="2">Управления технической Системы</option> 
              </select><br> 
               <label for="name">Количество Мест на контракт</label>
              <input id="kol_kontr" name="kol_kontr" class="text" /><br><br>
              <label for="name">Количество Мест на Бюджет</label>
              <input id="kol_bud" name="kol_bud" class="text" /><br>
           
              <br>


	

         <!--  <label for="faculty">Факультет</label>
              <input id="faculty" name="faculty" class="text" /><br>
           
           <label for="spes">Специальность</label>
              <input id="spes" name="spes" class="text" placeholder="Введите Пароль" /><br> -->
             <input type="Submit"/><br>
            
           

          </ol> 
</head>
<body>
<?php 
$faculty=$_POST['faculty'];
$spes=$_POST['spes'];
$kol_bud=$_POST['kol_bud'];
$kol_kontr=$_POST['kol_kontr'];
require_once 'conf.php';
 $conn = sqlsrv_connect( $serverName, $connectionInfo);
 $sql1="
 INSERT INTO [dbo].[plan_nabora]
           ([facult]
           ,[spes]
           ,[kol_kontr]
           ,[kol_bud])
     VALUES
           ($faculty
           ,$spes
           ,$kol_bud
           ,$kol_kontr )
";
 
 $stmt = sqlsrv_query( $conn, $sql1 );
// if( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)){
// $_SESSION["name_rol"]=$row['name_rol'];
// $_SESSION["auth"]='yes';
	if ($stmt) {
		# code...
		echo "Успешно Добавлено";
	}
	
// header('location:index.php');

$faculty=0;
$spes=0;
// sqlsrv_free_stmt( $stmt);

 ?>
</body>
 
</html>