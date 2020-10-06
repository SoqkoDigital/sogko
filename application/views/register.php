
<body class="inner-pages">

        <section class="headings">
            <div class="text-heading text-center">
                <div class="container">
                    <h1>Register</h1>
                    <h2><a href="index.html">Home </a> &nbsp;/&nbsp; Register</h2>
                </div>
            </div>
        </section>
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION 404 -->
        <div id="login">
            <div class="login"> 
                <form name="register" method="post"  autocomplete="off">
                <div class="container">
                    <?php echo validation_errors('<div class="col-md-12">
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>', '</div>
                    </div>'); ?>
          
                  <div class="col-md-12">
                   <?php echo @$msg; ?>
                  </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <input class="form-control" type="text" name="fname"  placeholder="First name"  value="<?php echo set_value('fname'); ?>">
                            </div>
                        </div>
                        <div class="col-6">
                             <div class="form-group">
                                <input class="form-control" type="text" name="lname" placeholder="Last name" value="<?php echo set_value('lname'); ?>">
                                <i class="ti-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email address" value="<?php echo set_value('email'); ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="Mobile No." name="mobno" placeholder="Mobile No." value="<?php echo set_value('mobno'); ?>">
                    </div>
                    <div class="form-group">                        
                        <input class="form-control" type="password" id="password1" name="password1" placeholder="Password" value="<?php echo set_value('password1'); ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" id="password2" name="password2" placeholder="Confirm Password"  value="<?php echo set_value('password2'); ?>">
                    </div>
                    <div id="pass-info" class="clearfix"></div>
                    <input  type="submit" name="reguser" value="Register Now" class="btn_1 rounded full-width add_top_30">
                    <div class="text-center add_top_10">Already have an acccount? <strong><a href="<?php echo base_url(); ?>signin">Sign In</a></strong></div>
                </div>
                </form>
            </div>
        </div>
        <!-- END SECTION 404 -->
    </body>
