<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include('./php/inc/_link.php');
    ?>
</head>
<body>
    <div class="body__wrapper">
        <div class="wrapper">
            <?php
                include('./php/inc/_header.php');
            ?>

            <div class="main">
                <div class="container">

                    <div class="hero-slider" carousel>
                        <div class="carousel-cell">
                            <div class="info-container">
                                <div class="text">
                                    <span>Незабываемые туры по России</span> 
                                    <span>Хотите найти свое место силы и получить эмоции на всю жизнь? <br>
                                        Присоединяйтесь к нам!
                                    </span> 
                                </div>
                                <button>Кавказ</button>
                            </div>
                        </div>

                        <div class="carousel-cell">
                            <div class="info-container">
                                <div class="text">
                                    <span>Незабываемые туры по России</span> 
                                    <span>Хотите найти свое место силы и получить эмоции на всю жизнь? <br>
                                        Присоединяйтесь к нам!
                                    </span> 
                                </div>
                                <button>Байкал</button>
                            </div>
                        </div>

                        <div class="carousel-cell">
                            <div class="info-container">
                                <div class="text">
                                    <span>Незабываемые туры по России</span>
                                    <span>Хотите найти свое место силы и получить эмоции на всю жизнь? <br>
                                        Присоединяйтесь к нам!
                                    </span> 
                                </div>
                                <button>Сибирь</button>
                            </div>
                        </div>

                    </div>


                    <?php
                        include('./php/inc/_info-company.php');
                        include('./php/inc/_catalog.php');
                        include('./php/inc/_feedback.php');
                    ?>

                                     


                </div>
            </div>

            <?php
                include('./php/inc/_footer.php');
            ?>
        </div>
    </div>
    <?php
        include('./php/inc/_script.php');
    ?>
</body>
</html>