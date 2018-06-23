<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
    <link rel="stylesheet" href="vendor/intl-tel-input/build/css/intlTelInput.css" />
    <title>Maahad Tahfiz Al Fateh</title>
    <style>
    .titles {
      font-family: 'Roboto Slab', serif;
      font-size: 18px;
    }
    .green-hr {
        display: block;
        margin-top: 0em;
        margin-bottom: 0.5em;
        margin-left:  -5em;
        margin-right: -5em;
        border-style: inset;
        border-width: 2px;
        border-top: 3px solid green;
    }
    .red-hr {
        display: block;
        margin-top: -0.5em;
        margin-bottom: 1.5em;
        margin-left:  -5em;
        margin-right: -5em;
        border-style: inset;
        border-width: 2px;
        /* border-color: red; */
        border-top: 3px solid red;
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
      font-size:6px;
    }


    .nav-link.active {
      font-size: 7px!important;
      color:black!important;
      background-color:#7dd627!important;
      font-weight:bold!important;
      border-color: white!important;
      border-bottom-color: #7dd627!important;
      padding-bottom: 10px;
      /* margin-bottom: 10px; */
    }
    .nav-link {
      font-size: 7px!important;
      color:white!important;
      background-color:#0e6d62!important;
      font-weight:bold!important;
      border-color: white!important;
      border-bottom-color: #0e6d62!important;
      padding-bottom: 10px;
    }
    .sidebar{
      margin:0 -14px;
      margin-top: 10px;
      background-color: black;
      color: white;
      padding: 20px;
      /* font-weight: bold; */
    }
    .sub-sidebar{
      margin:0 -14px;
      margin-top: 5px;
      background-color: black;
      color: white;
      padding: 5px;
      font-weight: normal;
      margin-bottom: 10px;
    }
    .header-img{
      width: 350px;
    }
    @media (min-width: 992px) {

      .nav-link.active {
        font-size: 13px!important;
        color:black!important;
        background-color:#7dd627!important;
        font-weight:bold!important;
        border-color: white!important;
        border-bottom-color: #7dd627!important;
        padding-bottom: 10px;
      }
      .nav-link {
      font-size: 13px!important;
        color:white!important;
        background-color:#0e6d62!important;
        font-weight:bold!important;
        border-color: white!important;
        border-bottom-color: #0e6d62!important;
        padding-bottom: 10px;
      }

      .font-lot {
        font-size:14px;
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

      .header-img{
        width: 540px;
      }

    }
    </style>
  </head>
  <?php
	  $jumlah = 0;
	  $harga = 25;
	  $lot = $_POST["infaq"];
	  $jumlah = $lot * $harga;
  ?>
  <body>
    <div class="row" style="background-color:#e5e7e9!important;">
      <div style="margin:0 auto; padding-bottom:10px;">
        <img class="header-img" src="img/header-maahad.png" />
        <!-- <img style="height:100px; width:auto; padding:10px;" class="card-img-top" src="img/header.png" alt="Maahad Al Fateh Header"> -->
      </div>
    </div>
    <div class="" style="padding:0px 30px;">

      <hr class="green-hr">
      <hr class="red-hr">
      <div class="row">
        <div class="offset-md-3 col-md-6">
	        <form action="proses_borang.php" method="post" id="the_form">
			  <div class="form-group">
			    <label for="nama_penuh">Nama Penyumbang</label>
			    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Penuh" required="">
			  </div>
			  <div class="row">
				  <div class="col-md-6">
					  <div class="form-group">
					    <label for="email">Email</label>
					    <input type="email" class="form-control" id="email" name="email" placeholder="Alamat Email" required="">
					  </div>
				  </div>
				  <div id="errMessage"></div>
				  <div class="col-md-6">
					  <div class="form-group">
					    <label for="mobile_no">Nombor Telefon (wajib ikut format)</label>
					    <input type="tel" class="form-control" id="mobile_no" name="mobile_no" placeholder="0123456789" required="">
					  </div>
				  </div>
			  </div>
			  <div align="center">
				  <h1><span class="badge badge-secondary my-3"><?= $lot ?> lot = RM <?= number_format($jumlah,2) ?></span></h1>
				  <input type="hidden" name="jumlah" value="<?= $jumlah ?>" />
				  <input type="hidden" name="lot" value="<?= $lot ?>" />
				  <input type="hidden" name="desc" value="<?= $_POST['desc'] ?>" />
			  </div>
			  <div align="center">
				  <button id="back_button" type="button" class="btn btn-danger btn-lg">Kembali</button>
				  <button type="submit" class="btn btn-success btn-lg">Teruskan</button>
			  </div>

			</form>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="vendor/intl-tel-input/build/js/intlTelInput.min.js"></script>
	<script>
	$(document).ready(function() {
      $('#back_button').click(function(){
        window.history.back();
      });
	    $('#the_form')
	        .find('[name="mobile_no"]')
	            .intlTelInput({
	                utilsScript: 'vendor/intl-tel-input/build/js/utils.js',
	                autoPlaceholder: true,
	                preferredCountries: ['my']
	            });

	    $('#the_form')
	        .formValidation({
	            framework: 'bootstrap',
	            icon: {
	                valid: 'glyphicon glyphicon-ok',
	                invalid: 'glyphicon glyphicon-remove',
	                validating: 'glyphicon glyphicon-refresh'
	            },
	            fields: {
	                phoneNumber: {
	                    validators: {
	                        callback: {
	                            message: 'The phone number is not valid',
	                            callback: function(value, validator, $field) {
	                                return value === '' || $field.intlTelInput('isValidNumber');
	                            }
	                        }
	                    }
	                }
	            }
	        })
	        // Revalidate the number when changing the country
	        .on('click', '.country-list', function() {
	            $('#the_form').formValidation('revalidateField', 'mobile_no');
	        });
	});
	</script>
  </body>
</html>
