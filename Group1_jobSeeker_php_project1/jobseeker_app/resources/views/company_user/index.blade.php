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


<div class="">
    <section id="">
        <div class="container">
            <div class="row">
        @foreach ($company_objects as $company)
        <div class="col-md-3 mb-3 d-flex align-items-stretch">
            <div class="card p-3" style="width: 18rem;">
             
                <div class="card-body">
                    <h5 class="card-title">{{$company->name }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted"> {{$company->location}}</h6>
                    <p class="card-text">  {{$company->description}} </p>
                    <a class="btn btn-primary" href='/company_user/{{$company->company_id}}' role="button">View</a>

                </div>
            </div>
        </div>
        @endforeach  
            </div><!--end of row-->
        </div><!--end of container-->
    </section>


  <div class="container">
    <div class="row g-3">
            @foreach ($company_objects as $company)
            
                <div class="col-md-6">
                <div class="p-3 text-primary-emphasis bg-light border border-dark-subtle rounded-3">
                <h2 class="texts">{{$company->name }}</h2>
        <p class="terms">
        {{$company->location}} <br>
        {{$company->description}} <br>
        <a class="btn btn-primary" href='/company_user/{{$company->company_id}}' role="button">View</a>
             </p>
        
               <div>
                 
               
                  </div>  
             
                  </div>
                </div>

              
         

                @endforeach  
                </div><!--end of container-->















</div>
