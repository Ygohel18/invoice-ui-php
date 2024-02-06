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
                            <li class="breadcrumb-item"><a href="./users.php">User</a></li>
                            <li class="breadcrumb-item" aria-current="page">New</li>
                        </ol>
                    </nav>

                    <div class="row">
                        <div class="col">
                            <div class="page-description">
                                <h1>New User</h1>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <p>User Information</p>
                                </div>
                                <div class="card-body">
                                    <form class="row g-3">
                                        <div class="col-md-6">
                                            <label for="inputFirstName" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="inputFirstName"
                                                   placeholder="First Name">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputLastName" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="inputLastName"
                                                   placeholder="Last Name">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="inputEmail4" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="inputEmail4"
                                                   placeholder="username@example.com">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPincode" class="form-label">Country Code</label>
                                            <input type="number" class="form-control" id="inputCountryCode"
                                                   placeholder="91">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputMobile" class="form-label">Mobile</label>
                                            <input type="tel" class="form-control" id="inputMobile"
                                                   placeholder="1234567890">
                                        </div>

                                        <div class="col-md-12">
                                            <label for="inputPassword" class="form-label">Set Password</label>
                                            <input type="password" class="form-control" id="inputPassword"
                                                   placeholder="Strong Password">
                                        </div>

                                        <div class="col-md-12">
                                            <label for="inputType" class="form-label">User Type *</label>
                                            <select id="inputType" class="form-select" required>
                                                <option value="user" selected>User</option>
                                                <option value="admin">Admin</option>
                                            </select>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Add User</button>
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
        $("#side-user").addClass("active-page open");
        $("#side-user > a").addClass("active");
        $("#side-user ul").attr("style", "");
        $("#side-user-new").addClass("active");
        $('select').select2();
    });
</script>
</body>
</html>