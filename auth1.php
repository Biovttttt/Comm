<?php session_start(); ?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body>
<?php 

require_once 'header.php';

//  ?> <?php 
 if (isset($_SESSION['auth'])==false){
  echo '
 <form action="auth.php" method="post">
          <label for="user_nam">Логин</label>
              <input id="user_nam" name="user_nam" class="text" /><br>
           
           <label for="user_pass">Пароль</label>
              <input id="user_pass" name="user_pass" class="text" placeholder="Введите Пароль" /><br>
             <input type="Submit"/>
            
           

          </ol> ';

        }
          ?>
</body>

</html>