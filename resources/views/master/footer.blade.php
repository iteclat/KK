@yield('scripts')
<!-- jQuery -->
<script src="{{asset("js/jquery.min.js")}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{asset("js/bootstrap.min.js")}}"></script>
<!-- Metis Menu Plugin JavaScript -->
<script src="{{asset("js/metisMenu.min.js")}}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{asset("js/sb-admin-2.js")}}"></script>
<script>
    //store the element
    var $cache = $('.rd-display');
    //store the initial position of the element
    var vTop = $cache.offset().top - parseFloat($cache.css('margin-top').replace(/auto/, 0));
    $(window).scroll(function (event) {
        // what the y position of the scroll is
        var y = $(this).scrollTop();

        // whether that's below the form
        if (y >= vTop) {
            // if so, ad the fixed class
            $cache.addClass('fix');
        } else {
            // otherwise remove it
            $cache.removeClass('fix');
        }
    });
</script>
</body>
</html>
