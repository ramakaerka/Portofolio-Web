@extends('layouts.main')
@section('content')
    <div class="profil-container">
        <div class="row">
            <div class="col">
                <h1>Rama Kadi Rawi Kuncaranto</h1>
                <p>I'm a <span>Junior Fullstack Web Developer</span></p>
                <p>Information Systems graduates who have passion and experience in the field of web development</p>
                <a href="#contact" class="btn-contact">
                    <span class="sparkle-icon">✨</span>
                    Contact Me
                </a>

                <div class="icon-a-container">
                    <a href="https://www.instagram.com/ramakaerka?igsh=Z2lpcG4wdnVicjZz">
                        <img src="../img/icon/instagram.png" alt="instagram icon by Monster Visual on IconScout"
                            class="icon-a">
                        <a href=""></a>
                    </a>
                    <a href="https://www.linkedin.com/in/ramakuncaranto">
                        <img src="../img/icon/linkedin.png" alt="linkedin icon by Monster Visual on IconScout"
                            class="icon-a">
                    </a>
                </div>
            </div>
            <div class="grid-frame">
                <div class="frame">
                    <img src="../img/Foto (1).png" alt="Contoh Gambar" class="foto">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('foto')
    <div class="skills">
        <div class="skills-container">
            <div class="row">
                <h1>Skills </h1>
            </div>
            <div class="table-responsive" style="overflow-x: auto">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">
                                <img src="../img/icon/php.png" alt="" class="icon">
                                <p>PHP</p>
                            </th>
                            <th scope="col">
                                <img src="../img/icon/laravel-framework.png" alt="" class="icon">
                                <p>Laravel</p>
                            </th>
                            <th scope="col">
                                <img src="../img/icon/html.png" alt="" class="icon">
                                <p>HTML</p>

                            </th>
                            <th scope="col">
                                <img src="../img/icon/css.png" alt="" class="icon">
                                <p>CSS</p>
                            </th>
                            <th scope="col">
                                <img src="../img/icon/javascript.png" alt="" class="icon">
                                <p>Javascript</p>
                            </th>
                            <th scope="col">
                                <img src="../img/icon/mysql.png" alt="" class="icon">
                                <p>MySQL</p>
                            </th>
                            <th scope="col">
                                <img src="../img/icon/bootstrap-framework.png" alt="" class="icon">
                                <p>Bootstrap</p>
                            </th>
                            <th scope="col">
                                <img src="../img/icon/github.png" alt="" class="icon">
                                <p>Github</p>
                            </th>
                            <th scope="col">
                                <img src="../img/icon/visual-studio-code.png" alt="" class="icon">
                                <p>Vs Code</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('portofolio')
    <div class="portofolio-header">
        <h4>Projects</h4>
        <p>Here you will find some of the personal and clients projects that I created with each project containing its own
            case study</p>
    </div>
    <div class="portofolio-content">
        <div class="row">
            <div class="col-8">
                <div class="frame-img-portofolio">
                    <img src="../img/asset1/imac_macbook.PNG" alt="project1" class="img-portofolio">
                </div>
            </div>
            <div class="col">
                <h4>Sistem Informasi Pengajuan Cuti Karyawan Berbasis Web Rumah Sakit Condong Catur</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis repellat odio impedit aperiam obcaecati
                    reiciendis magni placeat totam voluptate autem. Dicta iste provident aspernatur nihil fugit hic debitis
                    cupiditate non.</p>
                <a href="/leave_system" class="btn-contact">View Project</a>
            </div>
        </div>
    </div>
@endsection

@section('resume')
    <div class="desc"> {{-- 2 column --}}
        <div class="deskripsi-resume"> {{-- flex column --}}
            <h4>Resume</h4>
            <p>Here you will find more information about my recent education and work experience journey.</p>
        </div>
    </div>
    <div class="detail">
        <div class="detail-container">
            <div class="row-detail">
                <div class="col-4">

                    <div class="resume-item1">
                        <h4>Education</h4>
                        <p>Agu 2021 - Agu 2025</p>
                    </div>
                    <div class="resume-item2">
                        <h4>Duta Wacana Christian University</h4>
                        <p class="highlight2">Bachelor of Information System</p>
                        <ul>
                            <li>
                                <p>GPA 3.32 / 4.00</p>
                            </li>
                            <li>
                                <p>Enterprise Information Systems concentration</p>
                            </li>
                            <li>
                                <p>Relevant courses: Web-Based Programming, Business Process Analysis, Applied Integrated
                                    Programming, Software Engineering</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="resume-item1">
                        <h4>Projects Experience</h4>
                        <p>Agu 2021 - Agu 2025</p>
                    </div>
                    <div class="resume-item2">
                        <h4>Rumah Sakit Condong Catur</h4>
                        <p class="highlight">Fullstack Web Developer | Final Project</p>
                        <ul>
                            <li>
                                <p>Designed and developed a Web-Based Employee Leave Management System</p>
                            </li>
                            <li>
                                <p>Conducted system requirements analysis in collaboration with organizational stakeholders
                                </p>
                            </li>
                            <li>
                                <p>Implemented core features such as leave application, leave approval workflow, and leave
                                    management aligned with the organization’s policies</p>
                            </li>
                            <li>
                                <p>Built a role-based leave management module (admin, manager, employee) with a multi-level
                                    approval system and automated leave balance calculation</p>
                            </li>
                            <li>
                                <p>Performed system testing with end users by validating all features and user interactions
                                </p>
                            </li>
                            <li>
                                <p>Utilized PHP programming language with the Laravel framework and MySQL database</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{--  
@section('portofolio')
    <section id="portofolio" class="portofolio-section">

        <div class="portofolio-content">
            <div class="container text-center">
                <div class="row">
                    <h1>My Projects</h1>
                    <p class="mb-5">This is the Portofolio section.</p>

                   
                    <div class="col">
                        <div class="card mx-auto" style="width: 600px; height: auto;">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="../img/asset1/Dashboard.png" class="d-block w-100" alt="Slide 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../img/asset1/Pengajuan.png" class="d-block w-100" alt="Slide 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../img/asset1/Persetujuan.png" class="d-block w-100" alt="Slide 3">
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
                            <div class="card-body mt-3">
                                <h5 class="card-title">Sistem Informasi Pengajuan Cuti Karyawan</h5>
                                <p class="card-text"><small>Build with <strong>Laravel 10</strong></small></p>
                                <a href="/leave_system" class="btn btn-primary"><i
                                        class="lni lni-eye"></i><small>Detail</small></a>
                            </div>
                        </div>
                    </div>

                   
                    <div class="col">
                        <div class="card mx-auto" style="width: 600px;">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="0" class="active" aria-current="true"
                                        aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="../img/white2.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../img/white2.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../img/white2.jpg" class="d-block w-100" alt="...">
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
                            <div class="card-body">
                                <h5 class="card-title">Web Company Profile RSCC</h5>
                                <p class="card-text"><small>Build with <strong>Laravel 10</strong></small></p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection --}}

@section('contact')
    <section id="contact" class="section">
        <div class="container">
            <h1>Contact Me</h1>
            <p>This is the Contact section.</p>
        </div>
    </section>
@endsection
