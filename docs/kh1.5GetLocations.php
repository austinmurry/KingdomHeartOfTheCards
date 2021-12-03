<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <head>
        <title>Welcome Earthlings!</title>
        <meta charset="UTF-8" />
        <meta name="author" content="My Name" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="styingsheet.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>    
        
        <style>
			h1 {
				position:relative;
				left: 30px;
			}
		
			
			body {
				background-image: url("Images/khRepeat.jpeg");
			}
			a { color:#FFFFFF; } /* CSS link color */
			.footer {
  						position: fixed;
  						left: 0;
  						bottom: 0;
  						width: 100%;
  						background-color:#0054FF;
 						color: white;
  						text-align: center;
}
		</style>   
    </head>
    <!--This page is published at https://github.com/austinmurry/PSUStudent -->
    
    <body>

        <!--<nav>
            <ul class="menu">
                <li class="menu"><a href="index.html">Home</a></li>
                <li class="menu"><a href="todoList.html">JavaScript To-Do-List</a></li>
                <li class="menu"><a href="charHighlight.html">Highlight Sample</a></li>
                <li class="menu"><a href="charList.html">Character List Search</a></li>
                <li class="menu"><a href="kh1.5GetLocations.php">Cutscene PHP</a></li>
                <li class="menu"><a href="resume.html">Resume</a></li>
                <li class="menu"><a href="portfolio.html">Portfolio</a></li>
                <li class="menu"><a href="about.html">About</a></li>
            </ul>
        </nav>-->
        
        <div class="navbar">
            <a href="index.html">Home</a>
            <a href="Objectives.html">Objectives</a>
            <a href="Texts.html">Texts</a>
            <div class="subnav">
                <button class="subnavbtn">Visualizations and Analysis <i class="fa fa-caret-down"></i></button>
                <div class="subnav-content">
                    <a href="FA2021-Vis.html">Fall 2021</a>
                    <a href="SP2021-Vis.html">Spring 2021</a>
                    <a href="charList.html">Character Search List</a>
                    <a href="kh1.5GetLocations.php">Cutscene PHP</a>
                    <a href="network.html">Network Visualizations</a>
                    <!--<a href="#link3">DART 204</a>
                    <a href="#link4">DART 409</a>
                    <a href="#link4">DIGIT 495</a>-->
                </div>
            </div>
            <a href="About.html">About</a>
        </div>
        
        <h1>Select the location you would like to investigate</h1>
        
        <hr class="full"/>
        
        <ul>
        <li>
        <?php
            require_once("config.php");
  
            $contents = REST_PATH . "/db/ajm7408/FA2021/kh1.5PHPGetLocations.xql";
            $result = file_get_contents($contents);
            echo $result;
        ?>
        </li>
        </ul>
    </body>
</html>