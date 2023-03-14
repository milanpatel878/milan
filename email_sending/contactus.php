<!--register form hear-->

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-5 bg-primary">
            <h1 class="text-white p-4"> CREATE A NEW ACCOUNT</h1><br>
            <p class="text-white p-5"> GET ACCESS TO YOUR CARS, WISHLIST AND RECOMMENDATIONS, SO CREATE YOUR ACCOUNT IN SELL MY CAR</p><br><br><br>
            <p> <img src="<?php echo $baseurl; ?>images/login.png" class="img-fluid"></p>
        </div>
        <div class="col-md-7">
            <form method="post" class="p-5">
                <div class="form-group mt-1 p-2">
                    <input type="text" name="Email" placeholder="Enter Email Id" required class="form-control email">
                </div><br>
                <div class="form-group mt-1 p-2">
                    <input type="text" name="fname" placeholder="Enter First name" required class="form-control fname">
                </div><br>
                <div class="form-group mt-1 p-2">
                    <input type="text" name="lname" placeholder="Enter Last name" required class="form-control lname">
                </div><br>
                <div class="form-group mt-1 p-2">
                    <textarea name="address" placeholder="Enter Address" required class="form-control address"></textarea>
                </div><br>
                <div class="form-group mt-1 p-2">
                    <select name="state" placeholder="Enter Your State" required class="form-control state">
                        <option value="">-select state-</option>
                        <option value="GUJARAT">GUJRAT</option>
                        <option value="PUNJAB">PUNJAB</option>
                        <option value="MAHARASTRA">MAHARASTRA</option>
                        <option value="UTTAR PRADESH">UTTAR PRADESH</option>
                        <option value="DELHI">DELHI</option>
                        <option value="HARIYANA">HARIYANA</option>
                    </select>
                    </div><br>
                <div class="form-group mt-1 p-2">    
                    <select name="city" placeholder="Enter Your City" required class="form-control state">
                        <option value="">-select City-</option>
                        <option value="RAJKOT">RAJKOT</option>
                        <option value="MUMBAI">MUMBAI</option>
                        <option value="JAMNAGAR">JAMNAGAR</option>
                        <option value="SURAT">SURAT</option>
                        <option value="AHEMDABAD">AHEMDABAD</option>
                        <option value="VADODARA">VADODARA</option>
                        <option value="PUNE">PUNE</option>
                    </select>
                    </div><br>
                    <div class="form-group mt-1 p-2">
                        <input type="text" name="mobile" placeholder="Enter Your Mobile number" required class="form-control number">
                    </div> <br>
                    <div class="form-group mt-3 p-2">
                        <input type="submit" name="send" id="btn-log-register" class="btn btn-sm" value="send">
                        <input type="Reset" name="Reset" id="btn-log-reset" class="btn btn-sm" value="Reset">
                    </div><br>
                </form>
        </div>
    </div>
</div>    
