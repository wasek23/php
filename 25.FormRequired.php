<?php
    // Form Required
    $name = $age = $gender = $email = $website = $comment = "";
    $errName = $errAge = $errGender = $errEmail = $errWebsite = $errComment = "*";
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        
        if(empty($_POST["name"])){
            $errName = "Please Enter Your Name !";
        }else{
            $name = validate($_POST["name"]);
            $errName = "<span style='color: green;'>Successful</span>";
        }
        
        if(empty($_POST["age"])){
            $errAge = "Please Enter Your Age !";
        }else{
            $age = validate($_POST["age"]);
            $errAge = "<span style='color: green;'>Successful</span>";
        }
        
        if(empty($_POST["gender"])){
            $errGender = "Please Select Your Gender !";
        }else{
            $gender = validate($_POST["gender"]);
            $errGender = "<span style='color: green;'>Successful</span>";
        }
        
        if(empty($_POST["email"])){
            $errEmail = "Please Enter Your Email !";
        }elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            $errEmail = "<span style='color: orange;'>Please Enter a Valid Email Address !</span>";
        }else{
            $email = validate($_POST["email"]); 
            $errEmail = "<span style='color: green;'>Successful</span>";
        }
        
        if(empty($_POST["website"])){
            $errWebsite = "Please Enter Your Website !";
        }elseif(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
            $errWebsite = "<span style='color: orange;'>Please Enter a Valid Website Address !</span>";
        }else{
            $website = validate($_POST["website"]);
            $errWebsite = "<span style='color: green;'>Successful</span>";
        }
        
        $comment = validate($_POST["comment"]);
        if(empty($_POST["comment"])){
            $errComment = "Please Comment Something !";
        }else{
            $comment = validate($_POST["comment"]);
            $errComment = "<span style='color: green;'>Successful</span>";
        }
    }
    
    function validate($getData){
        $data = trim($getData);
        $data = stripslashes($getData);
        $data = htmlspecialchars($getData);
            
        return $data;
    }    
?>

<!DOCTYPE html>
<html lang="en_US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form Required</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <p style="color: red;">* is Required Field</p>

        <table>
            <tr>
                <td><label for="name">Name : </label></td>
                <td>
                    <input type="text" name="name" id="name" />
                    <span style="color: red;"><?php echo $errName; ?></span>
                </td>
            </tr>
            <tr>
                <td><label for="age">Age : </label></td>
                <td>
                    <input type="number" name="age" id="age" min="18" max="47" />
                    <span style="color: red;"><?php echo $errAge; ?></span>
                </td>
            </tr>
            <tr>
                <td>Gender : </td>
                <td>
                    <label for="male"><input type="radio" name="gender" id="male" value="male" /> Male</label>
                    <label for="female"><input type="radio" name="gender" id="female" value="female" /> Female</label>
                    <span style="color: red;"><?php echo $errGender; ?></span>
                </td>
            </tr>
            <tr>
                <td><label for="email">Email : </label></td>
                <td>
                    <input type="text" name="email" id="email" />
                    <span style="color: red;"><?php echo $errEmail; ?></span>
                </td>
            </tr>
            <tr>
                <td><label for="website">Website : </label></td>
                <td>
                    <input type="text" name="website" id="website" />
                    <span style="color: red;"><?php echo $errWebsite; ?></span>
                </td>
            </tr>
            <tr>
                <td><label for="comment">Comment : </label></td>
                <td>
                    <textarea name="comment" id="comment" cols="50" rows="8"></textarea>
                    <span style="color: red;"><?php echo $errComment; ?></span>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Send" /></td>
            </tr>
        </table>
    </form>

</body>
</html>