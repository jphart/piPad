<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->

<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->

<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->

<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="css/bootstrap.min.css">

	<style>

	body {

	  padding-top: 60px;

	  padding-bottom: 40px;

	}

	</style>

	<link rel="stylesheet" href="css/bootstrap-responsive.min.css">

	<link rel="stylesheet" href="css/style.css">



	<script src="js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>

</head>
<body>
    <div class="navbar navbar-fixed-top">

      <div class="navbar-inner">

        <div class="container">

          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

          </a>

          <a class="brand" href="#">piPad</a>

          <div class="nav-collapse">

            <ul class="nav">

              <li class="active"><a href="#">Home</a></li>

              <li><a href="phpinfo.php">PHP Info</a></li>

            </ul>

          </div><!--/.nav-collapse -->

        </div>

      </div>

    </div>



    <div class="container">



      <!-- Example row of columns -->

      <div class="row">   

<?php
	$directory="videos";
   // create a handler to the directory
    $dirhandler = opendir($directory);
 
    // read all the files from directory
    while ($file = readdir($dirhandler)) {
 		
 		$filepath = $directory.'/'.$file;
        // if $file isn't this directory or its parent 
        if ($file != '.' && $file != '..' && !is_dir($filepath))
        {
        
        	$name = substr($file, 0, -4);
        	if(strlen($name) > 18){
        		$name = substr($name, 0, 15);
        		$name .= '...';
        	}
			echo "<div class='span4'><h2>$name</h2>";
	        echo "<p>";
	        echo round(filesize($filepath) / 1024 / 1024);
	        echo "Mb</p>";
          	echo "<p><a class='btn' href='videos/$file'>View &raquo;</a></p>";
        	echo "</div>";
        }   
    }
 
    //close the handler
    closedir($dirhandler);
?>

	 </div>
      <hr>



      <footer>

        <p>&copy; Code41</p>

      </footer>



    </div> <!-- /container -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>



<script src="js/libs/bootstrap/bootstrap.min.js"></script>



<script src="js/script.js"></script>

</body>
</html>
