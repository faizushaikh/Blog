   <div class="col-md-4">
                <!-- Blog Categories Well -->
                <div class="well">
                    <?php
                    $query="select * from categories";
                    $select_sidebar_categories_query=mysqli_query($connection,$query);
                   
                    ?>
                    
                    
                    
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                                <?php
                 while($row=mysqli_fetch_assoc($select_sidebar_categories_query)){
                $cat_title=$row['cat_title'];
                     $cat_id=$row['cat_id'];
             echo "<li><a href='category.php?category=$cat_id'>{$cat_title}</a></li>";
                        
                    }
                    ?>
                                
                            </ul>
                        </div>
                       
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                

            </div>