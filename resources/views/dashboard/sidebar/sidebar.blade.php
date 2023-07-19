<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="/admin">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Menu Kelola</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('userdate') }}" class="text-light">
                        <i class="bi bi-circle"></i><span>User Terdaftar</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('landing') }}" class="text-light">
                        <i class="bi bi-circle"></i><span>Landing Page</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('komunitas') }}" class="text-light">
                        <i class="bi bi-circle"></i><span>Profil Komunitas</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Form Pengajuan</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('pengmas') }}" class="text-light">
                        <i class="bi text-light bi-circle"></i><span>Pengabdian Masyarakat</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pengkom') }}" class="text-light">
                        <i class="bi text-light bi-circle"></i><span>Komunitas</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Pengajuan -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#keluhan-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Form Keluhan</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="keluhan-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('keluhan') }}" class="text-light">
                        <i class="bi text-light bi-circle"></i><span>Keluhan Kenukliran</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Keluhan -->


        <li class="nav-heading">More Info</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('profile') }}">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('informasi') }}">
                <i class="bi bi-question-circle"></i>
                <span>Informasi</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('kontak') }}">
                <i class="bi bi-envelope"></i>
                <span>Contact</span>
            </a>
        </li><!-- End Contact Page Nav -->


    </ul>

</aside>
