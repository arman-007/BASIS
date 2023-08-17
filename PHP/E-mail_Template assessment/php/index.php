<?php
$head = <<<EAMILTEMPHEAD
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap demo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<style>
    body{
        background-color: rgb(39, 39, 97);
        color: rgb(54, 54, 117);
    }

    .container{
        width: 600px;
        background-color: white;
        margin-top: 50px;
        padding: 20px 30px;
    }

    .container .companyName{
        font-weight: bold;
        font-size: 1.5rem;
        font-style: italic;
    }

    .container .companyName p span{
        color: orangered;
        font-style: normal;
    }

    .container .reminder img{
        height: 50px;
    }

    .container .reminder p{
        margin-top: 10px;
        font-weight: bold;
    }

    .container .reminder .rem-text-1{
        font-size: 1.8rem;
        text-transform: uppercase;
    }

    .container .reminder .rem-text-2{
        font-size: 1.2rem;
    }

    .container .desc{
        padding: 0px 30px 0px 30px;
    }

    .container .desc p{
        font-size: 0.75rem;
    }

    .container .date{
        font-size: 1.2rem;
        font-weight: bold;
    }

    .container button{
        font-size: 0.621rem;
        font-weight: bold;
        color: white;
        background-color: rgb(11, 189, 11);
        border-radius: 15px;
        padding: 7px 70px;
        border: none;
        margin: 15px;
    }

    .container .info p:first-child{
        font-size: 1.3rem;
        font-weight: bold;
        margin-bottom: -2px;
    }

    .container .info p:last-child{
        font-size: 0.75rem;
    }
</style>
</head>
EAMILTEMPHEAD;

    $content = <<<EMAILTEMPCONTENT
    <div class="container text-center">
    <div class="companyName">
      <p>Company<span>Name</span></p>
    </div>
    <div class="reminder">
      <img src="../html/img/alarm-clock.png" alt="reminder icon">
      <p class="rem-text-1">Monthly Reminder</p>
      <p class="rem-text-2">Please renew your subscription</p>
    </div>
    <div class="desc">
      <p>Click any item in your email to open setting panel on the right. You can change background color, padding and set position of the text and image.</p>
      <p>To edit this text, change text alighnment and add links, double click to get into edit mode. To change fonts, use default fonts from design tab on the right.</p>
    </div>
    <div class="date">
      <p>Expire: 05 November</p>
    </div>
    <button>RENEW</button>
    <div class="info">
      <p>Need Help?</p>
      <p>Give us a missed call sample-1800</p>
    </div>
  </div>
EMAILTEMPCONTENT;
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>