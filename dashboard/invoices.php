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
                            <li class="breadcrumb-item" aria-current="page">Invoice</li>
                        </ol>
                    </nav>

                    <div class="row">
                        <div class="col">
                            <div class="page-description">
                                <h1>All Invoices</h1>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Invoice</h5>
                                </div>
                                <div class="card-body">
                                    <table id="invoice-table" class="display nowrap" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Invoice Number</th>
                                            <th>Total Amount</th>
                                            <th>Customer</th>
                                            <th>Status</th>
                                            <th>Issue Date</th>
                                            <th>Paid Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Invoice Number</th>
                                            <th>Total Amount</th>
                                            <th>Customer</th>
                                            <th>Status</th>
                                            <th>Issue Date</th>
                                            <th>Paid Date</th>
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
            var projectNumber = faker.random.alphaNumeric(5).toUpperCase();
            var customerNumber = faker.random.number({min: 10000, max: 99999});
            var sequenceNumber = i.toString().padStart(5, '0');
            var invoiceNumber = `${projectNumber}-${customerNumber}-${sequenceNumber}`;

            var totalAmount = faker.commerce.price();
            var status = faker.random.arrayElement(['Pending', 'Paid']);
            var issueDate = faker.date.past(1);
            var paidDate = status === 'Paid' ? faker.date.past(1, issueDate) : null;

            var receipt = `<a href="./receipt.php?id=${i}" target="_blanck">${invoiceNumber}</a>`;

            data.push([i, receipt, totalAmount, name, status, issueDate.toISOString().split('T')[0], paidDate ? paidDate.toISOString().split('T')[0] : null]);
        }
        return data;
    }

    function populateTable() {
        var dataTable = $('#invoice-table').DataTable({
            data: generateFakeData(),
            columns: [
                {title: 'Id'},
                {title: 'Invoice Number'},
                {title: 'Total Amount'},
                {title: 'Customer'},
                {title: 'Status'},
                {title: 'Issue Date'},
                {title: 'Paid Date'}
            ]
        });
    }

    $(document).ready(function () {
        $("#side-invoice").addClass("active-page open");
        $("#side-invoice > a").addClass("active");
        $("#side-invoice ul").attr("style", "");
        $("#side-invoice-all").addClass("active");

        populateTable();
    });
</script>
</body>
</html>