<?php include_once 'config/init.php'; ?>

<?php

$internship = new Internship;
$template = new Template('templates/frontpage.php');
// var_dump($template);

$template->title = 'Latest Internships';
// var_dump($template);
$template->internships = $internship->getALLInternships();
// $hello = $internship->getALLInternships();
// var_dump($hello);
// $template->internships = $internship->testing();
echo $template;