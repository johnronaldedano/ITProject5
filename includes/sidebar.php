<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<nav id="sidebar" class="border-end">
    <div class="text-center py-3">
        <img src="../images/icon.png" alt="Tooth Station Logo" width="100" class="mb-2"> 
        <h4 class="fw-bold">Tooth Station Dental Clinic</h4>
    </div>
    <ul class="nav flex-column">
        <li class="nav-item"><a class="nav-link<?php if($current_page == 'admin_dashboard.php') echo ' active'; ?>" href="admin_dashboard.php"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
        <li class="nav-item"><a class="nav-link<?php if($current_page == 'Subject.php') echo ' active'; ?>" href="Subject.php"><i class="bi bi-person-lines-fill"></i> Manage Patients</a></li>
        <li class="nav-item"><a class="nav-link<?php if($current_page == 'Classes.php') echo ' active'; ?>" href="Classes.php"><i class="bi bi-person-badge"></i> Manage Doctors</a></li>
        <li class="nav-item"><a class="nav-link<?php if($current_page == 'Students.php') echo ' active'; ?>" href="Students.php"><i class="bi bi-cash-coin"></i> Manage Revenue</a></li>
        <li class="nav-item"><a class="nav-link<?php if($current_page == 'Teachers.php') echo ' active'; ?>" href="Teachers.php"><i class="bi bi-arrow-repeat"></i> Manage Follow-ups</a></li>
        <li class="nav-item"><a class="nav-link<?php if($current_page == 'Attendance.php') echo ' active'; ?>" href="Attendance.php"><i class="bi bi-calendar-check"></i>  Appointments </a></li>
        <li class="nav-item"><a class="nav-link<?php if($current_page == 'systemuser.php') echo ' active'; ?>" href="systemuser.php"><i class="bi bi-journal-medical"></i> Patient Records </a></li>
    </ul>
</nav>