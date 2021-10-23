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
            <div class="content mt2">
                <div class="transiction-inner">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-flex align-items-center justify-content-between">
                                <a href="transaction.php">
                                    <div class="back">
                                        <i class="fa fa-arrow-left"></i>
                                        <span>Back To Transaction</span>
                                    </div>
                                </a>
                                <!-- <div class="blueBtnRound squareBtn">
                                    <i class="fas fa-eye"></i>
                                    <span>view</span>
                                </div> -->
                                <a href="./add-transaction-inner.php">
                                    <button class="greyBtnRound squareBtn">
                                        <i class="fas fa-eye"></i>
                                        view
                                    </button>
                                </a>
                                <!-- <button class="blueBtnRound squareBtn">Save</button> -->
                            </div>
                        </div>
                    </div>
                    <!-- transection 1st section -->
                    <div class="transectiontsection mt3 mb1">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="transsectionImgbox">
                                    <img src="./assets/img/1x/home-icon.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="transectionlabelpart">
                                    <h3>
                                        4329 Saint Dominic, St Ann, MO
                                        63074-1110
                                    </h3>
                                    <div class="typeStatusSection  d-flex justify-content-between">
                                        <div class="typeBox1 d-flex">
                                            <label for="">
                                                Type:
                                            </label>
                                            <span>
                                                Listing for Sale
                                            </span>
                                        </div>
                                        <div class="typeBox1 d-flex">
                                            <label for="">
                                                Status:
                                            </label>
                                            <span>
                                                Active Listing
                                            </span>
                                        </div>
                                        <div class="typeBox1 d-flex">
                                            <label for="">
                                                Listing:
                                            </label>
                                            <span>
                                                $5,000
                                            </span>
                                        </div>
                                    </div>
                                    <div class="transCreatedbox1">
                                        <label for="">
                                            Created:
                                        </label>
                                        <span>
                                            09/09/2021, 2:45 AM
                                        </span>
                                    </div>
                                    <div class="transCreatedbox1">
                                        <label for="">
                                        Closing:
                                        </label>
                                        <span>
                                            09/09/2021, 2:45 AM
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- transection Documents -->
                    <div class="transectionDocumentsbox mt2">
                        <div class="documentsHeadingbox">
                            <h3>
                                Documents
                            </h3>
                            <label for="">
                                Anything you add is private until shared.
                            </label>
                        </div>
                        <div class="transdivforpadding mt3 mb1">
                            <div class="clientDocheading d-flex">
                                <h3>
                                    Client Documents
                                </h3>
                                <div class="docnumber">
                                    <label for="">
                                        1
                                    </label>
                                </div>
                            </div>
                            <div class="transShareFolderbox d-flex justify-content-end">
                                <div class="transShareFolderbox1 fol-text">
                                    <i class="fas fa-share-alt-square newtransIcon"></i>
                                    <label for="" data-bs-toggle="modal" data-bs-target="#sharemodal">
                                        Share Folder
                                    </label>
                                </div>
                                <div class="transShareFolderbox1 ">
                                    <i class="fas fa-archive newtransIcon"></i>
                                    <label class="transred" for="" data-bs-toggle="modal" data-bs-target="#sharemodal">
                                        Archive Folder
                                    </label>
                                </div>
                            </div>
                            <div class="limBlueCard newcardforTrans  newcardforTrans2  mb2">
                                <div class="row">
                                    <div class="ftrans">
                                        <div class="col-lg-12">
                                            <h2>
                                                Information about Brokerage Services
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="row classforwor">
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Uploaded by: </label>
                                                <span>78945612
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Email:
                                                </label>
                                                <span>ethan@yahoo.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="transOnFile">
                                    <button class="onfiletransn">
                                        On File
                                    </button>
                                </div>
                                <div class="dots">
                                    <i class="fa fa-ellipsis-v"></i>
                                </div>
                                <div class=" dots-list">
                                    <div class="d-flex">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-eye"></i>
                                            View
                                        </a>
                                    </div>
                                    <div class="d-flex">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#sharemodal">
                                            <i class="fa fa-share"></i>
                                            Share
                                        </a>
                                    </div>
                                    <div class="d-flex">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-file-signature"></i>
                                            Review
                                        </a>
                                    </div>
                                    <div class="d-flex red-col">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-archive"></i>
                                            Archive
                                        </a>
                                    </div>
                                    <div class="d-flex">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-envelope"></i>
                                            Via Mail
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <!-- <div class="limBlueCard newcardforTrans  newcardforTrans2  mb2">
                                <div class="row">
                                    <div class="ftrans">
                                        <div class="col-lg-12">
                                            <h2>
                                                Information about Brokerage Services
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="row classforwor">
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Uploaded by: </label>
                                                <span>78945612
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Email:
                                                </label>
                                                <span>ethan@yahoo.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="transOnFile">
                                    <button class="onfiletransn">
                                        On File
                                    </button>
                                </div>
                                <div class="dots">
                                    <i class="fa fa-ellipsis-v"></i>
                                </div>
                                <div class=" dots-list">
                                    <div class="d-flex">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-eye"></i>
                                            View
                                        </a>
                                    </div>
                                    <div class="d-flex">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-share"></i>
                                            Share
                                        </a>
                                    </div>
                                    <div class="d-flex">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-file-signature"></i>
                                            Review
                                        </a>
                                    </div>
                                    <div class="d-flex red-col">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-archive"></i>
                                            Archive
                                        </a>
                                    </div>

                                </div>
                            </div> -->

                            <div class="limBlueCard newcardforTrans  newcardforTrans2  mb2">
                                <div class="row">
                                    <div class="ftrans">
                                        <div class="col-lg-12">
                                            <h2>
                                            Wire Fraud Warning
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Uploaded by: </label>
                                                <span>78945612
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Email:
                                                </label>
                                                <span>ethan@yahoo.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="transOnFile">
                                    <button class="onApproved">
                                        Approved
                                    </button>
                                </div>


                                <div class="dots">
                                    <i class="fa fa-ellipsis-v"></i>
                                </div>
                                <div class=" dots-list">
                                    <div class="d-flex">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-eye"></i>
                                            View
                                        </a>
                                    </div>
                                    <div class="d-flex">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#sharemodal">
                                            <i class="fa fa-share"></i>
                                            Share
                                        </a>
                                    </div>
                                    <div class="d-flex">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-file-signature"></i>
                                            Review
                                        </a>
                                    </div>
                                    <div class="d-flex red-col">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-archive"></i>
                                            Archive
                                        </a>
                                    </div>
                                    <div class="d-flex">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-envelope"></i>
                                            Via Mail
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="limBlueCard newcardforTrans  newcardforTrans2 newcardforTransbg  mb2">
                                <div class="row">
                                    <div class="ftrans">
                                        <div class="col-lg-12">
                                            <h2>
                                            Buyer's Representation Agreement
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label for="">
                                                This Required file should be attatched now
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <div class="transOnFile">
                                    <button class="onrequired">
                                        Required Now
                                    </button>
                                </div>


                                <div class="dots">
                                    <i class="fa fa-ellipsis-v"></i>
                                </div>
                                <div class=" dots-list">
                                    <div class="d-flex">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-eye"></i>
                                            View
                                        </a>
                                    </div>
                                    <div class="d-flex">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#sharemodal">
                                            <i class="fa fa-share"></i>
                                            Share
                                        </a>
                                    </div>
                                    <div class="d-flex">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-file-signature"></i>
                                            Review
                                        </a>
                                    </div>
                                    <div class="d-flex red-col">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-archive"></i>
                                            Archive
                                        </a>
                                    </div>
                                    <div class="d-flex">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-envelope"></i>
                                            Via Mail
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="addAnothorDoc d-flex justify-content-end">
                                <i class="fas fa-plus"></i>
                                <label for="" data-bs-toggle="modal" data-bs-target="#uploadModal">
                                    Add Another Document
                                </label>
                            </div>
                        </div>
                        <div class="transdivforpadding mt3 mb1">
                            <div class="clientDocheading d-flex">
                                <h3>
                                    Contract Documents </h3>
                                <div class="docnumber">
                                    <label for="">
                                        1
                                    </label>
                                </div>
                            </div>
                            <div class="transShareFolderbox d-flex justify-content-end">
                                <div class="transShareFolderbox1 fol-text">
                                    <i class="fas fa-share-alt-square newtransIcon"></i>
                                    <label for="" data-bs-toggle="modal" data-bs-target="#sharemodal">
                                        Share Folder
                                    </label>
                                </div>
                                <div class="transShareFolderbox1">
                                    <i class="fas fa-archive newtransIcon"></i>
                                    <label class="transred" for="" data-bs-toggle="modal" data-bs-target="#sharemodal">
                                        Archive Folder
                                    </label>
                                </div>
                            </div>
                            <div class="limBlueCard newcardforTrans  newcardforTrans2  mb2">
                                <div class="row">
                                    <div class="ftrans">
                                        <div class="col-lg-12">
                                            <h2>
                                                Information about Brokerage Services
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Uploaded by: </label>
                                                <span>78945612
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Email:
                                                </label>
                                                <span>ethan@yahoo.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="transOnFile">
                                    <button class="onfiletransn">
                                        On File
                                    </button>
                                </div>


                                <div class="dots">
                                    <i class="fa fa-ellipsis-v"></i>
                                </div>
                                <div class=" dots-list">
                                    <div class="d-flex">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-eye"></i>
                                            View
                                        </a>
                                    </div>
                                    <div class="d-flex">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#sharemodal">
                                            <i class="fa fa-share"></i>
                                            Share
                                        </a>
                                    </div>
                                    <div class="d-flex">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-file-signature"></i>
                                            Review
                                        </a>
                                    </div>
                                    <div class="d-flex red-col">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-archive"></i>
                                            Archive
                                        </a>
                                    </div>
                                    <div class="d-flex">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-envelope"></i>
                                            Via Mail
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="limBlueCard newcardforTrans  newcardforTrans2  mb2">
                                <div class="row">
                                    <div class="ftrans">
                                        <div class="col-lg-12">
                                            <h2>
                                            Wire Fraud Warning
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Uploaded by: </label>
                                                <span>78945612
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Email:
                                                </label>
                                                <span>ethan@yahoo.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="transOnFile">
                                    <button class="onApproved">
                                        Approved
                                    </button>
                                </div>


                                <div class="dots">
                                    <i class="fa fa-ellipsis-v"></i>
                                </div>
                                <div class=" dots-list">
                                    <div class="d-flex">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-eye"></i>
                                            View
                                        </a>
                                    </div>
                                    <div class="d-flex">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#sharemodal">
                                            <i class="fa fa-share"></i>
                                            Share
                                        </a>
                                    </div>
                                    <div class="d-flex">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-file-signature"></i>
                                            Review
                                        </a>
                                    </div>
                                    <div class="d-flex red-col">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-archive"></i>
                                            Archive
                                        </a>
                                    </div>
                                    <div class="d-flex">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-envelope"></i>
                                            Via Mail
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="limBlueCard newcardforTrans  newcardforTrans2 newcardforTransbg  mb2">
                                <div class="row">
                                    <div class="ftrans">
                                        <div class="col-lg-12">
                                            <h2>
                                            Buyer's Representation Agreement
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label for="">
                                                This Required file should be attatched now
                                            </label>
                                        </div>
                                        <!-- <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Uploaded by: </label>
                                                <span>78945612
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Email:
                                                </label>
                                                <span>ethan@yahoo.com</span>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="transOnFile">
                                    <button class="onrequired">
                                        Required Now
                                    </button>
                                </div>


                                <div class="dots">
                                    <i class="fa fa-ellipsis-v"></i>
                                </div>
                                <div class=" dots-list">
                                    <div class="d-flex">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-eye"></i>
                                            View
                                        </a>
                                    </div>
                                    <div class="d-flex">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#sharemodal">
                                            <i class="fa fa-share"></i>
                                            Share
                                        </a>
                                    </div>
                                    <div class="d-flex">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-file-signature"></i>
                                            Review
                                        </a>
                                    </div>
                                    <div class="d-flex red-col">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-archive"></i>
                                            Archive
                                        </a>
                                    </div>
                                    <div class="d-flex">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-envelope"></i>
                                            Via Mail
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="addAnothorDoc d-flex justify-content-end">
                                <i class="fas fa-plus"></i>
                                <label for="" data-bs-toggle="modal" data-bs-target="#uploadModal">
                                    Add Another Document
                                </label>
                            </div>
                        </div>
                        <div class="transdivforpadding mt3 mb1">
                            <div class="clientDocheading d-flex">
                                <h3>
                                Closing Documents </h3>
                                <div class="docnumber">
                                    <label for="">
                                        1
                                    </label>
                                </div>
                            </div>
                            <div class="transShareFolderbox d-flex justify-content-end">
                                <div class="transShareFolderbox1 fol-text">
                                    <i class="fas fa-share-alt-square newtransIcon"></i>
                                    <label for="" data-bs-toggle="modal" data-bs-target="#sharemodal">
                                        Share Folder
                                    </label>
                                </div>
                                <div class="transShareFolderbox1">
                                    <i class="fas fa-archive newtransIcon"></i>
                                    <label class="transred" for="" data-bs-toggle="modal" data-bs-target="#sharemodal">
                                        Archive Folder
                                    </label>
                                </div>
                            </div>
                            <div class="limBlueCard newcardforTrans  newcardforTrans2  mb2">
                                <div class="row">
                                    <div class="ftrans">
                                        <div class="col-lg-12">
                                            <h2>
                                                Information about Brokerage Services
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Uploaded by: </label>
                                                <span>78945612
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Email:
                                                </label>
                                                <span>ethan@yahoo.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="transOnFile">
                                    <button class="onfiletransn">
                                        On File
                                    </button>
                                </div>


                                <div class="dots">
                                    <i class="fa fa-ellipsis-v"></i>
                                </div>
                                <div class=" dots-list">
                                    <div class="d-flex">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-eye"></i>
                                            View
                                        </a>
                                    </div>
                                    <div class="d-flex">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#sharemodal">
                                            <i class="fa fa-share"></i>
                                            Share
                                        </a>
                                    </div>
                                    <div class="d-flex">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-file-signature"></i>
                                            Review
                                        </a>
                                    </div>
                                    <div class="d-flex red-col">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-archive"></i>
                                            Archive
                                        </a>
                                    </div>
                                    <div class="d-flex">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-envelope"></i>
                                            Via Mail
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="limBlueCard newcardforTrans  newcardforTrans2  mb2">
                                <div class="row">
                                    <div class="ftrans">
                                        <div class="col-lg-12">
                                            <h2>
                                            Wire Fraud Warning
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Uploaded by: </label>
                                                <span>78945612
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Email:
                                                </label>
                                                <span>ethan@yahoo.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="transOnFile">
                                    <button class="onApproved">
                                        Approved
                                    </button>
                                </div>


                                <div class="dots">
                                    <i class="fa fa-ellipsis-v"></i>
                                </div>
                                <div class=" dots-list">
                                    <div class="d-flex">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-eye"></i>
                                            View
                                        </a>
                                    </div>
                                    <div class="d-flex">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#sharemodal">
                                            <i class="fa fa-share"></i>
                                            Share
                                        </a>
                                    </div>
                                    <div class="d-flex">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-file-signature"></i>
                                            Review
                                        </a>
                                    </div>
                                    <div class="d-flex red-col">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-archive"></i>
                                            Archive
                                        </a>
                                    </div>
                                    <div class="d-flex">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-envelope"></i>
                                            Via Mail
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="limBlueCard newcardforTrans  newcardforTrans2 newcardforTransbg  mb2">
                                <div class="row">
                                    <div class="ftrans">
                                        <div class="col-lg-12">
                                            <h2>
                                            Buyer's Representation Agreement
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label for="">
                                                This Required file should be attatched now
                                            </label>
                                        </div>
                                        <!-- <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Uploaded by: </label>
                                                <span>78945612
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Email:
                                                </label>
                                                <span>ethan@yahoo.com</span>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="transOnFile">
                                    <button class="onrequired">
                                        Required Now
                                    </button>
                                </div>


                                <div class="dots">
                                    <i class="fa fa-ellipsis-v"></i>
                                </div>
                                <div class=" dots-list">
                                    <div class="d-flex">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-eye"></i>
                                            View
                                        </a>
                                    </div>
                                    <div class="d-flex">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#sharemodal">
                                            <i class="fa fa-share"></i>
                                            Share
                                        </a>
                                    </div>
                                    <div class="d-flex">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-file-signature"></i>
                                            Review
                                        </a>
                                    </div>
                                    <div class="d-flex red-col">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-archive"></i>
                                            Archive
                                        </a>
                                    </div>
                                    <div class="d-flex">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-envelope"></i>
                                            Via Mail
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="addAnothorDoc d-flex justify-content-end">
                                <i class="fas fa-plus"></i>
                                <label for="" data-bs-toggle="modal" data-bs-target="#uploadModal">
                                    Add Another Document
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- Task -->
                    <div class="transectionDocumentsbox  mt2">
                        <div class="documentsHeadingbox d-flex justify-content-between">
                            <div class="documentsHeadingsunbox">
                                <h3>
                                    Task
                                </h3>
                                <label for="">
                                    Use tasks to coordinate activities with others. </label>
                            </div>
                            <div class="documentsHeadingsunboxbutton">
                                <button class="blueBtnRound squareBtn custombtntrans add-peo-mod mod-open" data-bs-toggle="modal" data-bs-target="#taskModal">Add</button>
                            </div>

                        </div>

                        <div class="transdivforpadding">
                            <div class="cardSec Team mb1">
                                <div class="limBlueCard newcardforTrans  newcardforTrans2  mb2">
                                    <div class="row w88">
                                        <div class="ftrans">
                                            <div class="col-lg-12 text-dark">
                                                <h2>
                                                    Ethan Nizami
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="phMail d-flex align-items-center">
                                                    <label for="">Assigned to:</label>
                                                    <span>Joseph</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="phMail d-flex align-items-center">
                                                    <label for="">Due Date: </label>
                                                    <span>9/8/2021</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <select name="" id="">
                                                    <option value="">Not Started</option>
                                                    <option value="">In Progress</option>
                                                    <option value="">Awaiting Respose</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="transOnFile">
                                        <button class="onApproved">
                                            Completed
                                        </button>
                                    </div>


                                    <div class="dots">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </div>
                                    <div class="dots-list">
                                        <div class="d-flex">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleAdd">
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
                                        <div class="d-flex">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#assignTask">
                                                <i class="fas fa-share"></i>
                                                <p>Assign</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="cardSec Team mb1">
                                <div class="limBlueCard newcardforTrans  newcardforTrans2  mb2">
                                    <div class="row w88">
                                        <div class="ftrans">
                                            <div class="col-lg-12 text-dark">
                                                <h2>
                                                    Ethan Nizami
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="phMail d-flex align-items-center">
                                                    <label for="">Assigned to:</label>
                                                    <span>Joseph</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="phMail d-flex align-items-center">
                                                    <label for="">Due Date: </label>
                                                    <span>9/8/2021</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <select name="" id="">
                                                    <option value="">Not Started</option>
                                                    <option value="">In Progress</option>
                                                    <option value="">Awaiting Respose</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="transOnFile">
                                        <button class="onApproved">
                                            Completed
                                        </button>
                                    </div>


                                    <div class="dots">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </div>
                                    <div class="dots-list">
                                        <div class="d-flex">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleAdd">
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
                                        <div class="d-flex">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#assignTask">
                                                <i class="fas fa-share"></i>
                                                <p>Assign</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Team -->
                    <div class="transectionDocumentsbox  mt2">
                        <div class="documentsHeadingbox d-flex justify-content-between">
                            <div class="documentsHeadingsunbox">
                                <h3>
                                    Team
                                </h3>
                                <label for="">
                                    Use tasks to coordinate activities with others.
                                </label>
                            </div>
                            <div class="documentsHeadingsunboxbutton">
                                <button class="blueBtnRound squareBtn custombtntrans" data-bs-toggle="modal" data-bs-target="#teamModal">Add</button>
                            </div>

                        </div>
                        <div class="transdivforpadding">
                            <div class="taskheading">
                                <h5>Listing Team</h5>
                            </div>
                            <div class="cardSec mb1">
                                <div class="limBlueCard">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2>
                                                Ethan Nizami
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <select name="" id="">
                                                <option value="">Co-Seller Agent</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Phone: </label>
                                                <span>78945612</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Email: </label>
                                                <span>ethan@yahoo.com</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="dots">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </div>
                                    <div class="dots-list">
                                        <div class="d-flex">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleAdd">
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
                            <div class="cardSec mb1">
                                <div class="limBlueCard">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2>
                                                Ethan Nizami
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <select name="" id="">
                                                <option value="">Co-Seller Agent</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Phone: </label>
                                                <span>78945612</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Email: </label>
                                                <span>ethan@yahoo.com</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="dots">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </div>
                                    <div class="dots-list">
                                        <div class="d-flex">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleAdd">
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
                        <div class="transdivforpadding mt3">
                            <div class="taskheading">
                                <h5>Buyer Team</h5>
                            </div>
                            <div class="cardSec mb1">
                                <div class="limBlueCard">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2>
                                                Ethan Nizami
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <select name="" id="">
                                                <option value="">Co-Seller Agent</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Phone: </label>
                                                <span>78945612</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Email: </label>
                                                <span>ethan@yahoo.com</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="dots">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </div>
                                    <div class="dots-list">
                                        <div class="d-flex">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleAdd">
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