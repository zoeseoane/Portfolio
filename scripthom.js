$(function() {
   
    
    
    window.sr = ScrollReveal();
    sr.reveal(".progress-bar", {
       origin: "left",
       duration: 2000,
       distance: "100%"
    });
    
    

    const sentences = ["web designer ?", "web developer ?"];
    let i = 0;
    
    setInterval(function() {
        $(".text-animate").fadeOut(function() {
            $(this).text(sentences[i = (i + 1) % sentences.length]).fadeIn();
        });
    }, 2500);
    
});

//Skills' animation
$(window).scroll(function(){
    jQuery('.skillbar').each(function(){
              jQuery(this).find('.skillbar-bar').animate({
                  width:jQuery(this).attr('data-percent')
              },6000);
          });
  });