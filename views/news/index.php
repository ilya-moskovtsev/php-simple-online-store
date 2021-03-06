<!DOCTYPE html>
<html lang="en">

  <head>
    
    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- SEO -->
    <meta name="description" content="150 words">
    <meta name="author" content="uipasta">
    <meta name="url" content="http://www.yourdomainname.com">
    <meta name="copyright" content="company name">
    <meta name="robots" content="index,follow">
    
    
    <title>DevBlog - Personal Blog Template</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="../../template/images/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="../../template/images/favicon/apple-touch-icon.png">
    
    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="../../template/css/plugin.css">
    
    <!-- Main CSS Stylesheet -->
<!--    <link rel="stylesheet" type="text/css" href="/css/style.css">-->
    <link rel="stylesheet" type="text/css" href="../../template/css/style.css">

    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">
    
    
    <!-- HTML5 shiv and Respond.js support IE8 or Older for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    

  </head>

 <body>

	
     
	 <!-- Preloader Start -->
     <div class="preloader">
	   <div class="rounder"></div>
      </div>
      <!-- Preloader End -->
      
      
    
    
    <div id="main">
        <div class="container">
            <div class="row">
                 <!-- Blog Post (Right Sidebar) Start -->
                 <div class="col-md-9">
                    <div class="col-md-12 page-body">
                    	<div class="row">
                    		
                            
                            <div class="sub-title">
                           		<h2>News</h2>
                             </div>
                            
                            
                            <div class="col-md-12 content-page">
                            	
                                <?php foreach ($newsList as $newsItem):?>
                                <!-- Blog Post Start -->
                                <div class="col-md-12 blog-post">
                                    <div class="post-title">
                                      <a href="/news/<?php echo $newsItem['id']?>"><h1><?php echo $newsItem['h1']?></h1></a>
                                    </div>  
                                    <div class="post-info">
                                    	<span><?php echo $newsItem['date']?></a></span>
                                    </div>  
                                    <p><?php echo $newsItem['short_content']?></p>
                                    <a href="/news/<?php echo $newsItem['id']?>" class="button button-style button-anim fa fa-long-arrow-right"><span>Read More</span></a>
                                </div>
                                <!-- Blog Post End -->
                                <?php endforeach;?>

                                <div class="col-md-12 text-center">
                                 <a href="javascript:void(0)" id="load-more-post" class="load-more-button">Load</a>
                                 <div id="post-end-message"></div>
                                </div>
                                
                             </div>
                              
                         </div>
                         </div>
                  </div>
                  <!-- Blog Post (Right Sidebar) End -->
                
            </div>
         </div>
      </div>
    
    
    
    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
    <!-- Back to Top End -->
    
    
    <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="../../template/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../template/js/plugin.js"></script>
    
    <!-- Main Javascript File  -->
    <script type="text/javascript" src="../../template/js/scripts.js"></script>

    
   </body>
 </html>
