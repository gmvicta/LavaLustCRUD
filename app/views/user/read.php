<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LavaLust CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <style>
    body {
        background-color: #f8f9fa;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #343a40;
        line-height: 1.6;
    }
    h2 {
        color: black;
        text-align: center;
        margin-bottom: 30px;
        font-size: 2.5rem;
        font-weight: 700;
    }
    .btn-primary {
        background-color: #28a745;
        border-color: #218838;
        color: white;
        transition: background-color 0.3s, border-color 0.3s;
    }
    .btn-primary:hover {
        background-color: #218838;
        border-color: #1e7e34;
        box-shadow: 0 4px 10px rgba(40, 167, 69, 0.3);
    }
    .btn-danger {
        background-color: #dc3545;
        border-color: #c82333;
        color: white;
        transition: background-color 0.3s, border-color 0.3s;
    }
    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
        box-shadow: 0 4px 10px rgba(220, 53, 69, 0.3);
    }
    .container {
        margin-top: 50px;
        padding: 30px;
        border-radius: 8px;
        background-color: #ffffff;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 30px;
    }
    thead {
        background-color: #f1f1f1; /* Header background */
        color: #212529; /* Dark text for header */
    }
    th, td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #dee2e6; /* Light border for rows */
    }
    tr:hover {
        background-color: #f8f9fa; /* Light background on row hover */
    }
    @media (max-width: 768px) {
        h2 {
            font-size: 1.8rem;
        }
        .container {
            padding: 15px;
        }
        table {
            font-size: 0.9rem;
        }
    }
</style>
</head>
<body>
    <div class="container my-5">
        <h2 class="text-center">Main Menu</h2>
        <a class="btn btn-primary mb-4" role="button" href="<?= site_url('user/create'); ?>">Create User</a>

        <table id="userTable" class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($user as $u): ?>
                    <tr>
                        <td><?= $u['id'] ?></td>
                        <td><?= $u['gmv_last_name'] ?></td>
                        <td><?= $u['gmv_first_name'] ?></td>
                        <td><?= $u['gmv_email'] ?></td>
                        <td><?= $u['gmv_gender'] ?></td>
                        <td><?= $u['gmv_address'] ?></td>
                        <td>
                            <a href="<?= site_url('user/update/' . $u['id']); ?>">Update</a>
                            <a href="<?= site_url('user/delete/' . $u['id']); ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#userTable').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true,
                "pageLength": 5
            });
        });
    </script>
</body>

</html>