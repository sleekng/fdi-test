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

  
  
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1000, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });


  // Social Media

  setTimeout(() => {
    $('.social-media').addClass('active');
  }, 2000);


 /*  setTimeout(() => {
    $('.social-media').removeClass('active');
    $('.social-media').addClass('shake');

  }, 6000); 
 */





  //Vegas Slider

let $elmt = $(".vegasslider").vegas({

  

    slides: [
       { src: "./assets/img/clients-bg/tomball.jpg" },
       { src: "./assets/img/clients-bg/beach.jpg" },
       { src: "./assets/img/clients-bg/arizona.JPG" },
       { src: "./assets/img/clients-bg/hunthinton.jpg" },
       
       

  ],
  autoplay:'true',
  loop:'true',
  animation: 'kenburns',
  delay: '10000',
  cover: 'false',

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
}


});

$('#previous').on('click', function () {
  $elmt.vegas().vegas('previous');

});

$('#next').on('click', function () {
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


$('.home_left-button0').on('click', function(){
  $('.flash-0').addClass('active');
  $('.flash-1').removeClass('active');
  $('.flash-2').removeClass('active');

  $('.home_left-button0').addClass('active');
  $('.home_left-button1').removeClass('active');
  $('.home_left-button2').removeClass('active');

})

$('.home_left-button1').on('click', function(){
  $('.flash-1').addClass('active');
  $('.flash-0').removeClass('active');
  $('.flash-2').removeClass('active');
 
  $('.home_left-button1').addClass('active');
  $('.home_left-button0').removeClass('active');
  $('.home_left-button2').removeClass('active');
  

})

$('.home_left-button2').on('click', function(){
  $('.flash-2').addClass('active');
  $('.flash-0').removeClass('active');
  $('.flash-1').removeClass('active');

  $('.home_left-button2').addClass('active');
  $('.home_left-button0').removeClass('active');
  $('.home_left-button1').removeClass('active');
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
  

}


});




/* //Scroll Function
$offset = $(".home-left").offset().top;

 */

$('.top-nav').addClass('active');
$scrollEffect = function(){
  var y = window.scrollY;
  
  


}



window.addEventListener('scroll',$scrollEffect)