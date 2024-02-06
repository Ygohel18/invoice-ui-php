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

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./index.php">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Customer</li>
                        </ol>
                    </nav>

                    <div class="row">
                        <div class="col">
                            <div class="page-description">
                                <h1>All Customers</h1>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Customers</h5>
                                </div>
                                <div class="card-body">
                                    <table id="customer-table" class="display nowrap" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Action</th>
                                        </tr>
                                        </tfoot>
                                    </table>
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
<script>

    function generateFakeData() {
        var data = [];
        for (var i = 1; i <= 50; i++) {
            var name = faker.name.findName();
            var email = faker.internet.email().toLowerCase();
            var countryCode = '91';
            var phoneNumber = faker.phone.phoneNumberFormat();
            var mobile = `${countryCode} ${phoneNumber}`;
            var action = `<a href="./customer-update.php?id=${i}">Edit</a>`;
            data.push([i, name, email, mobile, action]);
        }
        return data;
    }

    function populateTable() {
        var dataTable = $('#customer-table').DataTable({
            data: generateFakeData(),
            columns: [
                {title: 'Id'},
                {title: 'Name'},
                {title: 'Email'},
                {title: 'Mobile'},
                {title: 'Action'}
            ]
        });
    }

    $(document).ready(function () {
        $("#side-customer").addClass("active-page open");
        $("#side-customer > a").addClass("active");
        $("#side-customer ul").attr("style", "");
        $("#side-customer-all").addClass("active");

        populateTable();
    });
</script>
</body>
</html>