
<?php
// $str = mysqli_query('SELECT info FROM tb_info WHERE status = 1');
// $array = mysql_fetch_array($str);
// while($array){
// 	echo $array;
// }

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "monev";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT info FROM tb_info WHERE status = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
		echo '<marquee style="color:#FFF">';
    while($row = $result->fetch_assoc()) {
        echo $row["info"].'&nbsp; <img src="' . base_url() . 'files/bpbj.jpeg" width="30">';
    }
		echo '</marquee>';

} else {
    echo "0 results";
}
$conn->close();
//echo '<marquee><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></marquee>';

?>
