<?php
session_start();
session_destroy();
ob_start();
$content = ob_get_clean();

require '../templates/loadtemplate.php';

$output = loadtemplate('../templates/logout.html.php',[]);

echo loadtemplate('../templates/layout.html.php', [
	'title' => 'Robert Motors',
	'output' => $output,
]);