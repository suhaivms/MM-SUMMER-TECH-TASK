
<html lang="en">
    <head>
        <title>ADMIN LOGIN</title>

       <script type="text/javascript" src="<?php echo site_url('js/jquery-2.2.4.min.js');?>"></script>      
        <script src="<?php echo site_url('js/jquery.min.cs');?>"></script>
        <script src="<?php echo site_url('js/bootstrap.min.js');?>"></script>
        <script>
            $(document).ready(function(){
                    $("p#contact").hide();
                    $("p#about").hide();
             });  
            $(document).ready(function(){
                    $("a#s").click(function(){
                        $("p#contact").toggle();
                    });
             });  
            $(document).ready(function(){
                    $("a#t").click(function(){
                        $("p#about").toggle();
                    });
            });
        </script>
       </script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?php echo site_url('img/favicon.ico'); ?>" type="image/x-icon" />
        <link rel="stylesheet" href="<?php echo site_url('css/bootstrap.min.css'); ?>" >
        <link rel="stylesheet" href="<?php echo site_url('css/bootstrap-theme.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo site_url('css/style2.css'); ?>">
    </head>

    <body>
    <section>

            
        <div class="container">
            <div class="name">
                    <h5><strong>NEWS.COM</strong></h5>
            </div>
            <div class="row admin">
                <p id="ad">ADMIN LOGIN</p>
                
                    <form method="post" action="<?php echo site_url("index.php/login/process");?>">
                        <?php if(! is_null($msg)) echo $msg;?>  
                          <div class="form-group">
                            <label for="exampleInputEmail1">username</label>
                            <input type="text" name="admname"  class="form-control" id="exampleInputEmail1" placeholder="Email">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="admpass" class="form-control" id="exampleInputPassword1" placeholder="Password">
                          </div>
                          <p><input type="submit" value="Login" name="admlogin" class="button-admin btn btn-success"></p><br />
                    </form>
                
                     
                    
                
            </div>
            <hr/>
                    
   
        </div>
    </section>
    </body>
    </html>