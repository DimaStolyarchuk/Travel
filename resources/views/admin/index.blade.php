@include('admin\stylesheet')
@include('admin\all_menu')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:./partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1">Ласкаво просимо в адмін панель</h4>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item">
                        <h4 class="mb-0 font-weight-bold d-none d-xl-block">Травень 19, 2021</h4>
                    </li>
{{--                    <li class="nav-item dropdown mr-1">--}}
{{--                        <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">--}}
{{--                            <i class="mdi mdi-calendar mx-0"></i>--}}
{{--                            <span class="count bg-info">2</span>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">--}}
{{--                            <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>--}}
{{--                            <a class="dropdown-item preview-item">--}}
{{--                                <div class="preview-thumbnail">--}}
{{--                                    <img src="images/faces/face4.jpg" alt="image" class="profile-pic">--}}
{{--                                </div>--}}
{{--                                <div class="preview-item-content flex-grow">--}}
{{--                                    <h6 class="preview-subject ellipsis font-weight-normal">David Grey--}}
{{--                                    </h6>--}}
{{--                                    <p class="font-weight-light small-text text-muted mb-0">--}}
{{--                                        The meeting is cancelled--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item preview-item">--}}
{{--                                <div class="preview-thumbnail">--}}
{{--                                    <img src="images/faces/face2.jpg" alt="image" class="profile-pic">--}}
{{--                                </div>--}}
{{--                                <div class="preview-item-content flex-grow">--}}
{{--                                    <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook--}}
{{--                                    </h6>--}}
{{--                                    <p class="font-weight-light small-text text-muted mb-0">--}}
{{--                                        New product launch--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item preview-item">--}}
{{--                                <div class="preview-thumbnail">--}}
{{--                                    <img src="images/faces/face3.jpg" alt="image" class="profile-pic">--}}
{{--                                </div>--}}
{{--                                <div class="preview-item-content flex-grow">--}}
{{--                                    <h6 class="preview-subject ellipsis font-weight-normal"> Johnson--}}
{{--                                    </h6>--}}
{{--                                    <p class="font-weight-light small-text text-muted mb-0">--}}
{{--                                        Upcoming board meeting--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item dropdown mr-2">--}}
{{--                        <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">--}}
{{--                            <i class="mdi mdi-email-open mx-0"></i>--}}
{{--                            <span class="count bg-danger">1</span>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">--}}
{{--                            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>--}}
{{--                            <a class="dropdown-item preview-item">--}}
{{--                                <div class="preview-thumbnail">--}}
{{--                                    <div class="preview-icon bg-success">--}}
{{--                                        <i class="mdi mdi-information mx-0"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="preview-item-content">--}}
{{--                                    <h6 class="preview-subject font-weight-normal">Application Error</h6>--}}
{{--                                    <p class="font-weight-light small-text mb-0 text-muted">--}}
{{--                                        Just now--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item preview-item">--}}
{{--                                <div class="preview-thumbnail">--}}
{{--                                    <div class="preview-icon bg-warning">--}}
{{--                                        <i class="mdi mdi-settings mx-0"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="preview-item-content">--}}
{{--                                    <h6 class="preview-subject font-weight-normal">Settings</h6>--}}
{{--                                    <p class="font-weight-light small-text mb-0 text-muted">--}}
{{--                                        Private message--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item preview-item">--}}
{{--                                <div class="preview-thumbnail">--}}
{{--                                    <div class="preview-icon bg-info">--}}
{{--                                        <i class="mdi mdi-account-box mx-0"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="preview-item-content">--}}
{{--                                    <h6 class="preview-subject font-weight-normal">New user registration</h6>--}}
{{--                                    <p class="font-weight-light small-text mb-0 text-muted">--}}
{{--                                        2 days ago--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
                </ul>
            </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Нова головна сторинка</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="card">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- base:js -->
<script src="vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="vendors/chart.js/Chart.min.js"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="js/off-canvas.js"></script>
<script src="js/hoverable-collapse.js"></script>
<script src="js/template.js"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="js/dashboard.js"></script>
<!-- End custom js for this page-->
</body>

</html>
