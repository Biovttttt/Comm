<?php session_start();?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
<head>


	<title></title>


<?php require_once'header.php';?>
</head> 
<br>

<body>
  <div class="container">
<?php 
require_once 'conf.php';
 $conn = sqlsrv_connect( $serverName, $connectionInfo);
 $sql1="SELECT *
  FROM plan11";
 $stmt = sqlsrv_query( $conn, $sql1 );


echo '<table class="table table-striped table-bordered" >';
echo '<th>Факультет</th>
     <th>Специальность</th>
     <th>Количество Контр/th>
     <th>Количество бюд</th>';
while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)){
// $_SESSION["name_rol"]=$row['name_rol'];
// $_SESSION["auth"]='yes';

	echo '<tr>
	   <td> '.$row['Faculty'].'</td>
	<td>'.$row['spes'].'</td>
	   <td> '.$row['kol_kontr'].'</td>
	<td>'.$row['kol_bud'].'</td>
	  
	   </tr>
	   ';
// header('location:index.php');
}
echo '</table>';

sqlsrv_free_stmt( $stmt);
 ?>