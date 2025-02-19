<nav class="col-md-2 d-none d-md-block bg-light sidebar h-100">
    <div class="sidebar-sticky">
        <ul class="nav flex-column ">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('courses.index') }}">
                    Kurslar
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('teacher.index') }}">
                    O'qtuvchilar
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('student.index') }}">
                    O'quvchilar
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('group.index') }}">
                    Guruxlar
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('room.index') }}">
                    Room
                </a>
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved reports</span>
            <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Oxirgi oy o'quvchilari
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Yangiliklar
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Musoboqalar
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Filiallar
                </a>
            </li>
        </ul>
    </div>
</nav>
