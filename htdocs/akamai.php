<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>VG HD live test</title>
<script type="text/javascript" src="lib/swfobject.js"></script>

<script type="text/javascript" src="lib/ParsedQueryString.js">
</script>
<script type="text/javascript" src="lib/debug.js">
</script>
<?php 

function display_debug_script() {
    if (!empty($_POST['video_url']) && is_string($_POST['video_url'])) {
        echo '<script type="text/javascript">var source="' . $_POST['video_url'] . '";</script>';
        require_once __DIR__ . '/akamai_debug_script.html';
    }
    
}

function display_debug_page() {
    if (!empty($_POST['video_url'])) {
        $url=$_POST['video_url'];
        if (!is_string($url)) {
            echo '<p>Error: the url you entered is not valid!</p>';
            return;
        }
        require_once __DIR__ . '/akamai_debug.html';
    }
}

display_debug_script();

?>
        <style type="text/css"> 
        <!-- .Verdana { 
            font-family: Verdana, Geneva, sans-serif; 
        }
                .playing
                        {
                                font-weight:bold;
                        }
        -->
        </style>
</head>
<body>
<h3>Enter the url of the video and click submit</h3>
<form action="index.php" method="post">
video url: <input type="text" name="video_url">
<input type="submit">
</form>
<?php

display_debug_page();

?>
</body>
</html>


