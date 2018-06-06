<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register | AjarinCode</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/register/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/register/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/register/css/form-elements.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/register/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/register/select2/select2.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/icon.ico">
    </head>

    <body>

		<!-- Top menu -->
		<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#"><img src="<?php echo base_url() ?>assets/images/logo.png" width="50px" height="50px"></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<span class="li-social">
								<a href="https://www.facebook.com/pages/Azmindcom/196582707093191" target="_blank"><i class="fa fa-facebook"></i></a> 
								<a href="https://twitter.com/anli_zaimi" target="_blank"><i class="fa fa-twitter"></i></a> 
								<a href="https://plus.google.com/+AnliZaimi_azmind" target="_blank"><i class="fa fa-youtube"></i></a> 
								<a href="https://github.com/AZMIND" target="_blank"><i class="fa fa-instagram"></i></a>
							</span>
						</li>
					</ul>
				</div>
			</div>
		</nav>

        <!-- Top content -->
        <div class="top-content">
            <div class="container">
                
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <h1><strong>AJARINCODE</strong></h1>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
                    	<form role="form" action="<?php echo site_url('auth/register') ?>" method="post" class="f1">

                    		<h3>Register</h3>
                    		<p>Buat akun anda dan mulai belajar</p>
                    		<div class="f1-steps">
                    			<div class="f1-progress">
                    			    <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
                    			</div>
                    			<div class="f1-step active">
                    				<div class="f1-step-icon"><i class="fa fa-user"></i></div>
                    				<p>About</p>
                    			</div>
                    			<div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-key"></i></div>
                    				<p>Account</p>
                    			</div>
                    		    <div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-lock"></i></div>
                    				<p>Verify</p>
                    			</div>
                    		</div>
                    		
                    		<fieldset>
                    		    <h4>Isi Identitas Anda</h4>
                    			<div class="form-group">
                    			    <label class="sr-only" for="f1-first-name">Nama</label>
                                    <input type="text" name="nama" placeholder="Nama Lengkap" class="f1-first-name form-control" id="f1-first-name">
                                </div>
                                <div class="form-group">
                                	<label class="sr-only" for="jk">Jenis Kelamin :</label>
                                	<input type="radio" name="jk" value="L">&nbsp;<i class="fa fa-male"></i>&nbsp;Laki-Laki
                                	<input type="radio" name="jk" value="P">&nbsp;<i class="fa fa-female"></i>&nbsp;Perempuan
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="tanggal">Tanggal Lahir</label>
                                    <input type="date" name="tanggal" class="form-control" id="tanggal">
                                </div>
                                <div class="form-group">
                                	<label class="sr-only" for="nomer">No. Handphone</label>
                                	<input type="text" name="nomer" placeholder="Nomer Handphone" class="form-control" id="nomer">
                                </div>
                                <div class="form-group">
                                	<label class="sr-only" for="provinsi">Asal</label>
                                	<select class="select2" name="provinsi" id="provinsi" style="width: 100%">
                                		<option>-- Pilih Provinsi --</option>
                                		<?php foreach($provinsi as $p){ ?>
                                		<option value="<?php echo $p->id_provinsi ?>"><?php echo $p->nama_provinsi ?></option>
                                		<?php } ?>
                                	</select>
                                	<select class="kabupaten select2" name="kabupaten" style="width: 100%">
                                		<option value="0"></option>
                                	</select>
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                                <div class="form-group">
                                	<p>Sudah punya akun ? <a href="<?php echo site_url('login') ?>">Login</a></p>
                                </div>
                            </fieldset>

                            <fieldset>
                                <h4>Set up your account:</h4>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-email">Email</label>
                                    <input type="text" name="email" placeholder="Email" class="f1-email form-control" id="f1-email">
                                </div>
                                <div class="form-group">
                                	<label class="sr-only" for="f1-username">Username</label>
                                	<input type="text" name="username" placeholder="Username" class="form-control f1-username">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-password">Password</label>
                                    <input type="password" name="password" placeholder="Password" class="f1-password form-control" id="f1-password">
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                                <div class="form-group">
                                	<p>Sudah punya akun ? <a href="<?php echo site_url('login') ?>">Login</a></p>
                                </div>
                            </fieldset>

                            <fieldset>
                                <h4>Input the captcha</h4>
                                <div class="form-group">
                                	<?php echo $img ?>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-captcha">captcha</label>
                                    <input type="text" name="captcha" placeholder="Masukkan Kode Captcha" class="form-control" id="f1-captcha">
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="submit" class="btn btn-submit">Submit</button>
                                </div>
                                <div class="form-group">
                                	<p>Sudah punya akun ? <a href="<?php echo site_url('login') ?>">Login</a></p>
                                </div>
                            </fieldset>
                  
                    	</form>
                    </div>
                </div>
                    
            </div>
        </div>


        <!-- Javascript -->
        <script src="<?php echo base_url() ?>assets/register/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript">
	        $(document).ready(function(){
	            $('#provinsi').change(function(){
	                var id=$(this).val();
	                $.ajax({
	                    url : "<?php echo base_url();?>home/get_kabupaten",
	                    method : "POST",
	                    data : {id: id},
	                    async : false,
	                    dataType : 'json',
	                    success: function(data){
	                        var html = '';
	                        var i;
	                        for(i=0; i<data.length; i++){
	                            //html += '<option>'+data[i].nama_kabupaten+'</option>';
	                            html += '<option value='+data[i].id_kabupaten+'>'+data[i].nama_kabupaten+'</option>';
	                        }
	                        $('.kabupaten').html(html);

	                    }
	                });
	            });
	        });
	    </script>
        <script src="<?php echo base_url() ?>assets/register/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/register/js/jquery.backstretch.min.js"></script>
        <script src="<?php echo base_url() ?>assets/register/js/retina-1.1.0.min.js"></script>
        <script src="<?php echo base_url() ?>assets/register/js/scripts.js"></script>
        <script src="<?php echo base_url() ?>assets/register/select2/select2.min.js"></script>
        <script>
        	$('.select2').select2()
        </script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>