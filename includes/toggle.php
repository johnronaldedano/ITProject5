        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <div class="container-fluid">
                <button class="btn btn-success" id="sidebarToggle">
                    <i class="bi bi-list"></i>
                </button>

                <!-- <form class="d-flex ms-3">
                    <input id="searchBar" class="form-control me-2" type="search" placeholder="Search classes..." aria-label="Search">
                </form> -->
                
                <!-- Profile and Notification Icons -->
                <div class="dropdown ms-auto me-3">
                    <button class="btn btn-light position-relative" id="notificationDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-bell"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notificationDropdown">
                        <li><a class="dropdown-item" href="#">Notification 1</a></li>
                        <li><a class="dropdown-item" href="#">Notification 2</a></li>
                        <li><a class="dropdown-item" href="#">Notification 3</a></li>
                    </ul>
                </div>
                
                <div class="dropdown">
                    <img src="../images/me.jpg" alt="Admin Profile" class="profile-img dropdown-toggle" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="Profile.php">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="../Login/Logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>