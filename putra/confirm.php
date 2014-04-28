<?php 
/*include "dbconnection.php";
$result = mysqli_query($con,"SELECT DISTINCT type_id FROM bilik");
while ($row =mysqli_fetch_array($result)){
*/?>        

<title>Confirmation</title>
         <center style="background-color:#000000;">

         	<link href="/hiba/bootstrap/css/bootstrap.css" rel="stylesheet">
       <embed width="800" height="300" src="images.jpg">
		 </center>

        
        

<body>


<table width="1350px">



								



			<tr>
				<td style="background-color:#D6CC94; width:300px; height:1000px; float:left;">



							

					<embed width="300" height="200" src="https://www.suninnshotel.com.my/images/kepong_map.jpg">
					<br>
										
					<embed width="300" height="200" src="http://media.expedia.com/hotels/8000000/7420000/7414500/7414420/7414420_69_b.jpg">
					<embed width="300" height="200" src="http://1.bp.blogspot.com/-uwDxpXa1JSY/Tw-awaWe4oI/AAAAAAAAAHg/zNHupFjXLgM/s1600/IMG_0661.JPG">


				</td>

				<td style="background-color:#eeeeee;height:900px;width:1050px;">
				<div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong>Putra Hotel</strong><br>
                        
                        Phone Number: 012-3456789
                    </address>
                </div>
             
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>Receipt</h1>
                </div>
                </span>
                <table class="table table-hover" method="post" action="checking_pay.php">
                    <thead>
                        <tr>
                            <th>Types Of Room</th>
                            <th>Guest</th>
                            <th class="text-center">In</th>
                            <th class="text-center">Out</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-9"><em></em></td>
                            <td class="col-md-1" style="text-align: center"> 1 </td>
                            <td class="col-md-1 text-center"></td>
                            <td class="col-md-1 text-center"></td>
                        </tr>
                        <tr>
                            <td class="col-md-9"><em></em></h4></td>
                            <td classs="col-md-1" style="text-align: center"> 1 </td>
                            <td class="col-md-1 text-center">$8</td>
                            <td class="col-md-1 text-center">$8</td>
                        </tr>
                        <tr>
                            <td class="col-md-9"><em></em></h4></td>
                            <td class="col-md-1" style="text-align: center"> 3 </td>
                            <td class="col-md-1 text-center">$16</td>
                            <td class="col-md-1 text-center">$48</td>
                        </tr>
                        <tr>
                            
                            <td class="text-right">
                            <p>
                                <strong>Subtotal: </strong>
                            </p>
                            <p>
                                <strong>Tax: </strong>
                            </p></td>
                            <td class="text-center">
                            <p>
                                <strong>$6.94</strong>
                            </p>
                            <p>
                                <strong>$6.94</strong>
                            </p></td>
                        </tr>
                        <tr>
                            
                            <td class="text-right"><h4><strong>Total: </strong></h4></td>
                            <td class="text-center text-danger"><h4><strong>RM<?php echo $_GET["price"] ;?></strong></h4></td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" name="confirm" class="btn btn-success btn-lg btn-block">Confirm<a href="?option=confirm"></a>
                        
                </button></td>
            </div>
        </div>
    </div>
								
				</td>

			</tr>



			<tr>
				<td colspan="2" style="background-color:#796541;text-align:center;"> Copyright by amtis.com </td>
			
			</tr>
	</table>

</body>


<?php


?>
