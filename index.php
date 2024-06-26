<?php
include "database.php";
simpanData($_POST);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=3.0">
    <title>Relingga Aditya</title>
    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="bootstrap-icons-1.10.5/bootstrap-icons-1.10.5/font/bootstrap-icons.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- my css -->
    <link rel="stylesheet" href="assets/style.css" />
    <!-- fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@1,900&display=swap" rel="stylesheet">

<body>
    <div class="blue">
        <!-- NAVBAR  -->
        <nav class="navbar navbar-expand-lg fixed-top">

            <div class="container-fluid">
                <a class="navbar-brand " href="admin.php">Relingga Aditya</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link pe-4" href="#home">Home</a>
                        <a class="nav-link pe-4" href="#about">About Me</a>
                        <a class="nav-link pe-4" href="#project">Project</a>
                        <a class="nav-link pe-4" href="#contact">Contact</a>
                        <div class="dropdown d-block d-xl-none" data-bs-theme="light">
                            <button class="login dropdown-toggle" type="button" id="dropdownMenuButtonLight"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Theme
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonLight">
                                <li><a class="dropdown-item lm" id="lightmode" href="#"><i
                                            class="bi bi-lightbulb-fill"></i> Light Mode</a></li>
                                <li><a class="dropdown-item dm" id="darkmode" href="#"><i
                                            class="bi bi-moon-stars-fill"></i> Dark Mode</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="dropdown d-none d-xl-flex" data-bs-theme="light">
                    <button class="login dropdown-toggle" type="button" id="dropdownMenuButtonLight"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Theme
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonLight">
                        <li><a class="dropdown-item lm" id="lightmode" href="#"><i class="bi bi-lightbulb-fill"></i>
                                Light Mode</a></li>
                        <li><a class="dropdown-item dm" id="darkmode" href="#"><i class="bi bi-moon-stars-fill"></i>
                                Dark Mode</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- NAVBAR END -->
    <!-- HOME  -->
    <section id="home">
        <div class="container-fluid pt-5 pt-xl-5">
            <div class="row d-flex justify-content-center  align-items-center pt-5  ps-4 ps-xl-5">
                <div class="d-md-block d-lg-flex justify-content-center align-items-center col-xxl-8  padhome">
                    <div class="text-white">
                        <h1>Selamat Datang Di Website</h1>
                        <h1>Relingga Aditya</h1>
                        <p class="pt-3 pt-xl-0">Jadi ini adalah website yang membahas portofolio saya,jadi saya ucapkan
                            selamat datang di website ini.dan ini adalah website portofolio pertama yang saya buat.</p>
                        <p id="p2" hidden>jadi saya sekarang lagi belajar web development,teknologi yang saya pake di
                            website ini hanyalah sederhana yaitu html css js bootstrap5 beserta library aos (animate on
                            scroll) dan getwaves.io</p>


                        <a href="#" id="buttonhome" type="button" class="btn btn-lg buttonhome">Lihat Lebih Lanjut</a>
                    </div>
                    <div class="	d-none d-sm-flex d-flex justify-content-center ps-5 ">
                        <div class="img-fluid">
                            <img class=" col-xxl-4

                    " id="gambarhome" src="assets/img/lompat2.png" alt="">

                        </div>

                    </div>


                </div>

            </div>
            <div class="	d-flex d-sm-none justify-content-center">
                <div class="img-fluid">
                    <img class=" col-8 ps-3 ps-xl-5

                " id="gambarhomemobile" src="assets/img/lompat2.png" alt="">


                </div>


            </div>



        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#f5faff" fill-opacity="1"
                d="M0,128L48,144C96,160,192,192,288,181.3C384,171,480,117,576,128C672,139,768,213,864,224C960,235,1056,181,1152,154.7C1248,128,1344,128,1392,128L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>




    </section>

    <!-- HOME END -->

    <!-- ABOUT ME -->
    <section class="container-fluid pt-2" id="about">

        <div class="   d-flex-xl  justify-content-xl-center  align-items-center padaboutmobile pt-5">
            <div class="	 d-sm-flex justify-content-center justify-content-xl-start ps-5 ">

                <div class="img-fluid">

                    <img class=" col-xxl-4 d-none   d-xl-flex

            " id="gambarhome" src="assets/img/fotoabout.png" alt="">


                </div>
                <div class="d-flex justify-content-center pe-xl-5 ">
                    <div class="pe-4">

                        <h1 data-aos="fade-down" data-aos-offset="400" data-aos-duration="1000"
                            class=" text-center text-xl-start pe-5">Tentang Saya</h1>
                        <p data-aos="fade-left" data-aos-offset="400" data-aos-duration="1000"
                            class=" pe-5 d-none d-xl-flex text-center  text-xl-start pe-xxl-0">Halo Semua!Perkenal kan
                            saya Relingga Aditya, Saya seorang calon mahasiswa,selamat datang di website saya yang
                            sangat sederhana ini. ini adalah website portofolio yang pertama kali saya buat hanya dengan
                            html,css,bootstrap</p>
                        <p data-aos="fade-left" data-aos-offset="400" data-aos-duration="1000"
                            class=" pe-5 d-flex d-xl-none text-center overflow-visible pe-xxl-0">Halo Semua!Perkenal kan
                            saya Relingga Aditya, Saya seorang calon mahasiswa </p>
                        <h1 data-aos="fade-right" data-aos-offset="400" data-aos-duration="1000"
                            class="pe-5  text-center d-block d-xl-none pe-xxl-0">Selamat Datang</h1>
                        <p data-aos="fade-right" data-aos-offset="400" data-aos-duration="1000"
                            class="pe-5   d-flex d-xl-none text-center  pex-xl-0">di website saya yang sangat sederhana
                            ini. ini adalah website portofolio yang pertama kali saya buat.</p>
                        <div class="text-start text-lg-center">
                            <h1 data-aos="fade-left" data-aos-offset="400" data-aos-duration="1000"
                                class="text-center pe-5">Skill Yang Saya Kuasai</h1>
                            <div class=" d-flex justify-content-center img-fluid pe-5 pt-5 p-sm-5 pe-4  pe-4 ">

                                <img class=" col-4 pe-2" data-aos="fade-right" data-aos-offset="400"
                                    data-aos-duration="1000" id="gambarabout" src="assets/img/html5.png" alt="">
                                <img class=" col-4 pe-2" data-aos="fade-right" data-aos-offset="400"
                                    data-aos-duration="1000" id="gambarabout" src="assets/img/css3.png" alt="">
                                <img class="col-4 pe-2" data-aos="fade-left" data-aos-offset="400"
                                    data-aos-duration="1000" id="gambarabout" src="assets/img/logojs.png" alt="">
                                <img class="d-none d-xl-flex col-4" data-aos="fade-left" data-aos-offset="400"
                                    data-aos-duration="1000" id="gambarabout" src="assets/img/bootstrap5.png" alt="">
                                <img class="d-none d-xl-flex col-4 pe-2" data-aos="fade-left" data-aos-offset="400"
                                    data-aos-duration="1000" id="gambarabout1" src="assets/img/mikrotik.png" alt="">



                            </div>
                            <div class="img-fluid d-flex justify-content-center">
                                <img class="d-xl-none d-flex d-sm-none col-6 pe-4 img-fluid" data-aos="fade-right"
                                    data-aos-offset="400" data-aos-duration="1000" id="gambarabout1"
                                    src="assets/img/mikrotik.png" alt="">
                                <img class="col-6 d-xl-none d-flex pe-4" data-aos="fade-left" data-aos-offset="400"
                                    data-aos-duration="1000" id="gambarabout" src="assets/img/bootstrap5.png" alt="">
                            </div>
                            <div class="img-fluid">

                                <img class=" col-xxl-4 d-none d-xl-none  d-lg-flex justify-content-center ps-5
          
                      " id="gambarhome" src="assets/img/fotoabout.png" alt="">


                            </div>











                        </div>


                    </div>
                </div>


            </div>


        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffff" fill-opacity="1"
                d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffff" fill-opacity="1" d="M0,160L48,149.3C96,139,192,117,288,106.7C384,96,480,96,576,122.7C672,149,768,203,864,202.7C960,203,1056,149,1152,128C1248,107,1344,117,1392,122.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
      </svg> -->


    </section>
    <!-- end about -->
    <section class="container-fluid pt-5" id="project">
        <div class="row d-flex align-content-center justify-content-center">
            <div class="ps-4 pb-5">
                <h1 data-aos="fade-down" data-aos-offset="400" data-aos-duration="1000" class="text-center">My Project
                </h1>
            </div>
            <div class="isiproject"></div>
            <div class="col-10 col-md-4 mb-3 project">
                <div class="card" data-aos="fade-right" data-aos-offset="500" data-aos-duration="1000">
                    <img src="assets/img/project/project1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Website Coffe Shop</h5>
                        <p class="card-text">Ini adalah website tentang coffe shop, dan saya buat menggunakan html css
                            bootstrap5</p>
                        <a href="https://relinggaa.github.io/websitecoffeshop/" target="_blank"
                            class="btn btn buttonproject">Lihat Project</a>
                    </div>
                </div>
            </div>
            <div class=" col-10  col-md-4 mb-3  project" data-aos="fade-up" data-aos-offset="500"
                data-aos-duration="1000">
                <div class="card">
                    <img src="assets/img/project/project2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Website Portofolio</h5>
                        <p class="card-text">Ini adalah website yang membahas informasi saya pribadi.di buat dengan html
                            css bootstrap</p>
                        <a href="index.html" class="btn btn buttonproject">Lihat Project</a>
                    </div>
                </div>
            </div>
            <div class="col-10 col-md-4 mb-3 project " data-aos="fade-right" data-aos-offset="500"
                data-aos-duration="1000">
                <div class="card">
                    <img src="assets/img/project/banyuwangiwonderful.png" class="card-img-top bwi" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Banyuwangi wonderfull</h5>
                        <p class="card-text">Ini adalah website yang berisi menceritakan ke indahan pesona alam
                            banyuwangi jawa timur</p>
                        <a href="https://relinggaa.github.io/banyuwangiwonderful/index.html" target="_blank"
                            class="btn btn buttonproject">Lihat Project</a>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#f5faff" fill-opacity="1"
                d="M0,160L48,170.7C96,181,192,203,288,197.3C384,192,480,160,576,138.7C672,117,768,107,864,117.3C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- end project -->
    <!-- contact -->

    <section id="contact">
        <div class="container-fluid pt-5">
            <div class="row d-flex justify-content-center ">
                <h1 class="text-center ">Contact Me</h1>
                <div class="col-10 col-xl-6">
                    <form action="" method="post">

                        <?php if ($pesan=="Pesan berhasil di kirim"){ ?>
                        <div id="alert" class="alert alert-success" role="alert">
                            <?php echo $pesan ?>
                        </div>
                        <?php } ?>
                        <?php if ($pesan=="Pesan gagal di kirim"){ ?>
                        <div id="alert" class="alert alert-danger" role="alert">
                            <?php echo $pesan ?>
                        </div>
                        <?php } ?>







                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama-lengkap" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                            <textarea class="form-control" name="pesan" rows="3"></textarea>
                        </div>


                        <button type="submit" class="buttonlight" id="buttoncontact" name="button">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#007aff" fill-opacity="1"
                d="M0,128L48,144C96,160,192,192,288,181.3C384,171,480,117,576,128C672,139,768,213,864,224C960,235,1056,181,1152,154.7C1248,128,1344,128,1392,128L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>

    </section>
    <!-- end contact -->




    <!-- footer -->


    <footer id="footer" class="container-fluid  ">

        <!-- mobile -->
        <div class="row justify-content-center d-flex ">
            <div class="d-flex justify-content-center">
                <h1 class="text-center">Social Media</h1>
            </div>
            <div class="d-xl-none col-12 d-flex justify-content-center">
                <div class="  d-flex justify-content-center">
                    <a href="https://www.instagram.com/relinggaa/" target="_blank">
                        <img class="img-fluid gambarfooter " src="assets/img/footer/instagram.webp" alt="">
                    </a>
                    <!-- <p class="pt-3 pe-4">relinggaa</p> -->
                    <a href="https://www.facebook.com/relingga.aditya.1/" target="_blank">
                        <img class="img-fluid gambarfooter" src="assets/img/footer/Facebook.webp" alt="">
                    </a>
                    <!-- <p class="pt-3 pe-4">Relingga Gak Jelas</p> -->
                </div>
                <div class=" d-flex justify-content-center">
                    <a href="https://www.youtube.com/channel/UCXwgEFn6bjAMFx0CKUG1_vw" target="_blank">
                        <img class="img-fluid gambarfooter" src="assets/img/footer/youtube.png  " alt="">
                    </a>
                    <!-- <p class="pt-3 pe-4">Relinggaa Aditya</p> -->
                    <a href="https://www.instagram.com/relinggaa/" target="_blank">
                        <img class="img-fluid gambarfooter" src="assets/img/footer/tiktok.webp" alt="">
                    </a>
                    <!-- <p class="pt-3 pe-4">relinggaa</p> -->
                </div>

                <div class="  d-flex justify-content-center">
                    <a href="https://twitter.com/linglinglingga" target="_blank">
                        <img class="img-fluid gambarfooter" src="assets/img/footer/twitter.png  " alt="">
                    </a>
                    <!-- <p class="pt-3 pe-4">relinggaa</p> -->
                </div>
            </div>
            <!-- PC -->

            <div class="d-none d-xl-flex justify-content-center align-items-center">
                <div class="d-flex  justify-content-center align-items-center col-10 pe-4">
                    <a href="https://www.instagram.com/relinggaa/" target="_blank">
                        <img class="img-fluid gambarfooter" src="assets/img/footer/instagram.webp " alt="">
                    </a>
                    <div class="d-flex align-items-center">
                        <p class="pt-3 pe-4">relinggaa</p>
                    </div>
                    <a href="https://www.facebook.com/relingga.aditya.1/" target="_blank">
                        <img class="img-fluid gambarfooter" src="assets/img/footer/Facebook.webp " alt="">
                    </a>
                    <div class="d-flex align-items-center">
                        <p class="pt-3 pe-4">Relingga Gak Jelas</p>
                    </div>
                    <a href="https://www.youtube.com/channel/UCXwgEFn6bjAMFx0CKUG1_vw" target="_blank">
                        <img class="img-fluid gambarfooter" src="assets/img/footer/youtube.png " alt="">
                    </a>
                    <div class="d-flex align-items-center">
                        <p class="pt-3 pe-4">Relingga Aditya</p>
                    </div>
                    <a href="https://www.tiktok.com/@relinggaaa" target="_blank">
                        <img class="img-fluid gambarfooter" src="assets/img/footer/tiktok.webp " alt="">
                    </a>
                    <div class="d-flex align-items-center">
                        <p class="pt-3 pe-4">relinggaaa</p>
                    </div>
                    <a href="https://twitter.com/linglinglingga" target="_blank">
                        <img class="img-fluid gambarfooter" src="assets/img/footer/twitter.png " alt="">
                    </a>
                    <div class="d-flex align-items-center">
                        <p class="pt-3 pe-4">linglinglingga</p>
                    </div>
                </div>
            </div>
        </div>
        <figcaption class="footer text-white pb-5 d-flex justify-content-center pt-5 ">
            &copy;<cite title="Source Title">Relingga Aditya 2023</cite>
        </figcaption>


    </footer>












    <!-- <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://code.jquery.com/jquery-3.6.3.js"
      integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
      crossorigin="anonymous"
    ></script> -->
    <script src="bootstrap5/js/bootstrap.bundle.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
        once: true,
    });
    </script>
    <script src="script.js"></script>
</body>

</html>