<!DOCTYPE html>
<html>

<head>
  <title>update org</title>
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

    <form method="post" id="update_user" name="update_user" action="<?= site_url('/update') ?>">
      <input type="hidden" name="org_id" id="id" value="<?php echo $user_obj['org_id']; ?>">

      <?php foreach ($user_obj as $column => $value): ?>
        <div class="form-group">
          <label><?php echo ucfirst(str_replace('_', ' ', $column)); ?></label>
          <?php if ($column == 'org_lines'): ?>
            <input type="number" name="<?php echo $column; ?>" class="form-control" value="<?php echo $value; ?>">
          <?php else: ?>
            <input type="text" name="<?php echo $column; ?>" class="form-control" value="<?php echo $value; ?>">
          <?php endif; ?>
        </div>
      <?php endforeach; ?>

      <div class="form-group">
        <button type="submit" class="btn btn-warning">Edit Data</button>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
  if ($("#update_user").length > 0) {
    $("#update_user").validate({
      rules: {
        <?php foreach ($user_obj as $column => $value): ?>,
          '<?php echo $column; ?>': { // Wrap column names in single quotes
            required: true,
          },
        <?php endforeach; ?>,
      },
      messages: {
        <?php foreach ($user_obj as $column => $value): ?>,
          '<?php echo $column; ?>': { // Wrap column names in single quotes
            required: "<?php echo ucfirst(str_replace('_', ' ', $column)); ?> is required.",
          },
        <?php endforeach; ?>,
      },
    })
  }
</script>
</body>
</html>
