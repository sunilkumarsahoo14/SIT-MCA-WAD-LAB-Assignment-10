<!-- Name: Sunil Kumar Sahoo -->
<!-- Sic: 23MMCI38 -->
<!-- Roll: 16 -->
<?php
$HOST = "127.0.0.1:3307";
$USERNAME = "root";
$PASSWORD = "";
$DB_NAME = "23mmci38";

$conn = new mysqli($HOST, $USERNAME, $PASSWORD, $DB_NAME);

if($conn->connect_error){
    die($conn->connect_error);
}
?>