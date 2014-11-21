/*function Slider(){
	$(".slider #1").show("fade",500);
	$(".slider #1").delay(5500).hide("slide",{direction: 'left'},500);

	var sc = $(".slider img").size();
	var count = 2;

	setInterval(function(){
		$(".slider #"+count).show("slide",{direction: 'right'},500)
		$(".slider #"+count).delay(5500).hide("slide",{direction: 'left'},500);

		if (count == sc) {
			count = 1;
		}else{
			count = count + 1;
		}
	},6500);
}*/
$('.item').hover(
	function(){
    	var $this = $(this);
            expand($this);
                },
    function(){
        var $this = $(this);
            collapse($this);
                }
            );
    function expand($elem){
        var angle = 0;
        var t = setInterval(function () {
            if(angle == 1440){
                clearInterval(t);
                return;
                    }
                angle += 40;
                $('.link',$elem).stop().animate({rotate: '+=-40deg'}, 0);
            },10);
            $elem.stop().animate({width:'268px'}, 1000)
            .find('.item_content').fadeIn(400,function(){
            $(this).find('p').stop(true,true).fadeIn(600);
                });
            }
    function collapse($elem){
        var angle = 1440;
        var t = setInterval(function () {
            if(angle == 0){
            clearInterval(t);
            return;
                    }
                angle -= 40;
                $('.link',$elem).stop().animate({rotate: '+=40deg'}, 0);
            },10);
            $elem.stop().animate({width:'52px'}, 1000)
            .find('.item_content').stop(true,true).fadeOut().find('p').stop(true,true).fadeOut();
            }