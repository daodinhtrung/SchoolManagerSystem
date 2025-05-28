<div class="sidebar">
    <a href="dashboard.php" class="logo">
        <!-- <i class='bx bx-book-bookmark'></i> -->
        <img src="../images/logo.png">
        <div class="logo-name"><span class="darkTextColor">VNU</span><span class="text-warning">I</span><span
                class="text-warning">S</span></div>
    </a>

    <ul class="side-menu-opener">
    </ul>

    <ul class="side-menu main-side-board">
        <li><a href="dashboard.php"><i class="fas fa-chart-line"></i>Dashboard</a></li>
        <li><a href="teacher.php"><i class="fas fa-chalkboard-teacher"></i>Teacher</a></li>
        <li><a href="student.php"><i class="fas fa-user-graduate"></i>Student</a></li>
        <li><a href="subjects.php"><i class="fas fa-book"></i>Subjects</a></li>
        <li><a href="attendence.php"><i class="fas fa-user-check"></i>Attendance</a></li>
        <li><a href="noticeboard.php"><i class="fas fa-bullhorn"></i>Notice Board</a></li>
        <li><a href="timetable.php"><i class="fas fa-calendar-alt"></i>Time Table</a></li>
        <li><a href="syllabus.php"><i class="fas fa-file-alt"></i>Syllabus</a></li>
        <li><a href="notes.php"><i class="fas fa-sticky-note"></i>Notes</a></li>
        <li><a href="marks.php"><i class="fas fa-clipboard-list"></i>Marks</a></li>
        <li><a href="buses.php"><i class="fas fa-bus-alt"></i>Bus Service</a></li>
        <li><a href="settings.php"><i class="fas fa-cogs"></i>Settings</a></li>

    </ul>
    <ul class="side-menu">
        <li>
            <a class="logout" data-bs-toggle="modal" data-bs-target="#logout-modal">
                <i class='bx bx-log-out-circle'></i>
                Logout
            </a>
        </li>
    </ul>
</div>

<div class="modal fade" id="logout-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <strong>Do you really want to logout?</strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" onclick="logout()">Logout</button>
            </div>
        </div>
    </div>
</div>