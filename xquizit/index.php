<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
<?php
 header("Location: http://xquizit.conjura.in/ch/quiztime/runpage.php");
?>    
    <style>



    body {
  font-family: Arial, sans-serif;
  background: url(http://www.shukatsu-note.com/wp-content/uploads/2014/12/computer-564136_1280.jpg) no-repeat;
  background-size: cover;
  height: 100vh;
}

h1 {
  text-align: center;
  font-family: Tahoma, Arial, sans-serif;
  color: #06D85F;
  margin: 80px 0;
}

.box {
  width: 40%;
  margin: 0 auto;
  background: rgba(255,255,255,0.2);
  padding: 35px;
  border: 2px solid #fff;
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
}

.button {
  font-size: 1em;
  padding: 10px;
  color: WHITE;
  
  text-decoration: none;
  cursor: pointer;
  transition: all 0.3s ease-out;
}
.button:hover {

}

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: white;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}

    </style>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
       
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        
        <link rel="stylesheet" href="css/custom-styles.css">
        
		<link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/font-awesome-ie7.css">
		
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
            <div class="container">

                <div class="row-fluid">
                
                    <div class="span8 offset2">
                        <div class="site-header">
                            <div class="logo">
                                <h1>XQUIZIT</h1>
                            </div>
                            <div class="menu">
                                <div class="navbar">
                                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                        <i class="fw-icon-th-list"></i>
                                    </a>
                                    <div class="nav-collapse collapse">
                                        <ul class="nav">
                                             <li class="active"><a href="http://xquizit.conjura.in/">Home</a></li> 
                                            <!-- <li class="active"><a href="http://xquizit.conjura.in/ch/getquiz.php">Leaderboard</a></li>
                                       -->

                                           
                                       
                                        </ul>
                                    </div><!--/.nav-collapse -->
                                </div>
                                <div class="mini-menu">

                               <label> 
           <select class="selectnav" onChange="window.location.href=this.value"> 
              <option value="http://xquizit.conjura.in/" selected="">Home</option>  
            <!-- <option value="http://xquizit.conjura.in/ch/getquiz.php">Leaderboard</option>  --> 
            
   </select> 
           </label> 
        
          </div>
                            </div>
                        </div>
                        
                        <div class="featured-heading">
                            <div class="row-fluid">
                                <div class="span10 offset1">
                                   <h1>ONLINE QUIZ COMPETITION OF CONJURA 17</h1><br>
                                    
                                    <h1>WINNERS</h1><BR>
<h2 style="text-align:justify; color:#4FAF50;">
<CENTER>
FIRST PRIZE:BALACHANDRA MALLYA -NITK<BR><BR>
SECOND PRIZE:ROSHAN JOSE-CET 

<BR><BR><FONT COLOR=WHITE>
CONTACT GOKUL SURESH FOR MORE INFO(8281270038)
</h2>
<br>





                                    <CENTER><a class="button" href="#popup1">
  

                                    <H1>CREDITS</H1></a></CENTER>


                            
                                    
                                </div>
                            </div>
                        </div>
                      
                        
                         </div>
                            </div>
                        </div>
                      
                 <div id="popup1" class="overlay">
  <div class="popup">
    
    <a class="close" href="#">&times;</a>
    <div class="content">
    <FONT COLOR=BLACK>
     <B><H2> Front-End</H2><br><font size=4><a href="https://www.facebook.com/karthik.tn.18">Karthik</a></font><BR><BR>
     <B> <H2>Back-End</H2><br><font size=4><a href="https://www.facebook.com/unnimithunlal?fref=ts">Mithun</a>
    </div>
  </div>
</div>
                        
                        </div>
                    </div>
                </div>
            </div>


  
    

    </body>
</html>
