(function ($) {
    $(document).ready(function ($) {
       $("#jp-relatedposts .unveil").unveil(500);
       $("#jp-relatedposts .jp-relatedposts-post-title").each(function() {
           $(this).after('<p class="jp-relatedposts-post-date" style="display: block;">' + $(this).data('date') + '</p>');
       });
    });
})(jQuery);
