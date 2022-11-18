<?php include 'inc/header.php'; ?>
    <h2 class="page-header">Create Internship Listing</h2>
    <form method="post" action="create.php">
        <div class="form-group">
            <Label>Department</Label>
            <input type="text" class="form-control" name="department">
        </div>
        <div class="form-group">
            <Label>Category</Label>
            <select name="category" class="form-control">
                <option value="0">Choose category</option>
                <?php foreach($categories as $category): ?>
                <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <Label>Internship Title</Label>
            <input type="text" class="form-control" name="internship_title">
        </div>
        <div class="form-group">
            <Label>Description</Label>
            <textarea class="form-control" name="description"></textarea>
        </div>
        <div class="form-group">
            <Label>Location</Label>
            <input type="text" class="form-control" name="location">
        </div>
        <div class="form-group">
            <Label>Credits</Label>
            <input type="text" class="form-control" name="credit">
        </div>
        <div class="form-group">
            <Label>Contact Name</Label>
            <input type="text" class="form-control" name="contact_user">
        </div>
        <div class="form-group">
            <Label>Contact Email</Label>
            <input type="text" class="form-control" name="contact_email">
        </div>
        <input type="submit" class="btn btn-success" value="Submit" name="submit">
    </form>
<?php include 'inc/footer.php'; ?>