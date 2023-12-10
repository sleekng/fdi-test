if($('title').text == 'Home'){



  
}



$toggle = document.getElementById('toggle');
  
$('#toggle,.navigation-mobile').click(()=>{

  if ($('#toggle').hasClass('open')) {
    $('#toggle').removeClass('open');
    $('#toggle').addClass('fa-bars');
    $('#toggle').removeClass('fa-xmark');
    $('.nav-overlay').removeClass('active');
    $('#toggle').addClass('close');
    $('.navigation-mobile').removeClass('open');
    $('.social-media').removeClass('open');

  }else{
    $('#toggle').addClass('open');
    $('.social-media-mobile').addClass('open');
    $('.nav-overlay').addClass('active');
    $('.social-media').addClass('open');
    $('.navigation-mobile').addClass('open');
    $('#toggle').removeClass('close');
    $('#toggle').addClass('fa-xmark');
    $('#toggle').removeClass('fa-bars');
    
  } 

    


  })

  


  // Social Media

  setTimeout(() => {
    $('.social-media').addClass('active');
  }, 2000);


 /*  setTimeout(() => {
    $('.social-media').removeClass('active');
    $('.social-media').addClass('shake');

  }, 6000); 
 */



// Create an empty array to store the objects
var slides = [];

// Use forEach to push objects into the newArray
featureds.forEach(function(featured) {
  /* slides.push('{src:' + '"storage/article/picture/' + article.picture + '"' + '}' ); */
  slides.push( { src: "storage/article/picture/"+featured.picture });
});



  //Vegas Slider

  
let $elmt = $(".featured-vegasslider,.article-featured-vegasslider-mobile").vegas({

  

/*     slides:slides, */


     slides: slides,

  autoplay:'true',
  loop:'true',
 
  delay: '10000',
  cover:true,
  align:	'center',

  animation: 'kenburns',

  walk: function (index, slideSettings) {
 /*    console.log("Slide index " + index + " image " + slideSettings.src); */
    
    if(index == 0){
      $('.vegas-text1').addClass("active")
      $('.slide-1-icon ').addClass("active")
     
    }else{
      $('.vegas-text1').removeClass("active")
      $('.slide-1-icon ').removeClass("active")
    }
    if(index == 1){
      $('.vegas-text2').addClass("active")
      $('.slide-2-icon ').addClass("active")
      
    }else{
      $('.vegas-text2').removeClass("active")
      $('.slide-2-icon').removeClass("active")
    }
    if(index == 2){
      $('.vegas-text3').addClass("active")
      $('.slide-3-icon ').addClass("active")
     
    }else{
      $('.vegas-text3').removeClass("active")
      $('.slide-3-icon ').removeClass("active")
    }
    if(index == 3){
      $('.vegas-text4').addClass("active")
      $('.slide-4-icon ').addClass("active")
    
    }else{
      $('.vegas-text4').removeClass("active")
      $('.slide-4-icon ').removeClass("active")
    }
    if(index == 4){
      $('.vegas-text5').addClass("active")
      $('.slide-5-icon ').addClass("active")
    
    }else{
      $('.vegas-text5').removeClass("active")
      $('.slide-5-icon ').removeClass("active")
    }
}


});

$('#previousD').on('click', function () {
  $elmt.vegas().vegas('previous');

});

$('#nextD').on('click', function () {
  $elmt.vegas().vegas('next');
});
$('#previousM').on('click', function () {
  $elmt.vegas().vegas('previous');

});

$('#nextM').on('click', function () {
  $elmt.vegas().vegas('next');
});


$('.slide-1-icon').on('click', function () {
  $elmt.vegas('jump', 0);
});

$('.slide-2-icon').on('click', function () {
  $elmt.vegas('jump', 1);
});
$('.slide-3-icon').on('click', function () {
  $elmt.vegas('jump', 2);
});

$('.slide-4-icon').on('click', function () {
  $elmt.vegas('jump', 3);
});
$('.slide-5-icon').on('click', function () {
  $elmt.vegas('jump', 4);
});


$('.home_left-button0').on('click', function(){
  $('.flash-0').addClass('active');
  $('.flash-1').removeClass('active');
  $('.flash-2').removeClass('active');
  $('.flash-3').removeClass('active');

  $('.home_left-button0').addClass('active');
  $('.home_left-button1').removeClass('active');
  $('.home_left-button2').removeClass('active');
  $('.home_left-button3').removeClass('active');

})

$('.home_left-button1').on('click', function(){
  $('.flash-1').addClass('active');
  $('.flash-0').removeClass('active');
  $('.flash-2').removeClass('active');
  $('.flash-3').removeClass('active');
 
  $('.home_left-button1').addClass('active');
  $('.home_left-button0').removeClass('active');
  $('.home_left-button2').removeClass('active');
  $('.home_left-button3').removeClass('active');
  

})

$('.home_left-button2').on('click', function(){
  $('.flash-2').addClass('active');
  $('.flash-0').removeClass('active');
  $('.flash-1').removeClass('active');
  $('.flash-3').removeClass('active');

  $('.home_left-button2').addClass('active');
  $('.home_left-button0').removeClass('active');
  $('.home_left-button1').removeClass('active');
  $('.home_left-button3').removeClass('active');
})

$('.home_left-button3').on('click', function(){
  $('.flash-3').addClass('active');
  $('.flash-0').removeClass('active');
  $('.flash-1').removeClass('active');
  $('.flash-2').removeClass('active');

  $('.home_left-button3').addClass('active');
  $('.home_left-button2').removeClass('active');
  $('.home_left-button1').removeClass('active');
  $('.home_left-button0').removeClass('active');
})



let flash = $(".flash").vegas({
  delay: 7000,
  timer: false,
  shuffle: true,
  firstTransition: 'fade',
  firstTransitionDuration: 5000,
  transition: 'slideDown2',
  transitionDuration: 2000,
  slides: [
      { src: '' },
      { src: '' },
      { src: '' },
      { src: '' },
      { src: '' }
  ],


walk: function (index, slideSettings) {
/*  console.log("Slide index " + index + " image " + slideSettings.src);  */

if(index == 0){
  $('.home_left-button0').click()
}
if(index == 1){
  $('.home_left-button1').click()
}
if(index == 2){
  $('.home_left-button2').click()
}
  
if(index == 3){
  $('.home_left-button3').click()
}
  

}


});




/* //Scroll Function
$offset = $(".home-left").offset().top;

 */
$scrollEffect = function(){
  var y = window.scrollY;
  
  
  if (y >= 450) {
  
    $('.top-nav').addClass('active');
    
    if( y <= 400){
      $toggle.click()
    }
    console.log(y);
  } else {





    $('.top-nav').removeClass('active');
  }

}



window.addEventListener('scroll',$scrollEffect)








$(document).ready(function(){

  $(".filter-button").click(function(){
      var value = $(this).attr('data-filter');
      
      if(value == "all")
      {
          //$('.filter').removeClass('hidden');
          $('.filter').show('1000');
      }
      else
      {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
          $(".filter").not('.'+value).hide('3000');
          $('.filter').filter('.'+value).show('3000');
          
      }
  });
  
  if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});