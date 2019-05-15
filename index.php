<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Ben Devops on AWS!</title>
</head>
<body>
    <?php
        require 'Welcome.php';
        $welcome = new Welcome();
    ?>
    <h1><?php echo $welcome->greet() ?></h1>
<h2>Hello world!</h2>
<h3>Ben was here</h3>
</body>
</html>
