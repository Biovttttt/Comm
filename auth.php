<?php
session_start(); ?>
<?php
// echo $_SESSION["user_nam"];

$user_nam=$_POST['user_nam'];
$user_pass=$_POST['user_pass'];
require_once 'conf.php';
 $conn = sqlsrv_connect( $serverName, $connectionInfo);
 $sql1="select u.rol,name_rol,user_nam  from rol, Users u where user_nam='$user_nam'and user_pass='$user_pass'and rol=id_role";
 $stmt = sqlsrv_query( $conn, $sql1 );
while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)){
$_SESSION["name_rol"]=$row['name_rol'];
$_SESSION["auth"]='yes';
$_SESSION["rol1"]=$row['rol'];
header('location:index.php');
}
sqlsrv_free_stmt( $stmt);
 ?>