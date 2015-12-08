<?php
require("iframe.php");

$name = $_REQUEST['name'];
$user_id = $sql->insert("User", array('name' => $name));
foreach ($_REQUEST['score'] as $question_id => $value) {
	$sql->insert("Answer", array(
			'question_id'	=> $question_id,
			'value'			=> $value,
			'user_id'		=> $user_id
		));
}

header("Location: index.php?user_id=" . $user_id . "&success=Data+Saved");
