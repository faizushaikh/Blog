<?php
if(isset($_POST['create_post'])){
    $mov_title=$_POST['title'];
    $mov_director=$_POST['director'];
    $mov_category_id=$_POST['movie_category_id'];
    $mov_image=$_FILES['image']['name'];
    $mov_image_temp=$_FILES['image']['tmp_name'];
   $mov_date=date('d-m-y');
    $mov_content=$_POST['movie_content'];
    
    
    move_uploaded_file($mov_image_temp, "../images/$mov_image");
$query="INSERT INTO movies(movie_category_id,movie_title,movie_director,movie_date,movie_content,movie_image) ";

$query .=
    "VALUES({$mov_category_id},'{$mov_title}','{$mov_director}',now(),'{$mov_content}','{$mov_image}') ";
    
    $create_post_query=mysqli_query($connection,$query);
    
     $update_post=mysqli_query($connection,$query);
    if(!$update_post){
        die("query failed".mysqli_error($connection));
    }
    
}



?>













<form action="" method="post" enctype="multipart/form-data">    
     
     
      <div class="form-group">
         <label for="title">Movie Title</label>
          <input type="text" class="form-control" name="title">
      </div>

         <div class="form-group">
       <label for="movie_category">Movie Category Id</label>
       <input type="text" class="form-control" name="movie_category_id">
      
      </div>


       <div class="form-group">
       <label for="movie_director">Movie Director</label>
       <input type="text" class="form-control" name="director">
      
      </div>

      <!-- <div class="form-group">
         <label for="title">Post Author</label>
          <input type="text" class="form-control" name="author">
      </div> -->
      
    <div class="form-group">
         <label for="movie_image">Movie Image</label>
          <input type="file"  name="image">
      </div>

      
      
      <div class="form-group">
         <label for="movie_content">Movie Content</label>
         <textarea class="form-control "name="movie_content" id="" cols="30" rows="10">
         </textarea>
      </div>
      
      

       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="create_post" value="Publish Post">
      </div>


</form>
    