jQuery(function(){

jQuery.fn.getTitle = function() {
	var arr = jQuery("a.fancybox");
	jQuery.each(arr, function() {
		var title = jQuery(this).children("img").attr("title");
		jQuery(this).data('caption', title);
	})
}

})

jQuery(document).ready(function($){

    // Supported file extensions
    var thumbnails = $("a:has(img)").not(".nolightbox").filter( function() { return /\.(jpe?g|png|gif|bmp|webp|svg)$/i.test(jQuery(this).attr('href')) });

    thumbnails.each(function() {
        if ($(this).data('fancybox') == undefined) {
            var rel = $(this).attr('rel');
            $(this).attr('data-fancybox', rel);
        }
    });

    thumbnails.addClass("fancybox").attr("rel","fancybox").getTitle();
    $("a.fancybox").fancybox({
        loop: true,
        buttons: ['close'],
        padding: 10,
    });

});
