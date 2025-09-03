<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<nav id="sidebar" class="border-end">
    <div class="text-center py-3">
        <img src="../images/raiz.jpg" alt="Tooth Station Logo" width="100" class="mb-2"> 
        <h4 class="fw-bold">Raiz-Rich Family Planning and Birth Clinic</h4>
    </div>
    <ul class="nav flex-column">
        <li class="nav-item"><a class="nav-link<?php if($current_page == 'admin_dashboard.php') echo ' active'; ?>" href="admin_dashboard.php"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
        <li class="nav-item"><a class="nav-link<?php if($current_page == 'admin_manage_patient.php') echo ' active'; ?>" href="admin_manage_patient.php"><i class="bi bi-person-lines-fill"></i> Manage Patients</a></li>
        <li class="nav-item"><a class="nav-link<?php if($current_page == 'admin_manage_doctor.php') echo ' active'; ?>" href="admin_manage_doctor.php"><i class="bi bi-person-badge"></i> Manage Doctors</a></li>
        <li class="nav-item"><a class="nav-link<?php if($current_page == 'admin_manage_revenue.php') echo ' active'; ?>" href="admin_manage_revenue.php"><i class="bi bi-cash-coin"></i> Manage Revenue</a></li>
        <li class="nav-item"><a class="nav-link<?php if($current_page == 'admin_manage_followups.php') echo ' active'; ?>" href="admin_manage_followups.php"><i class="bi bi-arrow-repeat"></i> Manage Follow-ups</a></li>
        <li class="nav-item"><a class="nav-link<?php if($current_page == 'admin_manage_appointments.php') echo ' active'; ?>" href="admin_manage_appointments.php"><i class="bi bi-calendar-check"></i>  Appointments </a></li>
        <li class="nav-item"><a class="nav-link<?php if($current_page == 'admin_manage_records.php') echo ' active'; ?>" href="admin_manage_records.php"><i class="bi bi-journal-medical"></i> Patient Records </a></li>
    </ul>
</nav>