<?php
include("index.php");
// $QUERY_STRING=$_SERVER['QUERY_STRING'];
//  echo var_dump($QUERY_STRING) ;
 echo "<br/>";
 echo var_dump($_POST) ;
 ?>


<html>
    <head>
        <title> contact form </title>
    </head>

    <body >
        <h3> Contact Form </h3>
        <div id="after_submit">
            
        </div>
        
        <form id="contact_form" action="lab1.php" method="POST" enctype="multipart/form-data">
        <h5 style="color: red;"> <?php echo $error ?></h5>
            <div class="row">
                <label class="required" for="name">Your name:</label><br />

                <h5 style="color: red;"> <?php echo $errorname ?></h5>

                <input id="name" class="input" name="name" type="text" value="<?php if(isset($name)) echo $name?>" size="30" /><br />

            </div>
            <h5 style="color: red;"> <?php echo $erremail ?></h5>
            <div class="row">
                <label class="required" for="email">Your email:</label><br />
                
                <input id="email" class="input" name="email" type="text" value="<?php echo $email?>" size="30" /><br />

            </div>
            <h5 style="color: red;"> <?php echo $errmessg ?></h5>
            <div class="row">
                <label class="required" for="message">Your message:</label><br />
                
                <textarea id="message" class="input" name="message" rows="7" cols="30" value="<?php echo $message?>"></textarea><br />

            </div>

            <input id="submit"  type="submit" >
            <input id="clear" name="clear" type="reset" value="clear form" >

        </form>
    </body>

</html>