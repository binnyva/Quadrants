<?php
require("./common.php");

$quads = array(
	'L1'	=> $sql->getAll("SELECT * FROM Question WHERE quadrant='L1'"),
	'R1'	=> $sql->getAll("SELECT * FROM Question WHERE quadrant='R1'"),
	'L2'	=> $sql->getAll("SELECT * FROM Question WHERE quadrant='L2'"),
	'R2'	=> $sql->getAll("SELECT * FROM Question WHERE quadrant='R2'")
);

if(!empty($_REQUEST['user_id'])) {
	$name = $sql->getOne("SELECT name FROM User WHERE id=$_REQUEST[user_id]");
	$answers = $sql->getById("SELECT question_id,value FROM Answer WHERE user_id=$_REQUEST[user_id]");
}

render();