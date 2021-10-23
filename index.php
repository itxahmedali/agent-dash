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

                <!-- tab links -->
                <ul class="nav nav-tabs" id="profileInfoTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="AccountSetting-tab" data-bs-toggle="tab" data-bs-target="#AccountSetting" type="button" role="tab" aria-controls="AccountSetting" aria-selected="true">
                            <svg style=" margin-right: 10px;  height: 22px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.37 31.61">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #B3B3B3;
                                        }
                                    </style>
                                </defs>
                                <g id="Layer_2" data-name="Layer 2">
                                    <g id="Layer_1-2" data-name="Layer 1">
                                        <path class="cls-1" d="M13.19,15.23A7.36,7.36,0,0,0,18.57,13,7.37,7.37,0,0,0,20.8,7.61a7.36,7.36,0,0,0-2.23-5.38A7.36,7.36,0,0,0,13.19,0,7.37,7.37,0,0,0,7.8,2.23,7.36,7.36,0,0,0,5.57,7.61,7.37,7.37,0,0,0,7.8,13,7.37,7.37,0,0,0,13.19,15.23ZM9.11,3.54a5.5,5.5,0,0,1,4.08-1.69,5.5,5.5,0,0,1,4.07,1.69A5.53,5.53,0,0,1,19,7.61a5.54,5.54,0,0,1-1.69,4.08,5.53,5.53,0,0,1-4.07,1.68,5.53,5.53,0,0,1-4.08-1.68A5.54,5.54,0,0,1,7.42,7.61,5.53,5.53,0,0,1,9.11,3.54Z" />
                                        <path class="cls-1" d="M26.31,24.31a17.45,17.45,0,0,0-.26-2,15.56,15.56,0,0,0-.49-2,9.66,9.66,0,0,0-.82-1.87,6.9,6.9,0,0,0-1.25-1.62,5.52,5.52,0,0,0-1.79-1.13,6.25,6.25,0,0,0-2.28-.41,2.32,2.32,0,0,0-1.24.52c-.37.25-.8.53-1.29.83a6.86,6.86,0,0,1-1.66.74,6.64,6.64,0,0,1-2,.33,6.55,6.55,0,0,1-2-.33,7.2,7.2,0,0,1-1.67-.73l-1.29-.84A2.32,2.32,0,0,0,7,15.27a6.25,6.25,0,0,0-2.28.41,5.52,5.52,0,0,0-1.79,1.13,6.81,6.81,0,0,0-1.24,1.62A9.13,9.13,0,0,0,.81,20.3a15.56,15.56,0,0,0-.49,2,20,20,0,0,0-.26,2c0,.6-.06,1.23-.06,1.86a5.22,5.22,0,0,0,1.56,4,5.58,5.58,0,0,0,4,1.47H20.8a5.57,5.57,0,0,0,4-1.47,5.22,5.22,0,0,0,1.56-4C26.37,25.54,26.35,24.91,26.31,24.31ZM23.54,28.8a3.81,3.81,0,0,1-2.74,1H5.58a3.78,3.78,0,0,1-2.74-1,3.4,3.4,0,0,1-1-2.63c0-.59,0-1.17.06-1.73s.12-1.16.23-1.8a15.31,15.31,0,0,1,.43-1.77,8.62,8.62,0,0,1,.68-1.53,5.12,5.12,0,0,1,.91-1.2,3.82,3.82,0,0,1,1.19-.74,4.51,4.51,0,0,1,1.46-.28c.06,0,.18.1.37.23l1.3.84a9,9,0,0,0,2.1.93,8.29,8.29,0,0,0,5.21,0,9,9,0,0,0,2.1-.93l1.3-.84c.19-.13.31-.19.37-.23A4.51,4.51,0,0,1,21,17.4a3.82,3.82,0,0,1,1.19.74,5.12,5.12,0,0,1,.91,1.2,8,8,0,0,1,.68,1.53,13.5,13.5,0,0,1,.43,1.77c.11.64.19,1.25.23,1.8h0c0,.56.06,1.14.06,1.73A3.43,3.43,0,0,1,23.54,28.8Z" />
                                    </g>
                                </g>
                            </svg>
                            Account Setting
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Notificationsetting-tab" data-bs-toggle="tab" data-bs-target="#Notificationsetting" type="button" role="tab" aria-controls="Notificationsetting" aria-selected="false">
                            <svg style=" margin-right: 10px;  height: 22px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.86 28.84">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #B3B3B3;
                                        }
                                    </style>
                                </defs>
                                <g id="Layer_2" data-name="Layer 2">
                                    <g id="Layer_1-2" data-name="Layer 1">
                                        <path class="cls-1" d="M22.26,18.75h0a6.69,6.69,0,0,1-2.38-5.11V10.83h-.43l-.3-1.48A.51.51,0,0,0,18.83,9a3.15,3.15,0,0,1-.51-.28,7.11,7.11,0,0,1,.27,1.91v3.05a8,8,0,0,0,2.82,6.1,1.24,1.24,0,0,1,.46,1A1.27,1.27,0,0,1,20.6,22h-18a1.26,1.26,0,0,1-.82-2.22,8,8,0,0,0,2.84-6.11V10.59a7,7,0,0,1,6-6.92l.56-.08V1.85a.45.45,0,1,1,.89,0V3.59l.55.08a6.81,6.81,0,0,1,1.74.49A7.06,7.06,0,0,1,16.84,6V6c0-.14,0-.28,0-.41a.52.52,0,0,0-.18-.48l-1.13-1,.33-.57a8.34,8.34,0,0,0-2.56-1V1.85a1.74,1.74,0,1,0-3.48,0v.63A8.41,8.41,0,0,0,5.33,5.14a8.29,8.29,0,0,0-2.05,5.45v3.05A6.71,6.71,0,0,1,.9,18.76a2.56,2.56,0,0,0,1.66,4.51h18a2.56,2.56,0,0,0,2.56-2.56A2.59,2.59,0,0,0,22.26,18.75ZM19.48,8A8.21,8.21,0,0,0,18,5.35a2,2,0,0,0-.09.61A2.18,2.18,0,0,0,19.48,8Z" />
                                        <path class="cls-1" d="M16.1,24.5a.65.65,0,0,0-.5-.24h-8a.67.67,0,0,0-.51.24.65.65,0,0,0-.13.54,4.75,4.75,0,0,0,9.3,0A.65.65,0,0,0,16.1,24.5Zm-4.52,3a3.45,3.45,0,0,1-3.12-2H14.7A3.44,3.44,0,0,1,11.58,27.54Z" />
                                        <path class="cls-1" d="M20.09,3.79A2.17,2.17,0,0,0,18,5.35a2,2,0,0,0-.09.61A2.18,2.18,0,0,0,19.48,8a2.43,2.43,0,0,0,.61.08,2.17,2.17,0,1,0,0-4.33Zm0,3.25A1.09,1.09,0,1,1,21.17,6,1.08,1.08,0,0,1,20.09,7Z" />
                                        <path class="cls-1" d="M24.41,6.21a2.09,2.09,0,0,0,0-.25,2,2,0,0,0,0-.25l1.27-1.12a.54.54,0,0,0,.11-.67L24.71,2a.56.56,0,0,0-.65-.24l-1.59.54L22,2.08,21.7.44A.54.54,0,0,0,21.17,0H19a.55.55,0,0,0-.54.44l-.33,1.64c-.15.08-.29.17-.43.26l-1.6-.54a.55.55,0,0,0-.64.24l-.55,1-.53.92a.4.4,0,0,0-.07.24.52.52,0,0,0,.18.43l1.26,1.12v.5L14.5,7.32a.53.53,0,0,0-.11.68l1.08,1.87a.54.54,0,0,0,.64.25l1.6-.54.43.25.33,1.65a.46.46,0,0,0,.12.23.51.51,0,0,0,.42.21h2.16a.55.55,0,0,0,.53-.44L22,9.83c.15-.08.3-.16.44-.25l1.59.54a.55.55,0,0,0,.65-.25L25.79,8a.55.55,0,0,0-.11-.68ZM24,9l-1.43-.49a.62.62,0,0,0-.51.08,3.1,3.1,0,0,1-.7.42.54.54,0,0,0-.33.39l-.29,1.48H19.45l-.3-1.48A.51.51,0,0,0,18.83,9a3.15,3.15,0,0,1-.51-.28l-.2-.14a.59.59,0,0,0-.5-.08L16.19,9l-.64-1.11,1.13-1a.5.5,0,0,0,.18-.47c0-.13,0-.26,0-.38V6c0-.14,0-.28,0-.41a.52.52,0,0,0-.18-.48l-1.13-1,.33-.57L16.19,3l1.43.48a.53.53,0,0,0,.5-.08A3.36,3.36,0,0,1,18.83,3a.53.53,0,0,0,.32-.39l.3-1.49h1.28L21,2.57a.56.56,0,0,0,.33.39,3.06,3.06,0,0,1,.7.41.55.55,0,0,0,.51.08L24,3l.64,1.1-1.14,1a.57.57,0,0,0-.18.48,2.73,2.73,0,0,1,0,.41,2.93,2.93,0,0,1,0,.41.55.55,0,0,0,.18.47l1.14,1Z" />
                                    </g>
                                </g>
                            </svg>
                            Notification setting
                        </button>
                    </li>

                </ul>

                <!-- tab content -->
                <div class="tab-content mt4" id="profileInfoTabContent">

                    <!-- tab profileSetting -->
                    <div class="tab-pane fade show active" id="AccountSetting" role="tabpanel" aria-labelledby="AccountSetting-tab">
                        <h1>Profile Info</h1>

                        <div class="row mt3">

                            <div class="col-lg-4 d-flex flex-column mb3">
                                <label for="">First Name</label>
                                <input type="text" value="Jacob">
                            </div>
                            <div class="col-lg-4 d-flex flex-column mb3">
                                <label for="">Last Name</label>
                                <input type="text" value="Gomez">
                            </div>
                            <div class="col-lg-4 d-flex flex-column mb3">
                                <label for="">User Role</label>
                                <select name="" id="" class="csSelect">
                                    <option value="Dummy Role">Dummy Role</option>
                                </select>
                            </div>

                            <div class="col-lg-4 d-flex flex-column mb3">
                                <label for="">Email Address</label>
                                <input type="text" value="Example@gmail.com">
                            </div>
                            <div class="col-lg-4 d-flex flex-column mb3">
                                <label for="">Fax</label>
                                <input type="text" value="Dummy Fax">
                            </div>
                            <div class="col-lg-4 d-flex flex-column mb3">
                                <label for="">Phone Number</label>
                                <input type="text" value="123456789">
                            </div>

                            <div class="col-lg-4 d-flex flex-column mb3">
                                <label for="">Esign Name</label>
                                <input type="text" value="Jacob">
                            </div>
                            <div class="col-lg-4 d-flex flex-column mb3">
                                <label for="">Esign Initials</label>
                                <input type="text" value="GM">
                            </div>
                            <div class="col-lg-4 d-flex flex-column mb3">
                                <label for="">Company Name</label>
                                <input type="text" value="ABC  ">
                            </div>
                            <div class="col-lg-4 d-flex flex-column mb3">
                                <label for="">Job Tittle</label>
                                <input type="text" value="C.E.O  ">
                            </div>
                            <div class="col-lg-4 d-flex flex-column mb3">
                                <label for="">Tag Line</label>
                                <input type="text" value="Dummy Tagline  ">
                            </div>
                            <div class="col-lg-4 d-flex flex-column mb3">
                                <label for="">NRDS ID</label>
                                <input type="text" value="Dummy NRDS ID  ">
                            </div>
                            <div class="col-lg-4 d-flex flex-column mb3">
                                <label for="">Broker Name </label>
                                <input type="text" value="Jacob   ">
                            </div>
                            <div class="col-lg-4 d-flex flex-column mb3">
                                <label for="">Broker License No.</label>
                                <input type="text" value="Gomez  ">
                            </div>
                            <div class="col-lg-4 d-flex flex-column mb3">
                                <label for="">Licensed Supervisor </label>
                                <input type="text" value="Dummy Role  ">
                            </div>
                            <div class="col-lg-4 d-flex flex-column mb3">
                                <label for="">Supervisor License No.</label>
                                <input type="text" value="Example@gmail.com  ">
                            </div>
                            <div class="col-lg-4 d-flex flex-column mb3">
                                <label for="">Broker Address </label>
                                <input type="text" value="Gomez  ">
                            </div>
                            <div class="col-lg-4 d-flex flex-column mb3">
                                <label for="">Phone Number</label>
                                <input type="text" value="Dummy Role  ">
                            </div>
                            <h1>Address</h1>
                            <div class="col-lg-12 d-flex flex-column mt3 mb3">
                                <label for="">Address</label>
                                <input type="text" value="Dummy Address  ">
                            </div>
                            <div class="col-lg-4 d-flex flex-column mb3">
                                <label for="">City</label>
                                <input type="text" value="New York City  ">
                            </div>
                            <div class="col-lg-4 d-flex flex-column mb3">
                                <label for="">State/Province</label>
                                <select name="" id="" class="csSelect">
                                    <option value="New York">New York</option>
                                </select>
                            </div>
                            <div class="col-lg-4 d-flex flex-column mb3">
                                <label for="">Zip Code</label>
                                <input type="text" value="75850 ">
                            </div>
                            <div class="col-lg-4 d-flex flex-column mb3">
                                <label for="">Country</label>
                                <select name="" id="" class="csSelect">
                                    <option value="USA">USA</option>
                                </select>
                            </div>
                            <div class="col-lg-4 d-flex flex-column mb3">
                                <label for="">Time Zone</label>
                                <select name="" id="" class="csSelect">
                                    <option value="Dummy Role">Dummy Time Zone</option>
                                </select>
                            </div>
                        </div>
                        <div class="save-cancel-btn d-flex justify-content-end mb3">
                            <button class="save-btn">Save</button>
                        </div>
                    </div>

                    <!-- tab Notificationsetting -->
                    <div class="tab-pane fade" id="Notificationsetting" role="tabpanel" aria-labelledby="Notificationsetting-tab">
                        <h1>Notification Setting</h1>
                        <div class="custom-check d-flex mb2 mt3">
                            <div class="round">
                                <input type="checkbox" id="checkbox1" />
                                <label for="checkbox1"></label>
                            </div>
                            <label for="">Document Signed</label>
                        </div>
                        <div class="custom-check d-flex mb2">
                            <div class="round">
                                <input type="checkbox" id="checkbox2" />
                                <label for="checkbox2"></label>
                            </div>
                            <label for="">Document Shared</label>
                        </div>
                        <div class="custom-check d-flex mb2">
                            <div class="round">
                                <input type="checkbox" id="checkbox3" />
                                <label for="checkbox3"></label>
                            </div>
                            <label for="">Your Signature Required</label>
                        </div>
                        <div class="custom-check d-flex mb2">
                            <div class="round">
                                <input type="checkbox" id="checkbox4" />
                                <label for="checkbox4"></label>
                            </div>
                            <label for="">Compliance Status of a project Updated</label>
                        </div>
                        <div class="custom-check d-flex mb4">
                            <div class="round">
                                <input type="checkbox" id="checkbox5" />
                                <label for="checkbox5"></label>
                            </div>
                            <label for="">Document is Edited</label>
                        </div>
                        <h1>Email</h1>
                        <div class="custom-check d-flex mb2 mt3">
                            <div class="round">
                                <input type="checkbox" id="checkbox6" />
                                <label for="checkbox6"></label>
                            </div>
                            <label for="">Document Signed</label>
                        </div>
                        <div class="custom-check d-flex mb2">
                            <div class="round">
                                <input type="checkbox" id="checkbox7" />
                                <label for="checkbox7"></label>
                            </div>
                            <label for="">Document Shared</label>
                        </div>
                        <div class="custom-check d-flex mb2">
                            <div class="round">
                                <input type="checkbox" id="checkbox8" />
                                <label for="checkbox8"></label>
                            </div>
                            <label for="">Your Signature Required</label>
                        </div>
                        <div class="custom-check d-flex mb2">
                            <div class="round">
                                <input type="checkbox" id="checkbox9" />
                                <label for="checkbox9"></label>
                            </div>
                            <label for="">Compliance Status of a project Updated</label>
                        </div>
                        <div class="custom-check d-flex mb2">
                            <div class="round">
                                <input type="checkbox" id="checkbox10" />
                                <label for="checkbox10"></label>
                            </div>
                            <label for="">Compliance Status of a Transaction Updated</label>
                        </div>
                        <div class="custom-check d-flex mb2">
                            <div class="round">
                                <input type="checkbox" id="checkbox11" />
                                <label for="checkbox11"></label>
                            </div>
                            <label for="">My Office Adds a Tag to a Transaction or Document</label>
                        </div>
                        <div class="custom-check d-flex mb2">
                            <div class="round">
                                <input type="checkbox" id="checkbox12" />
                                <label for="checkbox12"></label>
                            </div>
                            <label for="">My Office Writes a Review Notes About a Transaction or Document</label>
                        </div>
                        <div class="custom-check d-flex mb2">
                            <div class="round">
                                <input type="checkbox" id="checkbox13" />
                                <label for="checkbox13"></label>
                            </div>
                            <label for="">Daily Task Reminder</label>
                        </div>
                        <div class="save-cancel-btn d-flex justify-content-end mb3">
                            <button class="save-btn">Save</button>
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