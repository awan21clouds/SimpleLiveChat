
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Simple Live Chat</title>        
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">


        <!-- jQuery 2.1.4 -->
        <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>

        <!-- Bootstrap 3.3.5 -->
        <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="<?php echo base_url(); ?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url(); ?>assets/plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>    
        <script src="<?php echo base_url(); ?>assets/dist/js/Ajax.js" type="text/javascript"></script>    	
        <script src="<?php echo base_url(); ?>assets/dist/js/Chat.js" type="text/javascript"></script>
        <script type="text/javascript">
            var chat = new Chat();
            $(function () {                
                chat.slimScroll();
                chat.setChat();             
            });
        </script>
    </head>
    <body class="hold-transition skin-blue layout-top-nav" onload="setInterval('chat.getChat()', 1000)">
        <div class="wrapper">

            <header class="main-header">
                <nav class="navbar navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <!--<a href="../../index2.html" class="navbar-brand"><b>Simple Live Chat</b> </a>-->
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </nav>
            </header>
            <!-- Full Width Column -->
            <div class="content-wrapper">
                <div class="container">
                    <!-- Main content -->
                    <section class="content">
                        <div class="box box-solid direct-chat direct-chat-primary">
                            <div class="box-header with-border">
                                <i class="fa fa-comments-o"></i>
                            </div>
                            <div class="box-body chat" id="chat-box">
                                <div class="direct-chat-messages">
                                    
                                </div>
                                <!--/.direct-chat-messages-->
                            </div>
                            <div class="box-footer">
                                <form id="form-chat">
                                    <div class="form-group">                  
                                        <input type="hidden" class="form-control" name="user_id" value="<?php echo $user->user_id; ?>">
                                        <input type="text" class="form-control" name="chat_content" placeholder="Enter Message">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- /.content -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="container">
                    <div class="pull-right hidden-xs">
                        <!--<b>Version</b> 2.3.2-->
                    </div>
                    <strong>Copyright &copy; 2016 </strong> 
                </div>
                <!-- /.container -->
            </footer>
        </div>
        <!-- ./wrapper -->
    </body>
</html>
