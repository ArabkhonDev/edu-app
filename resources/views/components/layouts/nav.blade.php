<nav class="col-md-2 d-none d-md-block bg-light sidebar h-100">
    <div class="sidebar-sticky">
        <ul class="nav flex-column ">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('course.index') }}">
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
            <li class="nav-item">
                <a class="nav-link" href="{{ route('language.index') }}">
                    Langugae
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
                    Current month
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Last quarter
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Social engagement
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Year-end sale
                </a>
            </li>
        </ul>
    </div>
</nav>
