<?php
include("libs/header.php");

$id = mysqli_real_escape_string($dataBase, $_GET['id']);
$query = "SELECT * FROM post WHERE post_id='$id'";
$posts = $dataBase->query($query);
?>
<!-- </div> -->

<!-- End of  Header-->
<!-- Start of Main -->
<main>
  <!-- start container div -->
  <div class="container-fluid my-4">
    <div class="row align-items-center justify-content-evenly">
      <!-- start blog preview cards -->
      <?php if ($posts->num_rows > 0) {
        while ($row = $posts->fetch_assoc()) {
      ?>
          <div class="card col-sm-10">
            <!-- background: url(./img/); to card -->
            <div class="card-body">
              <h5 class="card-title"><?php echo $row['blog_title']; ?></h5>
              <h6 class="post-author">Posted by <?php echo $row['author_name']; ?> On <?php echo $row['blog_date']; ?></h6>
              <p class="card-text">
                <?php $content = $row['blog_content'];
                echo $content;
                ?>
              </p>
              <div class="py-1 justify-content-center ">
                <a class="social-icons" href="https://<?php echo $row['fb_link']; ?>" target="_blank"><img src="icons/fb.png" alt="Facebook"></a>
                <a class="social-icons" href="https://<?php echo $row['insta_link']; ?>" target="_blank"><img src="icons/insta.png" alt="Instagram"></a>
                <a class="social-icons" href="https://<?php echo $row['twit_link']; ?>" target="_blank"><img src="icons/twitter.png" alt="Twitter"></i></a>
              </div>
            </div>
          </div>
      <?php }
      } ?>
      <!-- end blog preview card  -->
      <?php
      // include("contact.html");
      include("libs/footer.php");
      ?>