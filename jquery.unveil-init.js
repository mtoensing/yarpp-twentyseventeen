(function ($) {
    $(document).ready(function ($) {
       $("#jp-relatedposts .unveil").unveil(500);
       $("#jp-relatedposts .jp-relatedposts-post-title").each(function() {
           var date = $(this).data('date');
           if(date !== null){
               $(this).after('<p class="jp-relatedposts-post-date" style="display: block;">' + date + '</p>');
           }
       });
    });
})(jQuery);
