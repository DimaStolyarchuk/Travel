@include('admin/stylesheet')
@include('admin/all_menu')
<div class="container-fluid page-body-wrapper">
    <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1">Ласкаво просимо в адмін панель</h4>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item">
                    <h4 class="mb-0 font-weight-bold d-none d-xl-block">Травень 19, 2021</h4>
                </li>
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
                            <a href="{{ route('tours_form') }}">Новий товар</a>
                            <table class="table">
                                <thead>
                                <th scope="col">#</th>
                                <th scope="col">Зображення</th>
                                <th scope="col">Титулка</th>
                                <th scope="col">Ціна</th>
                                <th scope="col">Активність</th>
                                <th scope="col">Преорітет</th>
                                <th scope="col">Редагування/Видалення</th>
                                </tr>
                                </thead>
                                @foreach($dataTours as $dataTour)
                                    <tr>
                                        <th scope="row">{{$dataTour->id}}</th>
                                        <td>{{$dataTour->image}}</td>
                                        <td>{{$dataTour->title}}</td>
                                        <td>{{$dataTour->price}}</td>
                                        <td>{{$dataTour->action}}</td>
                                        <td>{{$dataTour->priority}}</td>
                                        <td>
                                            <a href="{{ route('edit_tours', ['id' => $dataTour->id]) }}">
                                                <i class="me-2 mdi mdi-credit-card-scan"></i>
                                                edit
                                            </a>
                                            /
                                            <a href="{{ route('delete_tours', ['id' => $dataTour->id]) }}">
                                                <i class="me-2 mdi mdi-delete"></i>
                                                delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
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


