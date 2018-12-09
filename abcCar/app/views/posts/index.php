<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="row">
    <div class="col-md-6">
      <h1>Posts</h1>
    </div>
    <div class="col-md-6">
      <a href="<?php echo URLROOT; ?>/posts/add" class="btn btn-primary pull-right">
        <i class="fas fa-pencil-alt"></i> Add Post
      </a>
    </div>
  </div>
  <?php foreach($data['posts'] as $post) : ?>
    <div class="card card-body mb-3">
      <h4 class="card-title"><?php echo $post->brand; ?> - <?php echo $post->model; ?> </h4>
      <div class="bg-light p-2 mb-3">
        Created at: <?php echo $post->postCreated; ?>
      </div>
      <div class="bg-light p-2 mb-3">
          Year: <?php echo $post->year; ?>
      </div>
      <div class="bg-light p-2 mb-3">
        Engine Capacity: <?php echo $post->engine; ?>
      </div>
      <div class="bg-light p-2 mb-3">
        Mileage: <?php echo $post->mileage; ?>
      </div>
      <div class="bg-light p-2 mb-3">
          Price: AUD <?php echo $post->price; ?>
      </div>
      <div class="bg-light p-2 mb-3">
          Comment: <?php echo $post->body; ?>
      </div>
      <a href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->postId; ?>" class="btn btn-dark">More</a>
    </div>
  <?php endforeach; ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>
