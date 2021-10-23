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
            <div class="content">
                <div class="transaction-page mt2">
                    <div class="d-flex align-items-center justify-content-between">
                        <h1 class="transaction-main-h1">
                            Add a Transaction
                        </h1>


                    </div>
                    <div class="transaction-form mt3">
                        <div class="row transaction-first-row">
                            <div class="col-lg-12">
                                <span class="transaction-span1">Property Address or MSL no.</span>
                                <h6>4329 Saint Dominic, St Ann, MO 63074-1110</h6>
                                <span class="transaction-span2">Unsure of the property address? Put in your client's name for now – you can always change it later.</span>
                            </div>
                        </div>
                        <div class="row mt2">
                            <div class="col-lg-6 transaction-select1">
                                <label for="">Type</label>
                                <select name="" id="">
                                    <option value="">Listing for Sale</option>
                                    <option value="">Listing for Sale</option>
                                </select>
                            </div>
                            <div class="col-lg-6 transaction-select2">
                                <label for="">Status</label>
                                <select name="" id="">
                                    <option value="">Active Listing</option>
                                    <option value="">Active Listing</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt2">
                            <div class="col-lg-6 transaction-input-placeholder1">
                                <label for="">Listing</label>
                                <input type="text" placeholder="$5,000">
                            </div>
                            <div class="col-lg-6 transaction-input-placeholder2">
                                <label for="">Closing Date</label>
                                <input type="date" name="" id="">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt3">
                        <button class="transparent-transaction-button">Cancel</button>
                        <a href="add-transaction-inner.php">
                            <button class="blueBtnRound">Next</button>
                        </a>
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
<!-- Modal -->
<!-- <div class="modal fade" id="add-trans" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <h1 class="mt1 mb2">Add a Transaction</h1>
                <div class="add-transaction-box">
                    <div class="container">
                        <div class="row mt4">
                            <div class="col-lg-12 d-flex flex-column mb3">
                                <label for="">Property Address or MSL no.</label>
                                <input type="text" value="4329 Saint Dominic, St Ann, MO 63074-1110">
                                <label for="" class="add-bottom-lab">
                                    Unsure of the property address? Put in your client's name for now – you can always change it later.
                                </label>
                            </div>
                            <div class="col-lg-6 d-flex flex-column mb3">
                                <label for="">Type</label>
                                <select name="" id="" class="csSelect">
                                    <option value="Listing for Sale">Listing for Sale</option>
                                </select>
                            </div>
                            <div class="col-lg-6 d-flex flex-column mb3">
                                <label for="">Status</label>
                                <select name="" id="" class="csSelect">
                                    <option value="Active Listing">Active Listing</option>
                                </select>
                            </div>
                            <div class="col-lg-6 d-flex flex-column mb3">
                                <label for="">Listing</label>
                                <input type="text" value="$5000">
                            </div>
                            <div class="col-lg-6 d-flex flex-column mb3">
                                <label for="">Closing Date</label>
                                <input type="date" name="" id="">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="save-cancel-btn d-flex justify-content-end mt2 mb2">
                    <button class="cancel-btn mr1" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                    <button class='save-btn'>Save</button>
                </div>
            </div>
        </div>
    </div>
</div> -->

</html>