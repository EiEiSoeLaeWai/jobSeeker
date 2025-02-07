<html>
<head>
 <title>Company Management | Edit</title>
 <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js' integrity='sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A==' crossorigin='anonymous'></script>
</head>
<body>
    <div class="container">
    <div class="row g-3 mx-auto">
            <div class="col-md-4"></div>

       
            <div class="col-md-4">
            <div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">

            <form action="{{ route('company.update',$company->company_id) }}" method="POST">
 {{ method_field('PUT') }}
 {{ csrf_field() }}
 <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
 
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name"  value='<?php echo $company->name; ?>' >
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Location</label>
                    <input type="text" name="location" class="form-control" id="location"  value='<?php echo $company->location; ?>' >
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Description</label>
                    <input type="text" name="description" class="form-control" id="description"  value='<?php echo $company->description; ?>' >
                </div>
               
                <button class="btn btn-primary" type="submit">Update Company</button>


 </form>

               </div>
            </div>
</div>
</div>


    </div><!--end of container-->
 

 
</body>
</html>