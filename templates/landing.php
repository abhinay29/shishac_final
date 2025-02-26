<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Shish Advanced Composites Private Limited is a leading manufacturer dedicated to creating high-performance.">
  <title>Shish Advanced Composites</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
    integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css"
    integrity="sha512-rd0qOHVMOcez6pLWPVFIv7EfSdGKLt+eafXh4RO/12Fgr41hDQxfGvoi1Vy55QIVcQEujUE1LQrATCLl2Fs+ag=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
    html,
    body {
      position: relative;
      height: 100%;
      font-size: 1rem;
      font-family: "Montserrat", serif;
      font-optical-sizing: auto;
      font-weight: 400;
      font-style: normal;
    }

    #loader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #fff;
      z-index: 10000;
      opacity: 1;
      transition: opacity 0.5s ease-in-out;
    }

    #loader.hidden {
      display: none;
      opacity: 0;
      visibility: hidden;
      pointer-events: none;
    }

    .loader-container {
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }

    .loader-container img {
      width: 100px;
      opacity: 0.85;
      margin-bottom: 20px;
    }

    .loader-container h5 {
      font-size: 1rem;
      color: #555;
      animation: blink 1.5s linear infinite;
    }


    @keyframes blink {
      0% {
        opacity: 0;
      }

      50% {
        opacity: 1;
      }

      100% {
        opacity: 0;
      }
    }

    nav {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      display: flex;
      justify-content: space-between;
      z-index: 1000;
      padding-left: 100px;
      padding-right: 100px;
    }

    nav .logo {
      background-color: #ffffff;
      box-shadow: 0 0 15px #0000001a;
      padding: 10px;
      border-bottom-left-radius: 5px;
      border-bottom-right-radius: 5px;
      overflow: hidden;
    }

    nav .logo img {
      width: 100px;
    }

    .swiper {
      width: 100%;
      height: 100%;
      background-color: rgb(13, 24, 36);
      /* perspective: 1000px; */
      position: relative;
    }

    .bgvideo {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
    }

    .bgvideo .image-overlay {
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      background-color: rgba(0, 0, 0, 0.35);
    }

    .bgvideo video {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    /* 
    .landinSlider {
      perspective: 1100px;
    } */

    .swiper-wrapper {
      transform-style: preserve-3d;
      perspective: 1100px;
      height: 100%;
    }

    .swiper-slide {
      width: 100%;
      height: 100vh;
      background: black;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #fff;
      position: relative;
      background-color: transparent;
      /* transform: scale(0.6); */
      transition: all 2s ease;
      -webkit-font-smoothing: antialiased;
      /* transform-origin: center center; */

    }

    .swiper-slide .inner-container {
      position: relative;
      width: 100%;
      height: 100%;
      transform: scale(0.3);
      transition: all 1.5s 0s ease-in-out;
    }

    .swiper-slide.swiper-slide-active .inner-container {
      transition: all 1.5s 0.5s ease-in-out;
    }

    .swiper-slide-next,
    .swiper-slide-prev {
      transform: scale(0.5);
    }

    .swiper-slide-next-2,
    .swiper-slide-prev-2 {
      transform: scale(0.3);
      /* Further scale the next and previous slides */
    }

    .swiper-slide.swiper-slide-active .inner-container {
      transform: scale(1);
    }

    .swiper-slide .image img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .swiper-slide .image {
      width: 100%;
      height: 100%;
      position: relative;
    }

    .swiper-slide video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      object-fit: cover;
      z-index: -1;
    }

    .swiper-slide .image .image-overlay {
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      background-color: rgba(0, 0, 0, 0.75);
    }

    .swiper-slide .video .image-overlay {
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      background-color: rgba(0, 0, 0, 0.65);
    }

    .swiper-slide .content-box {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      max-width: 600px;
      width: 100%;
      background-color: transparent;
      text-align: center;
      padding: 0 1rem;
    }

    .swiper-slide .content-box p {
      text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.5);
    }

    .swiper-slide .content-box h4 {
      font-family: "Montserrat Alternates", serif;
      font-weight: 300 !important;
      font-style: normal;
      font-size: 50px;
    }

    .swiper-slide .content-box a {
      font-size: 1rem;
      text-transform: uppercase;
      color: #000;
      text-decoration: none;
      background-color: #fff;
      padding: 1rem 1.5rem;
      border-radius: 5px;
    }

    .swiper-slide .content-box a i {
      transition: all 0.2s ease;
    }

    .swiper-slide .content-box a:hover i {
      margin-left: 20px !important;
    }

    .swiper-pagination {
      position: absolute;
      top: 50%;
      left: 0 !important;
      right: auto !important;
      transform: translateY(-50%);
      display: flex;
      flex-direction: column;
      padding-left: 30px;
    }

    .swiper-pagination-bullet {
      width: auto;
      height: auto;
      background: transparent;
      border: none;
      margin: 5px 0;
      padding: 5px 10px;
      color: #fff;
      opacity: 0.5 !important;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s, color 0.3s;
      text-align: left !important;
    }

    .swiper-pagination-bullet-active {
      opacity: 1 !important;
    }

    @media (max-width: 768px) {
      nav {
        padding-left: 2rem;
        padding-right: 2rem;
      }

      nav .logo img {
        width: 65px;
      }

      .swiper-pagination {
        top: unset;
        transform: unset;
        bottom: 0;
      }

      .swiper-slide .content-box {
        top: 35%;
      }

      .swiper-pagination-bullets {
        top: unset !important;
        transform: unset !important;
        bottom: 40px
      }

      .swiper-slide .content-box h4 {
        font-size: 30px;
      }

      .swiper-slide .content-box p {
        font-size: 14px;
      }
    }
  </style>
</head>

<body>

  <div id="loader">
    <div class="loader-container">
      <img src="assets/images/logo_shishac_new.png" alt="Logo">
      <h5>Loading...</h5>
    </div>
  </div>

  <nav>
    <div class="logo">
      <img src="assets/images/logo_shishac_new.png" alt="Logo">
    </div>
  </nav>

  <div class="swiper landingSlider">
    <div class="bgvideo">
      <div class="image-overlay"></div>
      <video src="assets/contents/bg5.mp4" autoplay muted loop playsinline>
      </video>
    </div>
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="inner-container">
          <div class="video">
            <div class="image-overlay"></div>
            <video src="assets/contents/v3.mp4" autoplay muted loop playsinline>
              Your browser does not support the video tag.
            </video>
          </div>

          <div class="content-box">
            <h4 class="mb-4">Welcome to Shish Advanced Composites</h4>
            <p class="mb-5">Discover the possibilities with Shish Advanced Composites. Learn more about our aerospace expertise, cutting-edge solutions, and advanced composite products</p>
            <a href="./home">Discover <i class="fa-solid fa-arrow-right ms-2"></i></a>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="inner-container">
          <div class="video">
            <div class="image-overlay"></div>
            <video src="assets/contents/v2.mp4" autoplay muted loop playsinline>
              Your browser does not support the video tag.
            </video>
          </div>

          <div class="content-box">
            <h4 class="mb-4">About Us</h4>
            <p class="mb-5">Shish Advanced Composites Private Limited is a leading manufacturer dedicated to creating high-performance, customised advanced composite solutions.</p>
            <a href="./about-us">Discover <i class="fa-solid fa-arrow-right ms-2"></i></a>
          </div>
        </div>
      </div>
      <div class="swiper-slide">

        <div class="inner-container">
          <div class="video">
            <div class="image-overlay"></div>
            <video src="assets/contents/v5.mp4" autoplay muted loop playsinline>
              Your browser does not support the video tag.
            </video>
          </div>

          <div class="content-box">
            <h4 class="mb-4">Capabilities</h4>
            <p class="mb-5">Your Integrated Solutions Partner
              At Shish Advanced Composites, we are committed to delivering tailored solutions that address the unique needs of our customers.</p>
            <a href="./capabilities">Discover <i class="fa-solid fa-arrow-right ms-2"></i></a>
          </div>
        </div>
      </div>
      <div class="swiper-slide">

        <div class="inner-container">
          <div class="video">
            <div class="image-overlay"></div>
            <video src="assets/contents/video6.mp4" autoplay muted loop playsinline>
              Your browser does not support the video tag.
            </video>
          </div>

          <div class="content-box">
            <h4 class="mb-4">Facilities</h4>
            <p class="mb-5">Commitment to Excellence
              The advanced facilities at Shish Advanced Composites are meticulously designed to deliver precision engineering solutions and address the dynamic needs of composite manufacturing.</p>
            <a href="./facilities">Discover <i class="fa-solid fa-arrow-right ms-2"></i></a>
          </div>
        </div>
      </div>
      <div class="swiper-slide">

        <div class="inner-container">
          <div class="video">
            <div class="image-overlay"></div>
            <video src="assets/contents/v6.mp4" autoplay muted loop playsinline>
              Your browser does not support the video tag.
            </video>
          </div>

          <div class="content-box">
            <h4 class="mb-4">Sectors</h4>
            <p class="mb-5">By combining high-performance fibers like Carbon and Glass with advanced resin systems, our composites offer exceptional strength-to-weight ratios, high stiffness, corrosion resistance, and durability against environmental challenges.</p>
            <a href="./home#sectors">Discover <i class="fa-solid fa-arrow-right ms-2"></i></a>
          </div>
        </div>
      </div>
      <div class="swiper-slide">

        <div class="inner-container">
          <div class="video">
            <div class="image-overlay"></div>
            <video src="assets/contents/v8.mp4" autoplay muted loop playsinline>
              Your browser does not support the video tag.
            </video>
          </div>

          <div class="content-box">
            <h4 class="mb-4">Contact Us</h4>
            <p class="mb-5">We look forward to partnering with you and helping you achieve your dynamic needs of composite manufacturing.</p>
            <a href="./contact-us">Discover <i class="fa-solid fa-arrow-right ms-2"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"
    integrity="sha512-Ysw1DcK1P+uYLqprEAzNQJP+J4hTx4t/3X2nbVwszao8wD+9afLjBQYjz7Uk4ADP+Er++mJoScI42ueGtQOzEA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <!-- <script>
      gsap.utils.toArray(".swiper-slide").forEach((section, index) => {
        gsap.fromTo(section, {
          opacity: 0,
          scale: 0.8
        }, {
          opacity: 1,
          scale: 1,
          duration: 1.2,
          scrollTrigger: {
            trigger: section,
            start: "top center",
            toggleActions: "play none none reverse"
          }
        });
      });
    </script> -->

  <script>
    // gsap.registerPlugin(ScrollTrigger);

    // Total number of slides
    // const totalSlides = document.querySelectorAll('.swiper-slide').length;

    // // Create a timeline
    // const swiperTimeline = gsap.timeline({
    //   scrollTrigger: {
    //     trigger: '.landingSlider',
    //     start: 'top top',
    //     end: 'bottom bottom',
    //     scrub: true,
    //     pin: true,
    //     onUpdate: (self) => {
    //       // Calculate the active slide based on scroll progress
    //       const progress = self.progress * (totalSlides - 1);
    //       swiper.slideTo(Math.round(progress));
    //     },
    //   },
    // });

    // cards.forEach(function(element, index) {
    // gsap.set(element, {
    //   rotationY: index * 360 / cards.length,
    //   transformOrigin: -radius + " 50% 50%"
    // });
    // gsap.to(element, {
    //   duration: 20,
    //   rotationY: "-=250",
    //   repeat: -1,
    //   ease: "none"
    // });
    // gsap.timeline({
    //   scrollTrigger: {
    //     ease: "none",
    //     trigger: element,
    //     start: "top top",
    //     end: "+=200%",
    //     scrub: true,
    //     animation: seamlessLoop,
    //   }
    // })
    // });
  </script>

  <script>
    var swiper = new Swiper(".landingSlider", {
      loop: true,
      direction: "vertical",
      slidesPerView: 1,
      speed: 1500,
      mousewheel: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function(index, className) {
          const slideTitles = ["01 Welcome", "02 About Us", "03 Capabilities", "04 Facilities", "05 Sectors", "06 Contact Us"]; // Array of your titles
          return `<button class="${className}">${slideTitles[index]}</button>`; // Use button element
        },
      },
    });

    window.addEventListener('load', function() {
      const loader = document.getElementById('loader');
      loader.classList.add('hidden');
    });
  </script>
</body>

</html>