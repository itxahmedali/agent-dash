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
            <div class="content mt2 peopl-tb">
                <div class="d-flex align-items-center justify-content-between peo-head">
                    <h1 class="mainH1">
                        Agent/Broker Partner
                    </h1>

                    <button class="blueBtnRound" data-bs-toggle="modal" data-bs-target="#teamModal">Add</button>
                </div>

                <div class="cardSec">
                    <div class="limBlueCard">
                        <div class="row">
                            <div class="col-lg-6">
                                <h2>
                                    Ethan Hunt
                                </h2>
                            </div>
                            <div class="col-lg-6">
                                <div class="phMail d-flex align-items-center">
                                    <label for="">Address: </label>
                                    <span>XYZ Lorem ipsum dolor sit amet.</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between flex-wrap align-items-center">
                            <div class="cl-2 mt1">
                                <select name="" id="">
                                    <option value="">Co-Seller Agent</option>
                                </select>
                            </div>
                            <div class="cl-2 mt1">
                                <div class="phMail d-flex align-items-center">
                                    <label for="">Phone: </label>
                                    <span>78945612</span>
                                </div>
                            </div>
                            <div class="cl-2 mt1">
                                <div class="phMail d-flex align-items-center">
                                    <label for="">Email: </label>
                                    <span>ethan@yahoo.com</span>
                                </div>
                            </div>
                            <div class="cl-2 mt1">
                                <div class="phMail d-flex align-items-center">
                                    <label for="">Company: </label>
                                    <span>XYZ company</span>
                                </div>
                            </div>
                            <div class="cl-2 mt1">
                                <div class="phMail d-flex align-items-center">
                                    <label for="">Team: </label>
                                    <span>Buyer</span>
                                </div>
                            </div>
                           
                        </div>

                        <div class="dots">
                            <i class="fa fa-ellipsis-v"></i>
                        </div>
                        <div class="dots-list">
                            <!-- <div class="d-flex">
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-eye"></i>
                                                <p>view</p>
                                            </a>
                                        </div>
                                        <div class="d-flex">
                                            <a href="javascript:void(0)"> <i class="fas fa-share-alt"></i>
                                                <p>Share</p>
                                            </a>

                                        </div>
                                        <div>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-clipboard"></i>
                                                <p>Review</p>
                                            </a>
                                        </div>
                                        <div class="d-flex">
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-archive"></i>
                                                <p class="icon-red">Archive</p>
                                            </a>
                                        </div> -->
                            <div class="d-flex">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#addPeop">
                                    <i class="fas fa-plus"></i>
                                    <p>Add</p>
                                </a>
                            </div>
                            <div class="d-flex">
                                <a href="javascript:void(0)">
                                    <i class="fas fa-clipboard"></i>
                                    <p>Notes</p>
                                </a>
                            </div>
                            <div class="d-flex">
                                <a href="javascript:void(0)">
                                    <i class="fas fa-pencil-alt"></i>
                                    <p>Edit</p>
                                </a>
                            </div>
                            <div class="d-flex">
                                <a href="javascript:void(0)">
                                    <i class="fas fa-trash"></i>
                                    <p class="icon-red">Delete</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="limBlueCard">
                        <div class="row">
                            <div class="col-lg-6">
                                <h2>
                                    Ethan Hunt
                                </h2>
                            </div>
                            <div class="col-lg-6">
                                <div class="phMail d-flex align-items-center">
                                    <label for="">Address: </label>
                                    <span>XYZ Lorem ipsum dolor sit amet.</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between flex-wrap align-items-center">
                            <div class="cl-2 mt1">
                                <select name="" id="">
                                    <option value="">Co-Seller Agent</option>
                                </select>
                            </div>
                            <div class="cl-2 mt1">
                                <div class="phMail d-flex align-items-center">
                                    <label for="">Phone: </label>
                                    <span>78945612</span>
                                </div>
                            </div>
                            <div class="cl-2 mt1">
                                <div class="phMail d-flex align-items-center">
                                    <label for="">Email: </label>
                                    <span>ethan@yahoo.com</span>
                                </div>
                            </div>
                            <div class="cl-2 mt1">
                                <div class="phMail d-flex align-items-center">
                                    <label for="">Company: </label>
                                    <span>XYZ company</span>
                                </div>
                            </div>
                            <div class="cl-2 mt1">
                                <div class="phMail d-flex align-items-center">
                                    <label for="">Team: </label>
                                    <span>Buyer</span>
                                </div>
                            </div>
                           
                        </div>

                        <div class="dots">
                            <i class="fa fa-ellipsis-v"></i>
                        </div>
                        <div class="dots-list">
                            <!-- <div class="d-flex">
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-eye"></i>
                                                <p>view</p>
                                            </a>
                                        </div>
                                        <div class="d-flex">
                                            <a href="javascript:void(0)"> <i class="fas fa-share-alt"></i>
                                                <p>Share</p>
                                            </a>

                                        </div>
                                        <div>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-clipboard"></i>
                                                <p>Review</p>
                                            </a>
                                        </div>
                                        <div class="d-flex">
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-archive"></i>
                                                <p class="icon-red">Archive</p>
                                            </a>
                                        </div> -->
                            <div class="d-flex">
                                <a href="javascript:void(0)">
                                    <i class="fas fa-clipboard"></i>
                                    <p>Notes</p>
                                </a>
                            </div>
                            <div class="d-flex">
                                <a href="javascript:void(0)">
                                    <i class="fas fa-pencil-alt"></i>
                                    <p>Edit</p>
                                </a>
                            </div>
                            <div class="d-flex">
                                <a href="javascript:void(0)">
                                    <i class="fas fa-trash"></i>
                                    <p class="icon-red">Delete</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- contacts -->
                <div class="d-flex align-items-center justify-content-between mt5">
                    <h1 class="mainH1">
                        Contacts
                    </h1>

                    <button class="blueBtnRound" data-bs-toggle="modal" data-bs-target="#teamModal">Add</button>
                </div>
                <div class="cardSec">
                    <div class="limBlueCard">
                        <div class="row">
                            <div class="col-lg-6">
                                <h2>
                                    Ethan Hunt
                                </h2>
                            </div>
                            <div class="col-lg-6">
                                <div class="phMail d-flex align-items-center">
                                    <label for="">Address: </label>
                                    <span>XYZ Lorem ipsum dolor sit amet.</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between flex-wrap align-items-center">
                            <div class="cl-2 mt1">
                                <select name="" id="">
                                    <option value="">Co-Seller Agent</option>
                                </select>
                            </div>
                            <div class="cl-2 mt1">
                                <div class="phMail d-flex align-items-center">
                                    <label for="">Phone: </label>
                                    <span>78945612</span>
                                </div>
                            </div>
                            <div class="cl-2 mt1">
                                <div class="phMail d-flex align-items-center">
                                    <label for="">Email: </label>
                                    <span>ethan@yahoo.com</span>
                                </div>
                            </div>
                            <div class="cl-2 mt1">
                                <div class="phMail d-flex align-items-center">
                                    <label for="">Company: </label>
                                    <span>XYZ company</span>
                                </div>
                            </div>
                            <div class="cl-2 mt1">
                                <div class="phMail d-flex align-items-center">
                                    <label for="">Team: </label>
                                    <span>Buyer</span>
                                </div>
                            </div>

                        </div>

                        <div class="dots">
                            <i class="fa fa-ellipsis-v"></i>
                        </div>
                        <div class="dots-list">
                            <!-- <div class="d-flex">
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-eye"></i>
                                                <p>view</p>
                                            </a>
                                        </div>
                                        <div class="d-flex">
                                            <a href="javascript:void(0)"> <i class="fas fa-share-alt"></i>
                                                <p>Share</p>
                                            </a>

                                        </div>
                                        <div>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-clipboard"></i>
                                                <p>Review</p>
                                            </a>
                                        </div>
                                        <div class="d-flex">
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-archive"></i>
                                                <p class="icon-red">Archive</p>
                                            </a>
                                        </div> -->
                            <div class="d-flex">
                                <a href="javascript:void(0)">
                                    <i class="fas fa-clipboard"></i>
                                    <p>Notes</p>
                                </a>
                            </div>
                            <div class="d-flex">
                                <a href="javascript:void(0)">
                                    <i class="fas fa-pencil-alt"></i>
                                    <p>Edit</p>
                                </a>
                            </div>
                            <div class="d-flex">
                                <a href="javascript:void(0)">
                                    <i class="fas fa-trash"></i>
                                    <p class="icon-red">Delete</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="limBlueCard">
                        <div class="row">
                            <div class="col-lg-6">
                                <h2>
                                    Ethan Hunt
                                </h2>
                            </div>
                            <div class="col-lg-6">
                                <div class="phMail d-flex align-items-center">
                                    <label for="">Address: </label>
                                    <span>XYZ Lorem ipsum dolor sit amet.</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between flex-wrap align-items-center">
                            <div class="cl-2 mt1">
                                <select name="" id="">
                                    <option value="">Co-Seller Agent</option>
                                </select>
                            </div>
                            <div class="cl-2 mt1">
                                <div class="phMail d-flex align-items-center">
                                    <label for="">Phone: </label>
                                    <span>78945612</span>
                                </div>
                            </div>
                            <div class="cl-2 mt1">
                                <div class="phMail d-flex align-items-center">
                                    <label for="">Email: </label>
                                    <span>ethan@yahoo.com</span>
                                </div>
                            </div>
                            <div class="cl-2 mt1">
                                <div class="phMail d-flex align-items-center">
                                    <label for="">Company: </label>
                                    <span>XYZ company</span>
                                </div>
                            </div>
                            <div class="cl-2 mt1">
                                <div class="phMail d-flex align-items-center">
                                    <label for="">Team: </label>
                                    <span>Buyer</span>
                                </div>
                            </div>
                            
                        </div>

                        <div class="dots">
                            <i class="fa fa-ellipsis-v"></i>
                        </div>
                        <div class="dots-list">
                            <!-- <div class="d-flex">
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-eye"></i>
                                                <p>view</p>
                                            </a>
                                        </div>
                                        <div class="d-flex">
                                            <a href="javascript:void(0)"> <i class="fas fa-share-alt"></i>
                                                <p>Share</p>
                                            </a>

                                        </div>
                                        <div>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-clipboard"></i>
                                                <p>Review</p>
                                            </a>
                                        </div>
                                        <div class="d-flex">
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-archive"></i>
                                                <p class="icon-red">Archive</p>
                                            </a>
                                        </div> -->
                            <div class="d-flex">
                                <a href="javascript:void(0)">
                                    <i class="fas fa-clipboard"></i>
                                    <p>Notes</p>
                                </a>
                            </div>
                            <div class="d-flex">
                                <a href="javascript:void(0)">
                                    <i class="fas fa-pencil-alt"></i>
                                    <p>Edit</p>
                                </a>
                            </div>
                            <div class="d-flex">
                                <a href="javascript:void(0)">
                                    <i class="fas fa-trash"></i>
                                    <p class="icon-red">Delete</p>
                                </a>
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

</html>