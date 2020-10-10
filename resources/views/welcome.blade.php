  
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SANEDU | Legacy Project</title>
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon.png') }}">
        <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->

        <link href="{{ asset('css/landingpage/styles.css') }}" rel="stylesheet">

        <!-- Favicons -->

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <link href="{{ asset('css/landingpage/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="{{ asset('css/landingpage/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/landingpage/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/landingpage/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/landingpage/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/landingpage/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="{{ asset('css/landingpage/style.css') }}" rel="stylesheet">



        <!-- Styles -->
        <style>
        /*--------------------------------------------------------------
# Intro Section
--------------------------------------------------------------*/

        #intro {
            width: 100%;
            height: 100vh;
            position: relative;
            background: #f5f8fd url("/sanedu/assets/img/landingpage/intro-bg2.jpg") center top no-repeat;
            background-size: cover;
        }

        #intro .intro-info h2 {
            color: #413e66;
            margin-bottom: 40px;
            font-size: 48px;
            font-weight: 700;
        }

        #intro .intro-info h2 span {
            color: #1bb1dc;
        }

        #intro .intro-info .btn-get-started,
        #intro .intro-info .btn-services {
            font-family: "Montserrat", sans-serif;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: inline-block;
            padding: 10px 32px;
            border-radius: 4px;
            transition: 0.5s;
            color: #fff;
            background: #1bb1dc;
            color: #fff;
        }

        #intro .intro-info .btn-get-started:hover,
        #intro .intro-info .btn-services:hover {
            background: #0a98c0;
        }
        
        .dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0; // remove the gap so it doesn't close
 }

    /* #logo img{




    }
 

    @media only screen and (max-width: 300px) {
        #logo img{

        
    width:150px;
    height:200px;

        
} } */

    </style>


    </head>


<!--     
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center">
            <div class="hidden fixed top-0 left-0 px-6 py-4 sm:block">
                <img src="logo.png">
            </div>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                    @endif
                </div>
            @endif
            
            <a href="{{ url('/daftar') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                Daftar Sekarang
            </a>
            &nbsp;
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                Verifikasi Pembayaran
            </button>
        </div> -->

        <header id="header">
     <div id="topbar">
         <div class="container">
             <div class="social-links">
                 <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                 <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                 <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                 <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
             </div>
         </div>
     </div>

     <div class="container">

         <div class="logo float-left">
             <!-- Uncomment below if you prefer to use an image logo -->
             <!--        <h1 class="text-light"><a href="#intro" class="scrollto"><span>SANEDU</span></a></h1>-->
             <a href="#header" class="scrollto"><img src="{{ asset('css/img/logo.png') }}" alt="" class="img-fluid" style="max-height: 100%"></a>
         </div>


 

         <nav class="main-nav float-right d-none d-lg-block">
             <ul style="list-style: none;">

             @if (Route::has('login'))
                 <li class="active"><a href="{{ url('/') }}">Home</a></li>

                 @auth
                        <li><a href="{{ url('/dashboard') }}" class="btn-get-started scrollto">Dashboard</a>  </li>
                    @else

                 <li> <a href="{{ route('login') }}" class="btn-get-started scrollto">Login</a></li>

               

                 <li> <a href="{{ url('/daftar') }}" class="btn-get-started scrollto">Daftar</a></li>
                 @endif
                 @endif

             </ul>
         </nav><!-- .main-nav -->

     </div>
 </header><!-- #header -->

    <!--==========================
    Intro Section
  ============================-->


  <section style="padding-top:120px; background-color: #006da6;" id="main" class="clearfix">

    <div class="container fluid h-100">
          <div class="row justify-content-center align-self-center">
          <div class="col-md-2 intro-info order-md-last order-first">
                <img id="logo" src="{{ asset('css/img/landingpage/Logo Legacy.png') }}"  alt="" style=" max-width:165px; max-height:220px;" class="img-fluid mx-auto d-block">
                <p style="text-align:center; color: #ffffff;" >Welcome to</p>
            </div>

            </div>
    </div>
    <div class="container fluid">
          <div class="row justify-content-center align-self-center">
          <div class="col-md-6 intro-info order-md-last order-first">
               <h2 style="text-align:center; color: #ffffff;">Legacy Project III</h2>
            </div>

            </div>
 </section>

    <section style="background-color: #006da6; padding-bottom: 80px;" id="main" class="clearfix">

        <div class="container-fluid">
            <div class="row justify-content-center align-self-center">
        
            <div class="col-md-3 intro-info order-md-last order-first">
                    <img src="{{ asset('css/img/landingpage/siswa 4.png') }}"  alt="" class="img-fluid">
                </div>

            <div class="col-md-6 mt-5 intro-info order-md-last order-first">
                    <h2  style="color: #ffffff; font-weight:600; font-size:28px; text-align: center">Program Sukses SNMPTN dan UTBK<span style="color:#f7a422;"> 2020 / 2021</span></h2>
                    <div class="row justify-content-center align-self-center">

                            <div class="col-md-3 col-lg-3 wow bounceInUp justify-content-center align-self-center" data-wow-duration="1.4s">
                                <div class="box">
                                    <div class="icon" style="width:100%;  text-align: center; display: block;" ><i class="ion-ios-people-outline" style="  color: #535353; text-align:center; background: #ffffff;  display:inline-block; border-radius: 100px; font-size: 28px; padding-left:25px; padding-right:25px; padding-top:15px; padding-bottom:15px;"></i></div>
                                    <p style=" color: #ffffff; font-size:13px; text-align:center; font-weight:600" class="title mt-4">Telah meluluskan 11.000 siswa sejak 2019</p>
                                </div>
                            </div>
                            
                            <div class="col-md-3 col-lg-3 wow bounceInUp justify-content-center align-self-center" data-wow-duration="1.4s">
                                <div class="box">
                                    <div class="icon" style="width:100%;  text-align: center; display: block;" ><i class="ion-ios-paper-outline" style="  color: #535353; text-align:center; background: #ffffff;  display:inline-block; border-radius: 100px; font-size: 28px; padding-left:25px; padding-right:25px; padding-top:15px; padding-bottom:15px;"></i></div>
                                    <p style=" color: #ffffff; font-size:13px; text-align:center; font-weight:600" class="title mt-4">Kurikulum berstandar HOTS</p>
                                </div>
                            </div>

                            <div class="col-md-3 col-lg-3 wow bounceInUp justify-content-center align-self-center" data-wow-duration="1.4s">
                                <div class="box">
                                    <div class="icon" style="width:100%;  text-align: center; display: block;" ><i class="ion-ios-analytics-outline" style="  color: #535353; text-align:center; background: #ffffff;  display:inline-block; border-radius: 100px; font-size: 28px; padding-left:25px; padding-right:25px; padding-top:15px; padding-bottom:15px;"></i></div>
                                    <p style=" color: #ffffff; font-size:13px; text-align:center; font-weight:600" class="title mt-4">Garansi uang kembali 100%</p>
                                </div>
                            </div>

                            <div class="col-md-3 col-lg-3 wow bounceInUp justify-content-center align-self-center" data-wow-duration="1.4s">
                                <div class="box">
                                    <div class="icon" style="width:100%;  text-align: center; display: block;" ><i class="ion-ios-bookmarks-outline" style="  color: #535353; text-align:center; background: #ffffff;  display:inline-block; border-radius: 100px; font-size: 28px; padding-left:25px; padding-right:25px; padding-top:15px; padding-bottom:15px;"></i></div>
                                    <p style=" color: #ffffff; font-size:13px; text-align:center; font-weight:600" class="title mt-4">Strategi sudah teruji 95% efektif</p>
                                </div>
                            </div>

                    </div>


                    <div class="row wow bounceInUp justify-content-center align-self-center mt-5">

                    <div class="col-md-5 cta-btn-container text-center mt-4">
                        <a style="font-weight: 600; border-radius:60px; padding:15px; background: #ffffff;" class="cta-btn align-middle " href="">DAFTAR SEKARANG</a>
                    </div>


                    <div class="col-md-2 cta-btn-container text-center mt-4">
                        <p style="font-weight: 600; border-radius:60px; color: #006da6;  " > - </a>
                    </div>
                    
                    

                    <div class="col-md-5 cta-btn-container text-center mt-4">
                        <a  style="font-weight: 600; border-radius:60px; padding:15px; background: #ffffff;" class="cta-btn align-middle " href="">VERIFIKASI PEMBAYARAN</a>
                    </div>

                </div>

                    <div>
                        
                        
                        
                                     </div>
                </div>

                <div class="col-md-3 intro-info order-md-last order-last">
                    <img src="{{ asset('css/img/landingpage/siswa 3.png') }}"  alt="" class="img-fluid">
                </div>
            </div>

        </div>
    </section><!-- #intro -->



         <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials">
            <div class="container">

                <header class="section-header">
                    <h3>Alumni</h3>
                </header>

                <div class="row justify-content-center">
                    <div class="col-lg-8">

                        <div class="owl-carousel testimonials-carousel wow fadeInUp">

                            <div class="testimonial-item">
                                <img src="{{ asset('css/img/landingpage/testimoni/testi1.jpg') }}"  class="testimonial-img" alt="">
                                <h3>Ubay</h3>
                                <h4>SMA ALkautsar (FKIP Biologi)</h4>
                                <p>
                                    "Sanedu itu keren tutornya asik dan aplikasinya juga responsif banget"
                                </p>
                            </div>

                            <div class="testimonial-item">
                                <img src="{{ asset('css/img/landingpage/testimoni/testi2.jpg') }}"  class="testimonial-img" alt="">
                                <h3>Eka</h3>
                                <h4>SMA 2 Bandar Lampung (Manajemen) </h4>
                                <p>
                                    "Aplikasinya membantu banget dan Sanedu Center jadi solusi untuk belajar apalagi ada jam tambahan tanpa batas"
                                </p>
                            </div>

                            <div class="testimonial-item">
                                <img src="{{ asset('css/img/landingpage/testimoni/testi3.jpg') }}"  class="testimonial-img" alt="">
                                <h3>Cik Rafa</h3>
                                <h4>SMA 1 Pringsewu (Biologi)</h4>
                                <p>
                                    Dulu males banget belajar awalnya bimbel di sanedu dipaksa ibu ternyata asik dan belajarnya gk ngebosenin"
                                </p>
                            </div>

                            <div class="testimonial-item">
                                <img src="{{ asset('css/img/landingpage/testimoni/testi4.jpg') }}"  class="testimonial-img" alt="">
                                <h3>Fika</h3>
                                <h4>SMA 1 Bandar Sribhawono (Biologi)</h4>
                                <p>
                                    suka banget belajar di sanedu, selain ada aplikasinya, tutor dan materinya mudah banget dimengerti
                                </p>
                            </div>

                            <div class="testimonial-item">
                                <img src="{{ asset('css/img/landingpage/testimoni/testi5.jpg') }}"  class="testimonial-img" alt="">
                                <h3>Widya</h3>
                                <h4>SMA 5 Bandar Lampung (Konseling) </h4>
                                <p>
                                    Sanedu itu lengkap banget ada aplikasi yang bisa bantu kita belajar dimana aja dan ada juga sanedu center yang bisa buat nanya kalau lewat aplikasi kurang paham
                                </p>
                            </div>

                            <div class="testimonial-item">
                                <img src="{{ asset('css/img/landingpage/testimoni/testi6.jpg') }}"  class="testimonial-img" alt="">
                                <h3>Azalia</h3>
                                <h4>SMA Alkautsar (Manajemen)</h4>
                                <p>
                                    Dulu sempet gagal masuk jurusan yang diimpikan, akhirnya nyoba lagi berkat bantuan sanedu bisa masuk jurusan mamajemen seperti impian
                                </p>
                            </div>

                        </div>

                    </div>
                </div>


            </div>
        </section><!-- #testimonials -->





    <main id="main">

        <!--==========================
      Why Us Section
    ============================-->
        <section id="why-us" class="wow fadeIn">

            </div> 
             <div class="container-fluid">

                <header class="section-header" style="width:60%; display:block; margin:auto; margin-bottom:90px;">
                    <h3>Perbandingan Fasilitas Legacy dengan Program Lain</h3>
                </header>

                <div class="row justify-content-md-center mt-3">

                 
                <div class="col-md-4">


                <header class="section-header" style="text-align: center;">
                    <h4>Program Legacy</h3>
                </header>





                        <div class="why-us-content" style="border: #006da6 3px solid; padding:30px; height: 500px; ">
                        <ul >
                            <li style="padding:5px; ">Analisis Kompetensi Umum</li>
                            <li style="padding:5px; ">Tes Minat Bakat</li>
                            <li style="padding:5px; ">Rasionalisasi Nilai Rapot</li>
                            <li style="padding:5px; ">9x Try Out UTBK</li>
                            <li style="padding:5px; ">Kelas Pembahasan Materi UTBK</li>
                            <li style="padding:5px; ">180 Video Pembahasan Soal</li>
                            <li style="padding:5px; ">Perencanaan Jitu SNMPTN</li>
                            <li style="padding:5px; ">Perencanaan Jitu UTBK</li>
                            <li style="padding:5px; ">Data Passing Grade</li>
                            <li style="padding:5px; ">Buku Sakti Lulus UTBK</li>
                            <li style="padding:5px; ">Analisis Berbasis Data</li>
                            <li style="padding:5px; ">Garansi Uang Kembali 100%<sup>*</sup></li>
                            </ul>
                        </div>
                    </div>

                        
                    <div class="col-md-2 mt-3">
                    <h2 style="font-weight: 600; text-align:center;">VS</h2>
                    </div>

                    <div class="col-md-4">
                            <header class="section-header" style="text-align: center;">
                            <h4>Program Lain</h3>
                        </header>
                        <div class="why-us-content" style="border: #006da6 3px solid; padding:30px;  height: 500px;">
                      
                        <ul>
                            <li style="padding:5px; ">Video Pembahasan</li>
                            <li style="padding:5px; ">Try Out </li>
                            <li style="padding:5px; ">Analisis Berbasis Asumsi</li>
                            <li style="padding:5px; ">Harga 350rb - 1.5jt</li>
                           
                            </ul>


                        </div>
                    </div>


                </div>
            </div> 
        </section>
        <!--==========================
      Services Section
    ============================-->






    <section style="background-color: #ffb218; padding-bottom: 80px;" id="main" class="clearfix">

<div class="container-fluid">
    <div class="row justify-content-center align-self-center">

    <div class="col-md-3 wow bounceInUp  intro-info order-md-last order-first">
            <img src="{{ asset('css/img/landingpage/siswa 1.png') }}"  alt="" class="img-fluid">
        </div>

    <div class="col-md-6 mt-4 wow bounceInUp  intro-info order-md-last order-first">
            <h2  class="mt-4 " style="color: #ffffff; font-weight:600; font-size:28px; text-align: center">Apakah kamu adalah salah satu dari mereka yang ingin masuk perguruan tinggi ?</h2>
            <div class="row justify-content-center align-self-center">

                <h5 class="mt-2 wow bounceInUp " style="text-align:center; padding: 30px;"> Perlu kamu tahu bahwa hanya <b>19,74%</b> siswa yang diterima <b>SNMPTN</b> dari total <b>478.608</b> pendaftar dan hanya <b>23,87%</b> siswa yang diterima <b>SBMPTN</b> dari total <b>713.230</b> pendaftar </h5>

               

                <h5 class="mt-2 wow bounceInUp " style="text-align:center; padding-left: 30px; padding-top: 10px; padding-right: 30px;"> <b>95%</b> kegagalan untuk masuk ke perguruan tinggi <b>BUKAN</b> karena ketidakmampuan siswa, melaiankan karena kesalahan strategi yang digunakan</h5>


            </div>
        </div>

      
        <div class="col-md-3 wow bounceInUp  intro-info order-md-last order-last">
            <img src="{{ asset('css/img/landingpage/siswa 2.png') }}"  alt="" class="img-fluid">
        </div>
    </div>

</div>
</section><!-- #intro -->






<section id="why-us" class="wow fadeIn  mt-2 mb-2">
           
            </div> 
             <div class="container-fluid">

                <header class="section-header" style="width:80%; display:block; margin:auto; margin-bottom:40px;">
                    <h3>Kenapa kamu harus lulus SNMPTN/SBMPTN ?</h3>
                </header>

                <div class="row justify-content-md-center">

                 
                <div class="col-md-6">


                        <div class="why-us-content" style=" padding:20px;">
                        <ul >
                            <li style="padding:5px; ">Meringankan beban orang tua</li>
                            <li style="padding:5px; ">Biaya kuliah jadi jauh lebih murah</li>
                            <li style="padding:5px; ">Tidak perlu tes berulang kali</li>
                            <li style="padding:5px; ">Peluang untuk mendapatkan beasiswa jauh lebih besar</li>
                            <li style="padding:5px; ">Membahagiakan kedua orang tua</li>
                            <li style="padding:5px; ">Peluang memilih jurusan favorit jauh lebih tinggi</li>
                            <li style="padding:5px; ">Pilihan jurusan jauh lebih banyak</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div> 
        </section>



        <!--==========================
      Call To Action Section
    ============================-->
        <section id="call-to-action" class="wow fadeInUp" style="background:#28a745">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 text-center text-lg-left">
                        <h3 class="cta-title">Hubungi Kami</h3>
                        <p class="cta-text"> Untuk informasi lebih lanjut silahkan hubungi kami melalui WhatsApp</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="https://api.whatsapp.com/send?phone=6288707024534">WhatsApp</a>
                    </div>
                </div>

            </div>
        </section><!-- #call-to-action -->


        <section style="background-color: #006da6; padding-bottom: 80px;" id="main" class="clearfix">

        <div class="container-fluid">
            <div class="row justify-content-center align-self-center">
    

            <div class="col-md-6 mt-5 intro-info order-md-last order-first">
                    <h2  style="color: #ffffff; font-weight:600; font-size:28px; text-align: center">Penawaran Khusus!</h2>
                    
                    
                    <div class="row wow bounceInUp  justify-content-center align-self-center">
                        
                    <div class="col-md-6 cta-btn-container text-center mt-4">
                        <h4 style="font-weight:300; color:#ffffff; text-align:center;">Potongan harga 90% untuk 200 pendaftar pertama</h4>
                    </div>


                    </div>
                    <div class="row wow bounceInUp justify-content-center align-self-center mt-5">

                    <div class="col-md-6 cta-btn-container text-center mt-4">
                        <a style="font-weight: 600; border-radius:60px; padding:15px; background: #ffffff;" class="cta-btn align-middle " href="">DAFTAR SEKARANG</a>
                    </div>



                </div>

                    <div>
                        
                        
                        
            
                    </div>
                </div>

   
            </div>

        </div>
    </section><!-- #intro -->

        <!--==========================
      Team Section
    ============================-->
        <section id="team" class="section-bg">
            <div class="container">
                <div class="section-header">
                    <h3>Team</h3>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6 wow fadeInUp">
                        <div class="member">
                            <img src="{{ asset('css/img/landingpage/team/ceo.jpg') }}"  class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Than</h4>
                                    <span>Chief Executive Officer</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="member">
                            <img src="{{ asset('css/img/landingpage/team/coo.jpg') }}"  class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Aprilia</h4>
                                    <span>Chief Operational Officer</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="member">
                            <img src="{{ asset('css/img/landingpage/team/cao.jpg') }}"  class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Zelda</h4>
                                    <span>Chief Akademik Officer</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="member">
                            <img src="{{ asset('css/img/landingpage/team/projectmanager.jpg') }}"  class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Febri</h4>
                                    <span>Project Manager</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- #team -->
    </main>

    <!--==========================
    Footer
  ============================-->
    <footer id="footer" class="section-bg">
        <div class="footer-top">
            <div class="container">

                <div class="row">

                    <div class="col-lg-6">

                        <div class="row">

                            <div class="col-sm-6">

                                <div class="footer-info">
                                    <h3>SANEDU</h3>
                                    <p>aplikasi pendampingan belajar online pertama yang mengusung konsep multiple system dan konseling</p>
                                </div>

                                <div class="footer-newsletter">
                                    <h4>Our Newsletter</h4>
                                    <p>Terima pemberitahuan rutin dari kami dengan subscribe melalui email</p>
                                    <form action="" method="post">
                                        <input type="email" name="email"><input type="submit" value="Subscribe">
                                    </form>
                                </div>

                            </div>

                            <div class="col-sm-6">
                                <div class="footer-links">
                                    <h4>Link</h4>
                                    <ul>
                                        <li><a href="{{ url('/dashboard') }}">Home</a></li>
                                
-->
                                    </ul>
                                </div>

                                <div class="footer-links">
                                    <h4>Contact Us</h4>
                                    <p>
                                        Jl. Teratai No.7<br>
                                        Enggal, Bandar Lampung,<br>
                                        Lampung, Indonesia<br>
                                        <strong>Phone:</strong><br>
                                        <strong>Email:</strong><br>
                                    </p>
                                </div>

                                <div class="social-links">
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="form">

                            <h4>Send us a message</h4>
                            <form action="" method="post" role="form" class="contactForm">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                    <div class="validation"></div>
                                </div>

                                <div id="sendmessage">Your message has been sent. Thank you!</div>
                                <div id="errormessage"></div>

                                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
                            </form>
                        </div>

                    </div>



                </div>

            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong> SAN Education </strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
        -->
                <!--                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>-->
            </div>
        </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>




        
  <!-- JavaScript Libraries -->
  <script src="{{ asset('css/landingpage/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('css/landingpage/lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('css/landingpage/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('css/landingpage/lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('css/landingpage/lib/mobile-nav/mobile-nav.js') }}"></script>
  <script src="{{ asset('css/landingpage/lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('css/landingpage/lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ asset('css/landingpage/lib/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('css/landingpage/lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('css/landingpage/lib/isotope/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('css/landingpage/lib/lightbox/js/lightbox.min.js') }}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('css/landingpage/contactform/contactform.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('css/landingpage/js/main.js') }}"></script>
    </body>
</html>
