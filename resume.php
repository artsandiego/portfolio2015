<?php
    $id = $_REQUEST['filename'];
    $file = 'resume/'.$id;
    $filename = $id;
?>
<html>
    <head>
        <!--META-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Interactive Resume | 2016">
        <meta name="author" content="Artemio A. San Diego | Philippines">

        <!--TITLE AND ICON-->
        <title>Art San Diego</title>
        <link rel="shortcut icon" type="image/x-icon" href="images/branding.png">
        
        <style type="text/css">
            #main_section{
                border: 2px solid black;
            }
        </style>
    </head>
    <body>
        <div id="main_section">
            <iframe width="100%" height="1000px"> 
                <?php
                    header('Content-type: application/pdf');
                    header('Content-Disposition: inline; filename="' . $filename . '"');
                    header('Content-Transfer-Encoding: binary');
                    header('Accept-Ranges: bytes');
                    @readfile($file);
                ?>
            </iframe>
        </div>
    </body>
</html>