<?php
	include("inc/con.php");

	$name = $_POST['nama'];
	$email = $_POST['email'];
	$mobile_no = $_POST['mobile_no'];
	$lot = $_POST['lot'];
	$jumlah = $_POST['jumlah'];
	$desc = $_POST['desc'];

	$total_bayaran_cantik = number_format($jumlah,2);
	$totalBillPlz = $jumlah * 100;


    $amount = $totalBillPlz;
    $callback_url = $site_url;

    $ch = curl_init();
	curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

	curl_setopt ($ch, CURLOPT_MAXREDIRS, 3);
	curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, false);
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt ($ch, CURLOPT_VERBOSE, 0);
	curl_setopt ($ch, CURLOPT_HEADER, 1);
	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 10);
	curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);

	curl_setopt($ch, CURLOPT_USERPWD, $api);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FAILONERROR,true);

	curl_setopt($ch, CURLOPT_POST, true);
	//curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
	curl_setopt($ch, CURLOPT_HEADER, false);

	//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POSTFIELDS,


		array(
          "collection_id" => $collection_id,
		  "description" => $desc,
		  "email" => $email,
		  "name" => $name,
		  "amount" => $amount,
		  "mobile" => $mobile_no,
		  "callback_url" => $site_url."/callback.php",
		  "redirect_url" => $site_url."/redirect.php"
		));

	$result = curl_exec($ch);
	curl_close($ch);
	$res = json_decode($result,TRUE);
// 	print_r($res);
	$ids = $res['id'];
	$date_today = date("Y-m-d H:i:s");

		 //Update database preorder
/*
		 $totalBayaran = $amount / 100;
	   $this->db->set("status_bayaran","Belum Bayar");
	   $this->db->set("total_bayaran",$totalBayaran);
	   $this->db->where("id",$id);
	   $this->db->update("preorders");
*/
	$sql = "INSERT INTO akhirat (name, projek, email, mobile_no, collection_id, bill_id, lot, jumlah, date_created, date_updated, payment_status) VALUES ('$name', '$desc','$email', '$mobile_no', '$collection_id', '$ids', $lot, $jumlah, '$date_today', '$date_today', 'Pending')";

	if ($conn->query($sql) === TRUE) {
		header("location: https://www.billplz.com/bills/$ids");
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>
