(function($) {
    $(document).ready(function() {
        var $body = $('body');
        var numDrops = 100;

        for (var i = 0; i < numDrops; i++) {
            var dropLeft = Math.floor(Math.random() * $body.width());
            var dropTop = Math.floor(Math.random() * $body.height());
            $body.append('<div class="raindrop" style="left:' + dropLeft + 'px; top:' + dropTop + 'px;"></div>');
        }
    });
})(jQuery);
