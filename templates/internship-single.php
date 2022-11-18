<?php include 'inc/header.php'; ?>
    <h2 class="page-header"><?php echo $internship->internship_title; ?> (<?php echo $internship-> location; ?>)</h2>
    <small>Posted By <?php echo $internship->contact_user; ?> on <?php echo $internship->post_date; ?></small>
    <hr>
    <p class="lead"><?php echo $internship->description; ?></p>
    <ul class="list-group">
        <li class="list-group-item"><strong>Department: </strong><?php echo $internship->department; ?></li>
        <li class="list-group-item"><strong>Credits: </strong><?php echo $internship->credit; ?></li>
        <li class="list-group-item"><strong>Contect Email: </strong><?php echo $internship->contact_email; ?></li>
    </ul>
    <br><br>
    <a href="index.php">Go Back</a>
    <br><br>

<?php include 'inc/footer.php'; ?>