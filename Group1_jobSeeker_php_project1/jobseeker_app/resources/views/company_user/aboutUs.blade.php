<html>
<head>
 <title>Company Management | Add</title>
 <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js' integrity='sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A==' crossorigin='anonymous'></script>
</head>
<body>
    This index of company_user
<nav class="navbar navbar-expand-sm navbar-light bg-light">
    
    <div class="container">
        <a class="navbar-brand" href="#">Job Seeker</a>
        <button
            class="navbar-toggler d-lg-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="/company_user" aria-current="page"
                        >Home
                        <span class="visually-hidden">(current)</span></a
                    >
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/aboutUs">About us</a>
                </li>
              
            </ul>
            <form class="d-flex my-2 my-lg-0" action="{{ route('user.search') }}" method="GET">
    <input class="form-control me-sm-2" type="text" name="query" placeholder="Search jobs and companies...">
    <button  class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>

@if (Route::has('login'))
                <div class="ms-1">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-light btn-outline-primary">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-light btn-outline-success">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-light btn-outline-dark">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</nav>

<br>

<main>
    <div class="container">
        <section class="about">
            <h3>Welcome to  Job Seeker</h3>
            <p>At [Your Job Seeker Website Name], we understand that the journey to finding the perfect job can be both thrilling and challenging. We are here to guide you every step of the way and help you transform your career aspirations into reality.</p>
            <h4>What sets us apart:</h4>
            <ul>
                <li>
                    <h4>Tailored Job Search Experience</h4>
                    <p>Our user-friendly interface ensures that your job search is efficient and personalized. Easily filter through a vast array of job listings, allowing you to pinpoint the opportunities that align with your skills, interests, and career goals.</p>
                </li>
                <li>
                    <h4>Diverse Job Opportunities</h4>
                    <p>We collaborate with a wide range of employers from various industries, offering a diverse array of job opportunities. Whether you're a seasoned professional looking for your next challenge or a recent graduate eager to kickstart your career, we have something for everyone.</p>
                </li>
                <li>
                    <h4>Career Resources and Guidance</h4>
                    <p>We provide a rich repository of resources, including resume-building tips, interview strategies, and career advice to help you navigate the job market with confidence.</p>
                </li>
                <li>
                    <h4>Community and Networking</h4>
                    <p>Connect with like-minded professionals, industry experts, and potential employers through our networking features. Build a strong professional network that not only supports your job search but also enhances your overall career development.</p>
                </li>
                <li>
                    <h4>Cutting-Edge Technology</h4>
                    <p>Stay ahead in the competitive job market with our cutting-edge technology. We leverage the latest advancements to bring you real-time updates on job listings, industry trends, and personalized recommendations tailored to your unique profile.</p>
                </li>
                <li>
                    <h4>Privacy and Security</h4>
                    <p>Your privacy and security are our top priorities. Rest assured that your personal information is handled with the utmost care, and we employ industry-standard security measures to protect your data.</p>
                </li>
            </ul>
        </section>
        </div>
    </main>
    <footer style="background-color: grey;">

<p class="text-center">&copy;<b> 2024 [Your Job Seeker Website Name]. All rights reserved.</b></p>

</footer>
    </html>