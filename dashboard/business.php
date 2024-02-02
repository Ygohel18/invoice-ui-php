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
                            <li class="breadcrumb-item" aria-current="page">Business</li>
                        </ol>
                    </nav>

                    <div class="row">
                        <div class="col">
                            <div class="page-description">
                                <h1>Business</h1>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <form class="row g-3">
                                        <div class="col-md-12">
                                            <label for="inputName" class="form-label">Business Name *</label>
                                            <input type="text" class="form-control" id="inputName"
                                                   placeholder="Name" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="inputMobile" class="form-label">Business Mobile *</label>
                                            <input type="tel" class="form-control" id="inputMobile"
                                                   placeholder="1234567890" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="inputEmail4" class="form-label">Email *</label>
                                            <input type="email" class="form-control" id="inputEmail4"
                                                   placeholder="contact@business.com" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="inputGst" class="form-label">GST No</label>
                                            <input type="text" class="form-control" id="inputGst"
                                                   placeholder="GST Number">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputAddress" class="form-label">Address *</label>
                                            <input type="text" class="form-control" id="inputAddress"
                                                   placeholder="1234 Main St" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="inputAddress2" class="form-label">Address 2</label>
                                            <input type="text" class="form-control" id="inputAddress2"
                                                   placeholder="Apartment, studio, or floor">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputCity" class="form-label">City *</label>
                                            <input type="text" class="form-control" id="inputCity" placeholder="City" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPincode" class="form-label">Pincode *</label>
                                            <input type="text" class="form-control" id="inputPincode"
                                                   placeholder="123456" required>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Set Business</button>
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
<?php include_once './includes/_footer.php'; ?>
<script>
    $(document).ready(function () {
        $("#side-business").addClass("active-page");
    });
</script>
</body>
</html>