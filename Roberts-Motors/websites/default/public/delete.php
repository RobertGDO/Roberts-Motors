<?php

require '../templates/loadtemplate.php';

$output = loadtemplate('../templates/delete.html.php',[]);

echo loadtemplate('../templates/layout.html.php', [
	'title' => 'Robert Motors',
	'output' => $output,
]);