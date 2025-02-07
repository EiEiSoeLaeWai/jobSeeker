<html>

<head><title>Company Management | Show</title></head>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js' integrity='sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A==' crossorigin='anonymous'></script>
<body>
<nav
    class="navbar navbar-expand-sm navbar-light bg-light"
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
            <form class="d-flex my-2 my-lg-0">
                <input
                    class="form-control me-sm-2"
                    type="text"
                    placeholder="Search"
                />
                <button
                    class="btn btn-outline-success my-2 my-sm-0"
                    type="submit"
                >
                    Search
                </button>
            </form>
        </div>
    </div>
</nav>


<div class="container">
<div class="row">
    <div class="col md-6">
    <div class="table-responsive">
    <table class="table table-success table-bordered">
        <thead>
            <tr>
                <th scope="col">Company Name</th>
                <th scope="col">Job Name</th>
                <th scope="col">Action</th>

              

            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td>
   @if($company_jobs->company_id== 1)
   MPACT BPO SERVICES PTE. LTD.
      @elseif($company_jobs->company_id == 2)
      Coca Cola
      @elseif($company_jobs->company_id == 11)
      Amazon
      @elseif($company_jobs->company_id == 12)
       Lenovo   
   @endif
</td>
<td>
   @if($company_jobs->job_id== 1)
       Lecturer
   @elseif($company_jobs->job_id== 2)
      Intern
      @elseif($company_jobs->job_id== 6)
UI/UX Designer
      @elseif($company_jobs->job_id== 7)
      Junior Web Developer
   
   @endif
</td>
                <td><a class="btn btn-primary" href="/company_jobs/<?php echo $company_jobs->companyjob_id; ?>/edit" role="button">Edit</a></td>
            </tr>
          
        </tbody>
    </table>
   </div>
    </div>
</div>
</div><!--end of container-->
   
   
</body>
</html>