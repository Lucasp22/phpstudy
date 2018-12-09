<?php require APPROOT . '/views/inc/header.php'; ?>

  <a href="<?php echo URLROOT; ?>/posts" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>

  <div class="card card-body bg-light mt-5">
    <h2>Add Post</h2>
    <h3>Create a post with this form</h3>
    <form action="<?php echo URLROOT; ?>/posts/add" method="post">

      <div class="form-group">
        <label for="model">Model: <sup>*</sup></label>
        <input type="text" name="model" class="form-control form-control-lg <?php echo (!empty($data['model_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['model']; ?>">
        <span class="invalid-feedback"><?php echo $data['model_err']; ?></span>
      </div>

      <div class="form-group">
        <label for="price">Price: <sup>*</sup></label>
        <input type="text" name="price" class="form-control form-control-lg <?php echo (!empty($data['price_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['price']; ?>">
        <span class="invalid-feedback"><?php echo $data['price_err']; ?></span>
      </div>

      <div class="form-group">
        <label for="mileage">Mileage: <sup>*</sup></label>
        <input type="text" name="mileage" class="form-control form-control-lg <?php echo (!empty($data['mileage_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['mileage']; ?>">
        <span class="invalid-feedback"><?php echo $data['mileage_err']; ?></span>
      </div>

      <div class="form-group">
        <label for="engine">Engine capacity: <sup>*</sup></label>
        <input type="text" name="engine" class="form-control form-control-lg <?php echo (!empty($data['engine_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['engine']; ?>">
        <span class="invalid-feedback"><?php echo $data['engine_err']; ?></span>
      </div>

      <div class="form-group">
        <label for="brand">Brand: <sup>*</sup></label>
        <input type="text" name="model" class="form-control form-control-lg <?php echo (!empty($data['brand_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['brand']; ?>">
        <span class="invalid-feedback"><?php echo $data['model_err']; ?></span>
      </div>

      <div class="form-group">
        <label for="year">Year: <sup>*</sup></label>
        <input type="text" name="year" class="form-control form-control-lg <?php echo (!empty($data['year_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['year']; ?>">
        <span class="invalid-feedback"><?php echo $data['year_err']; ?></span>
      </div>

      <div class="form-group">
        <label for="body">Comment: <sup>*</sup></label>
        <textarea name="body" class="form-control form-control-lg <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>"><?php echo $data['body']; ?></textarea>
        <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
      </div>




      <input type="submit" class="btn btn-success" value="Submit">
    </form>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
