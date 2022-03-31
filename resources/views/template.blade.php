<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Diskominfo Solok Selatan</title>
		

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
		<link rel="stylesheet" type="text/css" href="/app.css">
		<script src="https://kit.fontawesome.com/33ea641f38.js" crossorigin="anonymous"></script>
		<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	
		
		<!-- Script -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>	
	
	</head>
	
    <body>
		<div class="navigation-wrap bg-light start-header start-style">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<nav class="navbar navbar-expand-md navbar-light">
							<a class="navbar-brand" href="/"> <img src="/image/icon.png" style="max-height:30px"></a>
							<li class="nav-link">
								<a>DISKOMINFO SOLOK SELATAN<a>
							</li>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto py-4 py-md-0">
				<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Profil</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="/struktur">Struktur Organisasi</a>
                    <a class="dropdown-item" href="/visimisi">Sejarah dan Visi Misi</a>
                    <a class="dropdown-item" href="/program">Program dan Kegiatan</a>
                    <a class="dropdown-item" href="/pegawai">Daftar Pegawai</a>
                  </div>
                </li>
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                  <a class="nav-link" href="/berita">Berita</a>
                </li>
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Galeri</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="/gfoto">Foto</a>
                    <a class="dropdown-item" href="/video">Video</a>
                  </div>
                </li>
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Layanan</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="/pengaduan">Pengaduan</a>
                    <a class="dropdown-item" href="/aplikasi">Aplikasi Diskominfo</a>
                  </div>
                </li>
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                  <a class="nav-link" href="/hubungi">Hubungi Kami</a>
                </li>
              </ul>
            </div>
            
          </nav>    
        </div>
      </div>
    </div>
  </div>
  
	<div class="content">
	</div>
	
	@csrf
		@yield('content')
				
  
	<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
		  <a class="image" href=""><img src="/image/icon.png"></a>
          <h6 class="text-uppercase fw-bold mb-4">
			DISKOMINFO SOLOK SELATAN
          </h6>
          <p>
            Lubuak Gadang Sangir
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Profile
          </h6>
          <p>
            <a href="/struktur" class="text-reset">Struktur Organisasi</a>
          </p>
          <p>
            <a href="/visimisi" class="text-reset">Sejarah dan Visi Misi</a>
          </p>
          <p>
            <a href="/program" class="text-reset">Program dan Kegiatan</a>
          </p>
          <p>
            <a href="/pegawai" class="text-reset">Daftar Pegawai</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
           Galeri
          </h6>
          <p>
            <a href="/gfoto" class="text-reset">Foto</a>
          </p>
          <p>
            <a href="/video" class="text-reset">Video</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> Sangir, Solok Selatan</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            kominfosolsel@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 0755 70999</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
	
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-2" style="background-color: rgba(0, 0, 0, 0.05);">
	<!-- Sankha -->
	<small> Dinas Komunkasi dan Informatika Kabupaten Solok Selatan </small>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
	</body>

</html>
