<table class="table container wth-full">
    <thead class="thead-dark">
        <tr>
           <th>ID</th>
           <th>Title</th>
           <th>Date to complete</th>
           <th>Date created</th>
        
        </tr>
    </thead>
    <tbody class="">
        
            <?php 
            require_once "conndb.php";
            if($result = $db->query("SELECT * FROM nctasks")){
		      if($result->num_rows){
			     $table = $result->fetch_all(MYSQLI_NUM);
            foreach($table as $row){
				echo '<tr>';
					foreach($row as $record){
						echo '<td>'.$record.'</td>';
                        
					}
				echo '</tr>';  
                
                }
                
              }
                
            }
                 
            ?>
            
        
    </tbody>
</table>