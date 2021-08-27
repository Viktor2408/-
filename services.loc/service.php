<?include('header.php');?>
        <section class="page">
            <div class="container">
                <div class="right-block">
                    <div class="main-slider">
                        <div class="slider-left-service">
                            <?
                            $text = "тут можно писать теги из html <br>";
                            $text .= "выше мы создали переменную а тут добавляем к ней текст <br>"; 
                            $age = 24;
                            $textMyAge = "мне ".$age." года";

                            echo $text;//echo- команда вывода информации

                            ?>
                            <?= $textMyAge?>
                            Сайт находится в разработке так что пока посмотрите на котиков
                        </div>
                        <div class="slider-right">
                        </div>  
                        <div class="clear"></div>      
                    </div>

                </div>
            </div>

        </section>


<?include('footer.php');?>