<div class="row">
  <div class="card col-12" style="margin: 10px;">
    <!-- style="margin: 10px;" | style="width: 18rem;" -->
    <!-- <img src="..." class="card-img-top" alt="..."> -->
    <div class="card-body">
      <h5 class="card-title">Share Something</h5>
      <p class="card-text">Use this form to share something on Shareboard.</p>
      <form method="post" action="<?php htmlentities($_SERVER['PHP_SELF']); ?>">
        <!-- __php $_SERVER['PHP_SELF']; __ -->
        <div class="form-group">
          <label>Share Title</label>
          <input type="text" name="title" class="form-control" />
        </div>
        <div class="form-group">
          <label>Body</label>
          <textarea name="body" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <label>Link</label>
          <input type="text" name="link" class="form-control" />
        </div>
        <input class="btn btn-primary" name="submit" type="submit" value="Submit" />
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Cancel</a>
      </form>
    </div>
  </div>
</div>