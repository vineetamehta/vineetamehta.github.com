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
 $A=$_POST['region'];
echo $A."<br>";
?>
<!DOCTYPE html>
<html>
<body>
<form action="district.php" method="POST">
        <?php   
	if ($A=="STATE")
	 {
           $stat="Select Distinct state from `2009`";
           $s=mysql_query($stat);
	   echo "<select name=\"state\">"; 
	   echo "<option size =10 ></option>";
	   while($row1 = mysql_fetch_array($s)) 
		{        
	     echo "<option value='".$row1['state']."'>".$row1['state']."</option>"; 
		}
	   echo "</select>";
         }
        elseif ($A=="DISTRICT")
	  { $disto="Select Distinct district from `2009`";
           $d=mysql_query($disto);
	   echo "<select name=\"district\">"; 
	   echo "<option size =10 ></option>";
	   while($row2 = mysql_fetch_array($d)) 
		{        
	     echo "<option value='".$row2['district']."'>".$row2['district']."</option>"; 
		}
	   echo "</select>";
          }

         ?>
<button type="submit">Lets GO</button>
</form>
</body>
</html>
