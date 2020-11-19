<?php 
    include("libs/header.php");
?> 
    <section class="section-3 mb-4" id="create-post">
        <h2 class="h1-responsive font-weight-bold text-center my-4 text-white">Create Blog</h2>

        <div class="container col-md-6">
            <form action="">
                <!-- Start of First Row -->
                <div class="row">
                    <!--Start of First Name-->
                    <div class="col-md-6">
                        <div class="md-form text-white">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <!--End of First Name-->
                    <!--Start of Last Name-->
                    <div class="col-md-6">
                        <div class="md-form text-white">
                            <label for="category">Category</label>
                            <input type="text" id="category" name="category" class="form-control" placeholder="Eg. eSports, PUBG Mobile, PUBG PC, etc..">
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
                            <label for="title">Title of Blog</label>
                            <input type="text" id="title" name="title" class="form-control" placeholder="Title">
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
                            <label for="message">Content</label>
                            <textarea type="text" id="content" name="content" rows="5" class="form-control md-textarea"></textarea>
                        </div>
                    </div>
                    <!-- End of Message -->
                </div>
                <!-- End of Third Row -->
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="md-form text-white">
                            <label for="fb">Add your Facebook link</label>
                            <input type="text" class="form-control" id="fb" name="fb">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="md-form text-white">
                            <label for="fb">Add your Instagram link</label>
                            <input type="text" class="form-control" id="ig" name="ig">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="md-form text-white">
                            <label for="fb">Add your Twitter link</label>
                            <input type="text" class="form-control" id="twitter" name="twitter">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form text-white">
                            <label for="exampleFormControlFile1">Upload your Post Thumbnail Here</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>
                </div>
                <br>
                <!-- Start of Send Button -->
                <div class="d-grid gap-2 col-1 mx-auto">
                    <button type="button" class="btn btn-outline-light">Send</button>
                </div>
                <!-- End of Send Button -->
            </form>
        </div>

    </section>
<?php 
    include("libs/footer.php");
?>