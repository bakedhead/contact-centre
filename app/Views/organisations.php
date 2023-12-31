<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>organisations</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h1>organisations</h1>

    <div class="d-flex justify-content-end">
        <a href="<?php echo site_url('/add-org') ?>" class="btn btn-primary">Add a Name & email</a>
    </div>

    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
    }
    ?>

    <div class="mt-3">
        <table class="table table-bordered" id="users-list">
            <thead>
                <tr>
                    <?php foreach(array_keys($users[0]) as $column): ?>
                        <th><?php echo $column; ?></th>
                    <?php endforeach; ?>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if($users): ?>
                    <?php foreach($users as $user): ?>
                        <tr>
                            <?php foreach($user as $value): ?>
                                <td><?php echo $value; ?></td>
                            <?php endforeach; ?>
                            <td>
                                <a href="<?php echo base_url('editorg/'.$user['org_id']);?>" class="btn btn-warning">Edit</a>
                                <a href="<?php echo base_url('delete/'.$user['org_id']);?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#users-list').DataTable();
    } );
</script>
</body>
</html>
