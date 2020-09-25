<!DOCTYPE html>
<html lang="en_US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Global Variables</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <table>
            <tr>
                <td><label for="name">Name* : </label></td>
                <td><input type="text" name="name" id="name" required /></td>
            </tr>
            <tr>
                <td><label for="age">Age* : </label></td>
                <td><input type="number" name="age" id="age" min="18" max="47" required /></td>
            </tr>
            <tr>
                <td>Gender : </td>
                <td>
                    <label for="male"><input type="radio" name="gender" id="male" value="male" /> Male</label>
                    <label for="female"><input type="radio" name="gender" id="female" value="female" /> Female</label>
                </td>
            </tr>
            <tr>
                <td><label for="email">Email* : </label></td>
                <td><input type="email" name="email" id="email" required /></td>
            </tr>
            <tr>
                <td><label for="website">Website : </label></td>
                <td><input type="url" name="website" id="website" /></td>
            </tr>
            <tr>
                <td><label for="comment">Comment* : </label></td>
                <td><textarea name="comment" id="comment" cols="50" rows="8" required></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Send" /></td>
            </tr>
        </table>
    </form>

    <?php
        $name = $age = $gender = $email = $website = $comment = "";
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name       = validate($_REQUEST['name']);
            $age        = validate($_REQUEST['age']);
            $gender     = validate($_REQUEST['gender']);
            $email      = validate($_REQUEST['email']);
            $website    = validate($_REQUEST['website']);
            $comment    = validate($_REQUEST['comment']);
            
            echo "Name : ". $name ."<br/>";
            echo "Age : ". $age ."<br/>";
            echo "Gender : ". $gender ."<br/>";
            echo "Email : ". $email ."<br/>";
            echo "Website : ". $website ."<br/>";
            echo "Comment : ". $comment;
        }
        
        function validate($getData){
            $data = trim($getData);
            $data = stripslashes($getData);
            $data = htmlspecialchars($getData);
            
            return $data;
        }
    ?>
</body>
</html>