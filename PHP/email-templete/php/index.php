<?php
$title = "Email Template";
$address = "John";
$button = "Call to Action";
$greetings = "Good luck! Hope it works.";


$head = <<<EMAILTEMP1
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>$title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .container{
            width: 768px;
        }
        p{
            font-size: 1.5rem;
        }
        .btn{
            font-size: 1.25rem;
            padding: 1rem 2rem;
            margin-top: 2rem;
            margin-bottom: 2rem;
        }
    </style>
</head>
EMAILTEMP1;
?>
<?php
$content = <<<EMAILTEMP2

<div class="content">
    <div class="container">
        <p><strong>Hi $address,</strong></p>
        <p>Sometimes you just want to send a simple HTML email with a simple design and clear call to action. This is it.</p>

        <button type="button" class="btn btn-primary">$button</button>
        <p class="mt-3">This is a really simple email template. Its sole purpose is to the recipient to click the button with no distractions.</p>

        <p>$greetings</p>

    </div>
</div>


EMAILTEMP2;
?>

<!doctype html>
<html lang="en">

<?php
if(isset($head)){
    if(empty($head)){
        echo "head is empty";
    }
    else{
        echo $head;
    }
}
?>

<body>
<?php
if(isset($content)){
    if(empty($content)){
        echo "content is empty";
    }
    else{
        echo $content;
    }
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>