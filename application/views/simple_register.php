
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Simple Live Chat</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
        <!-- Select2 -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css"/>        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/square/blue.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">

            <!-- /.login-logo -->
            <div class="login-box-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        <!--<p class="login-box-msg" id="login-message">Sign in as </p>-->

                        <form id="form-login" action="/SimpleLiveChat/chat/simpleChat" method="POST">
                            <div class="form-group">
                                <label><a href="#tab_2" data-toggle="tab"> Register </a> / Sign in as :</label>
                                <select class="form-control select2" name="user_id" id="user-options" style="width: 100%;"></select>
                            </div>
                            <div class="row">
                                <!-- /.col -->
                                <div class="col-xs-12">                                    
                                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_2">
                        <form id="form-register">
                            <div class="form-group has-feedback">
                                <label><a href="#tab_1" data-toggle="tab">Back to sign in</a> / Enter new user :</label>
                                <input type="text" class="form-control" name="username" placeholder="Username"/>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>                                                 
                            <div class="row">
                                <div class="col-xs-12">
                                    <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.social-auth-links -->
            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->
        <!-- jQuery 2.1.4 -->
        <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>   

        <script src="<?php echo base_url(); ?>assets/dist/js/ajax.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/dist/js/user.js" type="text/javascript"></script>    	                    	        
        <!-- Bootstrap 3.3.5 -->
        <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
        <!-- Select2 -->        
        <script src="<?php echo base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>        
        <!-- iCheck -->
        <script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script> 

        <script type="text/javascript">
            $(function () {
                var user = new User();
                user.setUser();
                user.getUser();
                $('.select2').select2();

            });
        </script>
    </body>
</html>
