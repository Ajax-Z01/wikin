@include('dashboard.layout.header')

<!-- ======= Header ======= -->
@include('dashboard.header')
<!-- End Header -->

<!-- ======= Sidebar ======= -->
@include('dashboard.sidebar.sidebar')
<!-- End Sidebar-->

<!-- Main Content -->
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Profile</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">More Info</li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img src="{{ Auth::user()->image }}" alt="Profile" class="rounded-circle">
                        <h2>{{ Auth::user()->username }}</h2>
                        <h3>{{ Auth::user()->name }}</h3>
                        <div class="social-links mt-2">
                            <a href="{{ Auth::user()->twitter_profile }}" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="{{ Auth::user()->facebook_profile }}" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="{{ Auth::user()->instagram_profile }}" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="{{ Auth::user()->linkedin_profile }}" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#profile-overview">Overview</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                    Profile</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#profile-change-password">Change Password</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2">
                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                @if (session('success'))
                                    <div class="alert alert-success" role="alert">
                                        <strong class="font-bold">Success!</strong>
                                        <span class="block sm:inline">{{ session('success') }}</span>
                                    </div>
                                @elseif(session('unsuccess'))
                                    <div class="alert alert-danger" role="alert">
                                        <strong class="font-bold">Unsuccess!</strong>
                                        <span class="block sm:inline">{{ session('unsuccess') }}</span>
                                    </div>
                                @endif
                                @if ($errors->any())
                                    <div class="alert alert-danger"  role="alert">
                                        <ul class="list-disc pl-5">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ htmlentities($error) }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <h5 class="card-title">Profile Details</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                    <div class="col-lg-9 col-md-8">{{ Auth::user()->name }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Job</div>
                                    <div class="col-lg-9 col-md-8">{{ Auth::user()->job }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Address</div>
                                    <div class="col-lg-9 col-md-8">{{ Auth::user()->address }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Phone</div>
                                    <div class="col-lg-9 col-md-8">{{ Auth::user()->phone }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                    <div class="col-lg-9 col-md-8">{{ Auth::user()->email }}</div>
                                </div>
                            </div>
                            <!-- Profile Edit Form -->
                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                                <form role="form text-left" action="{{ route('profile.update', $user->id) }}" method="post" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="image" class="col-md-4 col-lg-3 col-form-label">Profile
                                            Image</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input class="form-control" type="file" name="image" id="image" accept="image/*">
                                            @error('image')
                                                <span class="invalid-feedback">{{ htmlentities($message) }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="username" class="col-md-4 col-lg-3 col-form-label">Username</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="username" type="text" class="form-control" id="username" value="{{ Auth::user()->username }}" readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="email" type="text" class="form-control" id="email" value="{{ Auth::user()->email }}" readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="name" class="col-md-4 col-lg-3 col-form-label">Full
                                            Name</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="name" type="text" class="form-control" id="name" value="{{ Auth::user()->name }}">
                                            @error('name')
                                                <span class="invalid-feedback">{{ htmlentities($message) }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="job" type="text" class="form-control" id="job" value="{{ Auth::user()->job }}">
                                            @error('job')
                                                <span class="invalid-feedback">{{ htmlentities($message) }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="address" type="text" class="form-control" id="address" value="{{ Auth::user()->address }}">
                                            @error('address')
                                                <span class="invalid-feedback">{{ htmlentities($message) }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="phone" type="text" class="form-control" id="phone" value="{{ Auth::user()->phone }}">
                                            @error('phone')
                                                <span class="invalid-feedback">{{ htmlentities($message) }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="twitter_profile" class="col-md-4 col-lg-3 col-form-label">Twitter</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="twitter_profile" type="text" class="form-control" id="twitter_profile" value="{{ Auth::user()->twitter_profile }}">
                                            @error('twitter_profile')
                                                <span class="invalid-feedback">{{ htmlentities($message) }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="facebook_profile"
                                            class="col-md-4 col-lg-3 col-form-label">Facebook</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="facebook_profile" type="text" class="form-control" id="facebook_profile" value="{{ Auth::user()->facebook_profile }}">
                                            @error('facebook_profile')
                                                <span class="invalid-feedback">{{ htmlentities($message) }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="instagram_profile"
                                            class="col-md-4 col-lg-3 col-form-label">Instagram</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="instagram_profile" type="text" class="form-control" id="instagram_profile" value="{{ Auth::user()->instagram_profile }}">
                                            @error('instagram_profile')
                                                <span class="invalid-feedback">{{ htmlentities($message) }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="linkedin_profile"
                                            class="col-md-4 col-lg-3 col-form-label">Linkedin</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="linkedin_profile" type="text" class="form-control" id="linkedin_profile" value="{{ Auth::user()->linkedin_profile }}">
                                            @error('linkedin_profile')
                                                <span class="invalid-feedback">{{ htmlentities($message) }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form><!-- End Profile Edit Form -->
                            </div>
                            <div class="tab-pane fade pt-3" id="profile-change-password">
                                <!-- Change Password Form -->
                                <form role="form" action="{{ route('password.update', $user->id) }}" method="post" class="user">
                                    @method('post')
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="current_password" type="password" class="form-control" id="currentPassword">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="password" type="password" class="form-control" id="newPassword">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="password_confirmation" type="password" class="form-control" id="renewPassword">
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Change Password</button>
                                    </div>
                                </form>                                
                            </div>
                        </div><!-- End Bordered Tabs -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->
<!-- End Main Content -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
        &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/vendor/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('/vendor/quill/quill.min.js') }}"></script>
<script src="{{ asset('/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('/js/mainUser.js') }}"></script>

</body>

</html>
