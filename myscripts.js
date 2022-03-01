let navber=document.querySelector('.navber');
document.querySelector('#menu-btn').onclick=()=>{
navber.classList.toggle('active');
}

var swiper = new Swiper(".product-slider",{
loop:true,
spaceBetween:20,
autoplay:{
delay:7500,
disableOnInteraction:false,
},
centeredSlides:true,
breakpoints:{
0:{
slidesPerView:1,
},
768:{
slidesPerView:2,
},
1020:{
slidesPerView:3,
},
},
});


var swiper = new Swiper(".review-slider",{
loop:true,
spaceBetween:20,
autoplay:{
delay:7500,
disableOnInteraction:false,
},
centeredSlides:true,
breakpoints:{
0:{
slidesPerView:1,
},
768:{
slidesPerView:2,
},
1020:{
slidesPerView:3,
},
},
});

var swiper = new Swiper(".offer-slider",{
loop:true,
spaceBetween:20,
autoplay:{
delay:7500,
disableOnInteraction:false,
},
centeredSlides:true,
breakpoints:{
0:{
slidesPerView:1,
},
768:{
slidesPerView:2,
},
1020:{
slidesPerView:3,
},
},
});

var swiper = new Swiper(".more-slider",{
loop:true,
spaceBetween:20,
autoplay:{
delay:7500,
disableOnInteraction:false,
},
centeredSlides:true,
breakpoints:{
0:{
slidesPerView:1,
},
768:{
slidesPerView:2,
},
1020:{
slidesPerView:3,
},
},
});
