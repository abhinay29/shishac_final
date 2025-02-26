<?php

include 'common/header.php';

?>

<div class="swiper homeSlider">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <div class="swiper-content">
        <img src="assets/images/slides/s11.png" alt="Slider Image">
        <h2 class="heading">
          Elevating Industries with Advanced Composite Technology
        </h2>
      </div>
    </div>
    <div class="swiper-slide">
      <div class="swiper-content">
        <h2 class="heading">
          Built To Perform, Engineered To Last
        </h2>
        <img src="assets/images/slides/s21.png" alt="Slider Image" style="object-position: 0 -260px;">
      </div>
    </div>
    <div class="swiper-slide">
      <div class="swiper-content">
        <h2 class="heading">
          Imagineering Tomorrow with Advanced Composites Today
        </h2>
        <img src="assets/images/slides/s31.png" alt="Slider Image">
      </div>
    </div>
    <div class="swiper-slide">
      <div class="swiper-content">
        <h2 class="heading">
          Designed for Tougher, Smarter Applications
        </h2>
        <img src="assets/images/slides/s41.png" style="object-position: 0 -180px;" alt="Slider Image">
      </div>
    </div>
  </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>

<section id="aboutUs" class="about section-padding-60">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 pe-lg-5">
        <div class="mb-4">
          <h2 class="fw-bold section-title">About Us</h2>
        </div>
        <p class="mb-5 text-justify" style="line-height: 2;"><strong>Shish Advanced Composites Private
            Limited</strong> is a leading
          manufacturer dedicated
          to creating
          high-performance, customised
          advanced composite solutions. Our expertise encompasses everything from design and development to the
          manufacturing of
          tooling, jigs, fixtures, and composite products. Operating from our state-of-the-art facility in Surat,
          Gujarat, India,
          we pride ourselves on delivering innovative, durable, and efficient solutions that meet the unique needs of
          a wide range
          of industries.</p>
        <a href="about-us" class="btn btn-primary">Know More <i class="fa-solid fa-arrow-right ms-2"></i></a>
      </div>
      <div class="col-lg-6 pt-5 pt-lg-0">
        <img src="assets/images/35.webp" class="rounded-3 shadow w-100" alt="About Image">
      </div>
    </div>
  </div>
</section>

<style>
  .capabilities .card:hover img.img-fluid {
    animation: rotateAnimation 1.5s linear infinite;
  }

  .capabilities .card {
    transition: all 0.2s ease;
  }

  .capabilities .card:hover {
    box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.15);
  }

  @keyframes rotateAnimation {
    from {
      transform: rotateY(0deg);
    }

    to {
      transform: rotateY(360deg);
    }
  }

  @media (max-width: 1366px) {
    h4 {
      font-size: 1.25rem;
    }
  }
</style>

<section class="section-padding-60 capabilities" id="capabilities">
  <div class="container">
    <div class="text-center mb-5">
      <div class="mb-3">
        <h2 class="fw-bold section-title">Capabilities</h2>
      </div>
      <h5 class="fw-normal">Your Integrated Solutions Partner</h5>
    </div>
    <div class="row g-4 mb-4">
      <div class="col-lg-4 col-md-6 col-12">
        <div class="card bg-info rounded-5">
          <div class="card-body p-4">
            <div class="logo text-center mb-3">
              <img src="assets/images/icons/c1.png" alt="" class="img-fluid mb-4">
              <h5 class="fw-bold">Design &<br> Development</h5>
            </div>
            <p class="text-justify mb-0">Support from initial design to full-scale production
              transition. Our Design & Development
              Center offers expertise in FEA analysis, tooling design, material selection, laminate
              design, and composite manufacturing, with both Build-to-Design and Build-to-Print
              capabilities.</p>
          </div>
        </div>
      </div>

      <!-- Second column in the first row -->
      <div class="col-lg-4 col-md-6 col-12">
        <div class="card bg-info rounded-5">
          <div class="card-body p-4">
            <div class="logo text-center mb-3">
              <img src="assets/images/icons/c2.png" alt="" class="img-fluid mb-4">
              <h5 class="fw-bold">Composite Products <br /> Manufacturing</h5>
            </div>
            <p class="text-justify">(Prototyping & Series Production)</p>
            <p class="text-justify mb-0">Using Carbon, glass, Kevlar, Zylon, Dyneema and hybrid
              prepregs utilizing range of resin
              systems to achieve diverse performance characteristics. Sandwich structures using PMI
              Foam,
              Aramid Honeycomb, Aluminium Honeycomb, Cork etc.</p>
          </div>
        </div>
      </div>

      <!-- Third column in the first row -->
      <div class="col-lg-4 col-md-6 col-12">
        <div class="card bg-info rounded-5">
          <div class="card-body p-4">
            <div class="logo text-center mb-3">
              <img src="assets/images/icons/c3.png" alt="" class="img-fluid mb-4">
              <h5 class="fw-bold">Toolings, Jigs & <br />
                Fixtures Manufacturing</h5>
            </div>
            <p class="text-justify mb-0">Designed to meet specific customer needs, ensuring that the
              tools are fit for purpose. We
              leverage a wide range of materials, including Carbon Fiber, Epoxy Tooling Board, MDF,
              Aluminium, Stainless Steel, Invar to select the most appropriate material for each
              application.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center">
      <a href="<?= $site_url; ?>/capabilities" class="btn btn-primary">Know More <i class="fa-solid fa-arrow-right ms-2"></i></a>
    </div>
  </div>
</section>

<style>
  .facilities .card {
    width: 100%;
    height: 100%;
    transition: all 0.2s ease;
  }

  .facilities .card:hover {
    transform: translateY(-20px);
  }

  .facilities .card .card-body {
    text-align: center;
  }

  .facilities .card .card-body h4 {
    margin-bottom: 0;
    font-size: 1rem;
  }

  .facilities .card .card-top-image {
    width: 100%;
    height: 120px;
    object-fit: cover;
  }

  @media (min-width: 1025px) and (max-width: 1550px) {
    .facilities .card .card-top-image {
      height: 120px;
    }
  }
</style>

<section class="section-padding-60 bg-light facilities" id="facilities">
  <div class="container-fluid px-5">
    <div class="text-center mb-5">
      <div class="mb-3">
        <h2 class="fw-bold section-title">Facilities</h2>
      </div>
      <h5 class="fw-normal">Commitment to Excellence</h5>
    </div>

    <div class="row g-3 mb-3 justify-content-center">

      <div class="col-lg-2">
        <div class="card border-0 shadow rounded-4" style="overflow: hidden;">
          <img src="assets/images/facilities/clean-room.jpg" alt="" class="card-top-image">
          <div class="card-body">
            <h4>Class 7 / 8 Cleanrooms</h4>
          </div>
        </div>
      </div>

      <div class="col-lg-2">
        <div class="card border-0 shadow rounded-4" style="overflow: hidden;">
          <img src="assets/images/container1.png" alt="" class="card-top-image">
          <div class="card-body">
            <h4>Autoclave</h4>
          </div>
        </div>
      </div>

      <div class="col-lg-2">
        <div class="card border-0 shadow rounded-4" style="overflow: hidden;">
          <img src="assets/images/facilities/cnc.svg" alt="" class="card-top-image border-bottom">
          <div class="card-body">
            <h4>5 Axis CNC Machines</h4>
          </div>
        </div>
      </div>

      <div class="col-lg-2">
        <div class="card border-0 shadow rounded-4" style="overflow: hidden;">
          <img src="assets/images/container4.png" alt="" class="card-top-image border-bottom">
          <div class="card-body">
            <h4>Freezers</h4>
          </div>
        </div>
      </div>

      <div class="col-lg-2">
        <div class="card border-0 shadow rounded-4" style="overflow: hidden;">
          <img src="assets/images/facilities/1300B.webp" alt="" class="card-top-image">
          <div class="card-body">
            <h4>Ply Cutting</h4>
          </div>
        </div>
      </div>

    </div>

    <div class="row g-4 mb-5 justify-content-center">

      <div class="col-lg-2">
        <div class="card border-0 shadow rounded-4" style="overflow: hidden;">
          <img src="assets/images/facilities/scanner.png" alt="" class="card-top-image">
          <div class="card-body">
            <h4>Precision Scanning</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-2">
        <div class="card border-0 shadow rounded-4" style="overflow: hidden;">
          <img src="assets/images/facilities/g4.png" alt="" class="card-top-image">
          <div class="card-body">
            <h4>Surface Treatment</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-2">
        <div class="card border-0 shadow rounded-4" style="overflow: hidden;">
          <img src="assets/images/facilities/destruction.jpg" alt="" class="card-top-image">
          <div class="card-body">
            <h4>Destructive Testing</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-2">
        <div class="card border-0 shadow rounded-4" style="overflow: hidden;">
          <img src="assets/images/facilities/surface.svg" alt="" class="card-top-image">
          <div class="card-body">
            <h4>Ultrasonic Testing</h4>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center">
      <a href="<?= $site_url; ?>/facilities" class="btn btn-primary">Know More <i class="fa-solid fa-arrow-right ms-2"></i></a>
    </div>
  </div>
</section>

<section class="sectors-section section-padding-60" id="sectors">
  <div class="container">
    <div class="text-center mb-5">
      <div class="mb-3">
        <h2 class="fw-bold section-title">Sectors</h2>
      </div>
      <p>
        By combining high-performance fibers like Carbon and Glass with advanced resin systems, our composites offer
        exceptional
        strength-to-weight ratios, high stiffness, corrosion resistance, and durability against environmental
        challenges. These
        attributes make our solutions the preferred choice for industries that demand high-performance materials and
        innovative
        engineering.
      </p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div>
          <ul class="served">
            <li style="cursor: pointer;" onclick="window.location.href='./aerospace'">
              <img src="assets/images/icons/aero.png" class="icon" alt="Aero">
              <span class="name">Aerospace</span>
            </li>
            <li style="cursor: pointer;" onclick="window.location.href='./other-industries'">
              <img src="assets/images/icons/marine.png" class="icon" alt="Marine">
              <span class="name">Marine</span>
            </li>
            <li style="cursor: pointer;" onclick="window.location.href='./automotive'">
              <img src="assets/images/icons/automative.png" class="icon" alt="Automotive">
              <span class="name">Automotive</span>

            </li>
            <li style="cursor: pointer;" onclick="window.location.href='./other-industries'">
              <img src="assets/images/icons/sport.png" class="icon" alt="Sporting & Luxury goods">
              <span class="name">Sporting & Luxury goods</span>

            </li>
            <li style="cursor: pointer;" onclick="window.location.href='./motorsports'">
              <img src="assets/images/icons/motor.png" style="width: 50px; height: auto;" class="icon"
                alt="Motorsports">
              <span class="name">Motorsports</span>

            </li>
            <li style="cursor: pointer;" onclick="window.location.href='./railways'">
              <img src="assets/images/icons/railway.png" class="icon" alt="Railways">
              <span class="name">Railways</span>

            </li>
            <li style="cursor: pointer;" onclick="window.location.href='./other-industries'">
              <img src="assets/images/icons/defence.png" style="width: 50px; height: auto;" class="icon"
                alt="Defence">
              <span class="name">Defence</span>

            </li>
            <li style="cursor: pointer;" onclick="window.location.href='./other-industries'">
              <img src="assets/images/icons/medical.png" class="icon" alt="Medical & Other Industrial Applications">
              <span class="name">Medical & Other Industrial Applications</span>

            </li>
            <li style="cursor: pointer;" onclick="window.location.href='./other-industries'">
              <img src="assets/images/icons/bulb.png" class="icon" alt="Research & Development (R&D)">
              <span class="name">Research & Development (R&D)</span>

            </li>
          </ul>
        </div>

        <!-- <div class="text-center">
            <a href="#" class="btn btn-primary">Know More <i class="fa-solid fa-arrow-right ms-2"></i></a>
          </div> -->
      </div>
    </div>
  </div>
</section>

<?php
include 'common/get-in-touch.php';
include 'common/footer.php';

?>