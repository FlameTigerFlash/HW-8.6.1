<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class = "page">
        <div class = "header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>
        <div class = "main_body">
            <h1>  <?php  echo $p  ?> </h1>
            <div class = "data">
                <div class="myImg">
                    <?php  echo '<img src="img/php.jpg">'; ?>                    
                </div>
                <div class = "info">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'Город: ', ' ', $city . '<br>';
                          echo 'Образование: ', ' ', $education . '<br>';
                          echo 'Дополнительные курсы: ', ' ', $courses . '<br>'; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;?>          
                    лет </p>
                    <p>Я изучаю веб-программирование<br> на курсе "Белый хакер" от Skillfactory.</p>
                </div>
            </div>
            <div class = "knowledge">
                <?php include 'knowledge.inc.php' ?>
                <?php echo $a, ' ', $b, ' ', $c?><br>
                <?php
                    $val = 6;
                    if (isEven($val))
                    {
                        echo 'Число ' .  $val . ' чётное.';
                    }
                    else
                    {
                        echo 'Число ' . $val . ' нечётное.';
                    }
                ?>
            </div>
        </div>
    </div>
</body>