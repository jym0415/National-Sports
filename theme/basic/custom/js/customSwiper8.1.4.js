var swiper1 = new Swiper('.swiper.mainSlider', {
    pagination: '.swiper-pagination1',
    slidesPerView: '1',
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    effect: "fade",
    // nextButton: '.swiper-button-next', //좌우버튼
    // prevButton: '.swiper-button-prev',
    loop: true, // 루프(반복)옵션 활성화시 주석해제
    autoplay: {     //자동슬라이드 (false-비활성화)
        delay: 3000, // 시간 설정
        disableOnInteraction: false, // false-스와이프 후 자동 재생
      },
    speed : 3000,
    autoplayDisableOnInteraction: false,
    centeredSlides: true,
    // spaceBetween: 0,
});