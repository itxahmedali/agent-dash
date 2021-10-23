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
                <div class="transaction-box">
                    <div class="row">
                        <div class="col-lg-7 mt1">
                            <div class="trans-cor">
                                <h5 class="mb1">Transaction Coordinator</h5>
                                <h2>Fast track your progress with a Transaction Coordinator</h2>
                                <div class="get-tc-btn mt2">
                                    <button>Get a TC</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 mt1">
                            <div class="calender-box">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb1 mt1">
                        <div class="col-lg-9 ">
                            <div class="search-inp">
                                <input type="text" placeholder="Search...">
                                <i class='fa fa-search'></i>
                            </div>
                        </div>
                        <div class="col-lg-3 d-flex align-items-center justify-content-center">
                            <div class="save-cancel-btn d-flex justify-content-end">
                                <a href="add-transaction.php">
                                    <button class="save-btn add-trans">Add Transaction</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-grid-tab" data-bs-toggle="pill" data-bs-target="#pills-grid" type="button" role="tab" aria-controls="pills-grid" aria-selected="true">Grid View</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-listview-tab" data-bs-toggle="pill" data-bs-target="#pills-listview" type="button" role="tab" aria-controls="pills-listview" aria-selected="false">List View</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-grid" role="tabpanel" aria-labelledby="pills-grid-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="det-cards">
                                        <div class="home-det-card">
                                            <div class="home-card">
                                                <a href="transaction-inner.php">
                                                    <div class="home-icon">
                                                        <img src="./assets/img/1x/home-icon.png" alt="">
                                                    </div>
                                                    <div class="paxs">
                                                        <h6 class="mt1">4329 Saint Dominic, St Ann, MO
                                                            63074-1110</h6>
                                                        <div class="det d-flex">
                                                            <label for="">Type: </label>
                                                            <h6> Listing for Sale</h6>
                                                        </div>
                                                        <div class="det d-flex">
                                                            <label for="">Status: </label>
                                                            <h6> Active Listing</h6>
                                                        </div>
                                                        <div class="det d-flex">
                                                            <label for="">Listing: </label>
                                                            <h6> $5,000</h6>
                                                        </div>
                                                        <div class="date-details d-flex">
                                                            <div class="date-lab d-flex">
                                                                <label for="">Created: </label>
                                                                <p> 09/09/2021, 2:45 AM</p>
                                                            </div>
                                                            <div class="date-lab d-flex">
                                                                <label for="">Closing: </label>
                                                                <p> 09/09/2021, 2:45 AM</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="home-det-card">
                                            <div class="home-card">
                                                <a href="transaction-inner.php">
                                                    <div class="home-icon">
                                                        <img src="./assets/img/1x/home-icon.png" alt="">
                                                    </div>
                                                    <div class="paxs">
                                                        <h6 class="mt1">4329 Saint Dominic, St Ann, MO
                                                            63074-1110</h6>
                                                        <div class="det d-flex">
                                                            <label for="">Type: </label>
                                                            <h6> Listing for Sale</h6>
                                                        </div>
                                                        <div class="det d-flex">
                                                            <label for="">Status: </label>
                                                            <h6> Active Listing</h6>
                                                        </div>
                                                        <div class="det d-flex">
                                                            <label for="">Listing: </label>
                                                            <h6> $5,000</h6>
                                                        </div>
                                                        <div class="date-details d-flex">
                                                            <div class="date-lab d-flex">
                                                                <label for="">Created: </label>
                                                                <p> 09/09/2021, 2:45 AM</p>
                                                            </div>
                                                            <div class="date-lab d-flex">
                                                                <label for="">Closing: </label>
                                                                <p> 09/09/2021, 2:45 AM</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="home-det-card">
                                            <div class="home-card">
                                                <a href="transaction-inner.php">
                                                    <div class="home-icon">
                                                        <img src="./assets/img/1x/home-icon.png" alt="">
                                                    </div>
                                                    <div class="paxs">
                                                        <h6 class="mt1">4329 Saint Dominic, St Ann, MO
                                                            63074-1110</h6>
                                                        <div class="det d-flex">
                                                            <label for="">Type: </label>
                                                            <h6> Listing for Sale</h6>
                                                        </div>
                                                        <div class="det d-flex">
                                                            <label for="">Status: </label>
                                                            <h6> Active Listing</h6>
                                                        </div>
                                                        <div class="det d-flex">
                                                            <label for="">Listing: </label>
                                                            <h6> $5,000</h6>
                                                        </div>
                                                        <div class="date-details d-flex">
                                                            <div class="date-lab d-flex">
                                                                <label for="">Created: </label>
                                                                <p> 09/09/2021, 2:45 AM</p>
                                                            </div>
                                                            <div class="date-lab d-flex">
                                                                <label for="">Closing: </label>
                                                                <p> 09/09/2021, 2:45 AM</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade list-view-tab" id="pills-listview" role="tabpanel" aria-labelledby="pills-listview-tab">
                            <!-- <div class="list-view-tab-pag">
                               <div class="row">
                                       <div class="col-sm-12 mt1">
                                           <div class="row">
                                               <div class="col-lg-2">
                                                   <label for="">Address:</label>
                                                   <p>4329 Saint Dominic, St Ann, MO 63074-1110</p>
                                               </div>
                                               <div class="col-lg-2">
                                                   <label for="">Type:</label>
                                                   <p>Listing for Sale</p>
                                               </div>
                                               <div class="col-lg-2">
                                                   <label for="">Status:</label>
                                                   <p>Active Listing</p>
                                               </div>
                                               <div class="col-lg-2">
                                                   <label for="">Listing:</label>
                                                   <p>$5,000</p>
                                               </div>
                                               <div class="col-lg-2">
                                                   <label for="">Created:</label>
                                                   <p>09/09/2021, 2:45 AM</p>
                                               </div>
                                               <div class="col-lg-2">
                                                   <label for="">Closing:</label>
                                                   <p>09/09/2021, 2:45 AM</p>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-sm-12 mt1">
                                           <div class="row">
                                               <div class="col-lg-2">
                                                   <label for="">Address:</label>
                                                   <p>4329 Saint Dominic, St Ann, MO 63074-1110</p>
                                               </div>
                                               <div class="col-lg-2">
                                                   <label for="">Type:</label>
                                                   <p>Listing for Sale</p>
                                               </div>
                                               <div class="col-lg-2">
                                                   <label for="">Status:</label>
                                                   <p>Active Listing</p>
                                               </div>
                                               <div class="col-lg-2">
                                                   <label for="">Listing:</label>
                                                   <p>$5,000</p>
                                               </div>
                                               <div class="col-lg-2">
                                                   <label for="">Created:</label>
                                                   <p>09/09/2021, 2:45 AM</p>
                                               </div>
                                               <div class="col-lg-2">
                                                   <label for="">Closing:</label>
                                                   <p>09/09/2021, 2:45 AM</p>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-sm-12 mt1">
                                           <div class="row">
                                               <div class="col-lg-2">
                                                   <label for="">Address:</label>
                                                   <p>4329 Saint Dominic, St Ann, MO 63074-1110</p>
                                               </div>
                                               <div class="col-lg-2">
                                                   <label for="">Type:</label>
                                                   <p>Listing for Sale</p>
                                               </div>
                                               <div class="col-lg-2">
                                                   <label for="">Status:</label>
                                                   <p>Active Listing</p>
                                               </div>
                                               <div class="col-lg-2">
                                                   <label for="">Listing:</label>
                                                   <p>$5,000</p>
                                               </div>
                                               <div class="col-lg-2">
                                                   <label for="">Created:</label>
                                                   <p>09/09/2021, 2:45 AM</p>
                                               </div>
                                               <div class="col-lg-2">
                                                   <label for="">Closing:</label>
                                                   <p>09/09/2021, 2:45 AM</p>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div> -->
                           <div class="lis-tb">
                               <div class="lis-view-item d-flex justify-content-between mt1">
                                   <div class="cl-1">
                                       <label for="">Address:</label>
                                       <p>4329 Saint Dominic, St Ann, MO 63074-1110</p>
                                   </div>
                                   <div class="cl-1">
                                       <label for="">Type:</label>
                                       <p>Listing for Sale</p>
                                   </div>
                                   <div class="cl-1">
                                       <label for="">Status:</label>
                                       <p>Active Listing</p>
                                   </div>
                                   <div class="cl-1">
                                       <label for="">Listing:</label>
                                       <p>$5,000</p>
                                   </div>
                                   <div class="cl-1">
                                       <label for="">Created:</label>
                                       <p>09/09/2021, 2:45 AM</p>
                                   </div>
                                   <div class="cl-1">
                                       <label for="">Closing:</label>
                                       <p>09/09/2021, 2:45 AM</p>
                                   </div>
                               </div>
                               <div class="lis-view-item d-flex justify-content-between mt1">
                                   <div class="cl-1">
                                       <label for="">Address:</label>
                                       <p>4329 Saint Dominic, St Ann, MO 63074-1110</p>
                                   </div>
                                   <div class="cl-1">
                                       <label for="">Type:</label>
                                       <p>Listing for Sale</p>
                                   </div>
                                   <div class="cl-1">
                                       <label for="">Status:</label>
                                       <p>Active Listing</p>
                                   </div>
                                   <div class="cl-1">
                                       <label for="">Listing:</label>
                                       <p>$5,000</p>
                                   </div>
                                   <div class="cl-1">
                                       <label for="">Created:</label>
                                       <p>09/09/2021, 2:45 AM</p>
                                   </div>
                                   <div class="cl-1">
                                       <label for="">Closing:</label>
                                       <p>09/09/2021, 2:45 AM</p>
                                   </div>
                               </div>
                               <div class="lis-view-item d-flex justify-content-between mt1">
                                   <div class="cl-1">
                                       <label for="">Address:</label>
                                       <p>4329 Saint Dominic, St Ann, MO 63074-1110</p>
                                   </div>
                                   <div class="cl-1">
                                       <label for="">Type:</label>
                                       <p>Listing for Sale</p>
                                   </div>
                                   <div class="cl-1">
                                       <label for="">Status:</label>
                                       <p>Active Listing</p>
                                   </div>
                                   <div class="cl-1">
                                       <label for="">Listing:</label>
                                       <p>$5,000</p>
                                   </div>
                                   <div class="cl-1">
                                       <label for="">Created:</label>
                                       <p>09/09/2021, 2:45 AM</p>
                                   </div>
                                   <div class="cl-1">
                                       <label for="">Closing:</label>
                                       <p>09/09/2021, 2:45 AM</p>
                                   </div>
                               </div>
                           </div>
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