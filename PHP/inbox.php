<?php

$head = <<<EMAILTEMP1
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Email Template</title>
    <style>
        body{
            background-color: #d1cfcf;
        }

        body .container{
            background-color: #fff;
            margin-top: 20px;
            padding: 20px 50px;
            border-radius: 5px;
            width: 560px;
        }
    </style>
</head>
EMAILTEMP1;

$content = <<<EMAILTEMP2
<body>
    <div class="container">
        <h5>Hi there,</h4>
        <div>
            <p>
                Sometimes you just want to send a simple HTML email with a simple design
                Lorem ipsum dolor sit amet consectetur adipisicing elit.  consequuntur officiis.
            </p>
        </div>

        <button class="btn btn-primary">
            Call To Action
        </button>
        
        <div>
            <p>
                Eveniet architecto ut illo fugiat totam, quam maiores enim, perspiciatis, vel corrupti necessitatibus Laboriosam ratione, quaerat iure vero nostrum maiores!
            </p>
        </div>
        <div>
            <p>
                Good luck! Hope it works.
            </p>
        </div>
    </div>
</body>
EMAILTEMP2;
?>

<!DOCTYPE html>
<html lang="en">

<?php
echo $head;

echo $content;
?>
</html>
