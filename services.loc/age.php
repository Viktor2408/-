<?include('header.php');   // include- подключение файла php?>
<?$age=$_GET['age'];?>
        <section class="page">
            <div class="container">
                <div class="right-block">
                   <form action="" method="get">

                       <input type="text" name="age" placeholder="укажите ваш возраст" value="<?=$age;?>"/>
                       <input type="submit" value="Отправить"/>

                   </form>
                   <? 
                   if($age>=18){
                       echo "Совершенолетний";
                   } else{
                       echo "Несовершенолетний";
                    }
                    ?>


                    <?
                    $arPeopleSum=[];// пустой массив 1 способ

                    $arPeopleMen=array(//массив 2 способ

                        "Diman"=>"Дима",
                        "Daniil"=>"Даниил",
                        "Kirill"=>"Кирилл",
                        "Саня",
                    );
                    $arPeopleMen[/*тут можно указать ключ*/]="Виктор"; //добавили в man массив 
                    $arPeopleMen["Diman"]="Дмитрий"; //заменили данные в массиве
                    unset($arPeopleMen["Daniil"]);// удаление из массива
                    $arPeopleWomen=[
                        "Lera"=>"Лера",
                        "Настя",
                        "Аня"
                    ];
                    $arPeopleSum = $arPeopleMen + $arPeopleWomen;// сложили массивы в один при таком способе если ключи совпадают то берется значение из первого массива
                    $arPeopleMerge=array_merge($arPeopleMen,$arPeopleWomen);// объединение массивов с автоматическим присвоением числовых ключей если заданные ключи совпадают то берется данные из последнего массива 

                    ?>
                    Массив Муж
                    <pre><?var_dump($arPeopleMen)?></pre> <!--var_dump выводим инфо из массива pre-приводит к читабельному виду-->
                    Массив Жен
                    <pre><?//var_dump($arPeopleWomen)?></pre> 
                    Массив сложения
                    <pre><?//var_dump($arPeopleSum)?></pre>
                    Объединение массивов
                    <pre><?//var_dump($arPeopleMerge)?></pre>
                    <p>
                        <?//echo $arPeople[1]?>
                    </p>


                    Массив внутри массива
                    
                   
                    <?
                    $apple=[//создали масив яблоко
                        "name"=>"Яблоко",
                        "color"=>"зеленый",
                        "massa"=>200,

                    ];
                    $fruits=[// создаем второй массив и добавляем в него первый 
                        "apple"=>$apple,
                        "orange"=>[//после в нем же создаем еще массив
                            "name"=>"Апельсин",
                            "color"=>"Оранжевый",
                            "massa"=>300, 
                        ]
                    ]
                    ?>
                    <?function printEat($name,$color,$massa){?>
                        <p>
                        Название:<?echo $name ?><br>
                        Цвет:<?echo $color ?><br>
                        Вес:<?echo $massa ?>
                        </p>
                    <?}?>
                    <pre><?//var_dump($fruits)?></pre>
                    <?foreach ($fruits as $key=>$arFruit) {?><!--foreach проходит цикл по массиву(сам массив as-обязательно в цикле ключ=>значение) -->
                        <pre><?//var_dump($arFruit)?></pre>
                        <?printEat($arFruit["name"],$arFruit["color"],$arFruit["massa"]);?>
                    <?}?>

                    <?php
                    $vegetable=[
                        "potato"=>[
                            "NAME"=>"Картофель",
                            "COLOR"=>"Желтый",
                            "MASSA"=>400,
                        ]
                    ];
                    $vegetable["tomato"]=[
                        "NAME"=>"Помидор",
                        "COLOR"=>"Крассный",
                        "MASSA"=>500,
                    ];
                    foreach ($vegetable as $arVegetable) {
                        printEat($arVegetable["NAME"],$arVegetable["COLOR"],$arVegetable["MASSA"]);
                    }


                    function helloName($name){
                        $text="привет " . $name;
                        echo $text;

                    } 
                    helloName("Лера");


                    function weekDay($day){
                        $text=" сегодня" . $day;
                        return $text;
                    }
                    echo weekDay(" ПОНЕДЕЛЬНИК");
                    echo "<br>";


                    function nowMonth($month){
                        switch($month){
                            case 1:
                                $textMonth="январь";
                                break;
                            case 2:
                                $textMonth="февраль";
                                break;
                            case 3:
                                $textMonth="март";
                                break;
                            default:
                                $textMonth="месяц неопределен";

                        }

                        return $textMonth;// return возвращает значение переменной в функцию
                    
                    }
                    $thisMonth=nowMonth(1);
                    echo "текущий месяц: ".$thisMonth;


                    echo "<br>".date("H:i:s d-F-Y"); //стандартная функция в php которая выводит текущую дату и время
                    echo "<br>".date("H:i:s d-F-Y",time()+3600);//текущее время в секундах от 1980года

                    //циклы

                    echo "<p>";
                    for($i=1; $i<100; $i=$i+5){//for-цикл
                        if ($i>50){               //создали условие при котором цикл прерывается
                            break;
                        }
                        echo "<br>".$i;
                    }
                    echo "</p>";


                    echo "<p>";
                    $k=1;
                    while ($k<20){ //while пока
                        echo "<br>".$k;
                        $k=$k+2;
                    }
                    echo "</p>";

                    //массивы и циклы

                    $cars=[
                        'woltswagen'=>[
                            "name"=>"фольксваген",
                            "country"=>"германия",
                            "models"=>[
                                "polo"=>[
                                    "name"=>"поло",
                                    "color"=>"черный",
                                    "obDvig"=>1.6
                                ],
                                "getta"=>[
                                    "name"=>"джетта",
                                    "color"=>"белый",
                                    "obDvig"=>1.8
                                ],            
                            ],
                        ],

                        'shkoda'=>[
                            "name"=>"шкода",
                            "country"=>"швеция",
                            "models"=>[
                                "rapid"=>[
                                    "name"=>"рапид",
                                    "color"=>"зеленый",
                                    "obDvig"=>1.4
                                ],
                                "octavia"=>[
                                    "name"=>"октавия",
                                    "color"=>"желтый",
                                    "obDvig"=>2
                                ],            
                            ],
                        ],
                    ];
                    echo "<pre>";//приводит к читабельному виду
                    var_dump($cars);
                    echo "</pre>";
                    ?>
                    <?foreach($cars as $marka){                      //as-присваивает в переменную
                        foreach($marka['models'] as $model){
                            echo "<p>";
                            echo "марка: ".$marka["name"]."<br>";
                            echo "страна: ".$marka['country']."<br>";
                            echo "модель: ".$model["name"]."<br>";
                            echo "цвет: ".$model["color"]."<br>";
                            echo "объем двигателя: ".$model["obDvig"]."<br>";
                            echo "</p>";


                        }
                    }  ?>

                </div>

            </div>


        </section>


<?include('footer.php');?>