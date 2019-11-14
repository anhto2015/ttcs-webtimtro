    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('a.back-to-top').fadeIn();
            } else {
                $('a.back-to-top').fadeOut();
            }
        })
        $('a.back-to-top').click(function() {
                $("html,body").animate({ scrollTop: 0 }, 600);
                return false;
            }

        );
    });


    $(document).ready(function() {
        $(".account").hover(function() {
            $(".acc-top").attr("style", "display: block");
        }, function() {
            $(".acc-top").attr("style", "display: none ");
        });
    });