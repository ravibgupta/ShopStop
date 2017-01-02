<!DOCTYPE html>
<html>
<head>
    <?php

    extract( $_POST);
    if ($NAME == "" || $EMAIL == "")
    {
        print("<title>Information Needed</title></head>
        <body style = \"font-family: arial; font-size: 1em; color: red\">
        <strong>Please fill in a name and email.<br /></strong>");
    }
    else
    {

        mail($EMAIL,"Your Order Confirmation", "Dear " . $NAME . ",\n\nWe have received your order from ShopStop.\n\nYour coonfirmation number is SFSD-34234.\n\nThank you - ShopStop staff");

        print("<title> Email Sent</title></head>
        <body style = \"font-family: arial; font-size: 1em; color: red\">
        <strong>Your Email has been sent.<br /></strong>");
    }


    ?>
</head>
    
<body>

</body>
</html>