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


  $about = document.querySelectorAll('.about');

  $about.forEach(element => {
    
    // Add smooth scrolling to all links
    element.addEventListener('click', function(event) {
  
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


  new Typewriter('#typewriter', {
    strings: ['AS WE GROW, YOU GROW.', 'Showcasing the most lucrative Investment locations in the world'],
    autoStart: true,
    loop: true,
    delay: 75,
  });



  // Create an empty array to store the objects
var slides = [];

// Use forEach to push objects into the newArray
slidings.forEach(function(slide) {
  /* slides.push('{src:' + '"storage/article/picture/' + article.picture + '"' + '}' ); */
  slides.push( { src: "storage/showcase/"+slide.image_url });
});


  //Vegas Slider

let $elmt = $(".vegasslider").vegas({

  

  slides: slides,
  
  autoplay:'true',
  loop:'true',
  animation: 'kenburns',
  delay: '10000',


  walk: function (index, slideSettings) {
 /*    console.log("Slide index " + index + " image " + slideSettings.src); */

 
 for (let x = 0; x < slidings.length; x++) {

  if(index == x){
    $('.vegas-text'+ (x+1)).addClass("active")
    $('.slide-'+(x+1)+'-icon').addClass("active")
   
  }else{
    $('.vegas-text' + (x+1)).removeClass("active")
    $('.slide-'+(x+1)+'-icon').removeClass("active")
  }
  
 }
   
 
}


});

$('#previousM').on('click', function () {
  $elmt.vegas().vegas('previous');

});

$('#nextM').on('click', function () {
  $elmt.vegas().vegas('next');
});

$('#previousD').on('click', function () {
  $elmt.vegas().vegas('previous');

});

$('#nextD').on('click', function () {
  $elmt.vegas().vegas('next');
});

for (let x = 0; x < slidings.length; x++) {
  
  $('.slide-'+(x+1)+'-icon').on('click', function () {
    $elmt.vegas('jump', x);
  });
}



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
$scrollEffect = function(){
  var y = window.scrollY;
  
  
  if (y >= 450) {
  
    $('.top-nav').addClass('active');
    
    if( y <= 400){
      $toggle.click()
    }
    console.log(y);
  } else {
    $('#toggle').removeClass('open');
    $('#toggle').addClass('fa-bars');
    $('#toggle').removeClass('fa-xmark');
    $('#toggle').addClass('close');
    $('.navigation-mobile').removeClass('open');
    $('.social-media').removeClass('open');
    $('.nav-overlay').removeClass('active');



    $('.top-nav').removeClass('active');
  }

}



window.addEventListener('scroll',$scrollEffect)