<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISHEC</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Pendaftaran Pasien</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Artikel Kesehatan</a></li>
                        <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To ISHEC!</div>
                <div class="masthead-heading text-uppercase">INDONESIA HEALTH CARE</div>
                <div class="col-md-6 offset-md-3">
                <input class="form-control me-2 p-3" type="search" placeholder="Search" aria-label="Search" style="border-radius: 30px">
                <button class="btn mt-3 btn-yellow" style="font-family: Arial, Helvetica, sans-serif" type="submit">Search</button>
</div>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Pendaftaran Pasien</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <form action="">
                <div class="row">
                    <div class="col-md-5">
                        <label for="inputDate" class="form-label"style="font-family: Verdana, Geneva, Tahoma, sans-serif">DATE</label>
                        <div class="col-sm-15">
                          <input type="date" class="form-control"style="border-radius: 30px">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <span class="form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif">POLI KLINIK</span>
                            <select class="form-control" style="border-radius: 30px">
                                <option>Umum</option>
                                <option>Gigi</option>
                                <option>KIA</option>
                                <option>Lansia</option>
                                <option>Psikologi</option>
                                <option>Gizi</option>
                                <option>Batra</option>
                                <option>Anak</option>
                            </select>
                            <span class="select-arrow"></span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-btn">
                            <button class="submit-btn btn btn-warning mt-4" type="submit">Cari</button>
                        </div>
                    </div>
                </div>
                </form>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Artikel Kesehatan</h2>
                    <h3 class="section-subheading text-muted">Artikel Terpopuler</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/a1.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Dampak Self-Diagnose Terhadap Kesehatan Mental</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/a2.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">5 Perilaku Hidup Bersih dan Sehat yang Mudah Dilakukan</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/a3.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Vaksinasi di Bulan Ramdhan? Batalkah Puasa?</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/a4.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Ibu, Ini Penyebab Umum Muntaber pada Anak</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/a5.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Lebih Baik Makan Sebelum Olahraga atau Sesudah?</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/a6.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">17 Makanan untuk Radang Tenggorokan yang Direkomendasikan</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Dampak Self-Diagnose Terhadap Kesehatan Mental</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/a1.jpg" alt="..." />
                                    <p>Self-diagnosis adalah asumsi yang menyatakan bahwa seseorang terkena suatu penyakit berdasarkan pengetahuannya sendiri. Self-diagnosis sangat membahayakan kesehatan seseorang apabila.......</p>
                                    <ul class="list-inline">
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class=""></i>
                                        Baca
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">5 Perilaku Hidup Bersih dan Sehat yang Mudah Dilakukan</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/a2.jpg" alt="..." />
                                    <p>Dalam keseharian, kita mungkin belum menerapkan sepenuhnya perilaku hidup bersih dan sehat. Padahal praktiknya cukup sederhana dan dapat menjadi kebiasaan jika dilakukan terus-menerus. Setiap orang perlu menyadari perilaku ini sangat penting untuk menciptakan lingkungan yang sehat. Perilaku hidup bersih dan sehat (PHBS) adalah.....</p>
                                    <ul class="list-inline">
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class=""></i>
                                        Baca
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Vaksinasi di Bulan Ramdhan? Batalkah Puasa?</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/a3.jpg" alt="..." />
                                    <p>Pemerintah telah memberi lampu hijau untuk kita semua yang ingin melaksanakan Hari Raya Idul Fitri 2022 bersama keluarga di kampung halaman. Tetapi, ada syarat yang harus kita lakukan, agar mudik sebelum kita mudik, yaitu  melaksanakan vaksinasi Covid-19 dosis booster. Lalu jika ingin melakukan vaksinasi ditengah bulan ramadhan apakah diperbolehkan? Apakah melakukan vaksinasi ditengah bulan puasa akan membatalkan puasa kita juga? Mari simak penjelasan dibawah ini...</p>
                                    <ul class="list-inline">
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class=""></i>
                                        Baca
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Ibu, Ini Penyebab Umum Muntaber pada Anak</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/a4.jpg" alt="..." />
                                    <p>Ibu, sebaiknya pastikan anak selalu mengonsumsi makanan dan minuman yang bersih. Ada berbagai penyakit yang dapat menular dari asupan makanan yang terpapar virus, bakteri, atau kuman, salah satunya muntaber. Jika tidak diatasi dengan baik, muntaber pada anak dapat menyebabkan anak mengalami.....</p>
                                    <ul class="list-inline">
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class=""></i>
                                        Baca
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Lebih Baik Makan Sebelum Olahraga atau Sesudah?</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/a5.jpg" alt="..." />
                                    <p>Nutrisi dan olahraga adalah dua hal yang saling berkaitan. Namun, masih banyak orang yang bingung, mana yang tepat: makan sebelum olahraga atau sesudah? Dilema mengenai hal ini umum terjadi, tapi yang paling penting diperhitungkan adalah....</p>
                                    <ul class="list-inline">
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class=""></i>
                                        Baca
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">17 Makanan untuk Radang Tenggorokan yang Direkomendasikan</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/a6.jpg" alt="..." />
                                    <p>Meski gejala radang tenggorokan dapat sembuh sendiri, kondisi ini sering kali membuat penderitanya kesulitan menelan sehingga tidak nafsu makan. Namun, ada beberapa jenis makanan untuk radang tenggorokan yang bisa dikonsumsi dengan nyaman.....</p>
                                    <ul class="list-inline">
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class=""></i>
                                        Baca
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>