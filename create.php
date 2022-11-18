<?php include_once 'config/init.php'; ?>

<?php
$internship = new Internship;

if(isset($_POST['submit'])){
    $data = array();
    $data['internship_title'] = $_POST['internship_title'];
    $data['department'] = $_POST['department'];
    $data['category_id'] = $_POST['category'];
    $data['description'] = $_POST['description'];
    $data['location'] = $_POST['location'];
    $data['credit'] = $_POST['credit'];
    $data['contact_email'] = $_POST['contact_email'];
    $data['contact_user'] = $_POST['contact_user'];

    if($internship->create($data)){
        redirect("index.php", 'Your internship is listed', 'success');
    } else {
        redirect("index.php", 'Something went wrong', 'error');
    }
}

$template = new Template('templates/internship-create.php');
// var_dump($template);

$template->categories = $internship->getCategories();
echo $template;