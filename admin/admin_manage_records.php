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
            <span class="fw-bold fs-5">All Patient Records:</span>
            <span class="text-primary fw-bold">1,356</span>
        </div>
    </div>
    <div class="card p-3">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <div class="input-group w-50">
                <input type="text" class="form-control" placeholder="Search patient records..." id="searchRecords">
                <button class="btn btn-primary" type="button" id="searchBtn"><i class="bi bi-search"></i></button>
            </div>
            <button class="btn btn-light btn-sm" id="sortBtn"><i class="bi bi-gear"></i> Sort Records</button>       
         </div>

        <div class="table-responsive">

            <table class="table align-middle">

<thead class="table-light">
    <tr>
        <th scope="col"> Action </th>
        <th scope="col"> patient_service_id</th>
        <th scope="col">patient_id</th>
        <th scope="col">first_name</th>
        <th scope="col">gender</th>
        <th scope="col">service_id</th>
        <th scope="col">dental_service</th>
        <th scope="col"> More </th>
    </tr>
</thead>

<tbody>
<?php
include '../db_connect.php';
$sql = "SELECT tbl_patient_service.patient_service_id, tbl_patient.patient_id, tbl_patient.first_name, tbl_patient.gender, tbl_service.service_id, tbl_service.dental_service FROM tbl_patient_service JOIN tbl_patient ON tbl_patient_service.patient_id = tbl_patient.patient_id JOIN tbl_service ON tbl_patient_service.service_id = tbl_service.service_id";
$result = mysqli_query($conn, $sql);
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td><input type="checkbox"></td>';
        echo '<td>' . htmlspecialchars($row['patient_service_id']) . '</td>';
        echo '<td>' . htmlspecialchars($row['patient_id']) . '</td>';
        echo '<td>' . htmlspecialchars($row['first_name']) . '</td>';
        echo '<td>' . htmlspecialchars($row['gender']) . '</td>';
        echo '<td>' . htmlspecialchars($row['service_id']) . '</td>';
        echo '<td>' . htmlspecialchars($row['dental_service']) . '</td>';
        echo '<td style="position:relative;">';
        echo '<div class="side-menu bg-light border rounded p-2" style="display:none; position:absolute; min-width:150px; z-index:1000;">';
        echo '<a class="dropdown-item" href="#">Availed Services</a>';
        echo '<a class="dropdown-item" href="#">View Details</a>';
        echo '<a class="dropdown-item" href="#">Edit Record</a>';
        echo '<a class="dropdown-item text-danger" href="#">Delete Record</a>';
        echo '</div>';
        echo '<button class="btn btn-light btn-sm more-btn"><i class="bi bi-three-dots"></i></button>';
        echo '</td>';
        echo '</tr>';
    }
} else {
    echo '<tr><td colspan="8" class="text-center">No records found.</td></tr>';
}
?>
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

<script src="../js/dashboard.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>