<?php include_once 'config/init.php'; ?>

<?php

$internship = new Internship;
$template = new Template('templates/frontpage.php');
// var_dump($template);

$category =isset($_GET['category']) ? $_GET['category'] : null;

if($category){
    $template->internships = $internship->getByCategory($category);
    $template->title = 'Internships In '. $internship->getCategory($category)->name;
} else {
    $template->title = 'Latest Internships';
    // var_dump($template);
    $template->internships = $internship->getALLInternships();
}


// $hello = $internship->getALLInternships();
// var_dump($hello);
// $template->internships = $internship->testing();
$template->categories = $internship->getCategories();
echo $template;