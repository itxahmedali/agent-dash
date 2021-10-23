<!DOCTYPE html>
<html lang="en">
<?php include './assets/commons/head.php' ?>

<body>

    <!-- navbar -->
    <?php include('./assets/commons/navbar.php') ?>


    <div class="mainDiv my-scrollbar" data-scrollbar>

        <div class="main d-flex">
            <!-- sider -->
            <?php include('./sider.php') ?>
            <div class="container">
                <div class="limBlueCard d-flex align-items-center">
                    <div class="head-q d-flex align-items-baseline pd-lf">
                        <i class="fas fa-arrow-circle-right"></i>
                        <h5 for="">Property Type: 1-4 Family</h5>
                    </div>
                    <div class="d-flex mt1 ye-no">
                        <label class="cstm-checkmark">Yes
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="cstm-checkmark">No
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="limBlueCard d-flex align-items-center">
                    <div class="head-q d-flex align-items-baseline pd-lf">
                        <i class="fas fa-arrow-circle-right"></i>
                        <h5 for="">Built Before 1978:</h5>
                    </div>
                    <div class="d-flex mt1 ye-no">
                        <label class="cstm-checkmark">Yes
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="cstm-checkmark">No
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="limBlueCard d-flex align-items-center">
                    <div class="head-q d-flex align-items-baseline pd-lf">
                        <i class="fas fa-arrow-circle-right"></i>
                        <h5 for="">Owner's Association:</h5>
                    </div>
                    <div class="d-flex mt1 ye-no">
                        <label class="cstm-checkmark">Yes
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="cstm-checkmark">No
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="limBlueCard d-flex align-items-center">
                    <div class="head-q d-flex align-items-baseline pd-lf">
                        <i class="fas fa-arrow-circle-right"></i>
                        <h5 for="">Water District:</h5>
                    </div>
                    <div class="d-flex mt1 ye-no">
                        <label class="cstm-checkmark">Yes
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="cstm-checkmark">No
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="limBlueCard d-flex align-items-center">
                    <div class="head-q d-flex align-items-baseline pd-lf">
                        <i class="fas fa-arrow-circle-right"></i>
                        <h5 for="">Flood Area:</h5>
                    </div>
                    <div class="d-flex mt1 ye-no">
                        <label class="cstm-checkmark">Yes
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="cstm-checkmark">No
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="limBlueCard d-flex align-items-center">
                    <div class="head-q d-flex align-items-baseline pd-lf">
                        <i class="fas fa-arrow-circle-right"></i>
                        <h5 for="">Loan Type:</h5>
                    </div>
                    <div class="d-flex mt1 ye-no">
                        <label class="cstm-checkmark">Yes
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="cstm-checkmark">No
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
            </div>

        </div>

        <!-- footer -->
        <?php include('./assets/commons/footer.php') ?>
    </div>

    <!-- scripts -->
    <?php include './assets/commons/scripts.php' ?>
</body>

</html>