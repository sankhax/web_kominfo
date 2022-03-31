<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Diskominfo Solok Selatan
    </title>
    <!-- Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- CSS Files -->
    <link id="pagestyle" href="/css/adm.css" rel="stylesheet" />
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <!-- Alpine -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	
	
</head>

<body class="g-sidenav-show bg-gray-100">
<!--   Core JS Files   -->
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }

    </script>
	
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-left ms-3"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute right-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="">
            <img src="/image/icon.png" class="navbar-brand-img h-100" >
            <span class="ms-1 font-weight-bold">Diskominfo Solok Selatan</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item pb-2">
                <a class="nav-link" href="/dashboard">
                    <div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-home"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
				<a class="nav-link"
                    href="/aberita">
                    <div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <span class="nav-link-text ms-1">Berita</span>
                </a>
				
            </li>

            <li class="nav-item mt-2">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Profile</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/astruktur">
                    <div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-bars"></i>
                    </div>
                    <span class="nav-link-text ms-1">Struktur Organisasi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/asejarah">
                    <div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-history"></i>
                    </div>
                    <span class="nav-link-text ms-1">Sejarah & Visi Misi</span>
                </a>
            </li>
			<li class="nav-item">
                <a class="nav-link" href="/aprogram">
                    <div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-sticky-note"></i>
                    </div>
                    <span class="nav-link-text ms-1">Program & Kegiatan</span>
                </a>
            </li>
			<li class="nav-item">
                <a class="nav-link" href="/apegawai">
                    <div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-users"></i>
                    </div>
                    <span class="nav-link-text ms-1">Daftar Pegawai</span>
                </a>
            </li>

            <li class="nav-item mt-2">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Galeri</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/afoto">
                    <div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-images"></i>
                    </div>
                    <span class="nav-link-text ms-1">Foto</span>
                </a>
            </li>
			<li class="nav-item">
                <a class="nav-link" href="/avideo">
                    <div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-video"></i>
                    </div>
                    <span class="nav-link-text ms-1">Video</span>
                </a>
            </li>
			<li class="nav-item mt-2">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Lainnya</h6>
            </li>
			<li class="nav-item pb-2">
				<a class="nav-link" href="/apengaduan">
                    <div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-headset"></i>
                    </div>
                    <span class="nav-link-text ms-1">Pengaduan</span>
                </a>
				<a class="nav-link" href="/alayanan">
                    <div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <span class="nav-link-text ms-1">Aplikasi</span>
                </a>
				<a class="nav-link" href="/acontact">
                    <div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-phone"></i>
                    </div>
                    <span class="nav-link-text ms-1">Contact</span>
                </a>
				</li>
			<li class="nav-item pb-2 mt-2">
					<div class="d-flex justify-content-center">
					<form method="POST" action="{{ route('logout') }}">
                    @csrf
                          <x-jet-dropdown-link href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();"> <i class="fas fa-sign-out-alt"> </i>
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                   </form>
					</div>	
			</li>
			

</aside>
    
<main class="main-content mt-1 border-radius-lg">
	@yield('content')
</main>	
	
</body>

</html>
