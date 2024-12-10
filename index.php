<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EC2 Public IP</title>
</head>
<body>
    <h1>Welcome to my EC2 Instance ..</h1>
    <p>Your EC2 instance's public IP is:
        <?php echo $_SERVER['SERVER_ADDR']; ?>
    </p>
</body>
</html>