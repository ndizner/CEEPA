

<?php echo form_open("auth/login");?>

<?php
$identity = array(
    'name'        => 'identity',
    'placeholder' => 'Nombre de Usuario',
    'value'       => '',
    'class'       => 'form-control',
    'required'    => 'required',
    'type'        => 'text',
    'autofocus'   => 'autofocus'
    );
$password = array(
    'name'          => 'password',
    'placeholder'   => 'Password',
    'required'      => 'required',
    'class'         => 'form-control',
    'required'      => 'required',
    'type'          => 'password'
    );

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ceepa Login</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded">
    <!-- Favicon icon -->
    <link rel="icon" href="<?php echo base_url('assets/images/favicon.ico');?>" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/bootstrap/dist/css/bootstrap.min.css');?>">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/icon/themify-icons/themify-icons.css');?>">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/icon/icofont/css/icofont.css');?>">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>">
    <!-- Notification.css -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/pages/notification/notification.css');?>">
      <!-- Animate.css -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/animate.css/animate.css');?>">
</head>

<body class="fix-menu">
    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">

                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body">
                        <form class="md-float-material">
                            <div class="text-center">
                                <img src="<?php echo base_url('assets/images/logo.png');?>" alt="logo.png">
                            </div>
                            <?php if($this->session->flashdata('success')){ ?>
        <div class="alert alert-success" data-type="inverse" data-align="left">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Exito!</strong> <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php }else if($this->session->flashdata('error')){  ?>
        <div class="alert alert-danger" data-type="inverse" data-align="left">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php }else if($this->session->flashdata('warning')){  ?>
        <div class="alert alert-warning">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Advertencia!</strong> <?php echo $this->session->flashdata('warning'); ?>
        </div>
    <?php }else if($this->session->flashdata('info')){  ?>
        <div class="alert alert-info">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Info!</strong> <?php echo $this->session->flashdata('info'); ?>
        </div>
    <?php } ?>
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-3">
                                        <h3 class="text-center txt-primary"><?php echo lang('login_heading');?></h3>
                                    </div>

                                </div>

                                <p class="text-inverse b-b-default text-left p-b-5"><?php echo lang('login_subheading');?></p>
                                <div class="input-group">
                                  <?php echo form_input($identity);?>

                                </div>
                                <div class="input-group">
                                    <?php echo form_input($password);?>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                              <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse"><?php echo lang('login_remember_label', 'remember');?></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-12 forgot-phone text-right">
                                      <p><a href="forgot_password" class="text-right f-w-600 text-inverse"><?php echo lang('login_forgot_password');?></a></p>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                      <button class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20"  name="Submit" value="Login" type="Submit">Ingresar</button>
                                    </div>
                                </div>
                                <!-- <div class="card-footer"> -->
                                <!-- <div class="col-sm-12 col-xs-12 text-center">
                                    <span class="text-muted">Don't have an account?</span>
                                    <a href="register2.html" class="f-w-600 p-l-5">Sign up Now</a>
                                </div> -->
                                <!-- </div> -->
                            </div>
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="<?php echo base_url('assets/plugins/jquery/dist/jquery.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/plugins/jquery-ui/jquery-ui.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/plugins/tether/dist/js/tether.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap/dist/js/bootstrap.min.js');?>"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?php echo base_url('assets/plugins/jquery-slimscroll/jquery.slimscroll.js');?>"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="<?php echo base_url('assets/plugins/modernizr/modernizr.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/plugins/modernizr/feature-detects/css-scrollbars.js');?>"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/script.js');?>"></script>
    <script src="<?php echo base_url('assets/js/pcoded.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/demo-12.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.mCustomScrollbar.concat.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.mousewheel.min.js');?>"></script>
    <!-- color js -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/common-pages.js');?>"></script>
    <!-- notification js -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap-growl.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/pages/notification/notification.js');?>"></script>


</body>

</html>
<?php echo form_close();?>
