<!-- app/Views/add_dynamic_column.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Dynamic Column</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include your custom CSS if needed -->
    <!-- <link rel="stylesheet" href="path/to/custom.css"> -->
</head>
<body>

<div class="container mt-5">
    <h2>Add New Dynamic Column</h2>
    <form action="<?= base_url('/saveDynamicColumn'); ?>" method="post">
        <div class="form-group">
            <label for="new_column">New Column Name:</label>
            <input type="text" class="form-control" id="new_column" name="new_column" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Dynamic Column</button>
    </form>
</div>

<!-- Include Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
