<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
                <div class="container">
                    <div class="main-panel">
                        <div class="content">
                            <div class="container-fluid">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title text-center">SK - Signup</h4>
                                        </div>
                                        <div class="form-row card-body justify-content-center">
                                            <form id="my_form1" name="form1" method="post" class="row g-3"
                                                action=db_sign-up.php novalidate>
                                                <?php if(isset($_SESSION['error'])) { ?>
                                                <div class="alert alert-danger" role="alert">
                                                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                                                </div>
                                                <?php } ?>
                                                <?php if(isset($_SESSION['success'])) { ?>
                                                <div class="alert alert-success" role="alert">
                                                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                                                </div>
                                                <?php } ?>
                                                <?php if(isset($_SESSION['warning'])) { ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <?php 
                        echo $_SESSION['warning'];
                        unset($_SESSION['warning']);
                    ?>
                                                </div>
                                                <?php } ?>
                                                <div class="col-md-4">
                                                    <label for="username" class="form-label">Username</label>
                                                    <input type="text" class="form-control" name="username"
                                                        aria-describedby="username" value="" required>
                                                    <div class="invalid-feedback">
                                                        Please enter your Username .
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="password" class="form-label">Password (must be between 5
                                                        - 20
                                                        characters)</label>
                                                    <input type="password" class="form-control" name="password" value=""
                                                        required>
                                                    <div class="invalid-feedback">
                                                        Please enter your Password .
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="confirm password" class="form-label">Confirm
                                                        Password</label>
                                                    <input type="password" class="form-control" name="c_password"
                                                        value="" required>
                                                    <div class="invalid-feedback">
                                                        Please confirm your password.
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="first_name" class="form-label">First Name</label>
                                                    <input type="text" class="form-control" name="first_name"
                                                        aria-describedby="first_name" value="" required>
                                                    <div class="invalid-feedback">
                                                        Please enter your First Name .
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="last_name" class="form-label">Last Name</label>
                                                    <input type="text" class="form-control" name="last_name"
                                                        aria-describedby="last_name" value="" required>
                                                    <div class="invalid-feedback">
                                                        Please enter your Last Name .
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="phone" class="form-label">Phone Number</label>
                                                    <input type="tel" class="form-control" name="phone"
                                                        pattern="^0([8|9|6])([0-9]{8}$)" autocomplete="off" value=""
                                                        required>
                                                    <div class="invalid-feedback">
                                                        Please enter your Phone Number .
                                                    </div>
                                                </div>
                                                <?php 
                                        $select_department = $conn->prepare("SELECT department_name FROM tbl_department");
                                        $select_department->execute();                                                        
                                    ?>
                                                <div class="col-md-4">
                                                    <label for="department" class="form-label">Department</label>
                                                    <select name="department" class="form-select" name="department"
                                                        required>
                                                        <option selected></option>
                                                        <?php 
                                                while($row = $select_department->fetch(PDO::FETCH_ASSOC)) { ?>
                                                        <option><?php echo $row['department_name'] ?></option>
                                                        <?php
                                                }?>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please enter your Department .
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="u_role" class="form-label">u_role</label>
                                                    <select id="u_role" class="form-select" name="u_role" required>
                                                        <option selected></option>
                                                        <option>Admin</option>
                                                        <option>Leader</option>
                                                        <option>Officer GA</option>
                                                        <option>Users</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please enter your Role .
                                                    </div>

                                                </div>

                                                <div class="col-md-12">
                                                    <br>
                                                    <br>
                                                    <button type="submit" name="sign_up" class="btn btn-primary "
                                                        style="float: right;">Sig up
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </main>