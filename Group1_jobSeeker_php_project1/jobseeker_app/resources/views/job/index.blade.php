<html>
<head><title>View Job Records</title>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js' integrity='sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A==' crossorigin='anonymous'></script>
</head>

<body>
<nav
    class="navbar navbar-expand-sm navbar-light bg-light"
>
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
                    <a class="nav-link active" href="/company" aria-current="page"
                        >Company
                        <span class="visually-hidden">(current)</span></a
                    >
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/job">Jobs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/company_jobs">Job Posting</a>
                </li>
               
            </ul>
            
            <form class="d-flex my-2 my-lg-0" action="{{ route('jobs.search') }}" method="GET">
    <input class="form-control me-sm-2" type="text" name="query" placeholder="Search jobs...">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
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
<div class="container">
<a href='/job/create' type="button" class="btn btn-primary">New Job</a><br><br>

<div
    class="table-responsive"
>
    <table
        class="table table-light table-bordered"
    >
        <thead>
            <tr>
                <th scope="col">Job ID</th>
                <th scope="col">Title</th>
                <th scope="col">Post Date</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
                <th scope="col">Action</th>



            </tr>
        </thead>
        <tbody>
        @foreach ($job_objects as $job)

            <tr class="">
                <td scope="row">{{$job->job_id }}</td>
                <td>{{$job->title }}</td>
                <td>{{$job->postDate}}</td>
                <td>{{$job->description}}</td>
                <td><a href='/job/{{ $job->job_id }}'  class="btn btn-success">View</a></td>
                <td>
<form method="post" action="/job/{{$job->job_id }}">
<input type="hidden" name="_method" value="DELETE">
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<input type='submit' value="Delete" />
</form>
</td>
            </tr>
           
            @endforeach
        </tbody>
       
    </table>
</div>
</div>



</body>
</html>
