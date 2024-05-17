<?php

require '../templates/loadtemplate.php';

$output = loadtemplate('../templates/clear.html.php',[]);

echo loadtemplate('../templates/layout.html.php', [
	'title' => 'Robert Motors',
	'output' => $output,
]);