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
                            <li class="breadcrumb-item" aria-current="page">Item</li>
                        </ol>
                    </nav>

                    <div class="row">
                        <div class="col">
                            <div class="page-description">
                                <h1>All Items</h1>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Items</h5>
                                </div>
                                <div class="card-body">
                                    <table id="item-table" class="display nowrap" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Type</th>
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
                                            <th>Type</th>
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
            var itemName = faker.commerce.productName();
            var itemType = faker.random.arrayElement(['Digital', 'Physical', 'Service']);
            var status = Math.random() < 0.5 ? 'Active' : 'Inactive';
            var action = `<a href="./item-edit.php?id=${i}">Edit</a>`;
            data.push([i, itemName, itemType,status, action]);
        }
        return data;
    }

    function populateTable() {
        var dataTable = $('#item-table').DataTable({
            data: generateFakeData(),
            columns: [
                {title: 'Id'},
                {title: 'Name'},
                {title: 'Type'},
                {title: 'Status'},
                {title: 'Action'}
            ]
        });
    }

    $(document).ready(function () {
        $("#side-item").addClass("active-page open");
        $("#side-item > a").addClass("active");
        $("#side-item ul").attr("style", "");
        $("#side-item-all").addClass("active");

        populateTable();
    });
</script>
</body>
</html>