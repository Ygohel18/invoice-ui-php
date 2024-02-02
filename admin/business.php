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
                            <li class="breadcrumb-item"><a href="./index.php">Admin</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a href="#">Business</a></li>
                        </ol>
                    </nav>

                    <div class="row">
                        <div class="col">
                            <div class="page-description">
                                <h1>All Business</h1>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Business</h5>
                                </div>
                                <div class="card-body">
                                    <table id="business-table" class="display nowrap" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>City</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>City</th>
                                            <th>Status</th>
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
            var businessName = faker.company.companyName();
            var category = faker.random.word().toLowerCase();
            var city = faker.address.city();
            var status = Math.random() < 0.5 ? 'Active' : 'Inactive';
            var action = `<a href="./business-edit.php?id=${i}">Edit</a>`;
            data.push([i, businessName, category, city, status, action]);
        }
        return data;
    }

    function populateTable() {
        var dataTable = $('#business-table').DataTable({
            data: generateFakeData(),
            columns: [
                {title: 'Id'},
                {title: 'Name'},
                {title: 'Category'},
                {title: 'City'},
                {title: 'Status'},
                {title: 'Action'}
            ]
        });
    }

    $(document).ready(function () {
        $("#side-business").addClass("active-page open");
        $("#side-business > a").addClass("active");
        $("#side-business ul").attr("style", "");
        $("#side-business-all").addClass("active");

        populateTable();
    });
</script>
</body>
</html>