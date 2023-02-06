<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        input {
            border:1px solid #ccc;
            width:200px;
            padding:10px;
            margin:5px 15px;
            border-radius:5px;
        }
        .send {
            width:220px;
        }
    </style>
    <h1>Student attendance notification system in the LINE application on mobile phone</h1>
</head>
<body>
    
        <form action="line-notify.php" method="post">
            <input class='required' name="firstname" placeholder="First Name" type='text'>
            <br>
            <input class='required' name="lastname" placeholder="Last Name" type='text'>
            <br>
            <input class='required' name="studentID" placeholder="Student ID" type='text'>
            <br>
            <input class='send' name="submit" type='submit' value='Send'>
            <br>
        </form>

</body>
</html>