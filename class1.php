<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="submit" type="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php


if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
   
    if(empty($name) || empty($email))
    {
        echo "Something Wrong";
    }

    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        echo "Email Is Not Correct";
    }

    else
    {
        echo $name."<br>".$email;
    }
}


// Sanitization
//validation

?>