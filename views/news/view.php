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
    <link rel="stylesheet" type="text/css" href="../../template/css/style.css">
    
    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">
    
    <!-- Syntax Highlighter  -->
    <link rel="stylesheet" type="text/css" href="../../template/css/syntax/shCore.css">
    <link rel="stylesheet" type="text/css" href="../../template/css/syntax/shThemeDefault.css">
    
    
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
                           		<a href="/news" title="Go to Home Page"><h2>All News</h2></a>
                             </div>
                            
                            
                            <div class="col-md-12 content-page">
                              <div class="col-md-12 blog-post">
                            	
                                
                                <!-- Post Headline Start -->
                                <div class="post-title">
                                    <h1><?php echo $newsItem['h1']?></h1>
                                   </div>
                                   <!-- Post Headline End -->
                                    
                                    
                                <!-- Post Detail Start -->
                                <div class="post-info">
                                    <span><?php echo $newsItem['date']?></a></span>
                                   </div>
                                   <!-- Post Detail End -->
                                    
                                    
                                    <p><?php echo $newsItem['content']?></p>

                                </div>    
                             </div>
                              
                         </div>
                         </div>
                  </div>
                  <!-- Blog Post (Right Sidebar) End -->
                
            </div>
         </div>
      </div>
    
    
    
     
     <!-- Endpage Box (Popup When Scroll Down) Start -->
     <div id="scroll-down-popup" class="endpage-box">
       <h4>Read Also</h4>
       <a href="#">How to make your company website based on bootstrap framework...</a>
      </div>
      <!-- Endpage Box (Popup When Scroll Down) End -->
      
    
    
    
    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
    <!-- Back to Top End -->
    
    
    <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="../../template/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../template/js/plugin.js"></script>
    
    <!-- Main Javascript File  -->
    <script type="text/javascript" src="../../template/js/scripts.js"></script>
    
    <!-- Syntax Highlighter Javascript File  -->
    <script type="text/javascript" src="../../template/js/syntax/shCore.js"></script>
    <script type="text/javascript" src="../../template/js/syntax/shBrushCss.js"></script>
    <script type="text/javascript" src="../../template/js/syntax/shBrushJScript.js"></script>
    <script type="text/javascript" src="../../template/js/syntax/shBrushPerl.js"></script>
    <script type="text/javascript" src="../../template/js/syntax/shBrushPhp.js"></script>
    <script type="text/javascript" src="../../template/js/syntax/shBrushPlain.js"></script>
    <script type="text/javascript" src="../../template/js/syntax/shBrushPython.js"></script>
    <script type="text/javascript" src="../../template/js/syntax/shBrushRuby.js"></script>
    <script type="text/javascript" src="../../template/js/syntax/shBrushSql.js"></script>
    <script type="text/javascript" src="../../template/js/syntax/shBrushVb.js"></script>
    <script type="text/javascript" src="../../template/js/syntax/shBrushXml.js"></script>
    
	<!-- Syntax Highlighter Call Function -->
	<script type="text/javascript">
		SyntaxHighlighter.config.clipboardSwf = '../../template/js/syntax/clipboard.swf';
		SyntaxHighlighter.all();
	</script>

    
   </body>
 </html>
