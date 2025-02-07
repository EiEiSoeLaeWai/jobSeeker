<html>
<head><title>View Company Records</title>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js' integrity='sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A==' crossorigin='anonymous'></script>
</head>

<body>
<nav
    class="navbar navbar-expand-sm navbar-light bg-light"
>
    <div class="container">
        <a class="navbar-brand" href="dashboard">Home</a>
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
                    <a class="nav-link" href="/company_jobs">Jobs posting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/apply_forms">Applied Jobs</a>
                </li>
               
            </ul>
            <form  class="d-flex my-2 my-lg-0" action="{{ route('search') }}" method="GET">
    <input class="form-control me-sm-2" type="text" name="query" placeholder="Search jobs and companies...">
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
<br>
<br>
<div class="container">
<div class="table-responsive">
    <table
        class="table table-light table-bordered"
    >
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Description</th>
                <th scope="col">Company</th>
                <th scope="col">Jobs</th>
               



            </tr>
        </thead>
        <tbody>
        @foreach ($apply_forms_objects as $apply_forms)

            <tr class="">
                <td scope="row">{{$apply_forms->id }}</td>
                <td>{{$apply_forms->name }}</td>
                <td>{{$apply_forms->email}}</td>
                <td>{{$apply_forms->description}}</td>
                <td>
                <?php
// Define the company names as an associative array
$companyNames = [
    1 => 'IMPACT BPO SERVICES PTE. LTD.',
    2 => 'Koufu Pte Ltd',
    11 => 'MOH Holdings Pte Ltd',
    12 => 'Toshiba TEC Singapore Pte Ltd',
    13 => 'Perennial Holdings Private Limited',
    14 => 'WGT EHR Pte. Ltd',
    15 => 'Sous Chef',
    16 => 'ELEMIS',

];

// Retrieve the company ID from $company_jobs
$companyId = $apply_forms->company_id;

// Check if the company ID exists in the array
if (isset($companyNames[$companyId])) {
    // Output the corresponding company name
    echo $companyNames[$companyId];
} else {
    // Output a default message or handle the case when the company ID is not found
    echo 'Unknown Company';
}
?>

</td>
<td>
<?php
// Define the job titles as an associative array
$jobTitles = [
    1 => 'Healthcare Admin',
    2 => 'Intern',
    6 => 'UI/UX Designer',
    7 => 'Junior Web Developer',
    8 => 'Cashier',
    9 => 'Techician',
    10 => 'Assistant Executive', // Assuming the correct ID is 10, as there were two entries for 9
];

// Retrieve the job ID from $company_jobs
$jobId = $apply_forms->job_id;

// Check if the job ID exists in the array
if (isset($jobTitles[$jobId])) {
    // Output the corresponding job title
    echo $jobTitles[$jobId];
} else {
    // Output a default message or handle the case when the job ID is not found
    echo 'Unknown Job';
}
?>

</td>

           
             
            </tr>
           
            @endforeach
        </tbody>
       
    </table>
</div>
</div>


</body>
</html>
