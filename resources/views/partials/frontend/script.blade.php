<a href="#" title="Go to Top" class="back-to-top">To Top ↑</a>

<script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/jquery-migrate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.tabs.min.js') }}"></script>
<script type="text/javascript" src="j{{ asset('assets/frontend/s/jquery.validate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/jquery-easing-1.3.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.sticky.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.nicescroll.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.inview.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/validation.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.tipTip.minified.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.bxslider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.prettyPhoto.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/twitter/jquery.tweet.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.parallax-1.1.3.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/shortcodes.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/custom.js') }}"></script>


<script type="text/javascript" src="{{ asset('assets/frontend/js/jquery-transit-modified.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/layerslider.kreaturamedia.jquery.js') }}"></script>
<script type='text/javascript' src="{{ asset('assets/frontend/js/greensock.js') }}"></script>
<script type='text/javascript' src="{{ asset('assets/frontend/js/layerslider.transitions.js') }}"></script>

<script type="text/javascript">var lsjQuery = jQuery;</script>
<script type="text/javascript">
    lsjQuery(document).ready(function() {
        if(typeof lsjQuery.fn.layerSlider == "undefined") {
            lsShowNotice('layerslider_1','jquery'); }
        else {
            lsjQuery("#layerslider_4").layerSlider({responsiveUnder: 1170, layersContainer: 1170, skinsPath: '{{ asset('assets/frontend/js/layerslider/skins/') }}/'})
        }
    });
</script>
