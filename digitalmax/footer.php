<div class="container">
    <div class="row element_style">
        <div class="col-lg-4">
            <i class="fa fa-map-marker icon_style" aria-hidden="true"></i>
            <a href="https://goo.gl/maps/qzStJPD3C5GBA4su5"><p class="footer_text">VIA CASTELLANA, 12\B Z.I. - 31011</p></a>
            <P class="footer_text1">ASOLO (TV)</P>
        </div>
        <div class="col-lg-4">
            <i class="fa fa-mobile icon_style" aria-hidden="true"></i>
            <a href="tel:+39 0423 952830"><p class="footer_text">TEL. +39 0423 952830</p></a>
            <p class="footer_text1">FAX. +39 0423 524134</p>
        </div>
        <div class="col-lg-4">
            <i class="fa fa-envelope-open-o icon_style" aria-hidden="true"></i>
            <a href="mail:info@asolanagroup.com"><p class="footer_text">INFO@ASOLANAGROUP.COM</p></a>
        </div>
    </div>
</div>
<hr class="footer_hr">

<div class="container-fluid">
    <div class="row">
        <div class="col-md-7">
            <p class="footer_text2">© 2021 <a href="#homepage"style="color: blue;">ASOLANA GROUP - TIPOGRAFIA ASOLANA SRL</a> - P.IVA 03023130267, ISCRIZIONE<br>REGISTRO IMPRESE DI TREVISO - BELLUNO - NR. 03023130267.<br>DATA ISCRIZIONE: 19/02/1996. CAPITALE SOCIALE: 67.600,00 €</p>
        </div>

        

        <div class="col-md-5 icons-footer">
            <div class="footer-social-icons">
                <ul class="social-bookmark-wrapper">
                    <li><a href="https://www.facebook.com/asolanagroup?fref=ts"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/asolanagroup"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/asolana-group?trk=top_nav_home"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCSXIdgVRIQwj5HJ7a9LLJdA"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
            <!-- <br> -->
            <a href="#content"><button type="button" class="btn  btn-rounded btn-icon circle scroll"> <i class="fa fa-angle-double-up"></i> </button></a>
            <br>
            <img class="asolana_photo" src="<?php echo get_template_directory_uri() . '/static/img/asolana1.png'; ?>">
            <a href="http://localhost/privacy-page/" class="privacy-link-footer">Privacy Service</a>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(e) {
        $(".card-value").each(function() {
            let $element = $(this);
            $({value: 0}).stop(true).animate({value: parseInt( $element.text())}, {
                duration: 2000,
                step: function() {
                    let newValue = Math.round(this.value)
                    $element.text(newValue);
                    newValue = newValue + 1;
                }
            });
        });
    });

    $(document).ready(function(){

if($('.brands_slider').length) {
var brandsSlider = $('.brands_slider');

brandsSlider.owlCarousel({
    loop:true,
    autoplay:true,
    autoplayTimeout:5000,
    nav:false,
    dots:false,
    autoWidth:true,
    items:8,
    margin:42
});

if($('.brands_prev').length) {
    var prev = $('.brands_prev');
    prev.on('click', function()
    {
brandsSlider.trigger('prev.owl.carousel');
});
}

if($('.brands_next').length)
{
var next = $('.brands_next');
next.on('click', function()
{
brandsSlider.trigger('next.owl.carousel');
});
}
}


});
</script>
