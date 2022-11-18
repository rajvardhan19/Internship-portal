<?php include_once 'config/init.php'; ?>

<?php

$internship = new Internship;
$template = new Template('templates/internship-single.php');
// var_dump($template);

$internship_id =isset($_GET['id']) ? $_GET['id'] : null;


$template->internship = $internship->getInternship($internship_id);
echo $template;