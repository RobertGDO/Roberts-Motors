<?php

require '../templates/loadtemplate.php';

$output = loadtemplate('../templates/sellcars.html.php',[]);

echo loadtemplate('../templates/layout.html.php', [
	'title' => 'Robert Motors',
	'output' => $output,
]);