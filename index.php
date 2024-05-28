<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- My CSS -->
  <link rel="stylesheet" href="asset/css/webeducation.css">

  <!-- BOX ICONS -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- LOGO KOPI -->
  <link rel="icon" href="IMG/logokopi.png">

  <title> XUUU | GYM</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg rounded">
    <div class="container">

      <a class="navbar-brand fw-bold" href="#home">Xuuu | GYM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mt-2 me-5" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-5">
          <li class="nav-item">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#service">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#menu">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          <!-- <div class="navbar-extra">
            <a href="" class="fs-2 ms-2 ps-5" id="search"><i class='bx bx-search' style='color:#ffffff'></i></a>
            <a href="" class="fs-2 ms-2" id="cart"><i class='bx bxs-cart' style='color:#ffffff'></i></a>
          </div> -->
      </div>
      <div class="ms-5">
        <a href="registrasi.php"><button class="btn  btn-primary ms-5 p-2"> Daftar </button></a>
        <a href="login.php"><button class="btn  btn-primary ms-5 p-2"> Login </button></a>
      </div>
  </nav>
  <!-- Akhir Navbar -->

  <section class="vh-100 w-100" id="slide">
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
          aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
          aria-label="Slide 5"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="asset/img/slide2.jpg" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="asset/img/slide1.jpg" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="asset/img/slide3.jpg" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="asset/img/slide4.jpg" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="asset/img/slide5.jpg" class="d-block w-100">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <!-- HOME -->
  <section class="header-section vh-100" id="home">
    <div class="container">
      <div class="row align-item-center justify-content-between">
        <div class="col-md-6" style="color: #000000;">
          <p class="text-blue fw-semibold fs-1">
            Be Greatest In Your Life
          </p>
          <h1 class="header-title text-uppercase fw-bold mb-5"></h1>

          <a href="#" class="header-skill d-inline-flex align-items-center gap-2 fs-4">
            Basic <i class="bx bx-right-arrow-alt fs-3"></i>
          </a> <br>
          <a href="#" class="header-skill d-inline-flex align-items-center gap-2 fs-4">
            Medium <i class="bx bx-right-arrow-alt fs-3"></i>
          </a> <br>
          <a href="#" class="header-skill d-inline-flex align-items-center gap-2 fs-4">
            Profesional <i class="bx bx-right-arrow-alt fs-3"></i>
          </a>

          <p class="mt-5 mb-5 fs-2 fw-bold text-uppercase">Unleash your strength, redefine your limits, and sculpt your
            body at our premier fitness destination.</p>

          <div class="d-flex align-items-center mt-5">
            <a href="#product"><input class="btn btn-dark fs-1 ms-5 mt-5 p-3 text-uppercase" type="button"
                value="Join With Us" style="border-radius: 40px 0 40px 0; background-color:rgb(3, 3, 134);"></a>
          </div>
        </div>

        <div class="col-md-5 mt-4 ps-5">
          <img src="asset/img/bgberanda.jpg" class="header-img" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- AKHIR HOME -->



  <!-- ABOUT -->
  <section class="about-section" id="about">
    <h1 class="section-title text-center text-dark" style="margin-top:50px;">About us</h1>
    <div class="row justify-content-md-center">
      <div class="col col-md-2 mt-5 me-5">
        <img src="asset/img/about1.jpg">
        <h2 class="mt-3"> Beginner </h2>
        <p class="fs-5 mt-4">Welcome to our beginner-friendly gym, where we guide you through every step of your
          fitness journey. Our supportive environment empowers newcomers to build confidence, learn proper techniques,
          and
          achieve their goals. Start your path to strength and vitality with us, and let's thrive together on this
          transformative adventure.</p>
      </div>
      <div class="col col-lg-4 ms-5">
        <img src="asset/img/about3.jpg" width="86%" height="86%" alt="">
      </div>
      <div class="col-md-2 mt-5">
        <img src="asset/img/about2.jpg">
        <h2 class="mt-3">Profesional</h2>
        <p class="fs-5 mt-4">Elevate your fitness game at our state-of-the-art gym. Designed for professionals, our
          facility offers top-tier equipment, expert trainers, and tailored programs to optimize performance. Join a
          community of like-minded individuals committed to excellence, and unlock your full potential in a premier
          training environment. Your success starts here.</p>
      </div>
    </div>
  </section>
  <!-- AKHIR ABOUT -->



  <!-- MENU -->
  <section class="menu-section" id="menu">

    <p class="menu-title fw-bold text-center pb-5 mt-5 text-dark">Join With Us</p>

    <div class="row justify-content-center gap-5 pt-3">
      <div class="card text-center bg-transparent" style="width: 25rem;">
        <img src="asset/img/paket3.jpg" class="card-img-top rounded shadow-lg">
        <div class="card-body text-white">
          <p class="card-text fw-bold text-dark">Paket 1</p>
          <a href="#" class="btn btn-dark">Daftar</a> <br>
        </div>
      </div>
      <div class="card text-center bg-transparent" style="width: 25rem;">
        <img src="asset/img/paket6.jpg" class="card-img-top rounded shadow-lg">
        <div class="card-body text-white">
          <p class="card-text fw-bold text-dark">Paket 2</p>
          <a href="#" class="btn btn-dark">Daftar</a> <br>
        </div>
      </div>
      <div class="card text-center bg-transparent" style="width: 25rem;">
        <img src="asset/img/paket4.jpg" class="card-img-top rounded shadow-lg">
        <div class="card-body text-white">
          <p class="card-text fw-bold text-dark">Paket 3</p>
          <a href="#" class="btn btn-dark">Daftar</a> <br>
        </div>
      </div>
      <div class="card text-center bg-transparent" style="width: 25rem;">
        <img src="asset/img/paket2.jpg" class="card-img-top rounded shadow-lg">
        <div class="card-body text-white">
          <p class="card-text fw-bold text-dark">Paket 4</p>
          <a href="#" class="btn btn-dark">Daftar</a> <br>
        </div>
      </div>
      <div class="card text-center bg-transparent" style="width: 30rem;">
        <img src="asset/img/paket5.jpg" class="card-img-top rounded shadow-lg">
        <div class="card-body text-white">
          <p class="card-text fw-bold text-dark">VIV</p>
          <a href="#" class="btn btn-dark">Daftar</a> <br>
        </div>
      </div>
      <div class="card text-center bg-transparent" style="width: 20rem;">
        <img src="asset/img/paket1.jpg" class="card-img-top rounded shadow-lg">
        <div class="card-body text-white">
          <p class="card-text fw-bold text-dark">VVIV</p>
          <a href="#" class="btn btn-dark">Daftar</a> <br>
        </div>
      </div>
    </div>

  </section>
  <!-- AKHIR MENU -->



  <!-- CONTACT -->
  <section class="contact-section" id="contact" method="POST">
    <h1 class="section-title text-center mb-5 text-dark">Contact Us</h1>
    <div class="container justify-content-center">
      <div class="row">
        <div class="col bg-cover" style="width: 100%;">
          <div class="maps pt-3 d-flex">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d247.51317201187896!2d107.62954286160414!3d-6.984436481820735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1703703210300!5m2!1sid!2sid"
              width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>

        <div class="col pt-3">
          <div class="mb-3 ms-5" style="width: 60%;">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control border border-dark" placeholder="Email">
          </div>
          <div class="mb-3 ms-5" style="width: 60%;">
            <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control border border-dark" placeholder="Nama">
          </div>
          <div class="mb-3 ms-5" style="width: 60%;">
            <label for="exampleFormControlInput1" class="form-label">Nomor Telephone</label>
            <input type="email" name="text" class="form-control border border-dark" placeholder="Telephone">
          </div>
          <div class="mb-3 ms-5" style="width: 60%;">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control border border-dark" id="exampleFormControlTextarea1" rows="5"></textarea>
          </div>
          <div class="ms-5">
            <input class="btn btn-blue" type="submit" value="Submit">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- AKHIR CONTACT -->



  <!-- FOOTER -->
  <div class="footer">
    <div class="card text-center rounded" style="background-color: #212027;">
      <div class="card-header">
        <ul class="nav justify-content-center border-0">
          <li class="nav-item fs-1 me-3 ms-3 text-blue">
            <a href=""><i class='bx bxl-instagram-alt' style="color: #ffffff;"></i></a>
          </li>
          <li class="nav-item fs-3 me-3">
            <a href="#"><i class='bx bxl-whatsapp' style='color:#ffffff'></i></a>
          </li>
          <li class="nav-item fs-5">
            <a href="#"><i class='bx bx-store' style="color: #ffffff;"></i></a>
          </li>
        </ul>
      </div>

      <div class="card-body">
        <h3 class="card-title ms-3 fw-bold text-white">XUUU | GYM</h3>
        <p class="card-text text-white">CreatedWith<i class='bx bxs-heart' style='color:#ff0000'></i>2023.RudolPras</p>
      </div>
    </div>
  </div>
  <!-- AKHIR FOOTER -->



  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>