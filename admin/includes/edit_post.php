<?php

if(isset($_GET['m_id'])){
$the_post_id=  $_GET['m_id'];  
    
    
}
     
                    $query="select * from movies WHERE movie_id=$the_post_id ";
                    $select_movie_categories_query=mysqli_query($connection,$query);
                    while($row=mysqli_fetch_assoc($select_movie_categories_query)){
                        $mov_id=$row['movie_id'];
                        $mov_title=$row['movie_title'];
                        $mov_category_id=$row['movie_category_id'];
                        $mov_director=$row['movie_director'];
                        $mov_date=$row['movie_date'];
                        $mov_content=$row['movie_content'];
                        $mov_image=$row['movie_image'];
                        
    }
if(isset($_POST['edit_post']))
   {
    $mov_title=$_POST['title'];
    $mov_director=$_POST['director'];
    $mov_category_id=$_POST['movie_category'];
    $mov_image=$_FILES['image']['name'];
    $mov_image_temp=$_FILES['image']['tmp_name'];
   
    $mov_content=$_POST['movie_content'];
    
    move_uploaded_file($mov_image_temp, "../images/$mov_image");
    
       

  $query = "UPDATE movies SET ";
          $query .="movie_title  = '{$mov_title}', ";
          $query .="movie_category_id = '{$mov_category_id}', ";
          $query .="movie_date =  now(), ";
    
          $query .="movie_content= '{$mov_content}', ";
          $query .="movie_image  = '{$mov_image}' ";
          $query .= "WHERE movie_id = {$the_post_id} ";
       
       $update_post=mysqli_query($connection,$query);
    if(!$update_post){
        die("query failed".mysqli_error($connection));
    }
    
       

}
?>

<form action="" method="post" enctype="multipart/form-data">    
     
     
      <div class="form-group">
         <label for="title">Movie Title</label>
          <input value="<?php echo $mov_title ?>" type="text" class="form-control" name="title">
      </div>

         <div class="form-group">
       <select name="movie_category" id="movie_category">
             <?php
     $query="SELECT * FROM categories";
        $select_categories=mysqli_query($connection,$query);
                 
        while($row=mysqli_fetch_assoc($select_categories)){
            
            $cat_id=$row['cat_id'];
            $cat_title=$row['cat_title'];
            
            echo "<option value'{$cat_id}'>{$cat_title}</option>";
            
        }         
    
    
    
    ?>
             
             
             
             </select>
       
      
      </div>


       <div class="form-group">
       <label for="movie_director">Movie Director</label>
       <input value="<?php echo $mov_director ?>" type="text" class="form-control" name="director">
      
      </div>

      <!-- <div class="form-group">
         <label for="title">Post Author</label>
          <input type="text" class="form-control" name="author">
      </div> -->
      
    <div class="form-group">
   <img  width="100"  src="../images/<?php echo $mov_image; ?>" alt=''>
        <input  type="file" name="image">
    </div>
      
      
      <div class="form-group">
         <label for="movie_content">Movie Content</label>
         <textarea  class="form-control "name="movie_content" id="" cols="30" rows="10"><?php echo $mov_content ?>
       
         </textarea>
      </div>
      
      

       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="edit_post" value="Publish Post">
      </div>


</form>