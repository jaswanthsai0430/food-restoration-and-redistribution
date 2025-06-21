

<?php
//change mysqli_connect(host_name,username, password); 
$connection = mysqli_connect("localhost", "root", "food");
$db = mysqli_select_db($connection, 'demo');
?>
