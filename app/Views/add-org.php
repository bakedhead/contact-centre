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
    <form method="post" id="addname" name="addname" 
    action="<?= site_url('/submit-form') ?>">
      <div class="form-group">
        <label>Organization Name</label>
        <input type="text" name="org_name" class="form-control">
      </div>
      <div class="form-group">
        <label>Organization plan</label>
        <input type="text" name="org_plan" class="form-control">
      </div>
      <div class="form-group">
        <label>Organization lines</label>
        <input type="number" name="org_lines" class="form-control">
      </div>
      

      

      <div class="form-group">
        <button type="submit" class="btn btn-success">Add organization</button>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
        rules: {
          org_name: {
            required: true,
          },
          org_plan: {
            required: true,
          },
          org_line: {
            required: true,
          },
          
        },
        messages: {
          org_name: {
            required: "Name is required.",
          },
          org_plan: {
            required: "plan is required.",
            
          },
          org_line: {
            required: "line is required.",
            
          },
        },
      })
    }
  </script>
</body>

</html>