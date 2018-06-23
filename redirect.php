<?php
include("inc/con.php");

	$id = $_GET['billplz']['id'];
    $url = "$url/$id";

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

	curl_setopt($ch, CURLOPT_POST, false);
	//curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
	curl_setopt($ch, CURLOPT_HEADER, false);

	//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
	curl_setopt($ch, CURLOPT_URL, $url);
// 	curl_setopt($ch, CURLOPT_POSTFIELDS);

	$result = curl_exec($ch);
	curl_close($ch);
	$res = json_decode($result,TRUE);
// 	print_r($res);
	$payment_status = $res['state'];



   if($payment_status == "paid")
   {
	   $status = "Success";
   }
   else
   {
	   $status = "Error";
   }
   header("location: $site_url?status=$status");

?>
