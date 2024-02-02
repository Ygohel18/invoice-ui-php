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
                            <li class="breadcrumb-item"><a href="./customers.php">Customer</a></li>
                            <li class="breadcrumb-item" aria-current="page">New</li>
                        </ol>
                    </nav>

                    <div class="row">
                        <div class="col">
                            <div class="page-description">
                                <h1>New Customer</h1>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <form class="row g-3">
                                        <div class="col-md-12">
                                            <label for="inputName" class="form-label">Customer Name *</label>
                                            <input type="text" class="form-control" id="inputName"
                                                   placeholder="Full Name" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="inputMobile" class="form-label">Customer Mobile *</label>
                                            <input type="tel" class="form-control" id="inputMobile"
                                                   placeholder="1234567890" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="inputEmail4" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="inputEmail4"
                                                   placeholder="customer@email.com">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputAddress" class="form-label">Address</label>
                                            <input type="text" class="form-control" id="inputAddress"
                                                   placeholder="1234 Main St">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputAddress2" class="form-label">Address 2</label>
                                            <input type="text" class="form-control" id="inputAddress2"
                                                   placeholder="Apartment, studio, or floor">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputCity" class="form-label">City</label>
                                            <input type="text" class="form-control" id="inputCity" placeholder="City">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPincode" class="form-label">Pincode</label>
                                            <input type="text" class="form-control" id="inputPincode"
                                                   placeholder="123456">
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Add Customer</button>
                                        </div>
                                    </form>
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
<script>
    $(document).ready(function () {
        $("#side-customer").addClass("active-page open");
        $("#side-customer > a").addClass("active");
        $("#side-customer ul").attr("style", "");
        $("#side-customer-new").addClass("active");
    });
</script>
</body>
</html>