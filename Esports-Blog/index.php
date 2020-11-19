<?php 
    include("libs/header.php");

    $query= "SELECT * FROM post";
    $posts = $dataBase->query($query);
?>  
<!-- start blog preview cards -->
  <?php if($posts->num_rows > 0){
    while($row = $posts->fetch_assoc()){
    ?>
    <div class="card col-sm-4" style="width: 18rem; ">
      <!-- background: url(./img/); to card -->
      <div class="card-body">
        <h5 class="card-title"><a href="singlePost.php?id=<?php echo $row['post_id'];?>"><?php echo $row['blog_title'];?></a></h5>
        <h6 class="post-author">by <?php echo $row['author_name'];?></h6>
        <p class="card-text">
        <?php $content = $row['blog_content'];
              echo substr($content , 0 , 150)."...";
        ?>
        </p>
        <p class="card-text"><?php echo $row['blog_date'];?></p>
        <div class="py-1 justify-content-center">
          <a href="https://<?php echo $row['fb_link'];?>" target="_blank">
            <i class="fa fa-facebook-square fa-lg pl-2" aria-hidden="true"></i
          ></a>
          <a href="https://<?php echo $row['insta_link'];?>" target="_blank"
            ><i class="fa fa-instagram fa-lg pl-2" aria-hidden="true"></i
          ></a>
          <a href="https://<?php echo $row['twit_link'];?>" target="_blank"
            ><i class="fa fa-twitter fa-lg pl-2" aria-hidden="true"></i
          ></a>
        </div>
      </div>
    </div>
  <?php } }?>
    <!-- end blog preview card  -->
<?php 
    include("libs/contact.html");
    include("libs/footer.php");
?>  