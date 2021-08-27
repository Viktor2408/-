$(function(){
    $(".main-slider").slick({
        dots: true,    // эти значения мы взяли из документациии к slick https://kenwheeler.github.io/slick/
        vertical: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true
    });
    $(".cat-slider").slick({ // эти значения мы взяли из документациии к slick https://kenwheeler.github.io/slick/
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
    });
    $('.zoom1').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		mainClass: 'mfp-img-mobile',
		image: {
			verticalFit: true
		}
		
	});

	$('.image-popup-fit-width').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		image: {
			verticalFit: false
		}
	});

	$('.image-popup-no-margins').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		closeBtnInside: false,
		fixedContentPos: true,
		mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
		image: {
			verticalFit: true
		},
		zoom: {
			enabled: true,
			duration: 300 // don't foget to change the duration also in CSS
		}
	});
    // .это класс   # это id
    $('.popup-open').click(function(){
        let $this = $(this);//this текущий элемент
        let idpop = $this.attr("href"); // attr забирает атрибут href из popup-open
        let $thisPop = $(idpop);
        $thisPop.addClass('active'); // добавили клас из css к нашему popup блоку
        return false; // отменяет переход по ссылке(не сдвигает странницу)

    })
    $('.close-pop').click(function(){
        let $this = $(this);
        let $thisPop = $this.closest('.popup-block');  //closest- ищем предка (родительскиц блок)
        $thisPop.removeClass('active');
        return false;
    })



    $('.accordion h3:first').addClass('active');//берем из акордиона первую h3и добавляем ей класс эктив(загорится синим)
    $('.accordion p:not(:first)').hide();//тут берем все р которые не первые и скрываем их(ставится display none)
    /*  $(".accordion2 h3").eq(0).addClass("active"); тут eq()ставим это для того чтобы при открытии страницы  одна из h3 была раскрыта
    $(".accordion2 p").eq(0).show();*/
    $('.accordion h3').click(function(){
        $('.phone a').trigger('click'); //trigger имитирует событие клика но номер телефона
        
        let $this = $(this);
        /* от текущей h3 берем следущую p
         slideToggle если скрыт то показывает если показан скрывает 
         slow- медленно siblings-братский элемент от текущей р
          которые видны их поднимает наверх и скрывает*/
        $this.next('p').slideToggle('slow').siblings('p:visible').slideUp('slow');
        //от текущей h3 если нет класса activ ставит его если он есть убирает его
        $this.toggleClass('active');
        //от текущей h3 ищет братские элементы h3 и убирает класс active
        $this.siblings('h3').removeClass('active');

    })
    /*$('.phone a').hover(function(){
        alert('вы навели на телефон')
    }, function(){
        alert('вы убрали курсор с номера телефона')
    }).click(function(){
        alert('вы нажали на номер')
    })*/
    // штука для дублирования текста из поля поиска
    $('.search input[name="q"]').keypress(function(e){ //keypress-нажатие на клаве до того как значение ввелось в поиск
        let val=$(this).val();//val- получает значение из поля поиска
        
        $('.search-data-res').html(val);
        if(e.keyCode>=48&&e.keyCode<=57){// задали значения цир по keyCode для блокировки ввода цифр
          
            return false;
           
        }
        console.log(e)
    })
    $(window).resize(function(){
       let $phoneBlock=$('header .phone');
       if(window.innerWidth<992){
        //    $phoneBlock.prependTo('header > .container .header');
           $('header > .container .header').prepend($phoneBlock);
       }else{
           $phoneBlock.appendTo('header > .container .header')
       }
    })

    
})
