<section id="contact-us" class="contactSection">
  <div class="container" style="z-index: 2; position: relative;;">
    <div class="row justify-content-end">
      <div class="col-lg-4 px-4 px-lg-2">
        <div class="text-center mb-5">
          <h2 class="text-light section-title border-light">CONTACT US</h2>
        </div>
        <form action="#" method="POST" id="ctaForm">
          <div class="mb-4">
            <input type="text" class="form-control" name="name" placeholder="Name *" required>
          </div>
          <div class="mb-4">
            <input type="tel" class="form-control" name="phone" placeholder="Phone Number *" pattern="[6789][0-9]{9}" title="Please enter a valid 10-digit mobile number" minlength="10" maxlength="10" required>
          </div>
          <div class="mb-4">
            <input type="email" class="form-control" name="email" placeholder="Email ID *" required>
          </div>
          <div class="mb-4">
            <textarea rows="5" class="form-control" name="message" placeholder="Message"></textarea>
          </div>
          <div class="text-center">
            <input type="hidden" name="do" value="ctaForm">
            <button type="submit" id="ctaFormSubmitBtn" class="btn btn-primary w-100 px-5 py-2">Submit <i
                class="fa-regular fa-paper-plane ms-2"></i></button>
          </div>
        </form>
      </div>
    </div>

  </div>
</section>