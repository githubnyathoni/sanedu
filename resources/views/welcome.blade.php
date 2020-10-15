  
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
                    <h2  style="color: #ffffff; font-weight:600; font-size:28px; text-align: center">Program Pendamping SNMPTN dan UTBK<span style="color:#f7a422;"> 2020 / 2021</span></h2>
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
                        <a style="font-weight: 600; border-radius:60px; padding:15px; background: #ffffff;" class="cta-btn align-middle " href="/daftar">DAFTAR SEKARANG</a>
                    </div>


                    <div class="col-md-2 cta-btn-container text-center mt-4">
                        <p style="font-weight: 600; border-radius:60px; color: #006da6;  " > - </a>
                    </div>
                    
                    

                    <div class="col-md-5 cta-btn-container text-center mt-4">
                        <a  style="font-weight: 600; border-radius:60px; padding:15px; background: #ffffff;" class="cta-btn align-middle " href="/login">VERIFIKASI PEMBAYARAN</a>
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
                    <h3>Testimoni</h3>
                </header>

                <div class="row justify-content-center">
                    <div class="col-lg-8">

                        <div class="owl-carousel testimonials-carousel wow fadeInUp">


                        <div class="testimonial-item">
                                <img src="{{ asset('css/img/landingpage/testimoni/Okto.png') }}"  class="testimonial-img" alt="">
                                <h3>Okto Tri Hamda</h3>
                                <h4>MAN 1 Bandar Lampung (Farmasi – Universitas Indonesia)</h4>
                                <p>
                                    "Melalui program legacy saya dibimbing dan diarahkan dengan sangat teliti dan berdasarkan data yang valid, sampai saya bisa masu UI"
                                </p>
                            </div>

                        <div class="testimonial-item">
                                <img src="{{ asset('css/img/landingpage/testimoni/Rafi.png') }}"  class="testimonial-img" alt="">
                                <h3>Rafi Gutra Aslam</h3>
                                <h4>SMAN 1 Bandar Lampung (Pendidikan Kedokteran - Universitas Lampung)</h4>
                                <p>
                                    "Tau Sanedu dari kawan SMP karena biaya bimbel mahal pas tau sanedu buat program kayak gini coba ikut, ternyata pendampingannya yang kita dapet bagus banget, lengkap dan terstruktur. Kita didampingi berdasarkan data real hasil observasi dan analisis bukan asal asla, Sumpah aku bersyukur banget bisa masuk Kedokteran dari jalur SBMPTN"
                                </p>
                            </div>


                            <div class="testimonial-item">
                                <img src="{{ asset('css/img/landingpage/testimoni/Anggie.png') }}"  class="testimonial-img" alt="">
                                <h3>Anggie Maidita</h3>
                                <h4>SMA Al Azhar 3 Bandar Lampung (Arsitektur – Universitas Lampung)</h4>
                                <p>
                                    "Thanks Sanedu dari program ini saya bisa masuk PTN impian, keren banget strategi yang dikasih, dan bukan cuman kulitnya sampai dasarnya juga ikut dibedah, salutnya lagi strategi yang dikasih antar siswa itu beda beda, tergantung dengan jurusan yang dia pilih dan kemampuan yang dia punya"
                                </p>
                            </div>

                            <div class="testimonial-item">
                                <img src="{{ asset('css/img/landingpage/testimoni/Divia.jpg') }}"  class="testimonial-img" alt="">
                                <h3> Divia Laila</h3>
                                <h4>SMAN 5 Bandar Lampung (Teknik Pertanian – Universitas Lampung) </h4>
                                <p>
                                    "Sempet gak PD untuk ambil UTBK tapi setelah ikut program ini tahu dibagian mana lemahnya, dan dibantu untuk capai target sesuai dengan jurusan yang kita mau"
                                </p>
                            </div>



                            <div class="testimonial-item">
                                <img src="{{ asset('css/img/landingpage/testimoni/Dzaki.png') }}"  class="testimonial-img" alt="">
                                <h3>Dzaki Setia Basith</h3>
                                <h4>SMAN 2 Bandar Lampung (PWK – Universitas Dipenegoro)</h4>
                                <p>
                                    "Legacy adalah program pendampingan dari sanedu yang keren banget, semua fasilitasnya berguna banget, thanks sanedu"
                                </p>
                            </div>


                            <div class="testimonial-item">
                                <img src="{{ asset('css/img/landingpage/testimoni/Fyra.png') }}"  class="testimonial-img" alt="">
                                <h3>Fyra Annisya S</h3>
                                <h4>SMA Al Azhar 3 Bandar Lampung (Kimia – Universitas Lampung)</h4>
                                <p>
                                    "Awalnya ikut program ini karena ada tes minat bakatnya, karena masih bingung mau milih jurusan apa, dan ternyata bukan cuman fasilitas itu yang didapet, bahkan kita juga dapet sesi konseling dan analisis nilai rapot untuk persiapan SNMPTN"
                                </p>
                            </div>

                            <div class="testimonial-item">
                                <img src="{{ asset('css/img/landingpage/testimoni/Galang.png') }}"  class="testimonial-img" alt="">
                                <h3>M Galang Bunari</h3>
                                <h4>SMAN 12 Bandar Lampung (Teknik Elektro – Institut Teknologi Sumatera) </h4>
                                <p>
                                    "Paling gak suka ribet, makanya gak suka matematika, tapi dari program ini gw paham belajar itu gak rumit kok, asal tau strateginya ditambah belajar dengan Miss Febri"
                                </p>
                            </div>


                            <div class="testimonial-item">
                                <img src="{{ asset('css/img/landingpage/testimoni/Gilang.png') }}"  class="testimonial-img" alt="">
                                <h3>M Gilang JMB</h3>
                                <h4>SMAN 10 Bandar Lampung (Teknik Industri Pertanian – Institut Teknologi Sumatera)</h4>
                                <p>
                                    "Banyak yang nawarin program sejenis, tapi kalau kata gue cuman ini yang realistis bahkan strateginya suksesnya disusun sama tim sanedu dengan model yang beda beda tiap siswa sesuai dengan kebutuhan masing masing"
                                </p>
                            </div>


                            <div class="testimonial-item">
                                <img src="{{ asset('css/img/landingpage/testimoni/Herviana.png') }}"  class="testimonial-img" alt="">
                                <h3>Herviana Putri D</h3>
                                <h4>SMAN 1 Pringsewu (Ilmu Teknologi Hayati – Institut Teknologi Bandung)</h4>
                                <p>
                                    "Ikut program ini pas ada yang sosialisasi ke sekolah, kirain cuman tryout biasa aja, pas ikutan ternyata kita dibekalin banyak informasi yang belum kita paham sebelumnya"
                                </p>
                            </div>


                            <div class="testimonial-item">
                                <img src="{{ asset('css/img/landingpage/testimoni/Maura.png') }}"  class="testimonial-img" alt="">
                                <h3>Maura Diviarani</h3>
                                <h4>SMAN 12 Bandar Lampung (Teknik Informatika – Institut Teknologi Sumatera)</h4>
                                <p>
                                   "Legacy menurut aku satu satunya program yang memuat bukan hanya perencanaan materi namun juga perencanaan dari semua aspek untuk sukses SNMPTN dan SBMPTN"
                                </p>
                            </div>


                            <div class="testimonial-item">
                                <img src="{{ asset('css/img/landingpage/testimoni/Sekar.png') }}"  class="testimonial-img" alt="">
                                <h3>Nabila Sekar</h3>
                                <h4>SMAN 3 Bandar Lampung (Sosiologi - Universitas Lampung)</h4>
                                <p>
                                “Gak nyesel gabung program ini, fasilitasnya lengkap dan harganya terjangkau, sumpah gak akan nyesel yang ikut program ini”
                                </p>
                            </div>

                            <div class="testimonial-item">
                                <img src="{{ asset('css/img/landingpage/testimoni/Tiara.png') }}"  class="testimonial-img" alt="">
                                <h3>Tiara Mega</h3>
                                <h4>SMAN 12 Bandar Lampung (Teknik Kimia – Institut Teknologi Sumatera)</h4>
                                <p>
                                    "Jujur sebelum ikut program ini bingung gimana cara sukses masuk PTN, karena info yang aku dapet masuk PTN itu sulit banget, tapi ternyata strategi yang dikasih gak serumit itu, disini kita dibuat bener bener paham, bukan di Takut Takutin"
                                </p>
                            </div>


                            <div class="testimonial-item">
                                <img src="{{ asset('css/img/landingpage/testimoni/Tyas.png') }}"  class="testimonial-img" alt="">
                                <h3>Ningtyas Wulandari</h3>
                                <h4>SMAN 3 Bandar Lampung (Administrasi Bisnis - Universitas Dipenegoro)</h4>
                                <p>
                                    "Kenal sanedu dari senior SMP jujur sempet ragu awalnya, karena harganya jauh banget dengan bimbel lain, ditambah baru denger ada bimbel sanedu, tapi jujur ternyata keren abis, kita didampingi dari dasar banget, menurut aku ini program pendampingan terbaik Se-Indonesia"
                                </p>
                            </div>



                            <div class="testimonial-item">
                                <img src="{{ asset('css/img/landingpage/testimoni/prima.jpeg') }}"  class="testimonial-img" alt="">
                                <h3>Prima Yustisio</h3>
                                <h4>SMAN 16 Bandar Lampung (PWK – Institut Teknologi Sumatera)</h4>
                                <p>
                                    "Dulu ising ikut tryout gratis sanedu, eh nilainya jelek banget, tiba tiba ada kakak konsultan belajarnya yang nge chat untuk ngajak diskusi, isi diskusinya berbobot banget dan ditawarin ikut program ini, ternyata pas join parah isinya bener bener berbobot dan ternyata analisis dan strateginya efektif banget buat saya bisa masuk ke PTN"
                                </p>
                            </div>


                            
                            <div class="testimonial-item">
                                <img src="{{ asset('css/img/landingpage/testimoni/dara.jpeg') }}"  class="testimonial-img" alt="">
                                <h3>Dara Pujiandini</h3>
                                <h4>SMAN 16 Bandar Lampung (Ilmu Hukum – Universitas Lampung)</h4>
                                <p>
                                    "Makasih banyak sanedu, aku dari nol banget belajar di sanedu, sempet drop pas gak keterima SNMPTN, diskusi dan didampingi dengan konsultan belajar yang keren banget, sabar banget untuk ngebimbing aku, dan sampai nilai UTBK aku lolos target dan bisa keterima di jalur SBMPTN"
                                </p>
                            </div>


                            <div class="testimonial-item">
                                <img src="{{ asset('css/img/landingpage/testimoni/darel.jpeg') }}"  class="testimonial-img" alt="">
                                <h3>Reymon Darrel</h3>
                                <h4>SMAN 3 Bandar Lampung (PWK – Institut Teknologi Sumatera)</h4>
                                <p>
                                    "Makasih banget untuk sanedu dengan berbagai programnya, legacy adalah salah satu program sanedu yang gw ikutin, keren banget dan mencerdaskan bukan buat kita down tapi buat kita percaya diri dan paham apa yang harus kita lakuin, makasih strategi dan analisisnya"
                                </p>
                            </div>

                            <div class="testimonial-item">
                                <img src="{{ asset('css/img/landingpage/testimoni/raya.jpeg') }}"  class="testimonial-img" alt="">
                                <h3>M Rayya Andisa Putra</h3>
                                <h4>SMAN 9 Bandar Lampung (Teknik Geofisika – Universitas Lampung)</h4>
                                <p>
                                    "Kalau kalian ngerasa SNMPTN atau UTBK itu mudah sumpah jujur gak, butuh persiapan dan banyak juga info yang menyesatkan, di program ini kalian bakal diarahin dengan informasi yang valid ditambah metode yang efektif banget, gw dan puluhan temen gw yang ikut terbukti lolos SNMPTN dan SBMPTN 2020"
                                </p>
                            </div>

                            <div class="testimonial-item">
                                <img src="{{ asset('css/img/landingpage/testimoni/krisna.jpeg') }}"  class="testimonial-img" alt="">
                                <h3> Krisna Riandru</h3>
                                <h4>SMAN 3 Bandar Lampung (Ilmu Hukum – Universitas Lampung)</h4>
                                <p>
                                    "Satu kesan yang paling gw inget adalah kata kata CEO sanedu, selama itu bukan tuhan dan nabi pasti bisa kita lampaui, bener banget konsep dasar yang kayak gitu, motovasi dan spirit yang di tularin itu baut semua temen temen yang ikut termasuk saya jadi paham apa yang harus dilakukan dan bagaimana caranya, soal HOTS bukan tandingan siswa sanedu pokonya"
                                </p>
                            </div>

                            <div class="testimonial-item">
                                <img src="{{ asset('css/img/landingpage/testimoni/nurdien.jpeg') }}"  class="testimonial-img" alt="">
                                <h3>Nurdien</h3>
                                <h4>SMAN 10 Bandar Lampung (Administrasi Negara – Universitas Sumatera Utara)</h4>
                                <p>
                                    "Bah aku rasa program sanedu ini keren kali, dari malam belajar sekali ikut konseling jadi sadar mau apa yang dilakuin, makasih banyak tutor dan konsultan di sanedu, karena kalian aku sekarang jadi orang medan"
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



        <section id="video-promotion" class="wow fadeIn mt-5 mb-5" >
           
           </div> 
            <div class="container-fluid ">

               <header class="section-header" style="width:80%; display:block; margin:auto; margin-bottom:40px;">
                   <h3>Acara Puncak Legacy Project 2019</h3>
               </header>

               <div class="row justify-content-md-center">

                
               <div class="col-md-9">


                 
                                            <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Mxw05V9fdZU?rel=0" allowfullscreen></iframe>
                        </div>

                   </div>

               </div>
           </div> 
       </section>

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
                        <a style="font-weight: 600; border-radius:60px; padding:15px; background: #ffffff;" class="cta-btn align-middle " href="{{ url('/daftar') }}">DAFTAR SEKARANG</a>
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
