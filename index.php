<?php
include "includes/db.php";
?>


<?php
include "includes/header.php";
?>
    <!-- Navigation -->
   <?php
include "includes/navigation.php";
?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <?php
                
                $query="select * from movies";
                    $select_movie_categories_query=mysqli_query($connection,$query);
                    while($row=mysqli_fetch_assoc($select_movie_categories_query)){
                        $mov_title=$row['movie_title'];
                        $mov_director=$row['movie_director'];
                        $mov_date=$row['movie_date'];
                        $mov_content=$row['movie_content'];
                        $mov_image=$row['movie_image'];
                        
                        ?>
                 
                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $mov_title ?> </a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $mov_director ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $mov_date ?> </p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $mov_image;?>" alt="">
                <hr>
                <p><?php echo $mov_content ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                
              <?php } ?>
                
                               <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
         <?php
            include "includes/sidebar.php";
            ?>
            
            

        </div>
        <!-- /.row -->

        <hr>

       <?php
        include "includes/footer.php";
        ?>