// JavaScript Document

$(window).on('load resize', function() {  
    $('#global-navi .parent').off();
    $('#global-navi .parent div').off();
    $('.footer-sitemap li.main-navi.parent div').off();
    $('.sab-nav').removeClass('open');
    $('#global-navi .parent div').removeClass('open');
    $("#global-navi").removeClass('white');
    $('.footer-sitemap li.main-navi.parent div').removeClass('open');
    $('header').removeClass('Down');
  if (window.matchMedia('(max-width:767px)').matches) {
    // SPの処理
        $('#global-navi .parent .sab-nav').css('display','none');
        $('#global-navi .parent div').on('click', function(){
            $(this).next('.sab-nav').toggleClass('open').slideToggle(300);
            $(this).toggleClass('open');
            if ($(this).next('.sab-nav').hasClass('open')) {
              //open表示中の場合
              $(this).next('.sab-nav').css('display', '');
            } else {
              //open非表示の場合
            }
         });
         $('.footer-sitemap li.main-navi.parent .sab-nav').css('display','none');
         $('.footer-sitemap li.main-navi.parent div').on('click', function(){
            $(this).next('.sab-nav').toggleClass('open').slideToggle(300);
            $(this).toggleClass('open');
            if ($(this).next('.sab-nav').hasClass('open')) {
              //open表示中の場合
              $(this).next('.sab-nav').css('display', '');
            } else {
              //open非表示の場合
              
            }
         });


  } else if (window.matchMedia('(max-width:919px)').matches) {
    // TABの処理
        $('#global-navi .parent .sab-nav').css('display','none');
        $('#global-navi .parent div').on('click', function(){
            $(this).next('.sab-nav').toggleClass('open').slideToggle(300);
            $(this).toggleClass('open');
            if ($(this).next('.sab-nav').hasClass('open')) {
              //open表示中の場合
              $(this).next('.sab-nav').css('display', '');
            } else {
              //open非表示の場合
            }
         });
  } else if (window.matchMedia('(min-width:920px)').matches) {
    // PCの処理
        var ua = navigator.userAgent;
        if (ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0) {
          // スマートフォン用コード
          $('#global-navi .parent .sab-nav').css('display','none');
          $('#global-navi .parent div').on('click', function(){
            $(this).next('.sab-nav').toggleClass('open').slideToggle(300);
            $(this).toggleClass('open');
            if ($(this).next('.sab-nav').hasClass('open')) {
              //open表示中の場合
              $(this).next('.sab-nav').css('display', '');
            } else {
              //open非表示の場合
            }
         });
          $('.footer-sitemap li.main-navi.parent .sab-nav').css('display','none');
          $('.footer-sitemap li.main-navi.parent div').on('click', function(){
            $(this).next('.sab-nav').toggleClass('open').slideToggle(300);
            $(this).toggleClass('open');
            if ($(this).next('.sab-nav').hasClass('open')) {
              //open表示中の場合
              $(this).next('.sab-nav').css('display', '');
            } else {
              //open非表示の場合
            }
         });
        } else if (ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0) {
          // タブレット用コード
            $('#global-navi .parent .sab-nav').css('display','none');
            $('#global-navi .parent div').on('click', function(){
            $(this).next('.sab-nav').toggleClass('open').slideToggle(300);
            $(this).toggleClass('open');
            if ($(this).next('.sab-nav').hasClass('open')) {
              //open表示中の場合
              $(this).next('.sab-nav').css('display', '');
            } else {
              //open非表示の場合
            }
         });
            if ($('#toggle').hasClass("open")) {
              //open表示中の場合
              $("body").removeClass('fixed').css('top',0 + 'px');
              $("#toggle").removeClass('open');
              $("#global-navi").removeClass('open');
              $("#global-main").removeClass('open');
               
            } else {
              //open非表示の場合
              $("body").removeClass('fixed');
            }
        } else {
          // PC用コード
            $('#global-navi .parent').hover(function(){
                $("ul:not(:animated)", this).slideDown("fast");
            }, function(){
                $(".sab-nav",this).slideUp("fast");
            });
            if ($('#toggle').hasClass("open")) {
              //open表示中の場合
              $("body").removeClass('fixed').css('top',0 + 'px');
              $("#toggle").removeClass('open');
              $("#global-navi").removeClass('open');
              $("#global-main").removeClass('open');
               
            } else {
              //open非表示の場合
              $("body").removeClass('fixed');
            }
            $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('header').addClass('Down');
            }if ($(this).scrollTop() > 100) {
              $('header').addClass('UpMove');
                if ($(this).scrollTop() > 800) {
                  $('header').addClass('min');
                  if($('header').hasClass('UpMove')){
                  $('header').removeClass('UpMove');
                  $('header').addClass('DownMove');
                  }
                } else {
                  $('header').removeClass('DownMove');
                }
            } else {
              $('header').removeClass('UpMove');
              $('header').removeClass('min');
            }
            });
            
        }
  }
});

jQuery(function($){
    var scrollPos;//グローバルで初期かしておかないと上にもどっちゃう
    $('#toggle').on('click', function() {
        $(this).toggleClass('open');
        $('#global-navi').toggleClass('open');
        $('#global-main').toggleClass('open');
        if($('body').hasClass('fixed')){
            $('body').removeClass('fixed').css('top',0 + 'px');
            window.scrollTo( 0 , scrollPos );//初期化
            $('.animate').removeClass('fixed');
            $('.animate2').removeClass('fixed');
            $('.animate3').removeClass('fixed');
            $('.animate4').removeClass('fixed');
            $('.animate5').removeClass('fixed');
        }else{
            scrollPos = $(window).scrollTop();//現在のスクロール位置
            $('body').addClass('fixed').css('top',-scrollPos + 'px');
            $('.animate').addClass('fixed');
            $('.animate2').addClass('fixed');
            $('.animate3').addClass('fixed');
            $('.animate4').addClass('fixed');
            $('.animate5').addClass('fixed');
        }
    });
});

var height=window.innerHeight;
document.documentElement.style.setProperty( '--vh', height/100 + 'px');



//アコーディオンをクリックした時の動作
$('.ttl').on('click', function() {//タイトル要素をクリックしたら
	var findElm = $(this).next(".box");//直後のアコーディオンを行うエリアを取得し
	$(findElm).slideToggle();//アコーディオンの上下動作
    
	if($(this).hasClass('close')){//タイトル要素にクラス名closeがあれば
		$(this).removeClass('close');//クラス名を除去し
	}else{//それ以外は
		$(this).addClass('close');//クラス名closeを付与
	}
});

//ページが読み込まれた際にopenクラスをつけ、openがついていたら開く動作※不必要なら下記全て削除
$(window).on('load', function(){
	$('.accordion-area li:first-of-type section').addClass("open"); //accordion-areaのはじめのliにあるsectionにopenクラスを追加
	$(".open").each(function(index, element){	//openクラスを取得
		var Title =$(element).children('.title');	//openクラスの子要素のtitleクラスを取得
		$(Title).addClass('close');				//タイトルにクラス名closeを付与し
		var Box =$(element).children('.box');	//openクラスの子要素boxクラスを取得
		$(Box).slideDown(500);					//アコーディオンを開く
	});
});

$(function () {
  $('.ac-label').click(function () {
    $(this).next('div').slideToggle();
    $(this).find(".icon").toggleClass('open');
  });
});
