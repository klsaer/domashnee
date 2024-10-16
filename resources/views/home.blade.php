<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<?php
$image_url='https://i.pinimg.com/originals/88/f9/3d/88f93d4bbfde0f524b0de7f4d5052c8e.gif';
$image_url2 ='https://i.pinimg.com/control/564x/d9/f2/2c/d9f22ca2536e9df00612b2c22c3f5cfb.jpg';
?>
<body>
    <div class="header">
        <img src="<?php echo $image_url;?>" width="100" height="100">
        <ul class="navigation_header">
            <a href="{{route('home')}}"><li>Главная</li></a>
            <a href="{{route('array')}}"><li>Массивы</li></a>
        </ul>
    </div>
    <div class="content">

    </div>
    <div class="footer">
        <p>Мидис</p>
        <p>Шмидт Владислав Дмитриевич</p>
        <p>2024 год</p>
    </div>
</body>
</html>