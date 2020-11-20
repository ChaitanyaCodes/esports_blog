<?php 
    include("libs/header.php");

    $id = mysqli_real_escape_string($dataBase,$_GET['id']);
    $query= "SELECT * FROM post WHERE post_id='$id'";
    $posts = $dataBase->query($query);
?>  
<!-- start blog preview cards -->
  <?php if($posts->num_rows > 0){
    while($row = $posts->fetch_assoc()){
    ?>
    <div class="card col-sm-10">
      <!-- background: url(./img/); to card -->
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['blog_title'];?></h5>
        <h6 class="post-author">Posted by <?php echo $row['author_name'];?> On <?php echo $row['blog_date'];?></h6>
        <p class="card-text">
        <?php $content = $row['blog_content'];
              echo $content;
        ?>
        </p>
        <div class="py-1 justify-content-around">
          <a href="https://<?php echo $row['fb_link'];?>" target="_blank">
            <i class="fa fa-facebook-square fa-2x pl-2" aria-hidden="true"></i
          ></a>
          <a href="https://<?php echo $row['insta_link'];?>" target="_blank"
            ><i class="fa fa-instagram fa-2x pl-2" aria-hidden="true"></i
          ></a>
          <a href="https://<?php echo $row['twit_link'];?>" target="_blank"
            ><i class="fa fa-twitter fa-2x pl-2" aria-hidden="true"></i
          ></a>
        </div>
      </div>
    </div>
  <?php } }?>
    <!-- end blog preview card  -->
<?php 
    // include("contact.html");
    include("libs/footer.php");
?>  