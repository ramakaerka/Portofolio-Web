<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portofolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    @vite(['resources/css/coba.css', 'resources/css/bingkai.css', 'resources/css/detail_portofolio.css', 'resources/js/script.js'])
    <link rel="stylesheet" href="https://cdn.lineicons.com/5.0/lineicons.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="70" tabindex="0">
    <div class="detail-portofolio-container">
        @include('layouts.navbar')
        <section id="detail" class="detail-section">

            <div class="detail-content">
                <div class="container">
                    <div class="row">

                        <div id="carouselExampleIndicators" class="carousel carousel-dark slide p-0"
                            data-bs-ride="true">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                    aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                                    aria-label="Slide 5"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                                    aria-label="Slide 6"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6"
                                    aria-label="Slide 7"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6"
                                    aria-label="Slide 8"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item contain active">
                                    <img src="../img/asset1/Dashboard.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item contain">
                                    <img src="../img/asset1/Pengajuan.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item contain">
                                    <img src="../img/asset1/Persetujuan.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item contain">
                                    <img src="../img/asset1/status_cuti_saya.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item contain">
                                    <img src="../img/asset1/Add user karyawan.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item contain">
                                    <img src="../img/asset1/Detail Cuti Approved.png" class="d-block w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item contain">
                                    <img src="../img/asset1/Approval.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item contain">
                                    <img src="../img/asset1/Surat Cuti.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                    <div class="row grid">
                        <div class="col-8">
                            <h4 class="mb-4"><strong>Web Based Employee Leave Application Information System</strong>
                            </h4>
                            <p>This web-based information system was created to meet the needs of organizations for
                                leave management, leave application and leave approval processes.</p>

                            <h4 class="mt-4 mb-4"><strong>Features :</strong></h4>
                            <div class="icon-text-container">
                                <img src="../img/icon/check.svg" width="18" height="18" alt="icon">
                                <p>Leave Application</p>
                            </div>
                            <div class="icon-text-container">
                                <img src="../img/icon/check.svg" width="18" height="18" alt="icon"
                                    class="d-inline">
                                <p>Leave Approval</p>
                            </div>
                            <div class="icon-text-container">
                                <img src="../img/icon/check.svg" width="18" height="18" alt="icon"
                                    class="d-inline">
                                <p>Leave Data Management</p>
                            </div>
                            <div class="icon-text-container">
                                <img src="../img/icon/check.svg" width="18" height="18" alt="icon"
                                    class="d-inline">
                                <p>User & Employee Data Management</p>
                            </div>
                            <div class="icon-text-container">
                                <img src="../img/icon/check.svg" width="18" height="18" alt="icon"
                                    class="d-inline">
                                <p>Notification</p>
                            </div>
                            <div class="icon-text-container">
                                <img src="../img/icon/check.svg" width="18" height="18" alt="icon"
                                    class="d-inline">
                                <p>Real Time Dashboard Admin</p>
                            </div>
                            <div class="icon-text-container">
                                <img src="../img/icon/check.svg" width="18" height="18" alt="icon"
                                    class="d-inline">
                                <p>Error Handling</p>
                            </div>
                            <div class="icon-text-container">
                                <img src="../img/icon/check.svg" width="18" height="18" alt="icon"
                                    class="d-inline">
                                <p>Role Based Access Control</p>
                            </div>
                            <div class="icon-text-container">
                                <img src="../img/icon/check.svg" width="18" height="18" alt="icon"
                                    class="d-inline">
                                <p>Multi Level Approval System</p>
                            </div>
                            <div class="icon-text-container">
                                <img src="../img/icon/check.svg" width="18" height="18" alt="icon"
                                    class="d-inline">
                                <p>Automated Leave Balance Calculation</p>
                            </div>
                            <div class="icon-text-container">
                                <img src="../img/icon/check.svg" width="18" height="18" alt="icon"
                                    class="d-inline">
                                <p>Leave Letter in PDF Format</p>
                            </div>
                            <div class="icon-text-container mt-5">
                                <img src="../img/icon/attentions.png" width="18" height="18" alt="icon"
                                    class="d-inline">
                                <p>All data on this images are dummies for demonstration purpose</p>
                            </div>


                        </div>
                        <div class="col">
                            <h4 class="mb-2"><strong>Project Information</strong></h4>
                            <div class="row w-25 mb-3"
                                style="border-top: 2px solid; border-color: rgb(18, 151, 204); margin-left: 0; margin-top: 1px">
                            </div>

                            <p style="color: rgb(247, 215, 127); font-weight: 700;" class="mt-4 mb-0">Category</p>
                            <p><small>Web Development, Information System, Internal System</small></p>

                            <p style="color:rgb(247, 215, 127); font-weight: 700;" class="mt-4 mb-0">Client</p>
                            <p><small>Condong Catur Hospital</small></p>

                            <p style="color:rgb(247, 215, 127); font-weight: 700;" class="mt-4 mb-0">Technology</p>
                            <p><small>HTML</small></p>
                            <p><small>CSS</small></p>
                            <p><small>PHP</small></p>
                            <p><small>Laravel 10</small></p>
                            <p><small>Livewire</small></p>
                            <p><small>MySQL</small></p>
                            <p><small>Javascript</small></p>
                            <p><small>Bootstrap</small></p>
                            <p><small>Github</small></p>
                            <p><small>Visual Studio Code</small></p>

                            <p style="color:rgb(247, 215, 127); font-weight: 700;" class="mt-4 mb-0">Project Date</p>
                            <p><small>20 July 2025</small></p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('layouts.footer')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
