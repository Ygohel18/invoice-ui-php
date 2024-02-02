<!DOCTYPE html>
<html lang="en">
<?php include_once './includes/_head.php'; ?>
<body>
<div class="app align-content-stretch d-flex flex-wrap">
    <?php include_once './includes/_sidebar.php'; ?>
    <div class="app-container">
        <?php include_once './includes/_header.php'; ?>
        <div class="app-content">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" aria-current="page"><a href="./index.php"
                                                                       onclick="location.reload(); return false;">Admin</a>
                    </li>
                </ol>
            </nav>

            <div class="content-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="page-description">
                                <h1>Admin Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card widget widget-stats">
                                <div class="card-body">
                                    <div class="widget-stats-container d-flex">
                                        <div class="widget-stats-icon widget-stats-icon-warning">
                                            <i class="material-icons-outlined">person</i>
                                        </div>
                                        <div class="widget-stats-content flex-fill">
                                            <span class="widget-stats-title">Total Users</span>
                                            <span class="widget-stats-amount">23,491</span>
                                            <span class="widget-stats-info">790 unique this month</span>
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