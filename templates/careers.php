<?php

$page_title = "Careers";

include 'common/header.php';

?>

<section class="section-padding-60 bg-light"></section>

<div class="section-padding-60 bg-light">
  <div class="container">
    <div class="mb-4">
      <h2 class="fw-bold section-title">Join Our Team</h2>
    </div>

    <p class="mb-5">At Shish Advance Composites, we are driven by innovation and excellence in the world of advanced composite materials. We believe that our people are our greatest asset, and we are always looking for passionate and talented individuals to join our team. We offer a dynamic and challenging work environment where you can grow and develop your career.</p>


    <div class="row">
      <div class="col-lg-5 pe-lg-5">
        <h4 class="mb-4">Apply Now</h4>
        <form action="#" method="POST" enctype="multipart/form-data" id="careerForm">
          <input type="hidden" name="do" value="careerForm">
          <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" name="name" class="form-control" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" required>
          </div>

          <div class="mb-3">
            <label for="resume" class="form-label">Upload Resume:</label>
            <input class="form-control mb-2" type="file" id="resume" name="resume" accept=".pdf, .doc, .docx" required>
            <p style="font-style: italic; font-size: 12px;">Max file size allowed is 5 MB, and file type should be .pdf, .doc, or .docx</p>
          </div>

          <div class="mb-3">
            <label class="form-label">Message:</label>
            <textarea name="message" class="form-control" rows="4"></textarea>
          </div>

          <button type="submit" id="resumeSubmitBtn" class="btn btn-primary">Submit Application</button>
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

<script>
  window.onload = function() {
    // Reset the form fields when the page loads
    document.getElementById("careerForm").reset();
  };
</script>

<script>
  $('#careerForm').on('submit', function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
      type: 'POST',
      url: 'ajax.php',
      data: formData,
      contentType: false,
      processData: false,
      beforeSend: function() {
        $('#resumeSubmitBtn').prop('disabled', true).html('Submitting...');
      },
      success: function(response) {
        var data = JSON.parse(response);
        if (data.status === 'ok') {
          alert('Your application has been submitted successfully!');
          $('#careerForm')[0].reset();
        } else {
          alert('Error: ' + data.err);
        }
        $('#resumeSubmitBtn').prop('disabled', false).html('Submit Application');
      },
      error: function(xhr, status, error) {
        console.error(xhr.responseText);
        alert('An error occurred. Please try again later.');
      }
    });
  });
</script>