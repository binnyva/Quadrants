<?php
require("./common.php");

$crud = new Crud("Question");
$crud->render();


/// Bulk add
// $questions = <<<END
// People focus
// Empathetic
// Intuitive towards others 
// Expressive when Communicating 
// Caring and supportive
// Experiances strong emotions
// Likes personal interation 
// Enthusiastic
// END;

// $quadrant = 'R2';
// $all_questions = explode("\n", $questions);
// foreach($all_questions as $q) {
// 	$q = trim($q);
// 	if(!$q) continue;
// 	$sql->insert("Question", array('question'=> $q, 'quadrant'=>$quadrant));
// }
// print "Inserted " . count($all_questions) . " questions to $quadrant";

