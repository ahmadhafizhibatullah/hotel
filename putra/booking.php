<!DOCTYPE html>
<html>

		<title>Booking</title>
		<center style="background-color:#000000;">

			<embed width="800" height="300" src="images.jpg">
		</center>

		<link href="/hiba/bootstrap/css/bootstrap.css" rel="stylesheet">


<body> 

	<table width="1350px">
		<tr>
			<td style="vertical-align: top; background-color:#D6CC94; width:300px; height:1000px;">
				
				<embed width="300" height="200" src="https://www.suninnshotel.com.my/images/kepong_map.jpg">					
				<embed width="300" height="200" src="http://media.expedia.com/hotels/8000000/7420000/7414500/7414420/7414420_69_b.jpg">
				<embed width="300" height="200" src="http://1.bp.blogspot.com/-uwDxpXa1JSY/Tw-awaWe4oI/AAAAAAAAAHg/zNHupFjXLgM/s1600/IMG_0661.JPG">

			</td>	
			<td style="background-color:#eeeeee;height:900px;width:1050px;">
			
			<head>
			<style>

			table,th,td
			{border: 1px solid black;
				border-collapse:collapse;
			}

			th,td
			{
				padding:5px;
			}
			</style>
			
			</head>
		<center>
			<body>
			<table style="width:600px">
				<tr>
					<th>Room Types</th>
				</tr>

				<tr>
					<td><embed width="100" height="80" src="http://www.ambassadorhotel.com.au/data/deposit/galleryImage.58345.image/image.280x150.jpg">Standart Twin Room : - Rates are for 2 people. Maximum occupancy is 2. Standard Twin has 2 single beds, FREE Wi-Fi internet access, Foxtel and movies-on-demand.
					</td>
				</tr>

				<tr>
					<td>
					<embed width="100" height="80" src="http://www.ambassadorhotel.com.au/data/deposit/galleryImage.58294.image/image.280x150.jpg">Standard Double Room : - Rates are for 2 people. Maximum occupancy is 2. Standard Double has 1 queen bed, FREE Wi-Fi internet access, Foxtel & movies-on-demand. Room size is 24sqm. All rooms are non-smoking.
					</td>
				</tr>

				<tr>
					<td>
					<embed width="100" height="80" src="http://www.ambassadorhotel.com.au/data/deposit/galleryImage.58709.image/image.280x150.jpg">Deluxe Twin Room : - Rates are for 2 people. Maximum occupancy is 2. Deluxe Twin has 2 single beds, FREE Wi-Fi internet access, Foxtel & movies-on-demand. Room size is 28sqm. All rooms are non-smoking.
					</td>
				</tr>

				<tr>
					<td>
					<embed width="100" height="80" src="http://www.ambassadorhotel.com.au/data/deposit/galleryImage.33069.image/image.280x150.jpg">Deluxe Double Room : - Rates are for 2 people. Maximum occupancy is 2. Deluxe Double has 1 queen bed, FREE Wi-Fi internet access, Foxtel & movies-on-demand. Room size is 28sqm. All rooms are non-smoking.
					</td>
				</tr>

				<tr>
					<td>
					<embed width="100" height="80" src="http://www.ambassadorhotel.com.au/data/deposit/galleryImage.58828.image/image.280x150.jpg">Executive Suite : -Rates are for 2 people. Maximum occupancy is 2. Executive Suite has a separate bedroom with 1 queen bed & separate lounge area, FREE Wi-Fi internet access, Foxtel & movies-on-demand. Room size is 47sqm. All rooms are non-smoking.
					</td>

				</tr>

		</table>
			
			</body>

			<br>
			<br>



			<table>
				

					<form  method="post" action="checking_booking.php">

					Types Of Room : <select name="room_type" id="room_type">
									  <option value=""></option>
									  <option value="1">Standard Twin Room</option>
									  <option value="2">Standard Double Room</option>
									  <option value="3">Deluxe Twin Room</option>
									  <option value="4">Deluxe Double Room</option>
									  <option value="5">Executive Suite</option>
									</select>

						<input type="hidden" id="user_id" name="user_id" value="<?php echo $_GET["user"] ;?>">
						
					<!-- <input  >
					<datalist >

						<option value="1">Standard Twin Room
						<option value="2">Standard Double Room
							<option value="3">Deluxe Twin Room
							<option value="4">Deluxe Double Room
							<option value="5">Executive Suite
					</datalist> -->
				
				

  						Guests  :      <input type="number" name="quantity" min="1" max="5">
  													
				

					  Check-in Date: <input type="date" name="check_in">
					  				 
			
					  Check-out Date: <input type="date" name="check_out">
		 
				
						<center>
						<input type="submit" name="send" value="send" class="btn btn-info"> 
						</center>
				
					</form>	
				

			</table>

			</center>

			
									
	

	</table>
	

