


<footer id="footer" class="bg-color-light border-0 pt-5 mt-0">
    <div class="container pb-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-6">
                <h2 class="font-weight-normal text-color-dark text-center text-8 mb-4"><strong class="font-weight-extra-bold">Contact</strong> Us</h2>
                <p class="text-4 opacity-8 text-center mb-4">Let's find together the best solutions for your project!</p>
                <form class="contact-form form-style-3" action="<?= base_url()?>home/contact" method="POST">
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
                        <div class="form-group col text-center">
                            <input type="submit" value="SUBMIT" class="btn btn-primary font-weight-semibold text-3 px-5 btn-py-2" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="footer-copyright curved-border curved-border-top d-flex align-items-center">
        <div class="container py-2">
            <div class="row py-4">
                <div class="col text-center">
                    <p class="text-3"><strong class="font-weight-normal text-color-light opacity-7">TechWave</strong> © <?php echo date("Y"); ?>. All Rights Reserved.</p>
                </div>
            </div>
            <div class="row py-4">
                <div class="col text-center">
                    <div class="copyright-links"><a href="<?=base_url()?>anexe/terms">Terms of Use</a> / <a href="<?=base_url()?>anexe/gdpr">Privacy Policy</a></div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<script src="<?= base_url()?>public/layout/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url()?>public/layout/vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="<?= base_url()?>public/layout/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?= base_url()?>public/layout/vendor/jquery.cookie/jquery.cookie.min.js"></script>
<script src="<?= base_url()?>public/layout/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url()?>public/layout/vendor/jquery.validation/jquery.validate.min.js"></script>
<script src="<?= base_url()?>public/layout/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="<?= base_url()?>public/layout/vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="<?= base_url()?>public/layout/vendor/lazysizes/lazysizes.min.js"></script>
<script src="<?= base_url()?>public/layout/vendor/isotope/jquery.isotope.min.js"></script>
<script src="<?= base_url()?>public/layout/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?= base_url()?>public/layout/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url()?>public/layout/vendor/vide/jquery.vide.min.js"></script>
<script src="<?= base_url()?>public/layout/vendor/vivus/vivus.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="<?= base_url()?>public/layout/js/theme.js"></script>

<!-- Current Page Vendor and Views -->
<script src="<?= base_url()?>public/layout/js/views/view.contact.js"></script>

<!-- Theme Custom -->
<script src="<?= base_url()?>public/layout/js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="<?= base_url()?>public/layout/js/theme.init.js"></script>

</body>
</html>