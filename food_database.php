<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="food_order";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['order now']))
{	
	 $Your Name = $_POST['Your Name'];
	 $Your Number = $_POST['Your Number'];
	 $Your order = $_POST['Your order'];
	 $Additional food = $_POST['Additional food'];
	 $How musch = $_POST['How musch'];
	 $Date and Time = $_POST['Date and Time'];
	 $Your Address = $_POST['Your Address'];
	 $Your Massage = $_POST['Your Massage'];




	 $sql_query = "INSERT INTO order_details (Your Name,Your Number,Your order,Additional food,How musch,Date and Time,Your Address,Your Massage)
	 VALUES ('$Your Name','$Your Number','$Your order','$Additional food','$How musch','$Date and Time','$Your Address','$Your Massage')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

?>