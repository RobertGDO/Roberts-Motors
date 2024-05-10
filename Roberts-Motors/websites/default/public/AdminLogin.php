<?php

require '../templates/loadtemplate.php';

$output = loadtemplate('../templates/admin.html.php',[]);

echo loadtemplate('../templates/layout.html.php', [
	'title' => 'Roberts Motors',
	'output' => $output,
]);