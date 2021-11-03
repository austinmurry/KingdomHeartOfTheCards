<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <head>
        <title>Welcome Earthlings!</title>
        <meta charset="UTF-8" />
        <meta name="author" content="My Name" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="webstyle.css" />       
    </head>
    <!--This page is published at https://github.com/austinmurry/PSUStudent -->
    
    <body>

        <nav>
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
        </nav>
        
        <h1>Select the location you would like to investigate</h1>
        
        <hr/>
        
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