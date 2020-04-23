<?php
session_start();
?>
<!DOCTYPE html>
<html lang = "en">
<head>
<title> Driving defensively </title>
<meta charset = "utf-8" />
<link rel = "stylesheet" type = "text/css" href = "style.css"/>
<body>
<h2> These items are essential for defensive driving  </h2>
<form name = "orderForm" action = "order.php" method = "post">
<label> Name: <input type = 'text' name = 'user'/> </label>
<label> Age: <input type = 'text' name = 'age' /> </label>
<input type = 'submit' /> <input type = 'reset'/> <br/><br/><br/>
     <table>
       <tr>
	 <th> Select </th>
         <th> Item </th>
         <th> Photo </th>
         <th> Description </th>
	 <th> Unit Price </th>
       </tr>
       <tr>
        <td> <input type = "radio" id="carHorn" name="itemselect" value = "horn" 
        checked = "checked"> </td> 
	<td> Car horn </td>
         <td> <img src = "images/carhorn.jfif" 
     alt = "Picture of a car horn" width="180" height="114" /> </td>
         <td class = "description"> A car horn for drawing attention of, or alerting, 
         other road users against hazards </td>
       	 <td> $15 </td>
	 </tr>
       <tr>
        <td> <input type = "radio" id="sideMirror" name="itemselect" value = "mirror"> </td> 
         <td> Side mirror </td>
         <td> <img src = "images/carsidemirror.jfif"
     alt = "Picture of a side mirror" width="180" height="101" /> </td>
         <td class = "description"> A side mirror for viewing oncoming vehicles and 
         preparing against hazards </td>
       	 <td> $200 </td>
       </tr>
       <tr>
        <td> <input type = "radio" id="headLight" name="itemselect" value = "light"> </td> 
         <td> Headlight</td>
         <td> <img src = "images/carheadlight.jfif" 
     alt = "Picture of a headlight" width="180" height="180"/> </td>
         <td class = "description"> Headlight for good vision in the dark; necessary for 
         avoiding accidents </td>
       	 <td> $150 </td>
       </tr>
       <tr>
        <td> <input type = "radio" id="phoneHolder" name="itemselect" value = "holder"> </td> 
         <td> Phone holder </td>
         <td> <img src = "images/carphoneholder.jfif"
     alt = "Picture of a car phone holder" width="180" height="180"/> </td>
         <td class = "description"> Car phone holder, to be used for holding phone and GPS
          instead of holding with hand </td>
       	 <td> $20 </td>
       </tr>
     </table>
    </form>
<p>
<a href = "index.php"> Home </a>
</p>
</html>