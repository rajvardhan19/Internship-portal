<?php include_once 'config/init.php'; ?>

<?php

$internship = new Internship;

if(isset($_POST['del_id'])){
    $del_id = $_POST['del_id'];
    if($internship->delete($del_id)){
        redirect('index.php', 'Internship Deleted', 'success');
    } else {
        redirect('index.php', 'Internship Not Deleted', 'success');
    }
}

$template = new Template('templates/internship-single.php');
// var_dump($template);

$internship_id =isset($_GET['id']) ? $_GET['id'] : null;


$template->internship = $internship->getInternship($internship_id);
echo $template;