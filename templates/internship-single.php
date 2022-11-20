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
    <div class="well">
        <a href="edit.php?id=<?php $internship->id; ?>" class="btn btn-default">Edit</a>
        <form style="display:inline" method="POST" action="internship.php">
            <input type="hidden" name="del_id" value="<?php echo $internship->id;?>">
            <input type="submit" class="btn btn-danger" value="Delete">
        </form>
    </div>

<?php include 'inc/footer.php'; ?>