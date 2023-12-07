<!DOCTYPE html>
<html>

<head>
  <title>update org</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   <style> .container {
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

 

    <form method="post" id="update_user" name="update_user" 
    action="<?= site_url('/update') ?>">
      <input type="hidden" name="org_id" id="id" value="<?php echo $user_obj['org_id']; ?>">

      <div class="form-group">
        <label>oeganisation name</label>
        <input type="text" name="org_name" class="form-control" value="<?php echo $user_obj['org_name']; ?>">
      </div>

      <div class="form-group">
        <label>organisation plan</label>
        <input type="text" name="org_plan" class="form-control" value="<?php echo $user_obj['org_plan']; ?>">
      </div>
      <div class="form-group">
        <label>organisation lines</label>
        <input type="number" name="org_lines" class="form-control" value="<?php echo $user_obj['org_lines']; ?>">
      </div>
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
          org_name: {
            required: true,
          },
         
        },
        messages: {
          org_name: {
            required: "Name is required.",
          },
          
          
        },
      })
    }
  </script>
</body>

</html>