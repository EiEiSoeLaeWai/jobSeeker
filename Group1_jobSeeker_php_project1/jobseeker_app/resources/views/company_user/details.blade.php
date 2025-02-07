<html>
<head><title>View Company and their jobs Records</title>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js' integrity='sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A==' crossorigin='anonymous'></script>
</head>

<body>
<nav
    class="navbar navbar-expand-sm navbar-light bg-dark-subtle"
>
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
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
                    <a class="nav-link active" href="#" aria-current="page"
                        >Home
                        <span class="visually-hidden">(current)</span></a
                    >
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="dropdownId"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        >Dropdown</a
                    >
                    <div
                        class="dropdown-menu"
                        aria-labelledby="dropdownId"
                    >
                        <a class="dropdown-item" href="#"
                            >Action 1</a
                        >
                        <a class="dropdown-item" href="#"
                            >Action 2</a
                        >
                    </div>
                </li>
            </ul>
            <form  class="d-flex my-2 my-lg-0" action="{{ route('search') }}" method="GET">
    <input  class="form-control me-sm-2" type="text" name="query" placeholder="Search jobs and companies...">
    <button  class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

            </form>
        </div>
    </div>
</nav>
<br>
<div class="container">

<div
    class="table-responsive"
>
    <table
        class="table table-light table-bordered"
    >
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Company Name</th>
                <th scope="col">Job Name</th>
                <th scope="col">Action</th>

                
            </tr>
        </thead>
        <tbody>
        @foreach ($company_jobs_objects as $company_jobs)

<tr class="">
    <td scope="row">{{$company_jobs->companyjob_id }}</td>
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
17 => 'Strategy First',

];

// Retrieve the company ID from $company_jobs
$companyId = $company_jobs->company_id;

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
$jobId = $company_jobs->job_id;

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

<td><a class="btn btn-primary" href='/jobapply' role="button">Apply</a><br/>


</tr>
@endforeach

        </tbody>

       
    </table>
</div>
</div>


</body>
</html>
