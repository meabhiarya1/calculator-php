<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Enter Your Fav Color: <input type="text" name="favcolor">
        <input type="submit" name="submit" value="Check Now">
    </form>

    <p>
    <?php 
        if(isset($_POST['submit'])){
            $favColor = $_POST['favcolor'];
            echo $favColor;
        }
    ?></p>
</body>
</html>