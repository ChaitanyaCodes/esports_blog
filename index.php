<?php
include("libs/header.php");

$query = "SELECT * FROM post ORDER BY post_id DESC";
$posts = $dataBase->query($query);
?>

<?php
include('carousel.php');
?>
</div>

<!-- End of  Header-->
<!-- Start of Main -->
<main>
  <?php
  include('cat.php');
  ?>
  <!-- start container div -->
  <div class="container-fluid my-4">
    <div class="row align-items-center justify-content-evenly">
      <!-- start blog preview cards -->
      <?php if ($posts->num_rows > 0) {
        while ($row = $posts->fetch_assoc()) {
      ?>
          <div class="card col-sm-4" style="  width: 18rem;
    height: 17.5rem;
    margin-bottom: 10px;">
            <!-- background: url(./img/); to card -->
            <div class="card-body">
              <h5 class="card-title"><a href="singlePost.php?id=<?php echo $row['post_id']; ?>">
                  <?php $head = $row['blog_title'];
                  echo substr($head, 0, 15) . " ...";
                  ?>
                </a></h5>
              <h6 class="post-author">by <?php echo $row['author_name']; ?></h6>
              <p class="card-text">
                <?php $content = $row['blog_content'];
                $ss = substr($content, 0, 90);
                echo $ss . "...";
                ?>
              </p>
              <a href="singlePost.php?id=<?php echo $row['post_id']; ?>"><button type="button" class="btn btn-primary btn-sm">Read more</button></a>
              <p class="card-text"><?php echo $row['blog_date']; ?></p>
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
      include("contact.php");
      include("libs/footer.php");
      ?>