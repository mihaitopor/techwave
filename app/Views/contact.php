</div>
<div role="main" class="main">

    <section class="page-header page-header-modern page-header-background page-header-background-md parallax overlay overlay-color-dark overlay-show overlay-op-5 mt-0" data-plugin-parallax data-plugin-options="{'speed': 1.2}" data-image-src="<?= base_url()?>layout/img/specific/contact-image.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1>Contact Us </h1>
                    <span class="sub-title">Get in touch with us</span>
                </div>

            </div>
        </div>
    </section>

    <div class="container">

        <div class="row py-4">
            <div class="col-lg-7 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="650">
                <div class="offset-anchor" id="contact-sent"></div>
                <h2 class="font-weight-bold text-7 mt-2 mb-0">Contact Us</h2>
                <p class="mb-4">Feel free to ask for details, don't save any questions!</p>

                <form class="contact-form form-style-3" style="margin-right: 40px;" action="<?= base_url()?>home/contact" method="POST">
                    <div class="contact-form-success alert alert-success d-none">
                        Your message has been sent. Thank you for contacting us!
                    </div>

                    <div class="contact-form-error alert alert-danger d-none">
                        Error sending your message.
                        <span class="mail-error-message text-1 d-block"></span>
                    </div>

                    <input type="hidden" value="Contact Form" name="subject" id="subject">
                    <div class="row">
                        <div class="form-group col-md-6 pe-md-2">
                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control h-auto py-2" placeholder="Your Name..." name="name" id="name" required>
                        </div>
                        <div class="form-group col-md-6 ps-md-2">
                            <input type="text" value="" data-msg-required="Please enter your phone." maxlength="100" class="form-control h-auto py-2" placeholder="Your Phone..." name="phone" id="phone" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control h-auto py-2" placeholder="Your Email Address..." name="email" id="email" required>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="4" class="form-control" placeholder="Your Message..." name="message" id="message" required></textarea>
                        </div>
                    </div>
                    <div class="form-group col-md-6 pe-md-2" style="visibility: hidden;">
                        <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control h-auto py-2" placeholder="Your Name..." name="ff_name" id="ff_name">
                    </div>
                    <div class="row">
                        <div class="form-group col text-left">
                            <input type="submit" value="Send message" class="btn btn-primary font-weight-semibold text-3 px-5 btn-py-2" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-5">

                <div class="overflow-hidden mb-1">
                    <h4 class="text-primary mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Get in <strong>Touch</strong></h4>
                </div>
                <div class="overflow-hidden mb-3">
                    <p class="lead text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">
                        If you have a great idea don't hesitate to contact us. We are a team of professional developers who are ready to help create the best online version of your business.
                    </p>
                </div>
                <div class="overflow-hidden">
                    <p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="600">
                        We support the local business community to develop innovative technology.
                        We are more than technology partners we build trust.
                    </p>
                </div>

                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                    <h4 class="text-primary pt-5">Our <strong>Office</strong></h4>
                    <ul class="list list-icons list-icons-style-3 mt-2">
                        <li><i class="fas fa-map-marker-alt top-6"></i> <strong>Address:</strong> 18 Salciilor Street, Cluj-Napoca, Romania</li>
                        <li><i class="fas fa-phone top-6"></i> <strong>Phone:</strong> (0040) 758 055 598</li>
                        <li><i class="fas fa-envelope top-6"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">contact@techwave.ro</a></li>
                    </ul>

                    <h4 class="text-primary pt-5">Business <strong>Hours</strong></h4>
                    <ul class="list list-icons list-dark mt-2">
                        <li><i class="far fa-clock top-6"></i> Monday - Saturday - 9am to 5pm</li>
                    </ul>
                </div>

            </div>

        </div>

    </div>

    <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
    <section class="google-map-section">
        <div class="map-inner">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2732.9589660474803!2d23.56693285158554!3d46.76570527903554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47490e88e55e7949%3A0xe8bad4276250e3db!2sStrada%20S%C4%83lciilor%2C%20Cluj-Napoca!5e0!3m2!1sen!2sro!4v1641634547767!5m2!1sen!2sro" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>

</div>
<footer id="footer" class="bg-color-light border-0 pt-5 mt-0">

    <div class="footer-copyright curved-border curved-border-top d-flex align-items-center">
        <div class="container py-2">
            <div class="row py-4">
                <div class="col text-center">
                    <p class="text-3">2021 © <strong class="font-weight-normal text-color-light opacity-7">TechWave</strong> - Copyright. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>

<!-- Vendor -->
<script src="<?= base_url()?>layout/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url()?>layout/vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="<?= base_url()?>layout/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?= base_url()?>layout/vendor/jquery.cookie/jquery.cookie.min.js"></script>
<script src="<?= base_url()?>layout/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url()?>layout/vendor/jquery.validation/jquery.validate.min.js"></script>
<script src="<?= base_url()?>layout/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="<?= base_url()?>layout/vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="<?= base_url()?>layout/vendor/lazysizes/lazysizes.min.js"></script>
<script src="<?= base_url()?>layout/vendor/isotope/jquery.isotope.min.js"></script>
<script src="<?= base_url()?>layout/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?= base_url()?>layout/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url()?>layout/vendor/vide/jquery.vide.min.js"></script>
<script src="<?= base_url()?>layout/vendor/vivus/vivus.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="<?= base_url()?>layout/js/theme.js"></script>

<!-- Current Page Vendor and Views -->
<script src="<?= base_url()?>layout/js/views/view.contact.js"></script>

<!-- Theme Custom -->
<script src="<?= base_url()?>layout/js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="<?= base_url()?>layout/js/theme.init.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
<script>

    /*
    Map Settings

        Find the Latitude and Longitude of your address:
            - http://universimmedia.pagesperso-orange.fr/geo/loc.htm
            - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

    */

    // Map Markers
    var mapMarkers = [{
        address: "217 Summit Boulevard, Birmingham, AL 35243",
        html: "<strong>Alabama Office</strong><br>217 Summit Boulevard, Birmingham, AL 35243<br><br><a href='#' onclick='mapCenterAt({latitude: 33.44792, longitude: -86.72963, zoom: 16}, event)'>[+] zoom here</a>",
        icon: {
            image: "img/pin.png",
            iconsize: [26, 46],
            iconanchor: [12, 46]
        }
    },{
        address: "645 E. Shaw Avenue, Fresno, CA 93710",
        html: "<strong>California Office</strong><br>645 E. Shaw Avenue, Fresno, CA 93710<br><br><a href='#' onclick='mapCenterAt({latitude: 36.80948, longitude: -119.77598, zoom: 16}, event)'>[+] zoom here</a>",
        icon: {
            image: "img/pin.png",
            iconsize: [26, 46],
            iconanchor: [12, 46]
        }
    },{
        address: "New York, NY 10017",
        html: "<strong>New York Office</strong><br>New York, NY 10017<br><br><a href='#' onclick='mapCenterAt({latitude: 40.75198, longitude: -73.96978, zoom: 16}, event)'>[+] zoom here</a>",
        icon: {
            image: "img/pin.png",
            iconsize: [26, 46],
            iconanchor: [12, 46]
        }
    }];

    // Map Initial Location
    var initLatitude = 37.09024;
    var initLongitude = -95.71289;

    // Map Extended Settings
    var mapSettings = {
        controls: {
            draggable: (($.browser.mobile) ? false : true),
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            scaleControl: true,
            streetViewControl: true,
            overviewMapControl: true
        },
        scrollwheel: false,
        markers: mapMarkers,
        latitude: initLatitude,
        longitude: initLongitude,
        zoom: 5
    };

    var map = $('#googlemaps').gMap(mapSettings),
        mapRef = $('#googlemaps').data('gMap.reference');

    // Map Center At
    var mapCenterAt = function(options, e) {
        e.preventDefault();
        $('#googlemaps').gMap("centerAt", options);
    }

    // Styles from https://snazzymaps.com/
    var styles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];

    var styledMap = new google.maps.StyledMapType(styles, {
        name: 'Styled Map'
    });

    mapRef.mapTypes.set('map_style', styledMap);
    mapRef.setMapTypeId('map_style');

</script>

</body>
</html>