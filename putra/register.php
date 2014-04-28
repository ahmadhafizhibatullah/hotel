<!DOCTYPE html>
<!--<html lang="en">-->

   <head> 
 
    
 

        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <title>REGISTER</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="/hiba/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
        <style type="text/css">
            .modal-footer {   border-top: 3px; }
        </style>
    </head>
    
    <body>
    <div class="container">

    <center>
    


        
      <!--register modal-->
     
         
            
               <div>
                  
                  <h1 class="text-center">REGISTER</h1>
               </div>

               <div>

                  <form method="post" action="checking_register.php" class="form col-md-15 center-block"> 


                      <tbody>
                        <tr>


                              <td> Name: </td>
                              <td><input type="text" name="name"><br><br></td>


                        </tr>             
                     
                        <tr>                     
                              <td> E-mail: </td>
                              <td><input type="email" name="email"><br><br></td>
                        </tr>
                     
                        <tr>
                              <td>IC Number:  </td>
                              <td><input type="text" name="ic_number"><br><br></td>
                        </tr>
                        

                        <tr>   
                              <td>Phone Number: </td>
                              <td><input type="text" name="phone_number"><br><br></td>
                        </tr>

                        <tr> 
                              <td>Gender: </td>
                              <td><input type="radio" name="gender" value="Female">Female
                              <input type="radio" name="gender" value="Male">Male</td>
                        </tr>   <br><br>  
            
                        <tr>
                        
                        <td><input type="submit" name="register" value="Register" class="btn btn-info"><a href="?option=register"></a> </td>
                        </tr> 
                      </tbody>
                    
                        
                     <?/*
                      E-mail: <input type="text" name="email">
                     <br><br>
                     ID Card Number: <input type="text" name="ID_card_number">
                     <br><br>
                     Student ID Number: <input type="text" name="student_ID_number">
                     <br><br>
                     Phone Number: <input type="text" name="phone_number">
                     <br><br>
                     Gender:
                     <input type="radio" name="gender" value="Female">Female
                     <input type="radio" name="gender" value="Male">Male
                     <br><br>
                     <input type="submit" name="submit" value="Submit" class="btn btn-info"> </div>
                  </form>




                <form class="form col-md-12 center-block">
                  <div class="form-group">
                    <input type="text" class="form-control input-lg" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control input-lg" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary btn-lg btn-block">Sign In</button>
                    <br>
                    <font size="5"><span class="pull-right" ><a href="register2.php">Register</a></span></font>
                  </div>*/?>
                 
                </form>
            </div><!-- //modal body -->
            <div class="modal-footer">
        
            </div>
          
        
      </div>
        
      <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script type='text/javascript' src="/hiba/bootstrap/js/bootstrap.min.js"></script>
      <script type='text/javascript'>
        
        $(document).ready(function() {
        
            
        
        });
        
      </script>
      </center>
     
    </body>
 <!--
</html>-->






<?php /*


<!DOCTYPE HTML> 
<html>
<head>
<link href="/hiba/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<script type='text/javascript' src="/hiba/bootstrap/js/bootstrap.min.js"></script>
<title>REGISTER</title>
</head>
<body>
<center>

<div class="col-10">
   <h1>REGISTER</h1>
      <div class="well col-5">
         <form method="post" action=""> 
            <span align="left">Name: <input type="text" name="name"></span>
            <br><br>
             E-mail: <input type="text" name="email">
            <br><br>
            ID Card Number: <input type="text" name="ID_card_number">
            <br><br>
            Student ID Number: <input type="text" name="student_ID_number">
            <br><br>
            Phone Number: <input type="text" name="phone_number">
            <br><br>
            Gender:
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Male">Male
            <br><br>
            <input type="submit" name="submit" value="Submit" class="btn btn-info"> </div>
         </form>
      </div>
</div>

</center>
</body>
</html>
*/?>