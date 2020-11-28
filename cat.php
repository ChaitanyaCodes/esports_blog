   <?php
    $catQuery = "SELECT * FROM categories";
    $cate = $dataBase->query($catQuery);
    ?>
   <nav id="cat" class="navbar navbar-expand-sm navbar-dark" style="background: rgb(0,0,0);
background: linear-gradient(0deg, rgba(0,0,0,1) 0%, rgba(62,2,88,1) 30%, rgba(62,2,88,1) 70%, rgba(0,0,0,1) 100%);">
       <div class="container justify-content-evenly">
           <ul class="navbar-nav text-center">
               <?php if (!(isset($_GET['category']))) { ?>
                   <li>
                       <a class="nav-link active" href="index.php">Latest Posts</a>
                   </li>
               <?php } else { ?>
                   <li>
                       <a class="nav-link" href="index.php">Latest Posts</a>
                   </li>
               <?php } ?>

               <?php if ($cate->num_rows > 0) {
                    while ($cat = $cate->fetch_assoc()) {
                        if (isset($_GET['category']) && $cat['category_id'] == $_GET['category']) { ?>
                           <li class="nav-item">
                               <a class="nav-link active" href="index.php?category=<?php echo $cat['category_id'] ?>"><?php echo $cat['category_name'] ?></a>
                           </li>
               <?php } else echo "<li class='nav-item'>
                    <a class='nav-link' href='index.php?category=$cat[category_id]'>$cat[category_name]</a>
                </li>";
                    }
                } ?>
           </ul>
       </div>
   </nav>
   <!-- background: rgb(255,255,255);
    background: linear-gradient(0deg, rgba(255,255,255,1) 0%, rgba(107,61,127,1) 24%, rgba(62,2,88,1) 44%, rgba(62,2,88,1) 54%, rgba(107,61,127,1) 71%, rgba(255,255,255,1) 100%); -->