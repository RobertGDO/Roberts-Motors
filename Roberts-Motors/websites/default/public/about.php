<?php

require '../templates/loadtemplate.php';

$output = loadtemplate('../templates/about.html.php',[]);

echo loadtemplate('../templates/layout2.html.php', [
	'title' => 'Robert Motors',
	'output' => $output,
]);