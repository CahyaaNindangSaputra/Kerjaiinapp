




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register Perusahaan</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css2/opensans-font.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts2/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="{{ asset('css2/style.css') }}">
</head>
<body>
	<div class="page-content">
		<div class="form-v1-content">
			<div class="wizard-form">
		        <form class="form-register" enctype="multipart/form-data" action="{{ route('registerperusahan.store') }}" method="post">
                    @csrf
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <h2>
			            	<p class="step-icon"><span>01</span></p>
			            	<span class="step-text">Data Perusahaan</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Informasi Perusahaan</h3>
									<p>Silakan masukkan informasi Anda dan lanjutkan ke langkah berikutnya agar kami dapat membuat akun Perusahaan. </p>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>Nama Perusahaan</legend>
											<input type="text" class="form-control" id="first-name" name="nama_perusahaan" placeholder=" " >
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>Jenis Usaha</legend>
											<input type="text" class="form-control" id="jenis_usaha" name="jenis_usaha" placeholder="" >
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Nomer Telpon Perusahaan</legend>
											<input type="text" name="no_telp_perusahaan" id="no_telp_perusahaan" class="form-control"  placeholder="" >
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Email Perusahaan</legend>
											<input type="text" class="form-control" id="phone" name="email" placeholder="" >
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Website Perusahaan</legend>
											<input type="text" class="form-control" id="phone" name="website" placeholder="" >
										</fieldset>
									</div>
								</div>

								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Alamat Perusahaan</legend>
											<input type="text" class="form-control" id="phone" name="alamat_perusahaan" placeholder="" >
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>Provinsi</legend>
											<input type="text" class="form-control" id="first-name" name="provinsi" placeholder="" >
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>Kacamatan</legend>
											<input type="text" class="form-control" id="last-name" name="kecamatan" placeholder="" >
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>Kode Pos</legend>
											<input type="text" class="form-control" id="phone" name="kode_pos" placeholder="" >
										</fieldset>
									</div>
								</div>
								<!-- <div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Deskripsi Perusahaan</legend>
											<input type="textarea" class="form-control" id="phone" name="phone" placeholder="" >
										</fieldset>
									</div>
								</div> -->

							</div>
			            </section>
						<!-- SECTION 2 -->
			            <h2>
			            	<p class="step-icon"><span>02</span></p>
			            	<span class="step-text">Legalitas Perusahaan</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Bukti Legalitas Perusahaan</h3>
									<p>Silakan masukkan informasi Anda dan lanjutkan ke langkah berikutnya agar kami dapat membuat akun Perusahaan.</p>
								</div>
								<!-- <div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>Nama Perusahaan</legend>
											<input type="text" class="form-control" id="first-name" name="first-name" placeholder=" " >
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>Jenis Usaha</legend>
											<input type="text" class="form-control" id="last-name" name="last-name" placeholder="" >
										</fieldset>
									</div>
								</div> -->
								<div class="form-row">
									<div class="form-holder form-holder-2">
											<legend>Akta Pendiri Perusahaan</legend>
											<input type="file" name="akta_pendiri_perusahaan" id="your_email" class="form-control"  placeholder="" >

									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Tanggal Penegasan </legend>
											<input type="text" class="form-control" id="phone" name="tanggal_penegasan" placeholder="" >
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Nama Notaris</legend>
											<input type="text" class="form-control" id="phone" name="nama_notaris" placeholder="" >
										</fieldset>
									</div>
								</div>

								<div class="form-row">
									<div class="form-holder form-holder-2">

											<legend>SIUP</legend>
											<input type="file" class="form-control" id="phone" name="siup" placeholder="" >

									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>NPWP</legend>
											<input type="text" class="form-control" id="first-name" name="npwp" placeholder="" >
										</fieldset>
									</div>

									<div class="form-holder ">
										<fieldset>
											<legend>Bentuk Penanaman Modal</legend>
											<input type="text" class="form-control" id="first-name" name="bentuk_penanaman_modal" placeholder="" >
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">

											<legend>TDP</legend>
											<input type="file" class="form-control" id="phone" name="tdp" placeholder="" >

									</div>
								</div>
                                <div class="form-row">
									<div class="form-holder ">
										<fieldset>
											<legend>NIB</legend>
											<input type="text" class="form-control" id="phone" name="nib" placeholder="" >
										</fieldset>
									</div>
								</div>



							</div>
			            </section>
			            <!-- SECTION 3 -->
			            <h2>
			            	<p class="step-icon"><span>03</span></p>
			            	<span class="step-text">Contact Perusahaan</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Data Contact person </h3>
									<p>Silakan masukkan informasi Anda dan lanjutkan ke langkah berikutnya agar kami dapat membuat akun Perusahaan.</p>
								</div>
                                <div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Nama Contact Person</legend>
											<input type="text" name="nama_cp" id="nama_cp" class="form-control"  placeholder="" >
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>No Telpon Contact Person</legend>
											<input type="text" class="form-control" id="phone" name="no_telp_cp" placeholder="" >
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Email Contact Person</legend>
											<input type="text" class="form-control" id="phone" name="email_cp" placeholder="" >
										</fieldset>
									</div>
								</div>

								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Alamat Contact Person</legend>
											<input type="text" class="form-control" id="phone" name="alamat_cp" placeholder="" >
										</fieldset>
									</div>
								</div>
								{{-- <div class="form-row">
									<div class="form-holder ">
										<fieldset>
											<legend>Jabatan</legend>
											<input type="text" class="form-control" id="first-name" name="jabatan_cp" placeholder="" >
										</fieldset>
									</div>

								</div> --}}
                                {{-- <div class="form-row">
									<div class="form-holder">
										<fieldset>
                                            <button type="submit" class="btn btn-success">Save</button>
										</fieldset>
									</div>

								</div> --}}
                                <div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>Jabatan</legend>
											<input type="text" class="form-control" id="first-name" name="jabatan_cp" placeholder="" >
										</fieldset>
									</div>

									<div class="form-holder ">

											<legend>Simpan Data</legend>
											<button type="submit" class="btn btn-success">Save</button>

									</div>
								</div>
							</div>
			            </section>




		        	</div>

		        </form>
			</div>
		</div>
	</div>
	<script src="js2/jquery-3.3.1.min.js"></script>
	<script src="js2/jquery.steps.js"></script>
	<script src="js2/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
