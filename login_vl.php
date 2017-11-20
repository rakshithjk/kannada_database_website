

<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "forum";
//We log to the DataBase
$conn = mysqli_connect($servername, $username, $password,$dbname);


extract($_POST);

// Create connection// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name=$_POST['username'];
$pwd=$_POST['password'];


$result=mysqli_query($conn, "select * from users");
echo(mysqli_error($conn));

while($value = mysqli_fetch_array($result))
{
  echo'<script>alert($value["user_name"])</script>;';
	if($value['user_name'] == $name && $value['user_pass'] == $pwd)
	{
		echo "correct";
  $_SESSION['signed_in'] = true;
                     
                    //we also put the user_id and user_name values in the $_SESSION, so we can use it at various pages

        
                    {
                        $_SESSION['user_id']    = $value['user_id'];
                        $_SESSION['user_name']  = $value['user_name'];
                        $_SESSION['user_level'] = $value['user_level'];
                    }
                     
                  print_r($_SESSION);
                  header('Location:index.php');

	}
	else
	{
		$flag='0';
		
	}
}	




mysqli_close($conn);

?>