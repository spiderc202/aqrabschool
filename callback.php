<?php
	include("inc/con.php");


   $id = $_POST["id"];
   $col_id = $_POST["collection_id"];
   $paid = $_POST["paid"]; //tru false
   $state = $_POST["state"]; //tru false
   $paid_at = $_POST["paid_at"]; //2015-03-09 16:23:59 +0800
   $email = $_POST["email"];
   $billplz_url = $_POST["url"];
   $total_bayaran = $_POST["amount"];

   $tarikh_bayaran = date("Y-m-d",strtotime($paid_at));
   $masa_bayaran = date("H:i:s",strtotime($paid_at));
   if($state == "paid")
   {
	   $payment_status = "Paid";
   }
   else
   {
	   $payment_status = "Pending";
   }
   $sql = "UPDATE akhirat SET payment_status = '$payment_status', date_updated = '$paid_at' WHERE bill_id = '$id'";
   if ($conn->query($sql) === TRUE) {
		echo "SUCCESS";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>
