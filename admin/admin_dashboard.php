<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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

        <!-- Dashboard Header -->
        <div class="mb-5 mt-5">
            <h2 class="fw-bold">Dental Patient Record Management System</h2>

        </div>

        <!-- Statistics Cards -->
        <div class="row g-3 mb-4">
            <div class="col-md-3">
                <div class="card shadow-sm text-center p-3">
                    <i class="bi bi-people fs-1 text-primary"></i>
                    <h5 class="mt-2">Total Patients</h5>
                    <p class="fs-4 fw-bold mb-0">150</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm text-center p-3">
                    <i class="bi bi-calendar-check fs-1 text-success"></i>
                    <h5 class="mt-2">Appointments Today</h5>
                    <p class="fs-4 fw-bold mb-0">12</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm text-center p-3">
                    <i class="bi bi-cash-coin fs-1 text-warning"></i>
                    <h5 class="mt-2">Pending Payments</h5>
                    <p class="fs-4 fw-bold mb-0">8</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm text-center p-3">
                    <i class="bi bi-person-badge fs-1 text-danger"></i>
                    <h5 class="mt-2">Active Dentists</h5>
                    <p class="fs-4 fw-bold mb-0">5</p>
                </div>
            </div>
        </div>



        <!-- Placeholder for Charts -->
        <div class="row g-3">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Monthly Appointments</h5>
                        <canvas id="appointmentsChart" height="180"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Revenue Overview</h5>
                        <canvas id="revenueChart" height="180"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="../js/dashboard.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
// Monthly Appointments Chart
const ctxAppointments = document.getElementById('appointmentsChart').getContext('2d');
new Chart(ctxAppointments, {
    type: 'bar',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
        datasets: [{
            label: 'Appointments',
            data: [30, 45, 38, 50, 42, 60, 55, 48],
            backgroundColor: 'rgba(25, 118, 210, 0.7)',
            borderRadius: 6,
        }]
    },
    options: {
        plugins: { legend: { display: false } },
        scales: {
            y: { beginAtZero: true }
        }
    }
});
// Revenue Overview Chart
const ctxRevenue = document.getElementById('revenueChart').getContext('2d');
new Chart(ctxRevenue, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
        datasets: [{
            label: 'Revenue ($)',
            data: [1200, 1500, 1100, 1800, 1700, 2100, 2000, 1950],
            backgroundColor: 'rgba(0, 188, 212, 0.2)',
            borderColor: 'rgba(25, 118, 210, 1)',
            borderWidth: 3,
            pointBackgroundColor: 'rgba(25, 118, 210, 1)',
            tension: 0.3,
            fill: true,
        }]
    },
    options: {
        plugins: { legend: { display: false } },
        scales: {
            y: { beginAtZero: true }
        }
    }
});
</script>
</body>
</html>
