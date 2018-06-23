<!doctype html>
<?php
  include("inc/con.php");
  include("inc/head.php");
?>
  <?php
	  $jumlah = 0;
	  $harga = $nilai_lot;
	  $lot = $_POST["infaq"];
	  $jumlah = $lot * $harga;
  ?>
  <body>
    <div class="row" style="background-color:#e5e7e9!important;">
      <div style="margin:0 auto; padding-bottom:10px;">
        <img class="header-img" src="img/<?= $banner ?>" />
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
				  <h1><span class="badge badge-secondary my-3"><?= $lot ?> LOT = RM <?= number_format($jumlah,2) ?></span></h1>
				  <input type="hidden" name="jumlah" value="<?= $jumlah ?>" />
				  <input type="hidden" name="lot" value="<?= $lot ?>" />
				  <input type="hidden" name="desc" value="<?= $_POST['desc'] ?>" />
			  </div>
			  <div align="center">
				  <button id="back_button" type="button" class="btn btn-danger btn-lg">Kembali</button>
				  <button type="submit" class="btn btn-primary btn-lg">Teruskan</button>
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
