//スクロール系
jQuery(function ($) {
    let fadeInLeft = $('.js-fade-in--left');
    let fadeInUp = $('.js-fade-in--up');
    $(window).on('scroll', function () {
        let scroll = $(window).scrollTop();
        let windowHeight = $(window).height();
        let documentHeight = $(document).height();
        //ナビゲーションの表示非表示制御
        $(fadeInLeft).each(function () {
            if (scroll > windowHeight / 2){
                if(scroll > documentHeight - windowHeight*1.2){
                    $(this).removeClass("js-scroll-in");
                }else{
                    $(this).addClass("js-scroll-in");
                }
            }else if(scroll < windowHeight){
                $(this).removeClass("js-scroll-in");
            }
        });
        //フェードインさせるオブジェクトの制御
        $(fadeInUp).each(function () {
            let offsetTop = $(this).offset().top;
            let offsetLeft = $(this).offset().left;
            if (scroll > offsetTop - windowHeight) {
                //遅延で左から順にフェードイン
                $(this).delay(offsetLeft/3 + 200).queue(function(){
                    $(this).addClass("js-scroll-in");
                });
            }
        });
        sections = new Array('#top', '#about', '#services', '#messages', '#prices', '#works', '#contact', 'footer');
        target = new Array('.fa-chevron-up', '.fa-address-card', '.fa-laptop', '.fa-comment-dots', '.fa-yen-sign', '.fa-briefcase', '.fa-envelope', '.fa-envelope')
        let offset = windowHeight / 6;
        for(let i=0; i < sections.length - 1; i++){
            if (scroll >= $(sections[i]).offset().top - offset && scroll < $(sections[i+1]).offset().top - offset){
                $(target[i]).css('color', '#0FBFB9');
            }else{
                $(target[i]).css('color', '#707070');
            }
        }
    });
    def_modaal();
});

//スクロール時
$(window).on('scroll', function () {
    def_modaal();
});

//モーダルウィンドウ
function def_modaal(){
    $(".iframe-open").modaal({
        animation: 'fade',
        background: '#000000',
        background_scroll: 'false',
        overlay_opacity: 0.8,
        type:'iframe',
        width: 800,//iframe横幅
        height: Math.min($(window).height() - 100), //iframe高さ
        overlay_close:true,//モーダル背景クリック時に閉じるか
        before_open:function(){// モーダルが開く前に行う動作
            //$(".modaal-iframe-elem").attr({allowtransparency: true});
        },
        after_open:function(){// モーダルが開く前に行う動作
            $(".modaal-iframe-elem").attr({allowtransparency: true});
        },
        after_close:function(){// モーダルが閉じた後に行う動作
            $('html').css('overflow-y','scroll');/*縦スクロールバーを出す*/
        }
    });
}

if($('.js-iTyped').length){
    ityped.init(document.querySelector(".js-iTyped"), {
        strings: ['技術を通して人と人を繋ぐ。'],
        startDelay: 3000,
        backDelay: 2000,
        backSpeed: 20,
        showCursor: true,
        cursorChar: "|"
    });
}

if($('.particles').length){
    $('.particles').particleground({
        dotColor: '#aaaa4488',
        lineColor: '#aaaaaa44',
        particleRadius: 4
    });
}

// 読み込んだらフェードアウト
$(window).on('load', function () {
    setTimeout(function(){
        $('.js-loading').addClass('js-loading--hide');
    }, 500);
});

// 10秒待っても読み込みが終わらない時は強制的にローディング画面をフェードアウト
function stopload(){
    $('.js-loading').delay(1000).fadeOut(700);
}
setTimeout('stopload()',1000);

$(".js-jump").click(function(){
    let link = $(this).data('to');
    let position = $(link).offset().top - 100;
    let speed = 400;
    $("html,body").animate({scrollTop: position}, speed, 'swing');
});
