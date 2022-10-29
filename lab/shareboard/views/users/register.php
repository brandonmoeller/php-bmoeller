<div class="row">
  <div class="card col-12" style="margin: 10px;">
    <!-- style="margin: 10px;" | style="width: 18rem;" -->
    <!-- <img src="..." class="card-img-top" alt="..."> -->
    <div class="card-body">
      <h5 class="card-title">Register, User!</h5>
      <p class="card-text">Join to be able to share something on Shareboard.</p>
      <form method="post" action="<?php htmlentities($_SERVER['PHP_SELF']); ?>">
        <!-- __php $_SERVER['PHP_SELF']; __ -->
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" class="form-control" />
        </div>
        <div class="form-group">
          <label>Email Address</label>
          <input type="text" name="email" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control" />
        </div>
        <input class="btn btn-primary" name="submit" type="submit" value="Submit" />
      </form>
    </div>
  </div>
</div>