
<?php
$username = "root";
$password = "vineeta";
$hostname = "localhost"; 
$database = "MyWater";

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password, $database)
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";
mysql_select_db($database) or die(mysql_error()); ?>


<?php 
 $B=$_POST['district'];
echo $B."<br>";

           if($B)
             {
 		$data = mysql_query("SELECT DISTINCT state ,district ,quality from `2009` having district='$B' ")  or die(mysql_error()); 
 		Print "<table border cellpadding=3>"; 
 		while($info = mysql_fetch_array( $data )) 
 		{ 
 		Print "<tr>"; 
 		Print "<th>State:</th> <td>".$info['state'] . "</td> "; 
 		Print "<th>District:</th> <td>".$info['district'] . " </td>"; 
 		Print "<th>Quality</th> <td>".$info['quality'] . "</td></tr> "; 
 		} 
 		Print "</table>"; 
             }
?> 

