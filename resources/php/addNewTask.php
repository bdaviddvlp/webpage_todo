<?php require_once "conndb.php"; ?>
<?php include "header.php"; ?>

<form method="post" action="taskManager.php">
    <?php include "ncTaskTable.php"; ?>
    <div class="container col-lg-3">
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Title</span>
      </div>
      <input type="text" name="title" class="form-control">
    </div>
    <div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Date</span>
    </div>
    <input type="date" name="date" class="form-control">
    </div>
        <input type="submit" value="Add" name="submit" class="btn btn-primary wth">
        <a href="../../index.php" class="btn btn-primary col wth">Back</a>
    
  </div>
  

  </form>
  
  

<?php include "footer.php"; ?>
