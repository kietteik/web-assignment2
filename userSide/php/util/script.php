<script src="./js/jquery.min.js"></script>
<script src="./js/owl.carousel.min.js"></script>
<script src="./js/owl-config.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="./js/parallax.min.js"></script>
<script src="./js/wow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

<script>
    new WOW().init();
    $(function() {
        $("a[href*=#]").on("click", function(e) {
            e.preventDefault();
            $("html, body").animate({
                scrollTop: $($(this).attr("href")).offset().top,
            });
        });
    });
</script>