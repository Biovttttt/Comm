<?php session_start();?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
<head>


	<title></title>


<?php require_once'header.php';?>
</head>
<body>
		<form  action="otchet.php" method="post">
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
              </select>
              <br>
             
<!--  <label for="faculty">Факультет</label>
              <input id="faculty" name="faculty" class="text" /><br>
           
           <label for="spes">Специальность</label>
              <input id="spes" name="spes" class="text" placeholder="Введите Пароль" /><br> -->
             <input type="Submit"/><br>
            
           

          </ol> 
<?php 
$id_type=$_POST['id_type'];
$faculty=$_POST['faculty'];
$spes=$_POST['$spes'];
require_once 'conf.php';
 $conn = sqlsrv_connect( $serverName, $connectionInfo);
 $sql1="exec dbo.rekomen 1,2";
 $stmt = sqlsrv_query( $conn, $sql1 );
echo '<table class="table table-striped table-bordered">';
echo '<th>ФИО</th>
     <th>Факультет</th>
     <th>Специальность</th>
     <th>Год Рождения</th>
     <th>Регион</th>
     <th>Дата подачи</th>
     <th>Номер Сертификата</th>
     <th>Количество баллов основной</th>

     <th>Сумма баллов по предмету</th>';
while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)){
// $_SESSION["name_rol"]=$row['name_rol'];
// $_SESSION["auth"]='yes';

	echo '<tr>
	   <td> '.$row['fio'].'</td>
	<td>'.$row['Facultet'].'</td>
	   <td>'.$row['Spesialnost'].'</td>

	   <td>'.$row['god_roj'].'</td>
	   <td> '.$row['region'].'</td>
	 
   <td> '.$row['data_podachi'].'</td>
	   <td> '.$row['nomer_sertifkat'].'</td>
	   <td> '.$row['kol_ball_osn'].'</td>
	   <td> '.$row['kol_ball_pre'].'</td>
	   </tr>
	   ';
// header('location:index.php');
}
echo '</table>';

sqlsrv_free_stmt( $stmt);

 ?>



</body>
 </html>