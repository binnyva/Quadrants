<?php
require('common.php');

$all_users = $sql->getById("SELECT id,name FROM User");

$raw = $sql->getAll("SELECT U.id,U.name, Q.quadrant, SUM(A.value) AS total FROM User U
				INNER JOIN Answer A ON U.id=A.user_id
				INNER JOIN Question Q ON Q.id=A.question_id
					GROUP BY U.id, Q.quadrant");

foreach($raw as $row) {
	$data[$row['id'] . '_' . $row['quadrant']] = $row;
}

render();