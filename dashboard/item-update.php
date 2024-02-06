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
                            <li class="breadcrumb-item"><a href="./items.php">Item</a></li>
                            <li class="breadcrumb-item" aria-current="page">Update</li>
                        </ol>
                    </nav>

                    <div class="row">
                        <div class="col">
                            <div class="page-description">
                                <h1>Update Item</h1>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <form class="row g-3">
                                        <div class="col-md-12">
                                            <label for="inputName" class="form-label">Item Name *</label>
                                            <input type="text" class="form-control" id="inputName"
                                                   placeholder="Full Name" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="inputPrice" class="form-label">Set Price *</label>
                                            <input type="number" step="0.10" class="form-control" id="inputPrice"
                                                   placeholder="0" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="inputType" class="form-label">Item Type *</label>
                                            <select id="inputType" class="form-select" required>
                                                <option value="other" selected disabled>Item</option>
                                                <option value="physical">Physical</option>
                                                <option value="digital">Digital</option>
                                                <option value="service">Service</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Update Item</button>
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
        $("#side-item").addClass("active-page close");
        $("#side-item > a").addClass("active");
    });
</script>
</body>
</html>