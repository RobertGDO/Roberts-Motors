<?php

require '../templates/loadtemplate.php';

$output = loadtemplate('../templates/contact.html.php',[]);

echo loadtemplate('../templates/layout.html.php', [
	'title' => 'Robert Motors',
	'output' => $output,
]);