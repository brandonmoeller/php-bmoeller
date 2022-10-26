<div>
  <a class="btn btn-info btn-share" href="<?php echo ROOT_PATH; ?>shares/add">Share Something</a>
  <div class="clearfix"></div>
  <?php foreach ($viewmodel as $item) :; ?>
    <div class="card text-bg-secondary mb-3" style="max-width: 18rem; float: left; margin-right:10px;">
      <div class="card-header">
        <h3><?php echo $item['title']; ?></h3>
      </div>
      <div class="card-body">
        <small class="card-text"><?php echo $item['create_date']; ?></small>
        <hr>
        <p class="card-text"><?php echo $item['body']; ?></p>
        <br>
        <a class="btn btn-dark" href="<?php echo $item['link']; ?>" target="_blank">Go to shared website</a>
      </div>
    </div>

<?php endforeach; ?>
</div>