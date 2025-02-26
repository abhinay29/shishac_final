<?php

$page_title = "Careers";

include 'common/header.php';

?>

<section class="section-padding-60 bg-light"></section>

<div class="section-padding-60 bg-light">
  <div class="container">
    <h2 class="fw-bold mb-4 section-title">Join Our Team</h2>

    <p class="mb-5">At Shish Advance Composites, we are driven by innovation and excellence in the world of advanced composite materials. We believe that our people are our greatest asset, and we are always looking for passionate and talented individuals to join our team. We offer a dynamic and challenging work environment where you can grow and develop your career.</p>


    <div class="row">
      <div class="col-lg-5 pe-lg-5">
        <h4 class="mb-4">Apply Now</h4>
        <form action="YOUR_FORM_HANDLER_URL" method="POST" enctype="multipart/form-data">

          <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
          </div>

          <div class="mb-3">
            <label for="formFile" class="form-label">Upload Resume:</label>
            <input class="form-control" type="file" id="resume" name="resume" accept=".pdf, .doc, .docx" required>
          </div>

          <div class="mb-3">
            <label for="message" class="form-label">Message:</label>
            <textarea id="message" name="message" class="form-control" rows="4"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Submit Application</button>
        </form>
      </div>
      <div class="col-lg-7 ps-lg-5">
        <img src="assets/images/team.jpg" alt="" class="w-100 rounded-4">
      </div>
    </div>

  </div>
</div>


<?php

include 'common/footer.php';

?>