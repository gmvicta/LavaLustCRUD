<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Update</title>
    <style>
    body {
        background-color: #f8f9fa;
        font-family: 'Arial', sans-serif;
        color: #343a40;
        line-height: 1.6;
    }
    h1 {
        color: black;
        text-align: center;
        margin-bottom: 30px;
        font-size: 2.5rem;
        font-weight: 700;
    }
    .form-control {
        border-radius: 4px;
        border: 1px solid #ced4da;
        transition: border-color 0.3s, box-shadow 0.3s;
    }
    .form-control:focus {
        border-color: #0D6EFD;
        box-shadow: 0 0 8px rgba(40, 167, 69, 0.5);
    }
    .btn-primary {
        background-color: #28a745;
        border-color: #218838;
        color: white;
        transition: background-color 0.3s, transform 0.3s;
    }
    .btn-primary:hover {
        background-color: #218838;
        border-color: #1e7e34;
        transform: translateY(-2px);
    }
    .btn-danger {
        background-color: #dc3545;
        border-color: #c82333;
        color: white;
        transition: background-color 0.3s, transform 0.3s;
    }
    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
        transform: translateY(-2px);
    }
    .container {
        margin-top: 50px;
        max-width: 600px;
        background-color: #ffffff;
        padding: 30px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); 
        border-radius: 12px;
    }
    table {
        margin-top: 20px;
        width: 100%; 
        border-collapse: collapse; 
    }
    td {
        vertical-align: middle; 
        padding: 12px; 
        border-bottom: 1px solid #dee2e6; 
    }
    tr:hover {
        background-color: #f8f9fa;
    }
</style>

</head>
<body>
    <div class="container">
        <div class="page-header">
            <h1>Update User</h1>
        </div>
        <form action="<?= site_url('user/update/' . $user['id']); ?>" method="post">
            <table class='table table-hover table-responsive table-bordered'>
                <tr>
                    <td>Last Name</td>
                    <td><input type='text' name='lname' class='form-control' value="<?= $user['gmv_last_name']; ?>" required /></td>
                </tr>
                <tr>
                    <td>First Name</td>
                    <td><input type='text' name='fname' class='form-control' value="<?= $user['gmv_first_name']; ?>" required /></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type='email' name='email' class='form-control' value="<?= $user['gmv_email']; ?>" required /></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <select name='gender' class='form-control' required>
                            <option value='Male' <?= ($user['gmv_gender'] == 'Male') ? 'selected' : ''; ?>>Male</option>
                            <option value='Female' <?= ($user['gmv_gender'] == 'Female') ? 'selected' : ''; ?>>Female</option>
                            <option value='Other' <?= ($user['gmv_gender'] == 'Other') ? 'selected' : ''; ?>>Other</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><textarea name='address' class='form-control' required><?= $user['gmv_address']; ?></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href='<?= site_url('user/read'); ?>' class='btn btn-danger'>Main Menu</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>