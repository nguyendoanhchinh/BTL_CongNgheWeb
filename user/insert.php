
<?php
session_start();
	
$txtName = $_SESSION['us_id'];
$msg = $_REQUEST['msg'];

require("config/db.php");

mysqli_query($conn, "INSERT INTO logs(username, msg) VALUES('$txtName','$msg')");

$result = mysqli_query($conn, "SELECT * FROM logs ORDER BY id DESC LIMIT 0, 10");
while($row=mysqli_fetch_array($result)){

echo "<span class='uname'>" . $row['username'] . "</span>: <span class='msg'>" . $row['msg'] . "</span></br></br>";

}
mysqli_close($conn);
?>
