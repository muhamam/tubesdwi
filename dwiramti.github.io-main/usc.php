<?php 
//kode php ini kita gunakan untuk menampilkan pesan eror
if (!empty($_GET['error'])) {
	if ($_GET['error'] == 1) {
		$error1 = '<div class="text-center">
<div class="alert bg-danger alert-styled-left">
<button type="button" class="close" data-dismiss="alert"><span>&times;</span>
<span class="sr-only">Close</span></button>
<span class="text-semibold">Harus login dulu!</span>
</div></div>';
	} else if ($_GET['error'] == 2) {
		$error2 = '<div class="text-center">
<div class="alert bg-danger alert-styled-left">
<button type="button" class="close" data-dismiss="alert"><span>&times;</span>
<span class="sr-only">Close</span></button>
<span class="text-semibold">Username belum diisi!</span>
</div></div>';
	} else if ($_GET['error'] == 3) {
		$error3 = '<div class="text-center">
<div class="alert bg-danger alert-styled-left">
<button type="button" class="close" data-dismiss="alert"><span>&times;</span>
<span class="sr-only">Close</span></button>
<span class="text-semibold">Password belum diisi!</span>
</div></div>';
	} else if ($_GET['error'] == 4) {
		$error4 = '<div class="text-center">
<div class="alert bg-danger alert-styled-left">
<button type="button" class="close" data-dismiss="alert"><span>&times;</span>
<span class="sr-only">Close</span></button>
<span class="text-semibold">Diisi dengan benar!</span>
</div></div>';
	}
}
require_once('main');

?>

<!doctype html>
<html lang="en">

<head >
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- boostrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <!-- mycss -->
    <link rel=" stylesheet" href="1.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel=" stylesheet" href="dwi.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Crete+Round&family=Roboto&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Crete+Round&family=Oleo+Script&family=Roboto&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Chewy&family=Crete+Round&family=Oleo+Script&family=Roboto&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Chewy&family=Crete+Round&family=Mountains+of+Christmas&family=Oleo+Script&family=Roboto&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Chewy&family=Crete+Round&family=Grandstander:ital,wght@0,100;1,200&family=Mountains+of+Christmas&family=Oleo+Script&family=Roboto&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Chewy&family=Crete+Round&family=Grandstander:ital,wght@0,100;1,200&family=Mountains+of+Christmas&family=Oleo+Script&family=Roboto&family=Titan+One&display=swap" rel="stylesheet">



    <title >USC APOTEK </title>
</head>

<body id="home">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow fixed-top " style="pink ">

        <div class="container">
            <a class="navbar-brand" href="#">Unsil Student Center Pharmacy </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="#home">HOME</a>
                    <a class="nav-link active" href="#about">TENTANG KAMI</a>
                    <a class="nav-link active" href="#project">PRODUK KAMI</a>
                    <a class="nav-link active" href="#KONTAK">SILAHKAN PESAN</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->

    <!-- jumbotron ada di boostrap 4 -->
    <section class="jumbotron text-center ">
        <img src="img/logo apotek 2.png" class="rounded-circle img-thumbnail" alt="happy wadding" width="300">
        <h1 class="display-2" style="color: rgb(20, 26, 22);">SELAMAT DATANG USC APOTEK</h1>
        <p style="color: green; font-family: 'Oleo Script', cursive;">Gunakan Obat Sesuai Dengan Dosis

        </p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="white" fill-opacity="1"
                d="M0,160L40,149.3C80,139,160,117,240,138.7C320,160,400,224,480,240C560,256,640,224,720,186.7C800,149,880,107,960,74.7C1040,43,1120,21,1200,64C1280,107,1360,213,1400,266.7L1440,320L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
            </path>
        </svg>


    </section>
    <!-- akhir jumbotron -->
    <!-- about -->
    <section id="about">
        <div class="container">
            .<div class="row text-center mb-5">
                <div class="col">
                    <h2 style="font-family: 'Chewy', cursive;">USC APOTEK</h2>
                </div>
            </div>
            <div class="row justify-content-center .fs-5 text text-center " style="display:inline-flex; font-family: 'Mountains of Christmas', cursive;">
                <div class="col-md-4">
                    <p>USC APOTEK merupakan tempat pelayanan farmasi yang dikelola 
                       oleh mahasiswa unsil secara mandiri.
                    </p>
                </div>
                <div class="col-md-4">
                    <p>Disini kami akan berusaha sebaik mungkin menyediakan
                       layanan farmasi kepada anda dengan sebaik dan sebijak
                       mungkin sesuai dengan kebutuhan anda.
                    </p>
                </div>
                <div class="col-md-4">
                    <p>Kami juga menyediakan layanan Vaksinasi sesuai dengan yang anda butuhkan.
                    </p>
                </div>
            </div>

        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="pink" fill-opacity="1"
                d="M0,160L40,149.3C80,139,160,117,240,138.7C320,160,400,224,480,240C560,256,640,224,720,186.7C800,149,880,107,960,74.7C1040,43,1120,21,1200,64C1280,107,1360,213,1400,266.7L1440,320L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- akhir about -->

    <!-- awal project -->
    <section id="project">
        <div class="container">
            .<div class="row text-center">
                <div class="col mb-4">
                    <h2 style="font-family: 'Chewy', cursive;">POLA HIDUP SEHAT SELAMA MASA PANDEMI</h2>
                </div>
                <div class="row justify-content-center" style="font-family: 'Grandstander', cursive;">
            
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="img/108.jpg" class="card-ng-top" alt="">
                            <div class="card-body">
                                <p class="card-text">Memakai masker saat beraktivitas
                                    diluar rumah.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="img/109.jpg" class="card-ng-top" alt="">
                            <div class="card-body">
                                <p class="card-text">Sering mencuci tangan dengan sabun
                                    serta menggunakan hand sanitizer dengan bijak.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="img/110.jpg" class="card-ng-top" alt="">
                            <div class="card-body">
                                <p class="card-text">Hindari terlalu sering 
                                    menyentuh area wajah.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="img/111.jpg" class="card-ng-top" alt="">
                            <div class="card-body">
                                <p class="card-text"> Membawa bekal sendiri saat keluar rumah.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="img/112.jpg" class="card-ng-top" alt="">
                            <div class="card-body">
                                <p class="card-text"> Ketat menerapkan social distancing.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="img/113.jpg" class="card-ng-top" alt="">
                            <div class="card-body">
                                <p class="card-text"> Menjaga imunitas tubuh.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="img/114.png" class="card-ng-top" alt="">
                            <div class="card-body">
                                <p class="card-text">Rajin berolahraga.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="img/115.png" class="card-ng-top" alt="">
                            <div class="card-body">
                                <p class="card-text">Untuk vaksinasi anda dapat menghubungi secara
                                langsung kepada pihak kami agar sesuai dengan kebutuhan anda. Silahkan
                                hubungi Nomer ini 0881237889 untuk proses vaksinasi.</p>
                              


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="white" fill-opacity="1"
                d="M0,64L48,90.7C96,117,192,171,288,181.3C384,192,480,160,576,122.7C672,85,768,43,864,58.7C960,75,1056,149,1152,197.3C1248,245,1344,267,1392,277.3L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>


    <!-- akhir project -->

    <!-- KONTAK -->
    <section id="KONTAK">
        <div class="container">
            <div class="row text-center ">
                <div class="col mb-4">
                    <h2 style="font-family: 'Chewy', cursive;">PESANLAH DENGAN BIJAK</h2>
                </div>
            </div>
            <div class="row justify-content-center" style="font-family: 'Titan One', cursive;">
                <div class="col-md-7">
                    <div class="alert alert-primary alert-dismissible fade show d-none my-alert" role="alert">
                        <strong>Terima kasih</strong> pesan anda sudah kami terima, mohon untuk tdak mengirim pesan
                        berulang-ulang.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <form name="kontak-cv.aswa anugrah">
                        <div class="mb-3">
                            <label for="name" class="form-label">NAMA PEMESAN</label>
                            <input type="name" class="form-control" id="name" aria-describedby="name" name="NAMA">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="email" name="EMAIL">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">No.Hp</label>
                            <input type="name" class="form-control" id="name" aria-describedby="name" name="WA/TELEPON">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Alamat</label>
                            <input type="name" class="form-control" id="name" aria-describedby="name" name="KOBONG">
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Tulis Pesanan Anda</label>
                            <textarea class="form-control" id="pesan" rows="3" name="PESAN"></textarea>
                        </div>

                        <button type="submit" class="btn btn-danger btn-kirim">KIRIM</button>

                        <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            Loading...
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="pink" fill-opacity="1"
                d="M0,224L48,229.3C96,235,192,245,288,218.7C384,192,480,128,576,90.7C672,53,768,43,864,37.3C960,32,1056,32,1152,53.3C1248,75,1344,117,1392,138.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>


    </section>

    <!-- AKHIR KONTAK -->

    <!-- footer -->
    <footer class="text-center p-5" style="background-color: pink; color: black;">
        <p>Created this web <i class="bi bi-emoji-sunglasses"></i> by : <a
                href="https://www.facebook.com/anas.aiman.12576" style="color: black;" class="fw-bold">KELOMPOK
                7</a></p>
    </footer>


    <!-- akhir footer -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>



    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbye6z0sg0LCONSRZvN1a5KgQY0wEYK4cFdn2c5ez4TxPTuHwLpinla3EnDaUV_E4EJv/exec'
        const form = document.forms['kontak-cv.aswa anugrah']
        const btnkirim = document.querySelector('.btn-kirim')
        const btnloading = document.querySelector('.btn-loading')
        const myalert = document.querySelector('.my-alert')

        form.addEventListener('submit', e => {
            e.preventDefault()
            // ketika submit di klik
            // tampilkan tombol loading dan hilangkan tombol kirim
            btnloading.classList.toggle('d-none');
            btnkirim.classList.toggle('d-none');

            fetch(scriptURL, { method: 'POST', body: new FormData(form) })
                .then(response => {
                    // ketika submit di klik
                    // tampilkan tombol kirim dan hilangkan tombol loading

                    btnloading.classList.toggle('d-none');
                    btnkirim.classList.toggle('d-none');

                    // tombol alert
                    myalert.classList.toggle('d-none');
                    // reset form
                    form.reset();

                    console.log('Success!', response)

                })
                .catch(error => console.error('Error!', error.message))
        })
    </script>

</body>

</html>