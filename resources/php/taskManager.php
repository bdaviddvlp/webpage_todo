<?php require_once "conndb.php"; ?>
<?php
    $isSubmitted = isset($_POST['submit']);
    $isTitle = isset($_POST['title']);
    $isDate = isset($_POST['date']);

    if($isSubmitted && $isTitle && $isDate){

    $title = $_POST['title'];
    $currentDate = date("Y-m-d");
    $date = $_POST['date'];
    
    $db->query("INSERT INTO nctasks (id, title, datecreated, whentodo) VALUES (NULL, '$title', '$date', '$currentDate')");
    header("Location: addNewTask.php");
}
        else{
        
		$titleError = 'Empty title!';
		$dateError = 'Empty date!';
		if(empty($title)){echo $titleError.'<br />';}
		if(empty($date)){echo $dateError.'<br />';}  // Hibaüzenetek, ha valami nem teljesülne
        echo "Back to add new task: <a href='addNewTask.php'>Click here</a>";
		
	}
    
       
?>
