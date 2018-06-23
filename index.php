<!doctype html>
<?php
  include("inc/con.php");
?>
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
    <title><?= $site_title ?></title>
    <style>
      .titles {
        font-family: 'Roboto Slab', serif;
        font-size: 18px;
      }

      .green-hr {
        display: block;
        margin-top: 0em;
        margin-bottom: 0.5em;
        margin-left: -5em;
        margin-right: -5em;
        border-style: inset;
        border-width: 2px;
        border-top: 3px solid black;
      }

      .red-hr {
        display: block;
        margin-top: -0.5em;
        margin-bottom: 1.5em;
        margin-left: -5em;
        margin-right: -5em;
        border-style: inset;
        border-width: 2px;
        /* border-color: red; */
        border-top: 3px solid #1db0d9;
      }

      .available {
        color: black;
        background-color: #e5e7e9;
        border-color: #7dd627!important;
      }

      .bought {
        color: white;
        background-color: #377500;
        border-color: #7dd627!important;
      }

      .font-lot {
        font-size: 6px;
      }

      .nav-link.active {
        font-size: 7px!important;
        color: black!important;
        background-color: #7dd627!important;
        font-weight: bold!important;
        border-color: white!important;
        border-bottom-color: #7dd627!important;
        padding-bottom: 10px;
        /* margin-bottom: 10px; */
      }

      .nav-link {
        font-size: 7px!important;
        color: white!important;
        background-color: #0e6d62!important;
        font-weight: bold!important;
        border-color: white!important;
        border-bottom-color: #0e6d62!important;
        padding-bottom: 10px;
      }

      .sidebar {
        margin: 0 -14px;
        margin-top: 10px;
        background-color: black;
        color: white;
        padding: 20px;
        /* font-weight: bold; */
      }

      .sub-sidebar {
        margin: 0 -14px;
        margin-top: 5px;
        background-color: black;
        color: white;
        padding: 5px;
        font-weight: normal;
        margin-bottom: 10px;
      }

      .header-img {
        width: 350px;
      }

      @media (min-width: 992px) {
        .nav-link.active {
          font-size: 13px!important;
          color: black!important;
          background-color: #7dd627!important;
          font-weight: bold!important;
          border-color: white!important;
          border-bottom-color: #7dd627!important;
          padding-bottom: 10px;
        }
        .nav-link {
          font-size: 13px!important;
          color: white!important;
          background-color: #0e6d62!important;
          font-weight: bold!important;
          border-color: white!important;
          border-bottom-color: #0e6d62!important;
          padding-bottom: 10px;
        }
        .font-lot {
          font-size: 14px;
        }
        .titles {
          font-family: 'Roboto Slab', serif;
          font-size: 30px;
        }
        .titles2 {
          font-family: 'Roboto Slab', serif;
          font-size: 16px;
          letter-spacing: 1px;
          /* font-weight: bold; */
        }
        .header-img {
          width: 540px;
        }
      }
    </style>
  </head>

  <body>
    <div class="row" style="background-color:#e5e7e9!important;">
      <div style="margin:0 auto; padding-bottom:10px;">
        <img class="header-img" src="img/main-logox.png" />
        <!-- <img style="height:100px; width:auto; padding:10px;" class="card-img-top" src="img/header.png" alt="Maahad Al Fateh Header"> -->
      </div>
    </div>
    <div class="" style="padding:0px 30px;">

      <hr class="green-hr">
      <hr class="red-hr">
      <?php
		if ($_GET['status'] == "Success") {
		    ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Alhamdulillah.</strong> Terima kasih, sumbangan anda berjaya. Semoga Allah membalas dengan rezeki yang lebih besar.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?php
		} elseif ($_GET['status'] == "Error") {
        ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Maaf.</strong> Transaksi anda gagal. Sila cuba lagi.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php
	    }
		?>

            <div class="row">
              <div class="col-md-10">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active text-center" id="projek1-tab" data-toggle="tab" href="#projek1" role="tab" aria-controls="home" aria-selected="true">PROJEK INFAQ<br />BANGUNAN</a>
                  </li>
                </ul>
                <div style="background-color:#7dd627;padding-bottom: 20px;" class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="projek1" role="tabpanel" aria-labelledby="projek1-tab">
                    <div class="row">
                      <div class="offset-md-2"></div>
                      <div style="padding-top:20px;" class="col-md-8 text-center ">
                        <div class="titles"><strong>SASARAN LOT : 80,000 unit</strong></div>
                      </div>
                    </div>
                    <div class="row" style="padding: 0px 30px; padding-top:20px">
                      <?php
						//get the sum of Paid lots
					    $classColor = 'bought';
						$res = mysqli_query($conn, "SELECT sum(lot) FROM akhirat WHERE payment_status = 'Paid' && projek = '$projek'");
						if (false === $res) {
						    die("Select sum failed: ".mysqli_error);
						}
						$row = mysqli_fetch_row($res);
						$pembolehUbah = 500;
						$sum = $row[0] + $pembolehUbah;
						$lots = array();
						if ($sum <= 100) {
					    for ($i = 1; $i <= $sum; $i++) {
					        ?>
	                        <div class="font-lot col-1 <?= $classColor ?> text-center" style="border: 1px solid #000000;padding:2px;">
	                          <?= $i ?>
	                        </div>
	                        <?php
						    }
							$sum++;
							for($i = $sum; $i < $sum + 11; $i++)
							{
							    $classColor = 'available';
								?>
		                        <div class="font-lot col-1 <?= $classColor ?> text-center" style="border: 1px solid #000000;padding:2px;">
		                          <?= $i ?>
		                        </div>
		                        <?php
							}
						}
						else
						{
							for($i=1; $i <= $sum; $i++)
							{
								$lots[] = $i;
							}
	// 						print_r($lots);
							$n = 100;
							$arr = array_slice($lots, -$n);
	// 						print_r($arr);
							foreach($arr as $latestLot => $value)
							{
								?>
		                        <div class="font-lot col-1 <?= $classColor ?> text-center" style="border: 1px solid #000000;padding:2px;">
		                          <?= $value ?>
		                        </div>
		                        <?php
							}

							for($i = ($sum + 1); $i < $sum+8; $i++)
							{
							    $classColor = 'available';
								?>
		                        <div class="font-lot col-1 <?= $classColor ?> text-center" style="border: 1px solid #000000;padding:2px;">
		                          <?= $i ?>
		                        </div>
		                        <?php
							}
						}
					?>
                    </div>
                    <form action="borang.php" method="post">
                      <div style="padding-top:20px;" class="row">
                        <div class="offset-1 offset-sm-2 offset-md-4 text-center">
                          <div>
                            <strong>Dengan nama Allah, Saya Infaqkan <input style="width: 80px" type="number" min="1" value="1" name="infaq" /> Lot</strong>
                          </div>
                        </div>
                      </div>
                      <div style="padding-top:20px;" class="row">
                        <div class="offset-4 offset-sm-6 text-center">
                          <button type="submit" class="btn btn-dark"><strong><div style="font-size:20px;letter-spacing:3px;">SUMBANG</div></strong>
                            <div style="letter-spacing: 5px; margin-top:-8px">SEKARANG</div>
                          </button>
                        </div>
                      </div>
                      <input type="hidden" name="desc" value="<?= $projek ?>" />
                    </form>
                  </div>
                  <div class="tab-pane fade" id="projek2" role="tabpanel" aria-labelledby="projek2-tab">
	                <div class="row">
                      <div class="offset-md-2"></div>
                      <div style="padding-top:20px;" class="col-md-8 text-center ">
                        <div class="titles"><strong>SASARAN LOT : 20,000 unit</strong></div>
                      </div>
                    </div>
                    <div class="row" style="padding: 0px 30px; padding-top:20px">
                      <?php
	                     $projek = "Projek Infaq Kantin dan Dapur";
						//get the sum of Paid lots
					    $classColor = 'bought';
						$res = mysqli_query($conn, "SELECT sum(lot) FROM akhirat WHERE payment_status = 'Paid' && projek = '".$projek."'");
						if (false === $res) {
						    die("Select sum failed: ".mysqli_error);
						}
						$row = mysqli_fetch_row($res);
						$sum = $row[0];
						$lots = array();
						if ($sum <= 100) {
					    for ($i = 1; $i <= $sum; $i++) {
					        ?>
	                        <div class="font-lot col-1 <?= $classColor ?> text-center" style="border: 1px solid #000000;padding:2px;">
	                          <?= $i ?>
	                        </div>
	                        <?php
						    }
							$sum++;
							for($i = $sum; $i < $sum + 11; $i++)
							{
							    $classColor = 'available';
								?>
		                        <div class="font-lot col-1 <?= $classColor ?> text-center" style="border: 1px solid #000000;padding:2px;">
		                          <?= $i ?>
		                        </div>
		                        <?php
							}
						}
						else
						{
							for($i=1; $i <= $sum; $i++)
							{
								$lots[] = $i;
							}
	// 						print_r($lots);
							$n = 100;
							$arr = array_slice($lots, -$n);
	// 						print_r($arr);
							foreach($arr as $latestLot => $value)
							{
								?>
		                        <div class="font-lot col-1 <?= $classColor ?> text-center" style="border: 1px solid #000000;padding:2px;">
		                          <?= $value ?>
		                        </div>
		                        <?php
							}

							for($i = ($sum + 1); $i < $sum+8; $i++)
							{
							    $classColor = 'available';
								?>
		                        <div class="font-lot col-1 <?= $classColor ?> text-center" style="border: 1px solid #000000;padding:2px;">
		                          <?= $i ?>
		                        </div>
		                        <?php
							}
						}
					?>
                    </div>
                    <form action="borang.php" method="post">
                      <div style="padding-top:20px;" class="row">
                        <div class="offset-1 offset-sm-2 offset-md-4 text-center">
                          <div>
                            <strong>Dengan nama Allah, Saya Infaqkan <input style="width: 80px" type="number" min="1" value="1" name="infaq" /> Lot</strong>
                          </div>
                        </div>
                      </div>
                      <div style="padding-top:20px;" class="row">
                        <div class="offset-4 offset-sm-6 text-center">
                          <button type="submit" class="btn btn-dark"><strong><div style="font-size:20px;letter-spacing:3px;">SUMBANG</div></strong>
                            <div style="letter-spacing: 5px; margin-top:-8px">SEKARANG</div>
                          </button>
                        </div>
                      </div>
                      <input type="hidden" name="desc" value="<?= $projek ?>" />
                    </form>
                  </div>
                  <div class="tab-pane fade" id="projek3" role="tabpanel" aria-labelledby="projek3-tab">
	                  <div class="row">
                      <div class="offset-md-2"></div>
                      <div style="padding-top:20px;" class="col-md-8 text-center ">
                        <div class="titles"><strong>SASARAN LOT : 10,000 unit</strong></div>
                      </div>
                    </div>
                    <div class="row" style="padding: 0px 30px; padding-top:20px">
                      <?php
	                     $projek = "Projek Infaq Susur Pejalan Kaki";
						//get the sum of Paid lots
					    $classColor = 'bought';
						$res = mysqli_query($conn, "SELECT sum(lot) FROM akhirat WHERE payment_status = 'Paid' && projek = '".$projek."'");
						if (false === $res) {
						    die("Select sum failed: ".mysqli_error);
						}
						$row = mysqli_fetch_row($res);

						$sum = $row[0];
						$lots = array();
						if ($sum <= 100) {
					    for ($i = 1; $i <= $sum; $i++) {
					        ?>
	                        <div class="font-lot col-1 <?= $classColor ?> text-center" style="border: 1px solid #000000;padding:2px;">
	                          <?= $i ?>
	                        </div>
	                        <?php
						    }
							$sum++;
							for($i = $sum; $i < $sum + 11; $i++)
							{
							    $classColor = 'available';
								?>
		                        <div class="font-lot col-1 <?= $classColor ?> text-center" style="border: 1px solid #000000;padding:2px;">
		                          <?= $i ?>
		                        </div>
		                        <?php
							}
						}
						else
						{
							for($i=1; $i <= $sum; $i++)
							{
								$lots[] = $i;
							}
	// 						print_r($lots);
							$n = 100;
							$arr = array_slice($lots, -$n);
	// 						print_r($arr);
							foreach($arr as $latestLot => $value)
							{
								?>
		                        <div class="font-lot col-1 <?= $classColor ?> text-center" style="border: 1px solid #000000;padding:2px;">
		                          <?= $value ?>
		                        </div>
		                        <?php
							}

							for($i = ($sum + 1); $i < $sum+8; $i++)
							{
							    $classColor = 'available';
								?>
		                        <div class="font-lot col-1 <?= $classColor ?> text-center" style="border: 1px solid #000000;padding:2px;">
		                          <?= $i ?>
		                        </div>
		                        <?php
							}
						}
					?>
                    </div>
                    <form action="borang.php" method="post">
                      <div style="padding-top:20px;" class="row">
                        <div class="offset-1 offset-sm-2 offset-md-4 text-center">
                          <div>
                            <strong>Dengan nama Allah, Saya Infaqkan <input style="width: 80px" type="number" min="1" value="1" name="infaq" /> Lot</strong>
                          </div>
                        </div>
                      </div>
                      <div style="padding-top:20px;" class="row">
                        <div class="offset-4 offset-sm-6 text-center">
                          <button type="submit" class="btn btn-dark"><strong><div style="font-size:20px;letter-spacing:3px;">SUMBANG</div></strong>
                            <div style="letter-spacing: 5px; margin-top:-8px">SEKARANG</div>
                          </button>
                        </div>
                      </div>
                      <input type="hidden" name="desc" value="<?= $projek ?>" />
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-lg-2" style="background-color:#e5e7e9;">
                <div class="row sidebar">
                  <div class="titles2" style="margin:0 auto;">
                    PEMBERI INFAQ
                  </div>
                </div>
                <div class="row sub-sidebar">
                  <div style="margin:0 auto;">
                    <?php echo date("d / m / Y"); ?>
                  </div>
                </div>
                <div class="row">
                  <?php
					$sql = "SELECT * FROM akhirat WHERE payment_status = 'Paid' ORDER BY id DESC LIMIT 20";
					$result = $conn->query($sql);
					while ($row = mysqli_fetch_array($result)) {
					    ?>
                    <div style="margin:0 auto;">
                      <?= $row['name'] ?> -
                        <?= $row['lot'] ?> lot
                    </div>
                    <?php
					}
					?>
                </div>
              </div>
            </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>

  </html>
