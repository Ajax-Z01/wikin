<!-- Header Dashboard -->
<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ route('dashboard') }}" class="logo d-flex align-items-center">
            <img src="assets/img/logo.png" alt="">
            <span class="d-none d-lg-block text-light">WIKIN</span>
        </a>
        <i class="bi bi-list text-light toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
    <nav class="header-nav ms-auto">
        <ul class="d-flex  align-items-center">
            <li class="nav-item dropdown">
                <a class="nav-link nav-icon " href="#" data-bs-toggle="dropdown">
                    <i class="bi text-light bi-bell"></i>
                    <span class="badge bg-primary text-light badge-number">1</span>
                </a><!-- End Notification Icon -->
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                    <li class="dropdown-header">
                        You have a new notifications
                        <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li class="notification-item">
                        <i class="bi bi-exclamation-circle text-warning"></i>
                        <div>
                            <h4>Pengajuan Konsultasi</h4>
                            <p>Pengadaaan survey didesa A</p>
                            <p>4 hrs. ago</p>
                        </div>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li class="dropdown-footer">
                        <a href="#">Show all notifications</a>
                    </li>
                </ul><!-- End Notification Dropdown Items -->
            </li><!-- End Notification Nav -->
            <li class="nav-item dropdown">
                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                    <i class="bi text-light bi-chat-left-text"></i>
                    <span class="badge bg-primary text-light badge-number">1</span>
                </a><!-- End Messages Icon -->
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                    <li class="dropdown-header">
                        You have a new messages
                        <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li class="message-item">
                        <a href="#">
                            <img src="assets/img/minato.jpg" alt="" class="rounded-circle">
                            <div>
                                <h4>Minato</h4>
                                <p>Kerjaan hari ini bagaimana?, apakah...</p>
                                <p>1 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li class="dropdown-footer">
                        <a href="#">Show all messages</a>
                    </li>
                </ul><!-- End Messages Dropdown Items -->
            </li><!-- End Messages Nav -->
            <li class="nav-item dropdown pe-3">
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="{{ Auth::user()->profile_image }}" alt="Profile" class="rounded-circle">
                    <span class="d-none text-light d-md-block dropdown-toggle ps-2">{{ Auth::user()->username }}</span>
                </a><!-- End Profile Iamge Icon -->
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>{{ Auth::user()->name }}</h6>
                        <span>{{ Auth::user()->type }} Wikin</span>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('profile') }}">
                            <i class="bi bi-gear"></i>
                            <span>Pengaturan Akun</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="bi bi-box-arrow-right"></i> Sign Out
                            </button>
                        </form>
                    </li>


                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header>
