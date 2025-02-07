<html>
<head>
 <title>Job Management | Add</title>
 <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js' integrity='sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A==' crossorigin='anonymous'></script>
</head>
<body>
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
<br>

 <div class="container">
 <div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
    <div class="row ">
        <div class=" mx-auto">
        <form action="/job" method="post">
                <!--@csrf-->
 <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <div class="mb-3 row">
            <label
                for="inputName"
                class="col-2 col-form-label"
                >Job Title</label
            >
            <div
                class="col-8"
            >
                <input
                    type="text"
                    class="form-control"
                    name="title"
                    id="title"
                    placeholder="title"
                />
            </div>
        </div>
        <div class="mb-3 row">
            <label
                for="inputName"
                class="col-2 col-form-label"
                >Post Date</label
            >
            <div
                class="col-8"
            >
                <input
                    type="date"
                    class="form-control"
                    name="postDate"
                    id=""
                    placeholder="postDate"
                />
            </div>
        </div>
        <div class="mb-3 row">
            <label
                for="inputName"
                class="col-2 col-form-label"
                >Description</label
            >
            <div class="col-8" >
            <input   type="text"  class="form-control"  name="description" id="description" placeholder="Description"
                />
            </div>
        </div>
        <div class="mb-3 row">
            <div class="offset-sm-4 col-sm-8">
                <button type="submit" class="btn btn-primary">
                    Add Job
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
