<?php
	
	// Include the class & constructor
	include_once('init.php');
	
	// Demo data
	$task_id = "ACPtABZ9y-Q";
	$note = "Here goes the note that you want to add to your wunderlist\n\rTest!";
	
	// Add the new task
	$addNoteToTask = $wunderlist->addNoteToTask($task_id, $note);
	
	// The task details are returned if the request was succesfull
	echo '<pre>';
	var_dump($addNoteToTask);
