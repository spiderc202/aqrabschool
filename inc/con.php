<?php
$servername = "localhost";
$username = "root";
$password = "khairul86!";
$dbname = "aqrab";
$table = "akhirat";
$site_title = "Sekolah Rendah Islam Mithali Aqrab";
$project = "PROJEK INFAQ SEKOLAH RENDAH ISLAM MITHALI AQRAB";
$site_url = "http://localhost/aqrabschool";

//bill plz
$api = "2b762540-b274-47d8-ad0b-98baf2a3797e";
$url = "https://www.billplz.com/api/v3/bills";
$collection_id = "ytfv0flh";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
