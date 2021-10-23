<!DOCTYPE html>
<html lang="en">
<?php include './assets/commons/head.php'?>
<body>

    <!-- navbar -->
    <?php include('./assets/commons/navbar.php') ?>
    

    <div class="mainDiv my-scrollbar" data-scrollbar>

        <div class="main d-flex">
        
            <!-- sider -->
            <?php include('./sider.php') ?>
            <div class="content mt2">
                <div class="d-flex align-items-center justify-content-between">
                    <h1 class="mainH1">
                        Documents
                    </h1>

                    <button class="blueBtnRound csm-md hd-chng" data-bs-toggle="modal" data-bs-target="#uploadModal">New Folder</button>
                </div>

                <!-- tabs -->
                <div class="d-flex align-items-start row mt2">
                    <div class="col-lg-3">
                        <div class="nav flex-column nav-pills me-3 cspay" id="v-pills-tabDocuments" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-PersonalDoc-tab" data-bs-toggle="pill" data-bs-target="#v-pills-PersonalDoc" type="button" role="tab" aria-controls="v-pills-PersonalDoc" aria-selected="true">Personal</button>
                            <button class="nav-link" id="v-pills-TRECFormsDoc-tab" data-bs-toggle="pill" data-bs-target="#v-pills-TRECFormsDoc" type="button" role="tab" aria-controls="v-pills-TRECFormsDoc" aria-selected="false">TREC Forms</button>
                            <button class="nav-link" id="v-pills-TexasDoc-tab" data-bs-toggle="pill" data-bs-target="#v-pills-TexasDoc" type="button" role="tab" aria-controls="v-pills-TexasDoc" aria-selected="false">Texas Realtors Forms</button>
                            <button class="nav-link" id="v-pills-HoustonDoc-tab" data-bs-toggle="pill" data-bs-target="#v-pills-HoustonDoc" type="button" role="tab" aria-controls="v-pills-HoustonDoc" aria-selected="false">Houston Association of Realtors Forms</button>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content" id="v-pills-tabContentDocuments">
                            <?php include('./documents-inner/Houston-Association.php') ?>
                            <?php include('./documents-inner/personal.php') ?>
                            <?php include('./documents-inner/texas-forms.php') ?>
                            <?php include('./documents-inner/trec-form.php') ?>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- footer -->
        <?php include('./assets/commons/footer.php') ?>
    </div>

    <!-- scripts -->
    <?php include './assets/commons/scripts.php'?>
</body>
</html>