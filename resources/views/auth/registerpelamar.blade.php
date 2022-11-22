




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register Pelamar</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css2/opensans-font.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts2/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="{{ asset('css2/style.css') }}">
</head>
<body>
    {{-- <form action="{{route('actionlogout') }}" method="post">
        @csrf
        <button type="submit">Lgout guys</button>
    </form> --}}
	<div class="page-content">
		<div class="form-v1-content">
			<div class="wizard-form">
		        <form class="form-register" action="{{ route('registerpelamar.store') }}" method="post">
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <h2>
			            	<p class="step-icon"><span>01</span></p>
			            	<span class="step-text">Data Pelamar</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Informasi Pelamar</h3>
									<p>Silakan masukkan informasi Anda dan lanjutkan ke langkah berikutnya agar kami dapat membuat akun Pelamar. </p>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>Nama Depan</legend>
											<input type="text" class="form-control" id="nama_depan" name="nama_depan" placeholder=" ">
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>Nama Belakang</legend>
											<input type="text" class="form-control" id="nama_belakang" name="nama_belakang" placeholder="">
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Nomer Telpon </legend>
											<input type="text" name="no_hp" id="no_hp" class="form-control"  placeholder="">
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Alamat</legend>
											<input type="text" class="form-control" id="phone" name="alamat" placeholder="">
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Email</legend>
											<input type="text" class="form-control" id="phone" name="email" placeholder="">
										</fieldset>
									</div>
								</div>

								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Gender</legend>
											<input type="text" class="form-control" id="phone" name="gender" placeholder="">
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>Berat Badan</legend>
											<input type="text" class="form-control" id="first-name" name="berat_badan" placeholder="">
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>Tinggi Badan</legend>
											<input type="text" class="form-control" id="last-name" name="tinggi_badan" placeholder="">
										</fieldset>
									</div>
								</div>
								{{-- <div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>Kode Pos</legend>
											<input type="text" class="form-control" id="phone" name="kode_pos" placeholder="">
										</fieldset>
									</div>
								</div> --}}
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
			            	<span class="step-text">Pendidikan</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Data Pendidikan</h3>
									<p>Silakan masukkan informasi Anda dan lanjutkan ke langkah berikutnya agar kami dapat membuat akun Pelamar.</p>
								</div>
							     {{-- <div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>Tingkat Pendidikan</legend>
											<input type="text" class="form-control" id="first-name" name="tingkat_pendidikan" placeholder=" ">
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>Nama Sekolah</legend>
											<input type="text" class="form-control" id="last-name" name="last-name" placeholder="">
										</fieldset>
									</div>
								</div> --}}
                                <div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Tingkat Pendidikan</legend>
											<input type="text" class="form-control" id="phone" name="tingkat_pendidikan" placeholder="">
										</fieldset>
									</div>
								</div>
								{{-- <div class="form-row">
									<div class="form-holder form-holder-2">
											<legend>Akta Pendiri Perusahaan</legend>
											<input type="file" name="akta_pendiri_perusahaan" id="your_email" class="form-control"  placeholder="" >

									</div>
								</div> --}}
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Nama Sekolah </legend>
											<input type="text" class="form-control" id="phone" name="nama_sekolah" placeholder="" >
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Lokasi Pendidikan</legend>
											<input type="text" class="form-control" id="phone" name="lokasi_pendidikan" placeholder="" >
										</fieldset>
									</div>
								</div>

								<div class="form-row">
									<div class="form-holder form-holder-2">
                                        <fieldset>
											<legend>Alamat Pendidikan</legend>
											<input type="text" class="form-control" id="phone" name="alamat_pendidikan" placeholder="" >
										</fieldset>
									</div>
								</div>
                                <div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>Gelar</legend>
											<input type="text" class="form-control" id="first-name" name="gelar" placeholder=" " >
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>Bidang Studi</legend>
											<input type="text" class="form-control" id="last-name" name="bidang_studi" placeholder="" >
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>Tanggal Mulai</legend>
											<input type="text" class="form-control" id="first-name" name="tanggal_mulai" placeholder="" >
										</fieldset>
									</div>

									<div class="form-holder ">
										<fieldset>
											<legend>Tanggal Lulus</legend>
											<input type="text" class="form-control" id="first-name" name="tanggal_lulus" placeholder="" >
										</fieldset>
									</div>
								</div>
                                <div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>IPK</legend>
											<input type="text" class="form-control" id="first-name" name="ipk" placeholder="" >
										</fieldset>
									</div>

									<div class="form-holder ">
										<fieldset>
											<legend>No Ijazah</legend>
											<input type="text" class="form-control" id="first-name" name="no_ijazah" placeholder="" >
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder ">
                                        <fieldset>
											<legend>Tanggal Ijazah</legend>
											<input type="text" class="form-control" id="phone" name="tanggal_ijazah" placeholder="" >
                                        </fieldset>
									</div>


									<div class="form-holder ">

											<legend>Nama Penjabat TTD</legend>
											<input type="file" class="form-control" id="phone" name="nama_pejabat_ttd" placeholder="" >

									</div>
                                </div>
                                <div class="form-row">
									<div class="form-holder">

											<legend>Ijazah</legend>
											<input type="file" class="form-control" id="first-name" name="ijazah" placeholder="" >

									</div>

									<div class="form-holder ">

											<legend>Penjabat Pengasah</legend>
											<input type="file" class="form-control" id="first-name" name="penjabat_pengasah" placeholder="" >

									</div>
								</div>

                                <div class="form-row">
									<div class="form-holder">

											<legend>Sertifikat</legend>
											<input type="file" class="form-control" id="first-name" name="sertifikat    " placeholder="" >

									</div>

                                    <div class="form-holder ">

                                        <legend>Simpan Data</legend>
                                        <button type="submit" class="btn btn-success">Save</button>

                                </div>


							</div>

			            </section>
			            <!-- SECTION 3 -->
			            {{-- <h2>
			            	<p class="step-icon"><span>03</span></p>
			            	<span class="step-text">Contact Perusahaan</span>
			            </h2> --}}

			            {{-- <section>
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
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Jabatan</legend>
											<input type="text" class="form-control" id="first-name" name="jabatan_cp" placeholder="" >
										</fieldset>
									</div>

								</div>
							</div>
			            </section> --}}
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
