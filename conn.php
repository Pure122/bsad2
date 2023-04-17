<?php
    	//check if the database file exists and create a new if not
    	if(!is_file('register.db')){
    		file_put_contents('register.db', null);
    	}
    	// connecting the database
    	$conn = new PDO('sqlite:register.db');
    	//Setting connection attributes
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	//Query for creating reating the member table in the database if not exist yet.
    	
    ?>