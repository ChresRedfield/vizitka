<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="/img/php.jpg">'; ?>                    
                </div>

                <div class="fullname">
                    <p> (имя)Я тот (фамилия)самый
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo '(город)любит', ' ', $city; ?>                                      
                    </p> 
           
                    <p> (возраст)Мне кошачих
                    <?php  echo $age;   ?>          
                    лет </p>
                    <p> Мы научились создавать переменные </p>
                    <p> Изучили простые операции с ними </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $a = 70;
                        $b = 3;
                        $c = $a + $b;
                        echo $c;
                    ?>   <br>                
                     <?php
                        echo $d;
                    ?> 

            </div>

            <div class="article">
                <p class="text">
                    Рыбатекст используется дизайнерами, проектировщиками и фронтендерами, 
					когда нужно быстро заполнить макеты или прототипы содержимым. Это тестовый контент, 
					который не должен нести никакого смысла, лишь показать наличие самого текста 
					или продемонстрировать типографику в деле.
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
