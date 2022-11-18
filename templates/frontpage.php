<?php include 'inc/header.php'; ?>
      

      <div class="jumbotron">
        <h1>Find an Internship</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <form method="GET" action="index.php">
          <select name="category" class="form-control">
            <option value="0">Choose category</option>
            <?php foreach($categories as $category): ?>
              <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
            <?php endforeach; ?>
          </select>
          <br>
          <input type="submit" class="btn btn-lg btn-success" value="FIND">
        </form><br>
      </div>
      <h3><?php echo $title; ?></h3>
      <?php foreach($internships as $internship): ?>
      <div class="row marketing">
        <div class="col-md-10">
          <h4><?php echo $internship->internship_title; ?></h4>
          <p><?php echo $internship->description; ?></p>
        </div>
        <div class="col-md-2">
            <a class="btn btn-default" href="internship.php?id=<?php echo $internship->id; ?>">View</a>
        </div>
      </div>
      <?php endforeach; ?>
<?php include 'inc/footer.php'; ?>