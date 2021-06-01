<?php
    $host = "localhost";
    $username = "root";
    $passwd = "";
    $dbname = "db_internship";
    $connection = mysqli_connect($host,$username,$passwd,$dbname);
    if($_POST){
        $id = $_POST['txt1'];
        $name = $_POST['txt2'];
        $gender = $_POST['txt10'];
        $dob = $_POST['txt3'];
        $email = $_POST['txt4'];
        $number = $_POST['txt5'];
        $address = $_POST['txt6'];
        $password = $_POST['txt7'];
        $area = $_POST['txt8'];
        $pincode = $_POST['txt9'];
        
    $q = mysqli_query($connection,
        "insert into tbl_sd(sd_id,sd_name,sd_gender,sd_date,sd_email,sd_mobile,sd_address,sd_password,sd_area,sd_pincode) values('{$id}','{$name}','{$gender}','{$dob}','{$email}','{$number}','{$address}','{$password}','{$area}','{$pincode}')") or die(mysqli_error($connection)) ;
        if($q){
            echo "<script>alert('Record added');</script>";
        }
    }
?>


<section id="section-contact-no-bg" data-stellar-background-ratio=".2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h5><span class="id-color">Have Question?</span></h5>
                            <h2>Contact Me Now</h2>
                        </div>

                        <div class="col-md-8 col-md-offset-2">
                            <div class="row">
                                <form name="contactForm" id='contact_form' class="s1" method="post" action='email.php'>
                                Id :<input type="number" name="txt1"required/><br/>
            Name :<input type="text" name="txt2"required/><br/>
            Gender :<select name="txt10">
            <option>Male</option>
            <option>Female</option>
            </select><br/>
            Date of Birth :<input type="date" name="txt3" required/><br/>
            Email :<input type="email" name="txt4" required/><br/>
            Mobile number :<input type="number" name="txt5" required/><br/>
            Address :<input type="text" name="txt6"required/><br/>
            Password :<input type="password" name="txt7" required/><br/>
            Area :<input type="text" name="txt8" required/><br/>
            Pincode :<input type="number" name="txt9" required/><br/>
            <input type="submit"/>
        
                                </form>
                            </div>

                            <div class="spacer-double"></div>

                            <div class="row text-center wow fadeInUp">
                                <div class="col-md-4">
                                    <div class="wm-1"></div>
                                    <i class="icon_mobile id-color size40 mb20"></i>
                                    <h6 class="id-color">Call Us</h6>
                                    <h4>+91 123456789</h4>
                                </div>

                                <div class="col-md-4">
                                    <div class="wm-1"></div>
                                    <i class="icon_house_alt id-color size40 mb20"></i>
                                    <h6 class="id-color">Address</h6>
                                    <h4>Ahmedabad,India</h4>
                                </div>

                                <div class="col-md-4">

                                    <div class="wm-1"></div>
                                    <i class="icon_mail_alt id-color size40 mb20"></i>
                                    <h6 class="id-color">Email Us</h6>
                                    <h4>abc@gmail.com</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>