<?php 
$db->query("CREATE DATABASE tododb ");	 // Hozd létre a "db" nevű adatbázist
        
		$db->query("USE tododb ");				 // Haználd a "db" nevű adatbázist			
        
		$db->query("CREATE TABLE `tododb`.`ctasks` ( 
        `id` INT(3) NULL AUTO_INCREMENT PRIMARY KEY , 
        `title` VARCHAR(255) NOT NULL , 
        `datecompleted` DATE NOT NULL 
        ) "
                  );
        
        // Hozd létre a completedTasks nevű táblát a felsorolt oszlopokkal
		$db->query("CREATE TABLE `tododb`.`nctasks`(
                `id` INT(3) NULL AUTO_INCREMENT PRIMARY KEY ,  
                    `title` VARCHAR(255) NOT NULL , 
                    `datecreated` DATE NOT NULL , 
                    `whentodo` DATE NOT NULL) "
                   
                  ); 
        // Hozd létre a notCompletedTasks nevű táblát a felsorolt oszlopokkal
?>