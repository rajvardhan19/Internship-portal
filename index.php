<?php include_once 'config/init.php'; ?>

<?php

$internship = new Internship;
$template = new Template('templates/frontpage.php');


$template->title = 'Latest Internships';
$template->internships = $internship->getALLInternships();
echo $template;