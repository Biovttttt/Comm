<?php session_start();?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
<head>


	<title></title>


<?php require_once'header.php';?>
</head> 
<br>
<a style="margin-left: 200px"  href="insertTalon.php"/>Добавить Талон</a>
<body>
  <div class="container">
<?php 
require_once 'conf.php';
 $conn = sqlsrv_connect( $serverName, $connectionInfo);
 $sql1="SELECT *
  FROM [dbo].[talon_bud] where spes=1 and color='Город'";
 $stmt = sqlsrv_query( $conn, $sql1 );
 echo ' <h1>Программная инженерия</h1>';
  echo ' <p>Город</p>';
echo '<table class="table table-striped table-bordered" >';
echo '<th style=background-color:red>Номер Сертификата</th>
     <th style=background-color:red>Сумма</th>
   ';
while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)){
// $_SESSION["name_rol"]=$row['name_rol'];
// $_SESSION["auth"]='yes';

	echo '<tr>
	   <td> '.$row['nomer_sertif'].'</td>
	<td>'.$row['s'].'</td>
	  
	   </tr>
	   ';
// header('location:index.php');
}
echo '</table>';

sqlsrv_free_stmt( $stmt);
 ?>
 <?php 
require_once 'conf.php';
 $conn = sqlsrv_connect( $serverName, $connectionInfo);
 $sql1="SELECT *
  FROM [dbo].[talon_bud] where spes=1 and color='Село'";
 $stmt = sqlsrv_query( $conn, $sql1 );
 echo ' <p>Село</p>';
echo '<table class="table table-striped table-bordered " >';
echo '<th style=background-color:yellow >Номер Сертификата</th>
     <th style=background-color:yellow >Сумма</th>
   ';
while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)){
// $_SESSION["name_rol"]=$row['name_rol'];
// $_SESSION["auth"]='yes';

  echo '<tr>
     <td> '.$row['nomer_sertif'].'</td>
  <td>'.$row['s'].'</td>
    
     </tr>
     ';
// header('location:index.php');
}
echo '</table>';

sqlsrv_free_stmt( $stmt);
 ?>
 <?php 
require_once 'conf.php';
 $conn = sqlsrv_connect( $serverName, $connectionInfo);
 $sql1="SELECT *
  FROM [dbo].[talon_bud] where spes=1 and color='Высокогоры'";
 $stmt = sqlsrv_query( $conn, $sql1 );
 echo ' <p>Высокогоры</p>';
echo '<table class="table table-striped table-bordered " >';
echo '<th style=background-color:orchid >Номер Сертификата</th>
     <th style=background-color:orchid >Сумма</th>
   ';
while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)){
// $_SESSION["name_rol"]=$row['name_rol'];
// $_SESSION["auth"]='yes';

  echo '<tr>
     <td> '.$row['nomer_sertif'].'</td>
  <td>'.$row['s'].'</td>
    
     </tr>
     ';
// header('location:index.php');
}
echo '</table>';

sqlsrv_free_stmt( $stmt);
 ?>
</div>
<div class="container">
<?php 
require_once 'conf.php';
 $conn = sqlsrv_connect( $serverName, $connectionInfo);
 $sql1="SELECT *
  FROM [dbo].[talon_bud] where spes=2 and color='Город'";
 $stmt = sqlsrv_query( $conn, $sql1 );
 echo ' <h1>Управления технической Системы</h1>';
  echo ' <p style=background-color:red>Город</p>';
echo '<table class="table table-striped table-bordered" >';
echo '<th style=background-color:red>Номер Сертификата</th>
     <th style=background-color:red>Сумма</th>
   ';
while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)){
// $_SESSION["name_rol"]=$row['name_rol'];
// $_SESSION["auth"]='yes';

  echo '<tr>
     <td> '.$row['nomer_sertif'].'</td>
  <td>'.$row['s'].'</td>
    
     </tr>
     ';
// header('location:index.php');
}
echo '</table>';

sqlsrv_free_stmt( $stmt);
 ?>
 <?php 
require_once 'conf.php';
 $conn = sqlsrv_connect( $serverName, $connectionInfo);
 $sql1="SELECT *
  FROM [dbo].[talon_bud] where spes=2 and color='Село'";
 $stmt = sqlsrv_query( $conn, $sql1 );
 echo ' <p style=background-color:yellow>Село</p>';
echo '<table class="table table-striped table-bordered " >';
echo '<th style=background-color:yellow >Номер Сертификата</th>
     <th style=background-color:yellow >Сумма</th>
   ';
while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)){
// $_SESSION["name_rol"]=$row['name_rol'];
// $_SESSION["auth"]='yes';

  echo '<tr>
     <td> '.$row['nomer_sertif'].'</td>
  <td>'.$row['s'].'</td>
    
     </tr>
     ';
// header('location:index.php');
}
echo '</table>';

sqlsrv_free_stmt( $stmt);
 ?>
 <?php 
require_once 'conf.php';
 $conn = sqlsrv_connect( $serverName, $connectionInfo);
 $sql1="SELECT *
  FROM [dbo].[talon_bud] where spes=2 and color='Высокогоры'";
 $stmt = sqlsrv_query( $conn, $sql1 );
 echo ' <p style=background-color:orchid>Село</p>';
echo '<table class="table table-striped table-bordered " >';
echo '<th style=background-color:orchid >Номер Сертификата</th>
     <th style=background-color:orchid >Сумма</th>
   ';
while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)){
// $_SESSION["name_rol"]=$row['name_rol'];
// $_SESSION["auth"]='yes';

  echo '<tr>
     <td> '.$row['nomer_sertif'].'</td>
  <td>'.$row['s'].'</td>
    
     </tr>
     ';
// header('location:index.php');
}
echo '</table>';

sqlsrv_free_stmt( $stmt);
 ?>
</div>

</body>
 </html>