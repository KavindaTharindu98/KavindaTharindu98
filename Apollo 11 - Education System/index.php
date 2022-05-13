<?php
session_start();
error_reporting(0);
include('includes/config.php');
if($_SESSION['alogin']!=''){
$_SESSION['alogin']='';
}
if(isset($_POST['login']))
{
$uname=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:uname and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
} else{
    
    echo "<script>alert('Invalid Details');</script>";

}

}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
	     
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>APOLLO+ Login</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > 
        <link rel="stylesheet" href="css/main.css" media="screen" >
		<link rel="stylesheet" href="panalbc.css">
	
		
		
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body class="">
	 <style>
	 body{ 
  background: url(76YM.gif) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}


</style> 
<style>
 .button-style {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 4px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 1px 1px;
  cursor: pointer;
  }
</style>

        <div class="main-wrapper">
	

		
		

            <div class="">		

                <div class="row">
				
			
 
 
 
                    <div class="col-lg-6 visible-lg-block">
					
					

<section class="section">   
                           
                            <div class="row mt-40">
							
							
							 
                                <div class="col-md-10 col-md-offset-1 pt-50">

                                    <div class="row mt-30 ">
                                        <div class="col-md-11">
										
                                            <div class="panel">
											
											
                                                <div class="panel-heading ">
												
											
												
                                                    <div class="panel-title text-center">
													<img src = 'logo.png'width="200px"height="200px">
                                                        <h4>Student Login</h4>
                                                    </div>
                                                </div>
                                                <div class="panel-body p-100">

                                                    <div class="section-title">
                                                       
                                                    </div>
													
                                                   <center><p>- For Get your important School Documents -</p>	</center>
													<center><p><a href="https://apollo-plus.herokuapp.com/Docstore/index.php" class="button-style"> APOLLO+ Doc Store</a></p>	</center>
													  <center><p><a href="https://apollo-plus.herokuapp.com/messanger/login.php" class="button-style"> APOLLO+ Messanger</a></p>	</center>
													
                                                    <form class="form-horizontal" method="post">
                                                        <div class="form-group">
														
                                                      
														  
														 <center> <p><a href="find-result.php" class="button-style">Search Results</a></p></center>
                                                            <div class="col-sm-6">
                                                            </div>
															
															   
                                                        </div>
														
														
														
                                                       
                                                    </form>
<center><p><a href="https://apollo-plus.herokuapp.com/Pricing" class="button-style"> Go To APOLLO+ Website</a></p></center>
                                          

                                                 
                                                </div>
                                            </div>
                                            <!-- /.panel -->
                                      
                                        </div>
                                        <!-- /.col-md-11 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-md-12 -->
                            </div>
                            <!-- /.row -->
                        </section>
                    </div>
                    <div class="col-lg-6">
                        <section class="section">
                            <div class="row mt-40">
                                <div class="col-md-10 col-md-offset-1 pt-50">

                                    <div class="row mt-30 ">
                                        <div class="col-md-11">
                                            <div class="panel">
                                                <div class="panel-heading">
                                                    <div class="panel-title text-center">
                                                         <img src = 'logo.png'width="200px"height="200px">
                                                        <h4>Teacher Login</h4>
                                                    </div>
                                                </div>
                                                <div class="panel-body p-20">

                                                    <div class="section-title">
                                                     
                                                    </div>

                                                    <form class="form-horizontal" method="post">
                                                    	<div class="form-group"><br>
														 <center><p>- Manage Student Information -</p>	</center><br>
                                                    		<label for="inputEmail3" class="col-sm-2 control-label">Tch ID</label>
                                                    		<div class="col-sm-10">
                                                    			<input type="text" name="username" class="form-control" id="inputEmail3" placeholder="UserName">
                                                    		</div>
                                                    	</div>
                                                    	<div class="form-group">
                                                    		<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                                    		<div class="col-sm-10">
                                                    			<input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                                                    		
															</div>
															
                                                    	</div>
                                                      
                                                        <div class="form-group mt-20">
                                                    		<div class="col-sm-offset-2 col-sm-10">
                                                  <br>
                                                    			<button type="submit" name="login" class="btn btn-success btn-labeled pull-right">Sign in<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                    		
															</div>
                                                    	</div>
														
														
                                                    </form>

                                            

                                                 
                                                </div>
                                            </div>
                                            <!-- /.panel -->
							
											
											
                                            <p class="text-muted text-center"><font color="white"><small>Copyright © APOLLO+ 2021</small></p></font>
											<marquee><font color ="white"> APOLLO+  | Student Information System | APOLLO+ PVT.LTD | Meepe , Padukka , Sri Lanka | T.P - 0769912680 </font></marquee>
											
                                        </div>
										
                                        <!-- /.col-md-11 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-md-12 -->
                            </div>
                            <!-- /.row -->
                        </section>

                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /. -->

        </div>
		
		
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function(){

            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>
