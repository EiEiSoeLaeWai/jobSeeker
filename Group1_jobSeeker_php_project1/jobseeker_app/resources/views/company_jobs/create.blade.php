<html>
<head>
 <title>Company Management | Add</title>
 <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js' integrity='sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A==' crossorigin='anonymous'></script>
</head>
<body>
    Create Company jobs
<nav class="navbar navbar-expand-sm navbar-light bg-light">
    
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
 <div class="p-3 text-primary-emphasis bg-light-subtle border border-primary-subtle rounded-3">
    <div class="row ">
        <div class=" mx-auto">
        <form action="/company_jobs" method="post">
                <!--@csrf-->
 <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <div class="mb-3 row">
            <label
                for="inputName"
                class="col-2 col-form-label"
                >Company Name</label
            >
            <div class="col-8">
            <select name="name" class="form-control" id="">
    <?php
    // Define the company names as an associative array
    $companyNames = [
        1 => 'IMPACT BPO SERVICES PTE. LTD.',
        2 => 'Koufu Pte Ltd',
        11 => 'MOH Holdings Pte Ltd',
        12 => 'Toshiba TEC Singapore Pte Ltd',
        13 => 'Perennial Holdings Private Limited',
        14 => 'WGT EHR Pte. Ltd.',
        15 => 'Sous Chef',
        16 => 'ELEMIS',
        17 =>'Strategy First',
    ];

    // Iterate through the array to generate options
    foreach ($companyNames as $companyId => $companyName) {
        echo "<option value=\"$companyId\">$companyName</option>";
    }
    ?>
</select>
      
 </div>
        </div>
       
        <div class="mb-3 row">
            <label
                for="inputName"
                class="col-2 col-form-label"
                >Job Name</label
            >
            <div
                class="col-8"
            >
            <select name="title"  class="form-control" id="">
        <option value="1">Healthcare Admin</option>
        <option value="2">Intern</option>
        <option value="6">UI/UX Designer</option>
        <option value="7">Junior Web Developer</option>
        <option value="8">Cashier</option>
        <option value="9">Techician</option>
        <option value="10">Assistant Executive</option>




    </select>            </div>
        </div>
        <!-- <div class="mb-3 row">
            <label
                for="inputName"
                class="col-2 col-form-label"
                >Description</label
            >
            <div class="col-8" >
            <input   type="text"  class="form-control"  name="description" id="description" placeholder="Description"
                />
            </div>
        </div> -->
        <div class="mb-3 row">
            <div class="offset-sm-4 col-sm-8">
                <button type="submit" class="btn btn-primary">
                    Add
                </button>
            </div>
        </div>
    </form>
        </div>
    </div>
 </div>
 </div><!--end of container-->

</body>
</html>
