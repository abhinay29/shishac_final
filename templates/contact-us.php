<?php

$page_title = "Contact Us";

include 'common/header.php';

?>

<section class="section-padding-60 bg-light"></section>

<section class="bg-light">
  <div class="container-fluid ps-lg-0">
    <div class="row">
      <div class="col-lg-4">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3712.761740105693!2d72.9940164!3d21.4778634!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be03d1a59ed38bb%3A0x4fe861fae7f113f4!2sShish%20Advanced%20Composites!5e0!3m2!1sen!2sin!4v1739266232308!5m2!1sen!2sin"
          width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="col-lg-4 ps-lg-3 pt-5">
        <h4>Get in touch with us!</h4>
        <p class="mb-4">Send a message, We are always there to help you!</p>
        <!-- 3b19940e-153d-4328-ab10-4e63d8ca1e94 -->
        <form action="https://api.web3forms.com/submit" method="POST" id="contact_form">
          <input type="hidden" name="access_key" value="3b19940e-153d-4328-ab10-4e63d8ca1e94">
          <input type="hidden" name="subject" value="New Contact form Submission from SHISH Advanced Composites Website">
          <input type="hidden" name="from_name" value="Webmaster - SHISH Advanced Composites">
          <input type="checkbox" name="botcheck" id="" style="display: none;">
          <input type="hidden" name="redirect" value="https://web3forms.com/success">
          <div class="row">
            <div class="col-lg-6">
              <div class="mb-3">
                <input type="text" class="form-control" name="name" placeholder="Name *" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email *" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <input type="text" class="form-control" name="Phone Number" placeholder="Phone Number *" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <input type="text" class="form-control" name="Company" placeholder="Company">
              </div>
            </div>
            <div class="col-lg-12">
              <div class="mb-5">
                <textarea name="message" rows="5" class="form-control" placeholder="Requirements?"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Send Message</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-4 pt-5 pe-lg-3">
        <ul class="address">
          <li>
            <span class="cu-icon">
              <i class="fa-solid fa-phone"></i>
            </span>
            <a href="tel:+919380262625">+91 93802 62625</a>
          </li>
          <li>
            <span class="cu-icon">
              <i class="fa-solid fa-envelope"></i>
            </span>
            <a href="mailto:connect@shishac.com">connect@shishac.com</a>
          </li>
          <li>
            <span class="cu-icon">
              <i class="fa-solid fa-location-dot"></i>
            </span>
            <h6 class="mb-0 d-inline"> Unit No 1 & 2, Techno Park, Mahuvej, Mangrol, Surat-394125, Gujarat,
              India</>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<?php

include 'common/footer.php';

?>

<script>
  window.onload = function() {
    // Reset the form fields when the page loads
    document.getElementById("contact_form").reset();
  };
</script>