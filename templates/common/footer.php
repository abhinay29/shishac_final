<footer>
  <div class="footer-container">
    <div class="container py-5">
      <div class="row">
        <!-- Footer Left -->
        <div class="footer-left col-12 col-md-3 text-center text-md-start mb-3 mb-md-0 pt-4">
          <img src="assets/images/logo_shishac_new.png" alt="Logo" class="img-fluid">
        </div>

        <!-- Footer Middle -->
        <div class="footer-middle col-12 col-md-3 mb-3 mb-md-0 pt-4">
          <h5 class="fw-bold">Quick Links</h5>
          <ul>
            <li><a href="<?= $site_url; ?>">Home</a></li>
            <li><a href="<?= $site_url; ?>/about-us">About Us</a></li>
            <li><a href="<?= $site_url; ?>/capabilities">Capabilities</a></li>
            <li><a href="<?= $site_url; ?>/facilities">Facilities</a></li>
            <li><a href="<?= $site_url; ?>/contact-us">Contact Us</a></li>
            <li><a href="<?= $site_url; ?>/careers">Careers</a>
            </li>
          </ul>
        </div>

        <div class="footer-middle col-12 col-md-3 mb-3 mb-md-0 pt-4">
          <h5 class="fw-bold">Sectors</h5>
          <ul>
            <li><a href="<?= $site_url; ?>/aerospace">Aerospace</a></li>
            <li><a href="<?= $site_url; ?>/motorsports">Motorsports</a></li>
            <li><a href="<?= $site_url; ?>/automotive">Automotive</a></li>
            <li><a href="<?= $site_url; ?>/railways">Railways</a></li>
            <li><a href="<?= $site_url; ?>/space">Space</a></li>
            <li><a href="<?= $site_url; ?>/other-industries">Other Industries</a></li>
            </li>
          </ul>
        </div>

        <!-- Footer Right -->
        <div class="footer-right col-12 col-md-3 text-start text-md-end pt-4">
          <h5 class="fw-bold mb-4">Get in Touch</h5>
          <div class="mb-3">
            <a href="tel:+919380262625">+91 93802 62625</a>
          </div>
          <div class="mb-3">
            <a href="mailto:connect@shishac.com">connect@shishac.
              com</a>
          </div>
          <div class="social-icons mb-2">
            <a href="https://www.linkedin.com/company/shishac/" target="_blank"><i
                class="fa-brands fa-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Bottom -->
  <div class="bg-dark">
    <div class="container">
      <div class="text-white py-4 d-flex justify-content-center justify-content-md-between flex-column flex-md-row fw-normal small text-center text-lg-start">
        <p class="mb-3 mb-md-0">© <?php echo date('Y'); ?> SAC. All rights reserved.</p>
        <p class="mb-3 mb-md-0"><a href="privacy-policy" class="text-light">Privacy Policy</a></p>
        <p class="mb-0">Designed & Developed by <a href="https://www.brandsbees.com/" class="text-warning"
            target="_blank">BrandsBees</a>
        </p>
      </div>
    </div>
  </div>
</footer>

<div class="connect-btn-box">
  <div class="whatsapp">
    <a href="https://wa.me/919380262625?text=Hi" target="_blank">
      <i class="fa-brands fa-square-whatsapp"></i>
    </a>
  </div>
  <div class="calling">
    <a href="tel:+919380262625" target="_blank">
      <i class="fa-solid fa-square-phone"></i>
    </a>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"
  integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"
  integrity="sha512-Ysw1DcK1P+uYLqprEAzNQJP+J4hTx4t/3X2nbVwszao8wD+9afLjBQYjz7Uk4ADP+Er++mJoScI42ueGtQOzEA=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="assets/js/main.js?v=1.1"></script>
<script>
  window.addEventListener('load', function() {
    const loader = document.getElementById('loader');
    loader.classList.add('hidden');
  });
</script>

<script>
  window.onload = function() {
    // Reset the form fields when the page loads
    document.getElementById("ctaForm").reset();
  };
</script>

<script>
  $('#ctaForm').on('submit', function(e) {
    e.preventDefault();
    var formData = $(this).serialize();
    $.ajax({
      type: 'POST',
      url: 'ajax.php',
      data: formData,
      beforeSend: function() {
        $('#ctaFormSubmitBtn').prop('disabled', true).html('Sending...');
      },
      success: function(res) {
        res = JSON.parse(res);
        if (res.msg === 'ok') {
          alert('Your message has been sent successfully!');
          $('#ctaForm')[0].reset();
        } else {
          alert('There was an error sending your message. Please try again.');
        }
        $('#ctaFormSubmitBtn').prop('disabled', false).html('Submit <i class="fa-regular fa-paper-plane ms-2"></i>');
      },
      error: function() {
        alert('There was an error sending your message. Please try again.');
      }
    });
  });
</script>

</body>

</html>