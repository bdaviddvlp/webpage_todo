<?php require_once "resources/php/conndb.php"; ?>
<?php include "includes/header.php"; ?>
 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="resources/php/addNewTask.php">Add new task</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="resources/php/tasksToDo.php">All tasks</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="resources/php/deleterecord.php">Delete tasks</a>
      </li>
      
    </ul>
  </div>
</nav>
   <div class="container">
     <div class="row">
       <div class="col align-self-center mycontainer">
           <h1>Todo list</h1>
       </div>
        <div class="col align-self-start">
            <div class="justify-content-end">
           <div class="col">
                <table class="table text-center">
                    <thead class="thead-light">
                        <tr>
                        <th>Tasks for today (<?php echo date('m-d') ?>)</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php include "resources/php/taskToday.php"; ?> 
                    </tbody>
                </table>
           </div>
        </div>
        </div>
        
        </div>
  </div>
 <?php include "resources/php/footer.php"; ?> 
   
       
       
    
