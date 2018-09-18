<?php
session_start();require_once 'header.php';?>

<?php
require_once 'conf.php';
$conn = sqlsrv_connect( $serverName, $connectionInfo);
//Метод пост Присваение переменных  
    $nomer_sertif=$_POST['nomer_sertif'];
    $osn_bal=$_POST['osn_bal'];
    $pre_bal=$_POST['pre_bal'];
     $id_spec=$_POST['id_spec'];
     $color=$_POST['color'];
    $sql1 = "
   INSERT INTO [dbo].[talon_bud]
           ([nomer_sertif]
           ,[osn_bal]
           ,[pre_bal]
           ,[fac]
           ,[spes]
           ,[color])
     VALUES
           ( '$nomer_sertif'
           , '$osn_bal'
           ,' $pre_bal'
           ,1
           ,'$id_spec'
           ,'$color')";
 $stmt = sqlsrv_query( $conn, $sql1 );
sqlsrv_free_stmt($stmt);
sqlsrv_close($conn);
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>
<form action="insertTalon.php" method="post">
          <ol>
           <label for="name">Номер Сертификата</label>
           <input id="nomer_sertif" name="nomer_sertif" class="text" /><br>
        
             

              <label for="name">Специальность</label><br>
              <select name="id_spec" size="2" multiple="">
              <option selected value="1">Программная инженерия</option>
               <option  value="2">Управления технической системы</option> 
               
              </select><br>
               <label for="osn_bal">Основной балл</label>
              <input type="osn_bal" id="osn_bal" name="osn_bal" class="text" /><br>
           
              <label for="name">Предметный балл</label>
              <input id="pre_bal" name="pre_bal" class="text" /><br>
            
            =
           
             
           
      

              <label for="name">Цвет сертификата</label><br>
       
              <select name="color" size="3" multiple="">
              <option selected value="Город">Город</option>
               <option  value="Село">Село</option> 
                <option value="Высокогоры">Высокогоры</option>  
              </select>
             <input type="Submit"/>
            
           
          </ol>
</body>
</html>