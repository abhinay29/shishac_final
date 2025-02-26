<?php

$page_title = "Capabilities";

include 'common/header.php';

?>


<style>
  h5 {
    margin-bottom: 1.25rem;
  }
</style>

<section class="section-padding-40 bg-light"></section>

<section class="bg-light section-padding-60">
  <div class="container-fluid px-lg-5">
    <div class="row align-items-center">
      <div class="col-lg-6 pb-4 pb-sm-0">
        <img src="assets/images/capabilities_header.webp" class="w-100 rounded-4"
          alt="About Image">
      </div>
      <div class="col-lg-6 ps-lg-5">
        <div class="mb-4">
          <h2 class="fw-bold section-title">Capabilities</h2>
        </div>
        <h5>Your Integrated Solutions Partner</h5>
        <p class="mb-4 text-justify" style="line-height: 1.5;">
          At Shish Advanced Composites, we are committed to delivering tailored solutions that address the unique
          needs of our
          customers.</p>
        <ul class="ul1">
          <li>
            <i class="fa-solid fa-check text-success"></i>
            <strong>
              Design & Development:</strong> Transforming initial ideas into production-ready designs with precision
            and
            efficiency.
          </li>
          <li>
            <i class="fa-solid fa-check text-success"></i>
            <strong>
              Tooling, Jigs & Fixtures Manufacturing:</strong> Creating custom-made tools designed for accuracy and
            reliability.
          </li>
          <li>
            <i class="fa-solid fa-check text-success"></i>
            <strong>
              Composite Product Manufacturing:</strong> Utilizing advanced materials and techniques to craft
            high-quality,
            performance-driven
            products.
          </li>
        </ul>
      </div>

    </div>
  </div>
</section>

<style>
  .desc .card {
    width: 100%;
    height: 100%;
    transition: all 0.2s ease;
  }

  .desc .card:hover {
    transform: translateY(-20px);
  }

  .desc .card .card-body {
    text-align: center;
  }

  .desc .card .card-body h4 {
    margin-bottom: 0;
    font-size: 1rem;
  }

  .desc .card .card-top-image {
    width: 100%;
    height: 120px;
    object-fit: cover;
  }

  .ul1.d-flex {
    flex-wrap: wrap;
    justify-content: center;
  }

  .ul1.d-flex li {
    /* width: calc(100%/4); */
    padding-left: 30px;
    padding-right: 30px;
  }

  .ul1.d-flex li i {
    top: 5px;
  }
</style>

<section class="section-padding-60 bg-light-1">
  <div class="container">
    <div class="text-center mb-4">
      <h4 class="fw-bold mb-4">Design & Development Expertise</h4>
      <p>
        We specialize in bridging the gap from concept to production with a focus on precision and innovation.
      </p>
      <h5 class="mb-4">
        Transitioning seamlessly from prototypes to full-scale production.
      </h5>
    </div>
    <div class="text-start text-md-center mb-4">
      <h5 class="mb-3">Expertise in:</h5>
    </div>

    <div class="container-fluid">

      <ul class="ul1 d-flex">
        <li>
          <i class="fa-solid fa-check text-success"></i>
          Finite Element Analysis (FEA)
        </li>
        <li>
          <i class="fa-solid fa-check text-success"></i>
          Tooling design
        </li>
        <li>
          <i class="fa-solid fa-check text-success"></i>
          Surface modeling
        </li>
        <li>
          <i class="fa-solid fa-check text-success"></i>
          Material selection
        </li>
        <li>
          <i class="fa-solid fa-check text-success"></i>
          Laminate design
        </li>
        <li>
          <i class="fa-solid fa-check text-success"></i>
          Cutting-edge composite manufacturing techniques
        </li>
      </ul>
    </div>

  </div>
</section>

<section class="section-padding-60 desc">
  <div class="container px-5 px-md-2 mb-4">
    <div class="text-center mb-5">
      <h4 class="fw-bold mb-4">
        Tooling, Jigs & Fixtures
      </h4>
      <p class="mb-4">
        Our custom-designed tooling, jigs, and fixtures are built to meet exact customer requirements, ensuring unparalleled precision and performance.
      </p>
      <h5 class="mb-5">Materials tailored to application needs:</h5>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-2 mb-4">
        <div class="card border-0 shadow rounded-4" style="overflow: hidden;">
          <img src="assets/images/capabilities/carbon_fiber.webp" alt="" class="card-top-image">
          <div class="card-body">
            <h4>Carbon Fiber</h4>
          </div>
        </div>
      </div>
      <div class="col-md-2 mb-4">
        <div class="card border-0 shadow rounded-4" style="overflow: hidden;">
          <img src="assets/images/capabilities/c1.jpg" alt="" class="card-top-image">
          <div class="card-body">
            <h4>Epoxy Tooling Board</h4>
          </div>
        </div>
      </div>
      <div class="col-md-2 mb-4">
        <div class="card border-0 shadow rounded-4" style="overflow: hidden;">
          <img src="assets/images/capabilities/mdf.webp" alt="" class="card-top-image">
          <div class="card-body">
            <h4>Medium-Density Fiberboard (MDF)</h4>
          </div>
        </div>
      </div>
      <div class="col-md-2 mb-4">
        <div class="card border-0 shadow rounded-4" style="overflow: hidden;">
          <img src="assets/images/capabilities/aluminum.webp" alt="" class="card-top-image">
          <div class="card-body">
            <h4>Aluminum</h4>
          </div>
        </div>
      </div>
      <div class="col-md-2 mb-4">
        <div class="card border-0 shadow rounded-4" style="overflow: hidden;">
          <img src="assets/images/capabilities/stainless_steel.webp" alt="" class="card-top-image">
          <div class="card-body">
            <h4>Stainless Steel</h4>
          </div>
        </div>
      </div>
      <div class="col-md-2 mb-4">
        <div class="card border-0 shadow rounded-4" style="overflow: hidden;">
          <img src="assets/images/capabilities/invar.webp" alt="" class="card-top-image">
          <div class="card-body">
            <h4>Invar</h4>
          </div>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">

    </div>
  </div>
</section>

<section class="section-padding-60 bg-light-2 mb-4 desc">
  <div class="container px-5 px-md-2">
    <div class="text-center mb-5">
      <h4 class="fw-bold">
        Composite Product Manufacturing
      </h4>
      <p class="mb-5">
        From prototyping to large-scale production, we deliver advanced composite solutions designed for performance and
        durability.
      </p>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-2 mb-4">
        <div class="card border-0 shadow rounded-4" style="overflow: hidden;">
          <img src="assets/images/capabilities/cpm1.png" alt="" class="card-top-image">
          <div class="card-body">
            <h4> Carbon Prepreg</h4>
          </div>
        </div>
      </div>
      <div class="col-md-2 mb-4">
        <div class="card border-0 shadow rounded-4" style="overflow: hidden;">
          <img src="assets/images/capabilities/cpm2.jpg" alt="" class="card-top-image">
          <div class="card-body">
            <h4>Glass Prepreg</h4>
          </div>
        </div>
      </div>
      <div class="col-md-2 mb-4">
        <div class="card border-0 shadow rounded-4" style="overflow: hidden;">
          <img src="assets/images/capabilities/aramid.webp" alt="" class="card-top-image">
          <div class="card-body">
            <h4>Aramid Prepreg</h4>
          </div>
        </div>
      </div>
      <div class="col-md-2 mb-4">
        <div class="card border-0 shadow rounded-4" style="overflow: hidden;">
          <img src="assets/images/capabilities/pbo.webp" alt="" class="card-top-image">
          <div class="card-body">
            <h4> PBO Prepreg</h4>
          </div>
        </div>
      </div>
      <div class="col-md-2 mb-4">
        <div class="card border-0 shadow rounded-4" style="overflow: hidden;">
          <img src="assets/images/capabilities/cpm5.jpg" alt="" class="card-top-image">
          <div class="card-body">
            <h4> Glass- Carbon
              Hybrid Prepreg</h4>
          </div>
        </div>
      </div>
      <div class="col-md-2 mb-4">
        <div class="card border-0 shadow rounded-4" style="overflow: hidden;">
          <img src="assets/images/capabilities/cpm6.jpg" alt="" class="card-top-image">
          <div class="card-body">
            <h4>Carbon Aramid
              Hybrid Prepreg</h4>
          </div>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">

      <div class="col-md-2 mb-4">
        <div class="card border-0 shadow rounded-4" style="overflow: hidden;">
          <img src="assets/images/capabilities/cpm7.jpg" alt="" class="card-top-image">
          <div class="card-body">
            <h4> Aramid
              Honeycomb</h4>
          </div>
        </div>
      </div>
      <div class="col-md-2 mb-4">
        <div class="card border-0 shadow rounded-4" style="overflow: hidden;">
          <img src="assets/images/capabilities/cpm8.jpg" alt="" class="card-top-image">
          <div class="card-body">
            <h4> Aluminum
              Honeycomb</h4>
          </div>
        </div>
      </div>
      <div class="col-md-2 mb-4">
        <div class="card border-0 shadow rounded-4" style="overflow: hidden;">
          <img src="assets/images/capabilities/form.jpg" alt="" class="card-top-image">
          <div class="card-body">
            <h4> PMI Foam</h4>
          </div>
        </div>
      </div>
      <div class="col-md-2 mb-4">
        <div class="card border-0 shadow rounded-4" style="overflow: hidden;">
          <img src="assets/images/capabilities/cpm9.webp" alt="" class="card-top-image">
          <div class="card-body">
            <h4>Cork</h4>
          </div>
        </div>
      </div>
      <div class="col-md-2 mb-4">
        <div class="card border-0 shadow rounded-4" style="overflow: hidden;">
          <img src="assets/images/capabilities/monolith.webp" alt="" class="card-top-image">
          <div class="card-body">
            <h4>Monolithic</h4>
          </div>
        </div>
      </div>
      <div class="col-md-2 mb-4">
        <div class="card border-0 shadow rounded-4" style="overflow: hidden;">
          <img src="assets/images/capabilities/bonding.webp" alt="" class="card-top-image">
          <div class="card-body">
            <h4> Secondary Bonding,
              Co-Bonding & Co-Curing</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include 'common/contact-section.php';
include 'common/footer.php';

?>