<?include('header.php');   // include- подключение файла php?>
        <section class="page">
            <div class="container">
                <div class="right-block">
                    <div class="main-slider">
                        <div class="slider-left-service">
                            <? $result=$_REQUEST["qwery"] // $_GET(есть еще $_POST-скрытое и $_REQUEST принимает все) - получает параметр если форма переданна методом GET?> 
                            Результат по запросу <?= $result?>
                            
                        </div>
                        <div class="slider-right">
                        </div>  
                        <div class="clear"></div>      
                    </div>

                </div>
            </div>

        </section>


<?include('footer.php');?>