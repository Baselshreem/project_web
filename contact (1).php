<?php

$servername = "localhost";
$username = "basilshrim";
$password = "Basel7654321";
$dbname = "basilsjrim";

// Create connection
echo '	<div id="basil">write a code by basilshraim</div>';
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>