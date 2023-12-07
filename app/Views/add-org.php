<!DOCTYPE html>
<html>

<head>
  <title>add org</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 500px;
    }

    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <form method="post" id="addname" name="addname" action="<?= site_url('/submit-form') ?>">

      <?php
      // Assuming $org_columns is an array containing the column names in the 'org' table
      // Replace it with your actual data fetching logic
      $org_columns = ['org_name', 'org_plan', 'org_lines', 'other_column1', 'other_column2']; // Add more columns as needed

      foreach ($org_columns as $column):
      ?>
        <div class="form-group">
          <label><?php echo ucfirst(str_replace('_', ' ', $column)); ?></label>
          <?php if ($column == 'org_lines'): ?>
            <input type="number" name="<?php echo $column; ?>" class="form-control">
          <?php else: ?>
            <input type="text" name="<?php echo $column; ?>" class="form-control">
          <?php endif; ?>
        </div>
      <?php endforeach; ?>

      <div class="form-group">
        <button type="submit" class="btn btn-success">Add organization</button>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#addname").length > 0) {
      $("#addname").validate({
        rules: {
          <?php foreach ($org_columns as $column): ?>,
            <?php echo $column; ?>: {
              required: true,
            },
          <?php endforeach; ?>,
        },
        messages: {
          <?php foreach ($org_columns as $column): ?>,
            <?php echo $column; ?>: {
              required: "<?php echo ucfirst(str_replace('_', ' ', $column)); ?> is required.",
            },
          <?php endforeach; ?>,
        },
      })
    }
  </script>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
  <title>add org</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 500px;
    }

    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <form method="post" id="addname" name="addname" action="<?= site_url('/submit-form') ?>">

      <?php
      // Assuming $org_columns is an array containing the column names in the 'org' table
      // Replace it with your actual data fetching logic
      $org_columns = ['org_name', 'org_plan', 'org_lines', 'other_column1', 'other_column2']; // Add more columns as needed

      foreach ($org_columns as $column):
      ?>
        <div class="form-group">
          <label><?php echo ucfirst(str_replace('_', ' ', $column)); ?></label>
          <?php if ($column == 'org_lines'): ?>
            <input type="number" name="<?php echo $column; ?>" class="form-control">
          <?php else: ?>
            <input type="text" name="<?php echo $column; ?>" class="form-control">
          <?php endif; ?>
        </div>
      <?php endforeach; ?>

      <div class="form-group">
        <button type="submit" class="btn btn-success">Add organization</button>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#addname").length > 0) {
      $("#addname").validate({
        rules: {
          <?php foreach ($org_columns as $column): ?>,
            <?php echo $column; ?>: {
              required: true,
            },
          <?php endforeach; ?>,
        },
        messages: {
          <?php foreach ($org_columns as $column): ?>,
            <?php echo $column; ?>: {
              required: "<?php echo ucfirst(str_replace('_', ' ', $column)); ?> is required.",
            },
          <?php endforeach; ?>,
        },
      })
    }
  </script>
</body>

</html>
