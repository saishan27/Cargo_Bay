<html>
 <head>
<link rel="stylesheet" href="css/firstemp.css">
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkUOdZ5y7hMm0yrcCQoCvLwzdM6M8s5qk&callback=initMap&language=ja&region=JP"></script>
 <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
 <title>Offer Trip</title>
 <script type="text/javascript" src="" charset="UTF-8"></script></head>
 </head> 
 <body>
 <form action="" method="get"><table width="500" border="0" cellspacing="0" cellpadding="0" class="tbl_bg">
 <tr>

 	<td colspan="2" valign="top" class="altalt"><p>
 	  <type="text" value="SERVICE PROVIDER">
 	  <b>TYPE: ROADWAYS &nbsp;</b> 
 	  
	
	<select name="Transportation">
    <option value="Roadways">ROADWAYS</option>
    <option value="Airways">AIRWAYS</option>
    <option value="Waterways">RAILWAYS</option>
    <option value="Airways">WATERWAYS</option>
  	</select>
  
	  
   </tr>
<B>OFFER A RIDE</B>

   <tr>
 	<td width="150" valign="top"><p>From</p></td>
 	<td width="350" valign="top" class="lft_bdr"><p>
 	  <input name="From" id="searchTextField1" type="text" class="input">
 	</p></td>
   
 	<td valign="top" class="alt"><p>To</p></td>
 	<td valign="top" class="alt lft_bdr"><p>
 	  <input name="To" id="searchTextField1" type="text" class="input">
 	</p></td>
   </tr>

<tr>
 	<td width="150" valign="top"><p>Dept Time</p></td>
 	<td width="350" valign="top" class="lft_bdr"><p>
 	  <input name="Dept_time" type="time" class="input">
 	</p></td>
   
 	<td valign="top" class="alt"><p>Arrv Time	</p></td>
 	<td valign="top" class="alt lft_bdr"><p>
 	  <input name="Arrv_time" type="time" class="input">
 	</p></td>
   </tr>
 
   <tr>
 	<td valign="top"><p>Date: From</p></td>
 	<td valign="top" class="lft_bdr"><p>
 	  <input name="DateFrome" type="date" class="input">
 	</p></td>
 	<td valign="top" class="alt"><p>To</p></td>
 	<td valign="top" class="alt lft_bdr"><p>
 	  <input name="DateTo" type="date" class="input">
 	</p></td>
   </tr>
   <tr>
 	<td valign="top"><p>Space(cost/l*b*h)</p></td>
 	<td valign="top" class="lft_bdr"><p>
 	  <input name="textfield" type="text" class="input">
 	</p></td>
 	<td valign="top" class="alt"><p>Weight(in kg)</p></td>
 	<td valign="top" class="alt lft_bdr"><p>
 	  <input name="textfield" type="text" class="input">
 	</p></td>
   </tr>
   <tr>
 	<td valign="top"><p>Cost of travel</p></td>
 	<td valign="top" class="lft_bdr"><p>
 	  <input name="textfield" type="text" class="input">
 	</p></td>
   </tr>
     <tr>
 	<td valign="top" class="alt" >&nbsp;</td>
 	<td valign="top" ><p class="alt">
 	  <input type="submit" name="Submit" value="Offer">
 	</p></td>
   </tr>
   
 </table>
 </form>
 <script>
 function initialize() {
  var input = document.getElementById('searchTextField1');
  
  new google.maps.places.Autocomplete(input);
}
	google.maps.event.addDomListener(window, 'load', initialize);
 </script>
 </body>
 </html>