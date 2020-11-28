<?php
include("libs/header.php");

if (isset($_GET['category'])) {
  $categ = mysqli_real_escape_string($dataBase, $_GET['category']);
  $query = "SELECT * FROM POST WHERE category='$categ' ORDER BY post_id DESC";
} else {
  $query = "SELECT * FROM post ORDER BY post_id DESC";
}


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
          <div class="card col-sm-4" style="  width: 20rem;height:25rem;margin-bottom: 10px;background-image: linear-gradient( 135.9deg,  rgba(109,25,252,1) 16.4%, rgba(125,31,165,1) 56.1% );border:2px solid white">
            <!-- background: url(./img/); to card -->
            <div class="card-body text-light">
              <h5 class="card-title"><a style="color:white" href="singlePost.php?id=<?php echo $row['post_id']; ?>">
                  <?php $head = $row['blog_title'];
                  echo substr($head, 0, 15) . " ...";
                  ?>
                </a></h5>
              <h6 class="post-author">by <?php echo $row['author_name']; ?></h6>
              <img src="./img/<?php echo $row['thumbnail'] ?>" alt="postThumbnail" style="width: 16rem; height: 5rem;">
              <p class="card-text">
                <?php $content = $row['blog_content'];
                $ss = substr($content, 0, 90);
                echo $ss . "...";
                ?>
              </p>
              <a href="singlePost.php?id=<?php echo $row['post_id']; ?>"><button style="padding-left: 10px;
    padding-right: 10px;border:none;background:purple" type="button" class="btn  btn-outline-light rounded-pill btn-sm">Read more</button></a>

              <p class="card-text"><?php echo $row['blog_date']; ?></p>
              <div class="py-1 justify-content-center ">
                <a class="social-icons" href="https://<?php echo $row['fb_link']; ?>" target="_blank"><img src="icons/fb.png" alt="Facebook"></a>
                <a class="social-icons" href="https://<?php echo $row['insta_link']; ?>" target="_blank"><img src="icons/insta.png" alt="Instagram"></a>
                <a class="social-icons" href="https://<?php echo $row['twit_link']; ?>" target="_blank"><img src="icons/twitter.png" alt="Twitter"></i></a>
              </div>
            </div>
          </div>
      <?php }
      } else echo "<h4 class='text-light text-center'>No posts available</h4>"; ?>
      <!-- end blog preview card  -->

      <?php
      include('libs/parallax.php');
      include("contact.php");
      include("libs/footer.php");
      ?>