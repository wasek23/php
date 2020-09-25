<!DOCTYPE html>
<html lang="en_US">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Variables</title>
</head>

<body>

    <?php
        
        /*
            Global Variables:

            $GLOBALS
            $_SERVER
            $_REQUEST
            $_POST
            $_GET
            $_FILES
            $_ENV
            $_COOKIE
            $_SESSION
        */
        
        $p = 65;
        $q = 21;
        
        // $GLOBALS can access global variables from anywhere in the PHP script (also from within functions or methods).
        
        function gloVar(){
            $GLOBALS['r'] = $GLOBALS['p'] - $GLOBALS['q'];
        };
        gloVar();
        echo $r ."<br/><br/><br/>";


        // $_SERVER can holds information about headers, paths, and script locations.

        echo $_SERVER['PHP_SELF'] ."<br/>"; // Returns the filename of the currently executing script.
        echo $_SERVER['SERVER_NAME'] ."<br/>"; // Returns the name of the host server.
        echo $_SERVER['SERVER_ADDR'] ."<br/>"; // Returns the IP address from where the user is viewing the current page.
        echo $_SERVER['HTTP_HOST'] ."<br/>"; // Returns the Host header from the current request
        echo $_SERVER['HTTP_USER_AGENT'] ."<br/>"; // Returns the user browser information.
        echo $_SERVER['SCRIPT_NAME'] ."<br/><br/>"; // Returns the path of the current script.

        echo $_SERVER['GATEWAY_INTERFACE'] ."<br/>"; // Returns the server using, Common Gateway Interface (CGI) version.
        echo $_SERVER['SERVER_SOFTWARE'] ."<br/>"; // Returns the server identification string.
        echo $_SERVER['SERVER_PROTOCOL'] ."<br/>"; // Returns the name and revision of the information protocol.
        echo $_SERVER['REQUEST_METHOD'] ."<br/>"; // Returns the request method used to access the page.
        echo $_SERVER['REQUEST_TIME']; // Returns the timestamp of the start of the request.
        echo $_SERVER['QUERY_STRING'] ."<br/>"; // Returns the query string if the page is accessed via a query string.
        echo $_SERVER['HTTP_ACCEPT'] ."<br/>"; // Returns the Accept header from the current request.
        echo $_SERVER['REMOTE_PORT'] ."<br/>"; // Returns the port being used on the user's machine to communicate with the web server.
        echo $_SERVER['SCRIPT_FILENAME'] ."<br/>"; // 	Returns the absolute pathname of the currently executing script.
        echo $_SERVER['SERVER_ADMIN'] ."<br/>"; // 	Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host).
        echo $_SERVER['SERVER_PORT'] ."<br/>"; // Returns the port on the server machine being used by the web server for communication.
        echo $_SERVER['SERVER_SIGNATURE']; // Returns the server version and virtual host name which are added to server-generated pages.
        echo "<br/><br/><br/>"; 
    ?>


    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <!-- get method is not secure, it show value on url -->
        <input type="text" name="username" placeholder="Username">
        <br/><br/>
        <input type="password" name="password" placeholder="Password">
        <br/><br/>
        <input type="submit" value="Send">
    </form>

    <?php
        // $_REQUEST is used to collect data after submitting an HTML form. And $_POST is widely used to collect form data after submitting an HTML form with method="post". $_POST is also widely used to pass variables.

        if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
            $name = $_REQUEST['username']; // $_REQUEST
            $password = $_POST['password']; // $_POST

            if(empty($name) && empty($password)){
                echo "<span style='color: red;'>You Have To Fill Username And Password</span>";
            }elseif(empty($name)){
                echo "<span style='color: red;'>You Have To Fill Username</span>";
            }elseif(empty($password)){
                echo "<span style='color: red;'>You Have To Fill Password</span>";
            }else{
                echo "<span style='color: green;'>Successfully Submitted!</span>";
            };
        };
        echo "<br/><br/><br/>";


        // $_GET is used to collect form data after submitting an HTML form with method="get". And also collect data sent in the URL.
    ?>

	<a href="23.get.php?fname=Wasek&lname=Bellah">My Name</a>

</body>

</html>
