<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
    <head> 
        <title>The Wanderer</title> 
        <meta http-equiv="content-type" content="text/html;charset=utf-8" /> 
        
   <link rel="stylesheet" src="//normalize-css.googlecode.com/svn/trunk/normalize.css" />
   <link rel="stylesheet" href="./css/main.css"

    </head>
    
 <body>
        <?php
        include './include/header.html';
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                  if ( isset($_POST['createTables'])){
                      $db = createTables();
                  }                                 
              }
        ?>
     <form action="admin.php" method="POST">
        <br>
        <input type="submit" id = "createTables" name = "createTables" value="Create Tables">
     </form>
        
        <?php    
        include './include/footer.html';
        ?>
    </body>

</html>
