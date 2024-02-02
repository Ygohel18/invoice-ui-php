<!DOCTYPE html>
<html lang="en">
<?php include_once './includes/_head.php'; ?>
<body>
<div class="app align-content-stretch d-flex flex-wrap">
    <?php include_once './includes/_sidebar.php'; ?>
    <div class="app-container">
        <?php include_once './includes/_header.php'; ?>
        <div class="app-content">
            <div class="content-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="page-description">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card widget widget-stats">
                                <div class="card-body">
                                    <div class="widget-stats-container d-flex">
                                        <div class="widget-stats-icon widget-stats-icon-primary">
                                            <i class="material-icons-outlined">paid</i>
                                        </div>
                                        <div class="widget-stats-content flex-fill">
                                            <span class="widget-stats-title">Today's Sales</span>
                                            <span class="widget-stats-amount">$38,211</span>
                                            <span class="widget-stats-info">471 Orders Total</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card widget widget-stats">
                                <div class="card-body">
                                    <div class="widget-stats-container d-flex">
                                        <div class="widget-stats-icon widget-stats-icon-warning">
                                            <i class="material-icons-outlined">person</i>
                                        </div>
                                        <div class="widget-stats-content flex-fill">
                                            <span class="widget-stats-title">Total Customer</span>
                                            <span class="widget-stats-amount">23,491</span>
                                            <span class="widget-stats-info">790 unique this month</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card widget widget-stats">
                                <div class="card-body">
                                    <div class="widget-stats-container d-flex">
                                        <div class="widget-stats-icon widget-stats-icon-danger">
                                            <i class="material-icons-outlined">file_download</i>
                                        </div>
                                        <div class="widget-stats-content flex-fill">
                                            <span class="widget-stats-title">Total Revenue</span>
                                            <span class="widget-stats-amount">140,390</span>
                                            <span class="widget-stats-info">1000 this month</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card widget widget-stats-large">
                                <div class="row">
                                    <div class="col-xl-8">
                                        <div class="widget-stats-large-chart-container">
                                            <div class="card-header">
                                                <h5 class="card-title">Earnings<span
                                                            class="badge badge-light badge-style-light">Last Year</span>
                                                </h5>
                                            </div>
                                            <div class="card-body">
                                                <div id="apex-earnings"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="widget-stats-large-info-container">
                                            <div class="card-header">
                                                <h5 class="card-title">Report<span
                                                            class="badge badge-info badge-style-light">Updated 5 min ago</span>
                                                </h5>
                                            </div>
                                            <div class="card-body">
                                                <p class="card-description">Duis fringilla eget velit sit amet lobortis.
                                                    Donec rutrum, arcu auctor varius cursus. mi nulla dapibus justo, at
                                                    volutpat libero</p>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">Neptune - v1.0<span
                                                                class="float-end text-success">14%<i
                                                                    class="material-icons align-middle">keyboard_arrow_up</i></span>
                                                    </li>
                                                    <li class="list-group-item">Space - v1.2<span
                                                                class="float-end text-danger">7%<i
                                                                    class="material-icons align-middle">keyboard_arrow_down</i></span>
                                                    </li>
                                                    <li class="list-group-item">Lime - v1.0.3<span
                                                                class="float-end text-success">21%<i
                                                                    class="material-icons align-middle">keyboard_arrow_up</i></span>
                                                    </li>
                                                    <li class="list-group-item">Circl - v2.3<span
                                                                class="float-end text-success">17%<i
                                                                    class="material-icons align-middle">keyboard_arrow_up</i></span>
                                                    </li>
                                                    <li class="list-group-item">Connect - v1.7<span
                                                                class="float-end text-danger">3%<i
                                                                    class="material-icons align-middle">keyboard_arrow_down</i></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once './includes/_footer.php'; ?>
<script src="/assets/js/pages/dashboard.js"></script>
<script>
    $(document).ready(function () {
        $("#side-dashboard").addClass("active-page");
    });
</script>
</body>
</html>