<!-- Start of Contact Us -->
<section class="section-3 my-4" id="contact-us">
    <h2 class="h1-responsive font-weight-bold text-center my-4 text-white">Contact us</h2>
    <p class="text-center w-responsive mx-auto mb-5 text-white">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.</p>

    <div class="container col-md-6">
        <form action="contactCon.php" method="POST">
            <!-- Start of First Row -->
            <div class="row">
                <!--Start of First Name-->
                <div class="col-md-6">
                    <div class="md-form text-white">
                        <label for="name">Name</label>
                        <input type="text" id="Fname" name="fname" class="form-control" placeholder="First Name">
                    </div>
                </div>
                <!--End of First Name-->
                <!--Start of Last Name-->
                <div class="col-md-6">
                    <div class="md-form">
                        <label></label>
                        <input type="text" id="Lname" name="lname" class="form-control" placeholder="Last Name">
                    </div>
                </div>
                <!--Start of Last Name-->
            </div>
            <!-- End of First Row -->
            <br>
            <!-- Start of Second Row -->
            <div class="row">
                <!-- Start of Email -->
                <div class="col-md-12">
                    <div class="md-form text-white">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="example123@gmail.com">
                    </div>
                </div>
                <!-- End of Email -->
            </div>
            <!-- End of Second Row -->
            <br>
            <!-- Start of Third Row -->
            <div class="row">
                <!-- Start of Message-->
                <div class="col-md-12">
                    <div class="md-form text-white">
                        <label for="message">Your message</label>
                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>

                    </div>
                </div>
                <!-- End of Message -->
            </div>
            <!-- End of Third Row -->
            <br>
            <!-- Start of Send Button -->
            <div class="d-grid gap-2 col-1 mx-auto">
                <button type="submit" class="btn btn-outline-light" name="submit">Send</button>
            </div>
            <!-- End of Send Button -->
        </form>
    </div>
</section>
<!-- End of  Contact Us-->