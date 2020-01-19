<?php 
            require_once "conndb.php";
            $today = date("Y-m-d");
            if($result = $db->query("SELECT title FROM nctasks WHERE datecreated='$today'")){
		      if($result->num_rows){
			     $table = $result->fetch_all(MYSQLI_NUM);
            foreach($table as $row){
				echo '<tr>';
					foreach($row as $record){
						echo '<td>'.$record.'</td>';
                        
					}
				echo '</tr>';  
                
                }
                
              } else{
                  
                echo '<tr><td>No task for today</td></tr>';
              }
                
            }
                 
?>


