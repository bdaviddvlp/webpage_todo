<?php require_once "conndb.php"; ?>
<?php include "header.php"; ?>

<form method="post" action="">
   <table class="table container wth-full">
    <thead class="thead-dark">
        <tr>
           <th>ID</th>
           <th>Title</th>
           <th>Date to complete</th>
           <th>Date created</th>
           <th>Select</th>
           
        
        </tr>
    </thead>
    <tbody class="">
        
            <?php 
            if($result = $db->query("SELECT * FROM nctasks")){
		      if($result->num_rows){
			     $table = $result->fetch_all(MYSQLI_NUM);
            foreach($table as $row){
				echo '<tr>';
					foreach($row as $record){
						echo '<td>'.$record.'</td>';
                        
					}
                
                
                echo "<td><input type='checkbox' name='checkbox[]'  value='$row[0],'/></td>";
                
    				echo '</tr>';  
                
                }
                if(isset($_POST['delete'])){
                    $checkbox = implode($_POST['checkbox']);
                    $checkbox = substr($checkbox, 0, -1);
                    $delete = "DELETE FROM nctasks WHERE id IN ($checkbox)";
                    
                    $result = mysqli_query($db,$delete);
                    header("Location: deleterecord.php");
                    //print_r($delete);
                }
              }
               
            }
        
        
                 
            ?>
            
        
    </tbody>
</table>
   <div class="container">
     <div class="row justify-content-center">
            <div class="col-2">
                <input type='submit' value='Delete' class='btn btn-danger' name='delete'/>
            </div>
            
            <div class="col-2">
                <a href="../../index.php" class="btn btn-primary">Back</a>
            </div>
            
      </div>
       
        
   </div>
    
  </form>




<?php include "footer.php"; ?>