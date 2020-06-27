<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login form</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/custom.css">
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">

    </head>

    <body>
        <div class="container ">
            <div class="row">            
                <div class="login-container col-lg-4 col-md-6 col-sm-8 col-xs-12">
                     <div class="login-title text-center">
                            <h2>barang <span>Pelita<strong>bangsa</strong></span></h2>
                     </div>
                    <div class="login-content">
                        <div class="login-header ">
                            <h3><strong>Welcome,</strong></h3>
                        </div>
                        <div class="login-body">
                            <form role="form" action="proseslogin.php" method="POST" class="login-form">
                                <div class="form-group ">
                                    <div class="pos-r">                                        
                                        <input   id="form-username" type="text" name="username" placeholder="Username..." class="form-username form-control">
                                        <i class="fa fa-user"></i>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="pos-r">                                    
                                        <input id="password" type="password" name="password" placeholder="Password..." class="form-password form-control" >
                                        <i class="fa fa-lock"></i>
                                        <span></span>                                        
                                    </div>
                                </div>

                                <div class="form-group">     
                                    <button type="submit" name="login" class="btn btn-warning form-control"><strong>Sign in</strong></button>  
                                </div>   
                                                                              
                            </form>
                        </div> <!-- end  login-body -->                     
                    </div><!-- end  login-content -->  
                    <div class="login-footer text-center template">
                        <h5>Don't have an account?
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Buat akun
</button>
 </h5>

                    </div>
                </div>  <!-- end  login-container -->      

            </div>
        </div><!-- end container -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php include("signup.php")?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </body>
<style>
  body{
    background: url(https://user-images.githubusercontent.com/25878302/50690715-a4be8480-102e-11e9-90c8-6b7dfdb740c2.jpg) #a07349  no-repeat;
    -webkit-background-size: cover;
    background-size: cover;
    height: 100vh;
}
.login-container{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);      
}
.login-container .login-content{
    background: rgba(0, 0, 0, 0.47);
    -moz-box-shadow: -1px 1px 4px rgba(88, 51, 33, 0.8);
    -webkit-box-shadow: -1px 1px 4px rgba(88, 51, 33, 0.8);
    box-shadow: -1px 1px 4px rgba(88, 51, 33, 0.8);
}
.pos-r{
    position: relative;
}
.login-container  .login-header{
    padding: 10px 30px;
}
.login-container, .login-container a,.login-container input{
    color: #ffffff;
}
.login-container .login-title span{
    padding: 10px 20px;
    display: inline-block;
    margin-bottom: 20px;
    text-shadow: -1px 1px 1px rgba(108, 83, 54, 0.3);
}
.login-container .login-title span strong{
   color:#f0ad4e;
}
.login-container .login-body{
    padding: 30px 30px;
}
.login-container .login-body input.form-control{
    background: rgba(0, 0, 0, 0.51);
    height: 50px;
    border-radius: 0;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    border: none;
    border-bottom: 2px solid transparent;
    font-size: 16px;
    -o-transition:all .5s;
    -webkit-transition:all .5s;
    transition:all .5s;
}
.login-container .login-body input.form-control ~ span{
    position: absolute;
    bottom: 0;
    display: inline-block;
    height: 2px;
    width: 0;
    background: #f0ad4e;
    -o-transition:width .3s;
    -webkit-transition:width .3s;
    transition: width .3s;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);

}
.login-container .login-body input.form-control:focus ~ span{
    width: 100%;
}
.login-container .login-body input.form-control + i{
    position: absolute;
    right: 15px;
    top: 15px;
    font-size: 20px;
    color: rgba(240, 173, 78, 0.3);
    -o-transition:all .5s;
    -webkit-transition:all .5s;
    transition:all .5s;
}
.login-container .login-body input.form-control:focus + i{
    color: #f0ad4e;
}
.login-container .login-body button {
    height: 50px;
    -moz-border-radius: 0px;
    -webkit-border-radius: 0px;
    border-radius: 0px;
    font-size: 20px;
}
.login-container .login-footer{
    padding: 20px 0;
}
.template h5 a {
    color: #f0ad4e;
}

@media only screen and (max-width: 600px), screen and (max-height: 610px)  {
     
     .login-container  {
        padding: 0px; 
    }
    .login-container .login-title span {
        padding: 0px; 
        margin-bottom: 10px; 
    }
     .login-container .login-content {
         background: none; 
        -moz-box-shadow: none;
        -webkit-box-shadow: none; 
         box-shadow:none; 
    }
    .login-header {
        display: none;
    }
    .login-container .login-body {
        padding: 10px 10px;
    }
    .login-container .login-footer {
        padding: 0;
    }
}
@media only screen and (max-height: 400px)  {
       .login-container{
            position: static;
            transform:none;  
            padding: 0;    
        }
    }
</style>
</html>