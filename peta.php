<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   $username = test_input($_POST["username"]);
   $password = test_input($_POST["password"]);
}
function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
		
?>
<?php
echo "Account Anda"; echo "<br>";
echo "Username          :". $username; echo "<br>";
echo "Password          :". $password; echo "<br>";
?>
<img src="img/peta.jpg" >