<!--modal create hear-->

<div class="modal fade" id="login-load" role="dialog">
     <div class="modal-dialog">
        <div class="modal-content">
            <div class="row">
                <div class="col-md-5 bg-secondary">
                    <h1 class="text-white p-3">LOGIN</h1>
                    <p class="text-white p-2"> GET ACCESS TO YOUR ORDERS, WISHLIST AND RECOMMENDATIONS, SO CREATE YOUR ACCOUNT IN Sagar Shoes </p>
                    <p><img src="<?php echo $baseurl;?>image/login.jpg" class="img-fluid"> </p>
                </div>
                <div class="col-md-7">
                    <form method="post" class="p-5">
                        <div class="form-group mt-5 p-2">
                            <input type="text" name="email" placeholder="Enter Email/mobile number" required class="form-control email">
                        </div>
                        <div class="form-group mt-1 p-2">
                            <input type="password" name="pass" placeholder="Enter Password" required class="form-control password">
                            <p class="float-end mt-3"><a href="#">Forget password ?</a> </p>
                        </div>
                        <div class="form-group mt-5 p-2">
                            <p> By continuing,you agree to Sagar Shoes's <a href="#">Terms of use and Privacy Policy. </a></p>
                        </div>
                        <div class="form-group mt-3 p-2">
                            <input type="submit" name="login" id="btn-log" class="btn btn-sm" value="Login">
                        </div>
                        <div class="form-group mt-1 p-2">
                            <p>Don't have an account <a href="<?php echo $mainurl;?>regi">Create your account ?</a> </p>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
</div>
</div>

