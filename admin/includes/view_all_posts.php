        <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category ID</th>
                        <th>Director</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Content</th>
                        <th>Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    
                    
                    </tr>
                    
                    
                    </thead>  
                    <tbody>
                        <?php
                    $query="select * from movies";
                    $select_movie_categories_query=mysqli_query($connection,$query);
                    while($row=mysqli_fetch_assoc($select_movie_categories_query)){
                        $mov_id=$row['movie_id'];
                        $mov_title=$row['movie_title'];
                        $mov_category_id=$row['movie_category_id'];
                        $mov_director=$row['movie_director'];
                        $mov_date=$row['movie_date'];
                        $mov_content=$row['movie_content'];
                        $mov_image=$row['movie_image'];
                        
                        
                        echo "<tr>";
                        echo "<td>$mov_id</td>";
                        
        $query = "SELECT * FROM categories WHERE cat_id = {$mov_category_id} ";
        $select_categories_id = mysqli_query($connection,$query);  

        while($row = mysqli_fetch_assoc($select_categories_id)) {
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];

        
        echo "<td>{$cat_title}</td>";
            
            
        }
                    echo "<td>$mov_director</td>";
                            echo "<td>$mov_title</td>";
                            echo "<td><img width='100' src='../images/$mov_image' alt='image'</td>";
                        echo "<td>$mov_content</td>";
                            echo "<td>$mov_date</td>";
                        
        echo "<td><a href='posts.php?source=edit_post&m_id={$mov_id}'>Edit</a></td>";                
        echo "<td><a href='posts.php?delete={$mov_id}'>Delete</a></td>";
                
                            
                            
                        echo "</tr>" ;       
                    }
                ?>
                    </tbody>
                        
                        
                        </table>

<?php
if(isset($_GET['delete'])){
    $the_movie_id= $_GET['delete'];
    $query="DELETE FROM movies WHERE movie_id={$the_movie_id} ";
    $delete_query=mysqli_query($connection,$query);
    
    
}



?>














