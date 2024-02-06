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
                            <li class="breadcrumb-item"><a href="./invoices.php">Invoice</a></li>
                            <li class="breadcrumb-item" aria-current="page">Update</li>
                        </ol>
                    </nav>

                    <div class="row">
                        <div class="col">
                            <div class="page-description">
                                <h1>Update Invoice</h1>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <form class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-4">
                                            <label for="invoice-item" class="form-label">Add Item *</label>
                                            <select id="invoice-item" class="js-states form-control" tabindex="-1"
                                                    style="display: none; width: 100%" required>
                                                <option selected disabled>Item</option>
                                            </select>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="inputPrice" class="form-label">Item Price *</label>
                                            <input type="number" step="0.10" class="form-control" id="inputPrice"
                                                   placeholder="100" value="">
                                        </div>

                                        <div class="col-md-4">
                                            <label for="inputQuantity" class="form-label">Item Quantity *</label>
                                            <input type="number" step="1" class="form-control" id="inputQuantity"
                                                   placeholder="1" value="1" required>
                                        </div>

                                        <div class="col-3">
                                            <button id="add-item-btn" class="btn btn-primary">Add Item</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Invoice Items</h5>
                                </div>
                                <div class="card-body">
                                    <table id="item-table" class="display nowrap" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Quantity</th>
                                            <th>Amount</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Quantity</th>
                                            <th>Amount</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <label for="invoice-customer" class="form-label">Select Customer *</label>
                                            <select id="invoice-customer" class="js-states form-control" tabindex="-1"
                                                    style="display: none; width: 100%" required>
                                                <option selected disabled>Customer</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="inputIssue" class="form-label">Issue Date *</label>
                                            <input id="inputIssue" class="form-control flatpickr2" type="text"
                                                   placeholder="Select Issue Date.." required>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="inputPaid" class="form-label">Paid Date</label>
                                            <input id="inputPaid" class="form-control flatpickr2" type="text"
                                                   placeholder="Select Paid Date..">
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Update Invoice</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once './includes/_footer.php'; ?>
<script>

    var dataTable = $('#item-table').DataTable({
        paging: false,
        searching: false,
        info: false,
        columns: [
            {data: 'Name', title: 'Name'},
            {data: 'quantity', title: 'Quantity'},
            {data: 'amount', title: 'Amount', render: $.fn.dataTable.render.number(',', '.', 2, '₹')},
            {data: 'total', title: 'Total', render: $.fn.dataTable.render.number(',', '.', 2, '₹')}, // Add a comma here
            {data: 'action', title: 'Action'}
        ],
        footerCallback: function (row, data, start, end, display) {
            var api = this.api();
            var total = api.column(3, {page: 'all'}).data().reduce(function (a, b) {
                return a + parseFloat(b);
            }, 0);

            $(api.column(3).footer()).html('Grand Total: ' + total.toFixed(2));
        }
    });

    function generateFakeData() {
        var data = [];

        for (var i = 1; i <= 50; i++) {
            var name = faker.name.findName();
            var itemName = faker.commerce.productName();
            var itemAmount = faker.commerce.price();

            var option = `<option value="${i}">${name}</option>`;
            $('#invoice-customer').append(option);

            var optionItem = `<option value="${i}" data-amount="${itemAmount}">${itemName}</option>`;
            $('#invoice-item').append(optionItem);

            var invoiceData = {
                Name: itemName,
                quantity: 1,
                amount: itemAmount
            };

            data.push(invoiceData);
        }

        $('#invoice-item').on('change', function () {
            var selectedItemData = $(this).select2('data')[0];
            var selectedAmount = selectedItemData.element.dataset.amount;
            $('#inputPrice').val(selectedAmount);
        });

        $('#add-item-btn').on('click', function (e) {
            e.preventDefault();

            var inputQuantity = parseFloat($('#inputQuantity').val()) || 0;
            var inputAmount = parseFloat($('#inputPrice').val()) || 0;

            var selectedItemName = $('#invoice-item').select2('data')[0].text;
            var dataTable = $('#item-table').DataTable();

            var total = inputQuantity * inputAmount;

            dataTable.row.add({
                Name: selectedItemName,
                quantity: inputQuantity,
                amount: inputAmount,
                total: total,
                action: '<button class="btn btn-outline-danger remove-btn"><i class="material-icons">delete_outline</i>Remove</button>'
            }).draw();

            // Optional: Add a click event for the remove button in the last row
            $('.remove-btn').last().on('click', function () {
                var row = $(this).closest('tr');
                dataTable.row(row).remove().draw();
            });
        });

        $('#item-table thead tr').append('<th><button class="btn btn-danger" id="clear-all-btn"><i class="material-icons">delete_outline</i>Clear All</button></th>');

        $('#clear-all-btn').on('click', function (e) {
            e.preventDefault();
            dataTable.clear().draw();
        });

        // Optional: Add event for removing individual rows
        $('#item-table thead').on('click', '.remove-btn', function () {
            var row = $(this).closest('tr');
            dataTable.row(row).remove().draw();
        });
    }


    $(document).ready(function () {
        $("#side-invoice").addClass("active-page close");
        $("#side-invoice > a").addClass("active");
        $('select').select2();

        $(".flatpickr2").flatpickr({
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });

        generateFakeData()
    });
</script>
</body>
</html>