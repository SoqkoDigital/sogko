
<body class="inner-pages">

    <section class="headings">
        <div class="text-heading text-center">
            <div class="container">
                <h1>Login</h1>
                <h2><a href="index.html">Home </a> &nbsp;/&nbsp; login</h2>
            </div>
        </div>
    </section>

    <!-- START SECTION LOGIN -->
    <div id="login">
         <div class="login"> 
            <form name="login" method="post" action="">

                <div class="container">
                <?php echo validation_errors('<div class="col-md-12">
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>', '</div>
                </div>'); ?>
                <div class="col-md-12">
                <?php echo @$msg; ?>
                </div>

                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email address" value="">                
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="">
                </div>
                <div class="fl-wrap filter-tags clearfix add_bottom_30">
                    <div class="checkboxes float-left">
                        <div class="filter-tags-wrap">
                            <input id="check-b" type="checkbox" name="check">
                            <label for="check-b">Remember me</label>
                        </div>
                    </div>
                    <div class="float-right mt-1"><a href="<?php echo base_url(); ?>resetpassword">Forgot Password?</a></div>
                </div>
                <input type="submit" name="login" value="Login" class="btn_1 rounded full-width" />
                <div class="text-center add_top_10">New to Find Houses? <strong><a href="<?php echo base_url(); ?>register">Sign up</a></strong></div>
                <div class="divider"><span>Or</span></div>
                <div class="access_social">
                    <a href="#0" class="social_bt facebook">Login with Facebook</a>
                    <a href="#0" class="social_bt google">Login with Google</a>
                </div>
            </form>
        </div>
    </div>
    <!-- END SECTION LOGIN -->

      
