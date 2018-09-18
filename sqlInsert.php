<?php
session_start();require_once 'header.php';?>

<?php
require_once 'conf.php';
$conn = sqlsrv_connect( $serverName, $connectionInfo);
//Метод пост Присваение переменных  
    $fio=$_POST['FIO'];
    $god_roj=$_POST['god_roj'];
    $region=$_POST['region'];
     $id_spec=$_POST['id_spec'];
    $tel=$_POST['tel'];
    $nomer_doc=$_POST['nomer_doc'];
    $nomer_voen=$_POST['nomer_voen'];
    $data_podachi=date("y.m.d");
    $nomer_sertifkat=$_POST['nomer_sertifkat'];
    $kol_ball_osn=$_POST['kol_ball_osn'];
    $kol_ball_pre=$_POST['kol_ball_pre'];
    $color=$_POST['color'];
    $sql1 = "
     INSERT INTO Abiturent
         ([fio]
          ,[god_roj]
           ,[region]
           ,[tel]
           ,[nomer_doc]
           ,[kol_ball_osn]
           ,[kol_ball_pre]
           ,[nomer_sertifkat]
           ,[color]
           ,[data_podachi]
           ,[spes]
           ,[faculty]
           )
          VALUES
           ('$fio'
-- ,'$id_spec'
           ,'$god_roj'
           ,'$region'
           
           ,'$tel'
           ,'$nomer_doc'
           ,'$kol_ball_osn'
          ,'$kol_ball_pre'
          ,'$nomer_sertifkat'
          ,'$color'
           ,'$data_podachi'
           ,'$id_spec'
           ,1
         )";
 $stmt = sqlsrv_query( $conn, $sql1 );
sqlsrv_free_stmt($stmt);
sqlsrv_close($conn);
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>
<form action="sqlinsert.php" method="post">
          <ol>
           <label for="FIO">ФИО</label>
              <input id="FIO" name="FIO" class="text" /><br>
        
              <label for="name">Год рождения</label>
              <input type="date" id="god_roj" name="god_roj" class="text" /><br>

              <label for="name">Специальность</label><br>
              <select name="id_spec" size="2" multiple="">
              <option selected value="1">Программная инженерия</option>
               <option  value="2">Управления технической системы</option> 
               
              </select><br>
           
              <label for="name">Регион</label>
              <input id="region" name="region" class="text" /><br>
            
              <label for="name">Телефон</label>
              <input id="tel" name="tel" class="text" /><br>
           
              <label for="name">Номер документа</label>
              <input id="nomer_doc" name="nomer_doc" class="text" /><br>
           
      

              <label for="name">Номер Сертификата</label>
              <input id="nomer_sertifkat" name="nomer_sertifkat" class="text" /><br>
              
              <label for="name">Количество баллов основной</label>
              <input id="kol_ball_osn" name="kol_ball_osn" class="text" /><br>
              
              <label for="name">Номер баллов по предмета</label>
              <input id="kol_ball_pre" name="kol_ball_pre" class="text" /><br>
              
              <label for="name">Цвет сертификата</label><br>
       
              <select name="color" size="3" multiple="">
              <option selected value="Синий">Синий</option>
               <option  value="Желтый">Желтая</option> 
                <option value="Золотой">Золотой</option>  
              </select>
             <input type="Submit"/>
            
           
          </ol>
</body>
</html>