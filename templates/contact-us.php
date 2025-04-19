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
        <form action="#" method="POST" id="contact_form">
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
                <input type="tel" class="form-control" name="phone" placeholder="Phone Number *" pattern="[6789][0-9]{9}" title="Please enter a valid 10-digit mobile number" minlength="10" maxlength="10" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <input type="text" class="form-control" name="company" placeholder="Company">
              </div>
            </div>
            <div class="col-lg-12">
              <div class="mb-5">
                <textarea name="requirements" rows="5" class="form-control" placeholder="Requirements?"></textarea>
              </div>
              <input type="hidden" name="do" value="contactForm">
              <button type="submit" id="contactFormSubmitBtn" class="btn btn-primary">Send Message</button>
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

<script>
  $("#contact_form").on("submit", function(e) {
    e.preventDefault();
    var formData = $(this).serialize();
    $.ajax({
      type: "POST",
      url: "ajax.php",
      data: formData,
      beforeSend: function() {
        $("#contactFormSubmitBtn").prop("disabled", true);
        $("#contactFormSubmitBtn").text("Sending...");
      },
      success: function(res) {
        res = JSON.parse(res);
        console.log(res);
        if (res.msg === "ok") {
          alert("Your message has been sent successfully!");
          $("#contact_form")[0].reset();
        } else {
          alert("There was an error sending your message. Please try again.");
        }
        $("#contactFormSubmitBtn").prop("disabled", false);
        $("#contactFormSubmitBtn").text("Send Message");
      },
      error: function() {
        alert("There was an error sending your message. Please try again.");
      }
    });
  });
</script>