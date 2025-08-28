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
    @vite(['resources/css/coba.css', 'resources/css/bingkai.css', 'resources/js/script.js'])
    <link rel="stylesheet" href="https://cdn.lineicons.com/5.0/lineicons.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="70" tabindex="0">

    <div class="grid-container">

        <header class="header-saya">
            <nav class="navbar-saya">
                <ul class="menu-nav">
                    <li>
                        <a class="active" href="/">Home</a>
                    </li>
                    <li>
                        <a href="#resume">Resume</a>
                    </li>
                    <li>
                        <a href="#portofolio">Portofolio</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </nav>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show mt-3 mb-3" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show mt-3 mb-3" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </header>



        <main class="main-home" id="home">

            @yield('content')
        </main>

        <div class="section-resume" id="resume">
            <div class="resume-container">

                @yield('resume')

            </div>
        </div>

        <div class="section-portofolio" id="portofolio">
            <div class="portofolio-container">
                @yield('portofolio')
            </div>
        </div>
        @yield('foto')

        <div class="contact" id="contact">
            <form action="/send-email" method="POST">
                @csrf
                <div class="form-container">
                    <h4>Send Me a Message</h4>
                    <p>Whether it's to discuss an opportunity or to trade ideas about web development, I'm excited to
                        chat!</p>
                    <div class="row">
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Your Name</label>
                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                                placeholder="John Doe" required>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput2" class="form-label">Your Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleFormControlInput2"
                                placeholder="name@example.com" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="exampleFormControlInput2" class="form-label">Your Company (Optional)</label>
                            <input type="text" name="company" class="form-control" id="exampleFormControlInput2"
                                placeholder="Your Company">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="exampleFormControlInput2" class="form-label">Subject</label>
                            <input type="text" name="subject" class="form-control" id="exampleFormControlInput2"
                                placeholder="Your Subject" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                            <textarea class="form-control" name="message" id="exampleFormControlTextarea1"
                                placeholder="Write about your message or idea" rows="5" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Submit Message</button>
                        </div>
                    </div>
                </div>
        </div>
        </form>
        @include('layouts.footer')
    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
