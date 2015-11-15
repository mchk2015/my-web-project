<?php
$pageStart = 
'<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" /> 
        <title>MY WEBSITE PAGE</title>
        <link type="text/css" href="./local/jquery-ui-1.11.4/themes/ui-lightness/jquery-ui.min.css" rel="stylesheet" />
        <script type="text/javascript" src="./local/jquery-ui-1.11.4/external/jquery/jquery.js"></script>
        <script type="text/javascript" src="./local/jquery-ui-1.11.4/jquery-ui.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#date1").datepicker();
            });
        </script>
    </head>
    
    <body>
    <header>
        <h1>Header</h1>
    </header>
    <nav>Navigation Bar</nav>
    <aside>Side Column</aside>
    <article>Article
        <section>Section1</section>
        <section>Section2</section>
    </article>
    <h3>Today is : </h3>
        <div id="date1"></div>
    <footer>
        <h6>Footer</h6>
    </footer>
    </body>
    
</html>';

print $pageStart;
?>