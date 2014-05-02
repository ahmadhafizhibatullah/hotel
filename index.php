<style>
body {
    padding-top: 50px;
}
</style>
<link href="/hiba/bootstrap/css/bootstrap.css" rel="stylesheet"> 
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="?option=home">Home</a>
        </div>
        <div>
            
            <ul class="nav navbar-nav">
                
                <li>
                    <a href="?option=gallery">Gallery</a>
                </li>
            </ul>
             <ul class="nav navbar-nav">
                </li>
                <li>
                    <a href="?option=booking">Booking</a>
                </li>         
            </ul>
            <ul class="nav navbar-nav">
                </li>
                <li>
                    <a href="?option=login">Log In</a>
                </li>         
            </ul>
            
        </div><!--/.nav-collapse -->
    </div>
</div>




<?php
session_start();

    /*if (isset($_GET["option"])) {
        $option=$_GET["option"].".php";
    } else {
        include("putra/main_page.php");
    }*/
 
     if(isset($_GET["option"]))
{
            $option=$_GET["option"];
            if ($option=="register")
            {
            include("putra/register.php");
        }
            elseif ($option=="home")
            {
            include("putra/main_page.php");
        }
             elseif($option=="pay") 
             { 
                include("putra/payment.php");
        }
             elseif($option=="confirm")
             {
            include("putra/confirm.php");
        }
            elseif($option=="congratulation")
             {
            include("putra/congratulation.php");
        }
            elseif($option=="gallery")
             {
            include("putra/gallery.php");
        }
            elseif($option=="login")
              {
            include("putra/login.php");
        }  
              else 
             {
                include("putra/booking.php");
        }   
}   
    else
    {
        include ("putra/login.php");

    }

?>
