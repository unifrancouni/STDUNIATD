﻿<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>STD-UNI-ATD</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.ico">
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="<?php echo base_url(); ?>css/bootstrap-min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>js/scripts.js"></script>

        <script>

            $(document).ready(function () {

                $('#sidebar').affix({
                    offset: {
                        top: 240
                    }
                });

            });
        
        
        </script>

        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
          ga('create', 'UA-40413119-1', 'bootply.com');
          ga('send', 'pageview'); 
        </script>
        
        

		<link href="<?php echo base_url(); ?>css/styles.css" rel="stylesheet">

	</head>
	<body>
<nav class="navbar navbar-static">
    <div class="container">
    
    
    
    <script src="//www.google-analytics.com/analytics.js" async=""></script>



      <a class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
        <span class="glyphicon glyphicon-chevron-down"></span>
      </a>
      <div class="nav-collapse collase">
        <ul class="nav navbar-nav">  
          <li><a href="#">Home</a></li>
          <li><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
        </ul>
        <ul class="nav navbar-right navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-search"></i></a>
            <ul class="dropdown-menu" style="padding:12px;">
                <form class="form-inline">
     				<button type="submit" class="btn btn-default pull-right"><i class="glyphicon glyphicon-search"></i></button><input type="text" class="form-control pull-left" placeholder="Search">
                </form>
              </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> <i class="glyphicon glyphicon-chevron-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="#">Login</a></li>
              <li><a href="#">Profile</a></li>
              <li class="divider"></li>
              <li><a href="<?php echo base_url(); ?>index.php/logout">Cerrar Sesion</a></li>
             </ul>
          </li>  
        </ul>
      </div>		
    </div>
</nav><!-- /.navbar -->

<header class="masthead">
  <div class="container">
    <div class="row">
      <div class="col col-sm-6">
          <div class="col col-sm-6">
        <div class="well pull-left">
          <img src="<?php echo base_url(); ?>images/logostd_640_480.png" class="center-block img-circle">      
        </div>
      </div>
        <h1><a href="#" title="scroll down for your viewing pleasure">STD-UNI-ATD</a>
          <p class="lead"> UNIVERSIDAD NACIONAL DE INGENERÍA </p></h1>
      </div>
      <div class="col col-sm-6">
        <div class="well pull-right">
          <img src="<?php echo base_url(); ?>images/uni_640_480.jpg" class="center-block img-rounded">      
        </div>
      </div>
    </div>
  </div>
  
  <div class="container">
	<div class="row">
      <div class="col col-sm-12">
        
        <div class="panel">
        <div class="panel-body">
          Notas  <span class="glyphicon glyphicon-heart-empty"></span>
        </div>
        </div>
        
      </div>
  	</div>
  </div>
</header>

<!-- Begin Body -->
<div class="container">
	<div class="row">
  			<div class="col col-sm-3">
              	<div id="sidebar">
      			<ul class="nav nav-stacked">
                    <li><h3 class="highlight">Actividades <i class="glyphicon glyphicon-dashboard pull-right"></i></h3></li>
                  	<li><a href="#">E-mail</a></li>
          			<li><a href="#">Enlaces</a></li>
				</ul>
                <div class="accordion" id="accordion2">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                Accordion
                            </a>
                        </div>
                        <div id="collapseOne" class="accordion-body collapse in">
                            <div class="accordion-inner">
                              <p>There is a lot to be said about RWD.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                    Accordion
                                </a>
                            </div>
                            <div id="collapseTwo" class="accordion-body collapse">
                                <div class="accordion-inner">
                                  <p>Use @media queries or utility classes to customize responsiveness.</p>
                                </div>
                            </div>
                        </div>
               	</div>
               </div>
      		</div>  
      		<div class="col col-sm-9">
              <div class="panel">
              <h1>The Top Stories from Around</h1>
              
              <div class="row">
              	<div class="col col-sm-8">
                  <img src="http://s.bootply.com/assets/example/bg_iphone.png" class="img-responsive">
                </div> 
        		<div class="col col-sm-4">
                  <img src="//placehold.it/400x180/FF3333/FFF" class="img-responsive">
                  <h4>Aside</h4>
                  <hr>
                  <img src="//placehold.it/400x180/FF3333/FFF" class="img-responsive">
                  <h4>Aside 2</h4>
              	</div>   
              </div>
        
              	<h2>Content</h2>
                Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
                eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
                sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
              
              
              	<h2>Content</h2>
                Rrem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
                eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
                sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
              	<br><br>
                <button class="btn btn-default">More</button>
                
                <hr>
              	
                <h2>Content</h2>
                <img src="//placehold.it/150x100/EEEEEE" class="img-responsive pull-right"> Farmhand ida quae ab illo inventore veritatis et quasi architecto beatae vitae 
                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
                eos qui ratione voluptatem sequi nesciunt. I met him on the Internet. He's a French model. Qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
                sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
              	<br><br>
                <button class="btn btn-default">More</button>
                
                <hr>
                
                 <div class="row">
                  <div class="col col-sm-6">
                    <img src="/assets/example/bg_smartphones.jpg" class="img-responsive">
                    
                  </div> 
                  <div class="col col-sm-6">
                    <h1>There is still a lot to be said about the Responsive Web.</h1>
                  </div>   
                </div>
                
                <hr>
              
              	<h2>Responsive Text</h2>
      			Eeaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
                eos qui ratione voluptatem sequi nesciunt. Bootply is this awesomeness. Editor, prototype tool, adipisci velit, 
                sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
              
                <hr>
                
              	<h2>Responsive Images</h2>
      			Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
                eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
                sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
              
                <hr>
                
              	<h2>Media Queries</h2>
      			Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
                eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
                sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
              
              
              	<h1><a href="#"><i class="glyphicon glyphicon-user"></i> <i class="glyphicon glyphicon-chevron-down"></i></a></h1>
              
              	<hr>
              	<h4><a href="http://bootply.com/">Bootply</a></h4>
              	<hr>
             	</div>
      	</div> 
  	</div>
</div>

	</body>
</html>