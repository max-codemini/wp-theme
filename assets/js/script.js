
"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる
  var topBtn = $('.page-top');
  topBtn.hide(); // ボタンの表示設定

  $(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  }); // ボタンをクリックしたらスクロールして上に戻る

  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 300, 'swing');
    return false;
  }); //ドロワーメニュー

  $(".js-hamburger").click(function () {
    if ($('.js-hamburger').hasClass('is-active')) {
      $(".js-hamburger").removeClass("is-active");
      $(".js-header").removeClass("is-active");
      $(".js-sp-nav").fadeOut();
    } else {
      $(".js-hamburger").addClass("is-active");
      $(".js-header").addClass("is-active");
      $(".js-sp-nav").fadeIn();
    }
  });
  $(".js-sp-nav").click(function () {
    $(".js-hamburger").removeClass("is-active");
    $(".js-header").removeClass("is-active");
    $(".js-sp-nav").fadeOut();
  }); // SWIPER(works)

  var swiper = new Swiper(".js-works-swiper", {
    pagination: {
      el: ".js-works-pagenation"
    },
    loop: true,
    autoplay: {
      delay: 3000 //３秒後に次の画像へ

    }
  }); // SWIPER(main-view)

  window.addEventListener('load', function () {
    var mySwiper = new Swiper(".swiper-container", {
      loop: true,
      //ループさせる
      effect: "fade",
      //フェードのエフェクト
      autoplay: {
        delay: 4000,
        //４秒後に次の画像へ
        disableOnInteraction: false //ユーザー操作後に自動再生を再開する

      },
      speed: 2000,
      //２秒かけながら次の画像へ移動
      allowTouchMove: false //マウスでのスワイプを禁止

    });
  }); 

  // header透明度変更
  $(document).ready(function () {
    $(window).scroll(function () {
      var sliderHeight = $(".main-view").height();

      if ($(this).scrollTop() > sliderHeight - 30) {
        $('.js-header').css('background-color', 'rgba(0,0,0,1)');
      } else {
        $('.js-header').css('background-color', 'rgba(0,0,0,0.6)');
      }
    });
  }); 

  // 下層ページ透明度変更
  $(document).ready(function () {
    $(window).scroll(function () {
      var sliderHeight = $(".mv-sub").height();

      if ($(this).scrollTop() > sliderHeight - 30) {
        $('.js-header').css('background-color', 'rgba(0,0,0,1)');
      } else {
        $('.js-header').css('background-color', 'rgba(0,0,0,0.6)');
      }
    });
  }); 

  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)
  $(document).on('click', 'a[href*="#"]', function () {
    var time = 400;
    var header = $('header').innerHeight();
    var target = $(this.hash);
    if (!target.length) return;
    var targetY = target.offset().top - header;
    $('html,body').animate({
      scrollTop: targetY
    }, time, 'swing');
    return false;
  }); 

  // エラー時クラス付与
  // $("span.error").parent(".form__head").addClass("is-error");
  // if($(".form__item span").hasClass(".error")) {
  //   $(".form__text").addClass(".form__text--error");
  // }




  jQuery(function($){
    $(function(){
    // errorクラスのspan要素を持つ親p要素にerror-pinkクラスを適用
      $("div:has('span.error')").addClass("is-error");
    });
  });




//カテゴリータブ入れ替え
$(function(){
  $('.tab__list').on('click',function(){
  var idx=$('.tab__list').index(this);
  $(this).addClass('is-active').siblings('.tab__list').removeClass('is-active');
  $(this).closest('.tab').nextAll('.panel').find('.panel__list').removeClass('is-show');
  $('.panel__list').eq(idx).addClass('is-show');
  });
  });














//SWIPER レスポンシブ
  const swiper1 = new Swiper(".mySwiper", {
    spaceBetween: 24,
    slidesPerView: 2.13368,
    // 768px以上の場合
    breakpoints: {
    768: {
      slidesPerView: 8,
      spaceBetween: 8,
      centeredSlides: false,
      loop: false, // ループ有効
    },
  },
    centeredSlides: true,
    loop: true, // ループ有効
  });
  
  const swiper2 = new Swiper(".mySwiper2", {
    thumbs: {
      swiper: swiper1
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    loop: true, // ループ有効
  });



  

});