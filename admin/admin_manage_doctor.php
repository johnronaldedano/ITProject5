<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="../css/admin_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body>
    <div class="d-flex">
    <?php include '../includes/sidebar.php'; ?>

            <div class="flex-grow-1 p-4">
        <?php include '../includes/toggle.php'; ?>
        <div class="mb-5 mt-5">
            <h2 class="fw-bold">Dental Patient Record Management System</h2>


                     <div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <span class="fw-bold fs-5">All Dentists:</span>
            <span class="text-primary fw-bold"> 2 </span>
        </div>
        <button class="btn btn-primary"><i class="bi bi-person-plus me-2"></i>Add new patient</button>
    </div>
    <div class="card p-3">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <div>
                <button class="btn btn-outline-warning btn-sm me-2">Edit</button>
                <button class="btn btn-outline-danger btn-sm">Delete</button>
            </div>
            <button class="btn btn-light btn-sm"><i class="bi bi-gear"></i> Table settings</button>
        </div>
        <div class="table-responsive">
            <table class="table align-middle">

<thead class="table-light">
    <tr>
        <th scope="col"> Action </th>
        <th scope="col">Full Name</th>
        <th scope="col">Age</th>
        <th scope="col">Gender</th>
        <th scope="col">Contact</th>
        <th scope="col">Address</th>
        <th scope="col">Email</th>

        <th scope="col"></th>
    </tr>
</thead>
<tbody>
    <!-- Example row, replace with PHP loop for dynamic data -->
    <tr>
        <td><input type="checkbox"></td>
        <td>
            <div class="d-flex align-items-center">
                <span class="fw-bold">Jane Doe</span>
            </div>
        </td>
        <td>1999-01-01</td>
        <td>Female</td>
        <td>+1 234 567 890</td>
        <td>123 Main St, City, Country</td>
        <td>jane.doe@email.com</td>

        <td><button class="btn btn-light btn-sm"><i class="bi bi-three-dots"></i></button></td>
    </tr>
    <!-- Add more rows as needed -->
</tbody>
            </table>
        </div>
        <div class="d-flex justify-content-between align-items-center mt-3">
            <div>
                Rows per page
                <select class="form-select d-inline-block w-auto ms-2" style="width: 60px;">
                    <option>10</option>
                    <option>25</option>
                    <option>50</option>
                </select>
                <span class="ms-2">1-10 of 100</span>
            </div>
            <nav>
                <ul class="pagination pagination-sm mb-0">
                    <li class="page-item"><a class="page-link" href="#">&lt;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">100</a></li>
                    <li class="page-item"><a class="page-link" href="#">&gt;</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
        </div>
</div>
        </div>
</div>



</div>

<script src="../js/dashboard.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>