$(document).ready(function(){
    let mouse_position = {
        x: 0,
        y: 0
    };
    $("#sidebar-ctrl").click(function(){
       let display = $('.header-contents').css('display');
       if(display === 'block'){
        $('.header-contents').css('display', 'none');
        $('.header-contents').css('right', '-170px');
       }else{
        $('.header-contents').css('display', 'block');
        $('.header-contents').animate({
            'right': 0
        }, 300);
       }
    });

    $(document).mouseup(function(e){
        var container = $(".header-contents");
        if(!container.is(e.target) && container.has(e.target).length === 0){
           container.css('display', 'none');
       container.css('right', '-170px');
        }
    });
});