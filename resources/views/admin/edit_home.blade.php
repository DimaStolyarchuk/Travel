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
                            <h4 class="card-title">Форма для нової головної сторинки</h4>
                            <table class="table">
                                <div class="container-fluid">
                                    <form class="form-horizontal" role="form" action="{{ route('save_home') }}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{$dataHome->id}}">
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label for="fname" >Зображення</label>
                                                <div class="col-sm-9">
                                                    <input type="file" name="image" class="form-control" id="fname" value="{{$dataHome->image ?? ''}}">
                                                    <input type="hidden" name="image_2" value="{{$dataHome->image}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="email1">Титулка</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="title" class="form-control" id="email1" value="{{$dataHome->title ?? ''}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="email1">Інформація</label>
                                                <div class="col-sm-9">
                                                    <select name="info_id[]" multiple>
                                                        @foreach($dataInfos as $dataInfo)
                                                            <option value="{{ $dataInfo->id ?? ''}}" @if($dataInfo->isInfoSelect($infos)) selected @endif>{{ $dataInfo->description ?? ''}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="email1">Активність</label>
                                                <div class="col-sm-9">
                                                    <select name="action">
                                                        <option value="0" @if( isset($dataHome->action) && $dataHome->action == 0) selected @endif>No</option>
                                                        <option value="1" @if( isset($dataHome->action) && $dataHome->action == 1) selected @endif>Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="cono1">Преорітет</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="priority" value="{{ $dataHome->priority ?? '' }}" class="form-control" id="cono1"
                                                           placeholder="Для кого?">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-top">
                                            <div class="card-body">
                                                <button type="submit" class="btn btn-primary">Відправити</button>
                                            </div>
                                        </div>
                                    </form>
                                    <a href="{{ route('admin_home') }}" >НАЗАД</a>
                                </div>
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


