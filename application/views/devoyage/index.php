<div class="container-fluid">

    <nav class="navbar fixed-top navbar-expand-lg bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?php echo base_url('assets/img/logo/logo.jpg') ?>" alt="" class="rounded-circle nav-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#promo">Promo</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Package
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Gathering</a></li>
                            <li><a class="dropdown-item" href="#">Prewedding</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Shooting</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Feature
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Services</a></li>
                            <li><a class="dropdown-item" href="#">Facilities</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Testimonials</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#deresto">Deresto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</div>

<section id="home">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <span class="logo-text">
                    New Atmosphere Holidays
                </span>
                <h1 class="text-light display-4">Devoyage Bogor</h1>
                <p class="text-light">Holidays, Selfie & Foodies</p>
                <a href="#" class="btn btn-brand">Get Promo</a>
            </div>
        </div>
    </div>
</section>

<section id="clients" class="bg-light">
    <div class="container">
        <div class="row gy-4">

            <div class="col-12 section-intro">
                <h1>Hot Promo</h1>
                <div class="line-intro"></div>
            </div>

            <div class="row gy-3">
                <?php foreach ($hotspromo as $promo) : ?>
                    <div class="col-lg-6">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="<?= base_url('assets/img/uploaded/promo/') . $promo['poto']; ?>" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $promo['title']; ?></h5>
                                        <p class="card-text"><?php echo $promo['paragraph']; ?></p>
                                        <p class="card-text"><small class="text-muted"><?php echo $promo['caption']; ?></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="card text-center" style="width: 18rem;">
                            <img src="" class="card-img-top" alt="hotspromo">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="card-text"></p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"></li>
                                <li class="list-group-item">Periode : <?php echo $promo['periode']; ?></li>
                            </ul>
                            <div class="card-body">
                                <?php $now = $promo['date'];
                                $date = date("d M Y", $now); ?>
                                <small class="text-secondary text-decoration-underline">
                                    Updated : <?= $date; ?>
                                </small>
                            </div>
                        </div> -->
                    </div>
                <?php endforeach; ?>
            </div>


        </div>
    </div>
</section>

<section id="promo" class="row g-0">

    <div class="col-12 section-intro">
        <h1>Hot Packages</h1>
        <div class="line-intro"></div>
    </div>

    <?php foreach ($packages as $ps) : ?>
        <div class="col-lg-4 col-sm-6">
            <div class="promo-item">

                <img src="<?php echo base_url('assets/img/uploaded/packages/' . $ps->img_package); ?>" alt="img-promo">
                <div class="promo-overlay">
                    <div>
                        <h3><?= $ps->title_package; ?></h3>
                        <h6><?= $ps->caption_package; ?></h6>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</section>

<section id="package" class="row g-0 py-0 text-center">
    <div class="col-12 section-intro">
        <h1>great gallery</h1>
        <div class="line-intro"></div>
    </div>

    <div class="col-lg-3 col-sm-6 great-package">
        <div class="package-collection-img">
            <img src="<?php echo base_url('assets/img/packages/IMG_5562-min.jpg'); ?>" alt="">
            <div class="social-icons">
                <a href="#">
                    <i class='bx bxl-facebook'></i>
                </a>
                <a href="#">
                    <i class='bx bxl-twitter'></i>
                </a>
                <a href="#">
                    <i class='bx bxl-instagram'></i>
                </a>
                <a href="#">
                    <i class='bx bxl-youtube'></i>
                </a>
            </div>
        </div>
        <div class="p-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <h5 class="title-sm mt-3 mb-0 text-white">Wahana Gondola</h5>
            <small class="text-white">Poto Terbaik di Devoyage Bogor</small>
            <div class="line-intro"></div>
            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga iure quaerat asperiores beatae quibusdam provident!</p>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 great-package even">
        <div class="package-collection-img">
            <img src="<?php echo base_url('assets/img/packages/IMG_9045-min.jpg'); ?>" alt="">
            <div class="social-icons">
                <a href="#">
                    <i class='bx bxl-facebook'></i>
                </a>
                <a href="#">
                    <i class='bx bxl-twitter'></i>
                </a>
                <a href="#">
                    <i class='bx bxl-instagram'></i>
                </a>
                <a href="#">
                    <i class='bx bxl-youtube'></i>
                </a>
            </div>
        </div>
        <div class="p-4" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
            <h5 class="title-sm mt-3 mb-0 text-white">Cannoe Boat</h5>
            <small class="text-white">Poto Terbaik di Devoyage Bogor</small>
            <div class="line-intro"></div>
            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga iure quaerat asperiores beatae quibusdam provident!</p>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 great-package">
        <div class="package-collection-img">
            <img src="<?php echo base_url('assets/img/packages/IMG_4798-min.jpg'); ?>" alt="">
            <div class="social-icons">
                <a href="#">
                    <i class='bx bxl-facebook'></i>
                </a>
                <a href="#">
                    <i class='bx bxl-twitter'></i>
                </a>
                <a href="#">
                    <i class='bx bxl-instagram'></i>
                </a>
                <a href="#">
                    <i class='bx bxl-youtube'></i>
                </a>
            </div>
        </div>
        <div class="p-4" data-bs-toggle="modal" data-bs-target="#exampleModal2">
            <h5 class="title-sm mt-3 mb-0 text-white">Costume Section</h5>
            <small class="text-white">Poto Terbaik di Devoyage Bogor</small>
            <div class="line-intro"></div>
            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga iure quaerat asperiores beatae quibusdam provident!</p>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 great-package even">
        <div class="package-collection-img">
            <img src="<?php echo base_url('assets/img/packages/IMG_0692-min.jpg'); ?>" alt="">
            <div class="social-icons">
                <a href="#">
                    <i class='bx bxl-facebook'></i>
                </a>
                <a href="#">
                    <i class='bx bxl-twitter'></i>
                </a>
                <a href="#">
                    <i class='bx bxl-instagram'></i>
                </a>
                <a href="#">
                    <i class='bx bxl-youtube'></i>
                </a>
            </div>
        </div>
        <div class="p-4" data-bs-toggle="modal" data-bs-target="#exampleModal3">
            <h5 class="title-sm mt-3 mb-0 text-white">Robin Hood</h5>
            <small class="text-white">Poto Terbaik di Devoyage Bogor</small>
            <div class="line-intro"></div>
            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga iure quaerat asperiores beatae quibusdam provident!</p>
        </div>
    </div>
</section>

<section id="fasilitas">
    <div class="container">

        <div class="row">
            <div class="col-12 section-intro">
                <h1>Facilities</h1>
                <div class="line-intro"></div>
            </div>
        </div>

        <div class="row gy-lg-4 gy-sm-2">

            <div class="col-lg-4 col-sm-6 package d-flex">
                <div class="icon-box me-3">
                    <i class='bx bxs-sun'></i>
                </div>
                <div>
                    <h5 class="title-sm">Mousque</h5>
                    <p>Menyediakan Fasilitas Mushola</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 package d-flex">
                <div class="icon-box me-3">
                    <i class='bx bx-water'></i>
                </div>
                <div>
                    <h5 class="title-sm">Toilet</h5>
                    <p>Tersedia Toilet</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 package d-flex">
                <div class="icon-box me-3">
                    <i class='bx bx-accessibility'></i>
                </div>
                <div>
                    <h5 class="title-sm">Wheel Chair</h5>
                    <p>Menyediakan Kursi Roda</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 package d-flex">
                <div class="icon-box me-3">
                    <i class='bx bxs-camera-movie'></i>
                </div>
                <div>
                    <h5 class="title-sm">Shooting Place</h5>
                    <p>Menyediakan Fasilitas untuk Shooting</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 package d-flex">
                <div class="icon-box me-3">
                    <i class='bx bxs-cheese'></i>
                </div>
                <div>
                    <h5 class="title-sm">Rest Area</h5>
                    <p>Menyediakan Tempat Untuk Istirahat yang nyaman, serta spot photo yang menarik</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 package d-flex">
                <div class="icon-box me-3">
                    <i class='bx bx-bowl-hot'></i>
                </div>
                <div>
                    <h5 class="title-sm">Food</h5>
                    <p>Deresto Coffee & Kitchen <a href="#" class="text-decoration-none btn ">Get Promo</a></p>
                </div>
            </div>

        </div>

    </div>
</section>

<section id="services">
    <div class="container">

        <div class="row">
            <div class="col-12 section-intro">
                <h1>Our services</h1>
                <div class="line-intro"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-6 p-lg-4 p-md-4 p-sm-2">
                <div class="icon-box">
                    <i class='bx bxs-hard-hat'></i>
                </div>
                <h4 class="title-sm mt-lg-4 mt-sm-2">Membership</h4>
                <p><strong>Membership</strong> Pengunjung mendapatkan potongan harga tikcet sebesar 10% untuk pembelian tiket berikutnya.</p>
            </div>
            <div class="col-lg-4 col-sm-6 p-lg-4 p-md-4 p-sm-2">
                <div class="icon-box">
                    <i class='bx bx-bowl-hot'></i>
                </div>
                <h4 class="title-sm mt-lg-4 mt-sm-2">Photo Costume</h4>
                <p><strong>Photo Costume</strong> Pengunjung mendapatkan 5 Photo Print Gratis setiap kali memasuki dan melakukan photo Costume.</p>
            </div>
            <div class="col-lg-4 col-sm-6 p-lg-4 p-md-4 p-sm-2">
                <div class="icon-box">
                    <i class='bx bxs-castle'></i>
                </div>
                <h4 class="title-sm mt-lg-4 mt-sm-2">Cashback</h4>
                <p><strong>Cashback</strong> Pengunjung mendapatkan potongan harga sebesar 15% Setiap Bulan Desember.</p>
            </div>
            <div class="col-lg-4 col-sm-6 p-lg-4 p-md-4 p-sm-2">
                <div class="icon-box">
                    <i class='bx bx-popsicle'></i>
                </div>
                <h4 class="title-sm mt-lg-4 mt-sm-2">Merchandaise</h4>
                <p><strong>Merchandaise</strong> Pengunjung mendapatkan 1 Merchandaise Gratis ketika masuk Devoyage Bogor</p>
            </div>
            <div class="col-lg-4 col-sm-6 p-lg-4 p-md-4 p-sm-2">
                <div class="icon-box">
                    <i class='bx bxl-netlify'></i>
                </div>
                <h4 class="title-sm mt-lg-4 mt-sm-2">Free Print 1 Photo</h4>
                <p><strong>Free Print 1 Photo</strong> Pengunjung mendapatkan 1 Print Photo Terbaik</p>
            </div>
            <div class="col-lg-4 col-sm-6 p-lg-4 p-md-4 p-sm-2">
                <div class="icon-box">
                    <i class='bx bxl-trip-advisor'></i>
                </div>
                <h4 class="title-sm mt-lg-4 mt-sm-2">Selalu ada Promo tiap Bulan</h4>
                <p><strong>Selalu ada Promo tiap Bulan</strong> Kami memberikan promo Aniversary dengan potongan harga tiket sebesar 25% untuk per group terdiri dari 10 orang.</p>
            </div>
        </div>

    </div>
</section>

<section id="cta" class="py-lg-5 py-sm-4 text-center">
    <div class="container py-lg-4 py-sm-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h5>Vibes dengan Nuansa Coffee anti Mainstream</h5>
            </div>
            <div class="col-lg-6">
                <a href="#" class="btn text-bg-light">Deresto Coffee & Kitchen</a>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row gy-5">
                <div class="col-md-4">
                    <h4 class="logo-text text-dark fw-bold fs-3">Devoyage Bogor</h4>
                    <p class=""> Jl. Bogor Nirwana Residence Jl. Indigo Raya, Mulyaharja, Kec. Bogor Sel., Kota Bogor, Jawa Barat 16135</p>
                    <div class="social-icons">
                        <a href="#" class="text-decoration-none">
                            <i class='bx bxl-facebook'></i>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <i class='bx bxl-twitter'></i>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <i class='bx bxl-instagram'></i>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <i class='bx bxl-youtube'></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-2">
                    <h5 class="title-sm">Navigation</h5>
                    <div class="footer-links">
                        <a href="#" class="">Services</a>
                        <a href="#" class="">Facilitis</a>
                        <a href="#" class="">Promo</a>
                        <a href="#" class="">Package</a>
                        <a href="#" class="">Tickets</a>
                        <a href="#" class="">Photo</a>
                    </div>
                </div>
                <div class="col-md-2">
                    <h5 class="title-sm">More</h5>
                    <div class="footer-links">
                        <a href="#" class="">FAQ's</a>
                        <a href="#" class="">API</a>
                        <a href="#" class="">CS</a>
                        <a href="#" class="">Order</a>
                        <a href="#" class="">Prewedding</a>
                        <a href="#" class="">Study Tour</a>
                    </div>
                </div>
                <div class="col-md-2">
                    <h5 class="title-sm">Deresto</h5>
                    <div class="footer-links">
                        <a href="#" class="">Promo</a>
                        <a href="#" class="">Package</a>
                        <a href="#" class="">Gathering</a>
                        <a href="#" class="">On Take Away</a>
                        <a href="#" class="">CS</a>
                        <a href="#" class="">Shooting</a>
                    </div>
                </div>
                <div class="col-md-2">
                    <h5 class="title-sm">Contact</h5>
                    <div class="footer-links">
                        <a href="#" class="">08121312412</a>
                        <a href="#" class="">0251 111 092</a>
                        <a href="#" class="">devoaygebogor@gmail.com</a>
                        <a href="#" class="">deresto@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row justify-content-lg-between gy-3">
                <div class="col-md-6">
                    <?php $now = time();
                    $date = date("Y", $now); ?>
                    <p class="mb-0">Devoyage Bogor - Deresto Coffee & Kitchen <?php echo $date; ?></p>
                </div>
                <div class="col-auto">
                    <p class="mb-0">Created By 😎 Marcomm - Fuad J Dzakwan</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Modal0 -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl .modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Wahana Gondola</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="<?php echo base_url('assets/img/packages/IMG_5562-min.jpg'); ?>" alt="" class="img-thumbnail">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-brand" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal1 -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl .modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal1Label">cannoe boat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="<?php echo base_url('assets/img/packages/IMG_9045-min.jpg'); ?>" alt="" class="img-thumbnail">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-brand" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal2 -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-xl .modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal2Label">custume section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="<?php echo base_url('assets/img/packages/IMG_4798-min.jpg'); ?>" alt="" class="img-thumbnail">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-brand" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal3 -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModal3Label" aria-hidden="true">
    <div class="modal-dialog modal-xl .modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal3Label">Robin Hood<d /h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="<?php echo base_url('assets/img/packages/IMG_0692-min.jpg'); ?>" alt="" class="img-thumbnail">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-brand" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>