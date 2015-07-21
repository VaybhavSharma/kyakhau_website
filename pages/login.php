<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Form</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
  </head>

<?php

 include 'connection.php';
 include 'session.php';


     if(isset($_POST['submit_reg'])){

          $name = $_POST['uname'];
          $email= $_POST['email'];
          $passwd = $_POST['passwd'];
          $conf_passwd = $_POST['conf_passwd'];
          $submit_reg =  $_POST['submit_reg'];

     }


  if($submit_reg){

        if(!empty($name) && !empty($email) && !empty($passwd) && !empty($conf_passwd)){

          $query_check = "SELECT `name` FROM `login` WHERE `name` = '$name'";  
          $run_check=mysqli_query($server,$query_check);
          $row_check=mysqli_fetch_assoc($run_check);
          $user_name_check = $row_check['name'];

              if($name == $user_name_check){
                $output = "User Name already exists";
              }
              else{
                  if($passwd == $conf_passwd){

                         $query= "INSERT INTO `login` VALUES ('','".$email."','".$name."','".$passwd."','student')";

                         if($run=mysqli_query($server,$query)){
                                   
                                    //header("location: login.php");
                                     $output =  "Registered Succesfully<br>";
                                  }
                         
                         else{
                               $output="coldnt register this time try again later.";
                             }
                  }

                  else{
                 $output = "Password did not match! Please try again";
                      }
            }  
        }

        else{
          $output = "Please fill all fields properly";
        }

  }
  


 if(isset($_POST['submit'])){
        if(isset($_POST['uname']))
          $name = $_POST['uname'];
          $passwd =$_POST['passwd'];
          $submit = $_POST['submit'];
        }

  if($submit){

     if(!empty($name) && !empty($passwd)){

       $query= "SELECT * FROM `login` WHERE `name` = '$name' AND `password`='$passwd' ";
               
          if($run=mysqli_query($server,$query)){
                 $query_rows=mysqli_num_rows($run);

            if($query_rows==0){
                 $output=  "Password or User Name entered is incorrect";
            }
                  
            else if($query_rows == 1){

              while($row=mysqli_fetch_assoc($run)){
                    
                $user_id = $row['id'];
                $_SESSION['id']=$user_id;

                  if (isset($_POST['remember'])) {

                    setcookie('cook_name',$name, time() + (86400 * 30));
                    setcookie('cook_pswd',$passwd, time() + (86400 * 30));
                              
                  }
                     $output=  "successfully logged in";
                     header('location:http://localhost/project4/');
              }
            }
          }
      }
        
      else{
        	$output=  "Please fill the form properly";
      }
}

 if (isset($_COOKIE['cook_name'])) {
         $name = $_COOKIE['cook_name'];
  }

  if (isset($_COOKIE['cook_pswd'])) {
          $passwd = $_COOKIE['cook_pswd'];
  }
    

  ?>


  <body>

<div class="header">
  <div class="container-fluid ">

       <div class="col-md-2 col-xs-6">
          <div class="logo">
             <a href="/kyakhau"><img src="../images/f11.jpeg"></a>
          </div>
       </div>

     <div class="heading col-md-8">
    <h2>Login / Registration Form</h2>
     </div>

  </div> <!-- end of container-fluid div -->
</div> <!-- end of heder div -->


<div class="free"></div>
<div class="free"></div>


  <div class="container">

    <div class="col-md-6">
      <h1>Registration Form</h1><br>

        <form role="form_reg" class="form-horizontal" action="login.php" method="POST">

            <div class="form-group">
            <label>User Name</label><input type="text" name="uname" class="form-control">
            </div>

            <div class="form-group">
            <label>Email</label><input type="text" name="email" class="form-control">
            </div>

            <div class="form-group">
            <label>Password</label><input type="password" name="passwd" class="form-control">
            </div>


            <div class="form-group">
            <label>Confirm-Password</label><input type="password" name="conf_passwd" class="form-control">
            </div>


            <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Register" name="submit_reg">
            </div>


      </form>  
    </div>

    <div class="col-md-2"><div class="hr"></div> </div>

    <div class="col-md-4">
      
      <h1>Login Form</h1>
      <p><label>(To go to Food Sense Add Content Portal)</label></p> <br />
       <form role="form" class="form-horizontal" action="login.php" method="POST">

            <div class="form-group">
            <label>User Name</label><input type="text" name="uname" value= "<?php echo $name; ?>" class="form-control">
            </div>

            <div class="form-group">
            <label>Password</label><input type="password" name="passwd" value= "<?php echo $passwd; ?>" class="form-control">
            </div>

            <div class="form-group">
            <input type="checkbox" name="remember" value="1" ><label> Remember me</label>
            </div>

            <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Login" name="submit">
            </div>
            
      </form>  
      <label>(To upload recipies) </label>
    </div>

  </div> <!-- End of class container --> 

  <div class="col-md-12"><!-- div to print message on form submission -->
    <?php
        echo "<div class='output'>".$output."</div>";
    ?>
  </div>


  <div class="foot">

   <div class="container">

      <div class="col-md-6">
        <p style="margin: 10px;">&copy;Copyright - AVDEVELOPERS</p>
      </div>

      <div class="col-md-6">
        <ul>
          <li>About</li>
          <li>Famous Recipies</li>
          <li>Famous Chefs</li>
          <li>Contact Us</li>
          <li class="con">Help Us</li>

        </ul>
      </div>
  </div>

</div> <!-- end of foot div -->


  </body>
  </html>
