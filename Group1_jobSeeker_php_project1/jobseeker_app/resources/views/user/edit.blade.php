<html>
<head>
 <title>User Management | Edit</title>
 <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js' integrity='sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A==' crossorigin='anonymous'></script>
</head>
<body>
    <div class="container">
    <div class="row g-3 mx-auto">
            <div class="col-md-4"></div>

       
            <div class="col-md-4">
            <div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">

            <form action="{{ route('user.update',$user->id) }}" method="POST">
 {{ method_field('PUT') }}
 {{ csrf_field() }}
 <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
 
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name"  value='<?php echo $user->name; ?>' >
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email"  value='<?php echo $user->email; ?>' >
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password"  value='<?php echo $user->password; ?>' >
                </div>
               
                <button class="btn btn-primary" type="submit">Update user</button>


 </form>

               </div>
            </div>
</div>
</div>


    </div><!--end of container-->
 

 
</body>
</html>