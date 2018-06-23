<?php
$servername = "localhost";
$username = "root";
$password = "khairul86!";
$dbname = "aqrab";
$table = "akhirat";
$site_title = "Sekolah Rendah Islam Mithali Aqrab";
$project = "PROJEK INFAQ SEKOLAH RENDAH ISLAM MITHALI AQRAB";
$site_url = "http://localhost/aqrabschool";
$total_lot = 100000;
$starting_from = 200;
$primary_color = '#1db0d9';
$secondary_color = '#5f5f5f';
$banner = "main-logox.png";

//nilai lot
$nilai_lot = 10;

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
