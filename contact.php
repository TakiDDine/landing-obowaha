
    <?php include 'inc/header.php';?>
    <div class="bg-primary-3 text-white p-0" data-overlay>
      <img src="assets/img/heros/hero-1.jpg" alt="Image" class="bg-image opacity-60">
    </div>
    <section class="pb-0">
      <div class="container">
        <div class="row section-title justify-content-center text-center">
          <div class="col-md-9 col-lg-8 col-xl-7">
            <h3 class="display-4">تواصل معنا</h3>
            <div class="lead">سنكون سعداء بتواصلك معنا</div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-10 col-lg-9 col-xl-8">
            <form data-form-email novalidate action="https://mailform.mediumra.re/jumpstart/smtp.php">
              <div class="form-row">
                <div class="col-sm">
                  <div class="form-group">
                    <label for="contact-name">الاسم الكامل</label>
                    <input type="text" name="contact-name" class="form-control" id="contact-name" required>
                    <div class="invalid-feedback">
                      أدخل اسمك الكامل
                    </div>
                  </div>
                </div>
                <div class="col-sm">
                  <div class="form-group">
                    <label for="contact-email">البريد الالكتروني</label>
                    <input type="email" name="contact-email" class="form-control" id="contact-email" placeholder="you@website.com" required>
                    <div class="invalid-feedback">
                      أدخل بريدك الالكتروني
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-sm">
                  <div class="form-group">
                    <label for="contact-company">Company (optional)</label>
                    <input type="text" name="contact-company" class="form-control" id="contact-company">
                  </div>
                </div>
                <div class="col-sm">
                  <div class="form-group">
                    <label for="contact-phone">الهاتف (اختياري)</label>
                    <input type="tel" name="contact-phone" class="form-control" id="contact-phone">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="contact-message">الرسالة</label>
                <textarea id="contact-message" name="contact-message" rows="10" class="form-control" required></textarea>
              
              </div>
              <div class="form-row">
                <div class="col-12">
                  <div data-recaptcha data-sitekey="6Lfmz4gUAAAAAEau9IKfGA7leOKYAiRhv-3WA3gq"></div>
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <div class="d-none alert alert-success" role="alert" data-success-message>
                    Thanks, a member of our team will be in touch shortly.
                  </div>
                  <div class="d-none alert alert-danger" role="alert" data-error-message>
                    Please fill all fields correctly.
                  </div>
                  <div class="d-flex justify-content-end">
                    <button class="btn btn-primary btn-loading" type="submit" data-loading-text="Sending">
                      <!-- Icon for loading animation -->
                      <svg class="icon bg-white" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>Icon For Loading</title>
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g>
                            <polygon points="0 0 24 0 24 24 0 24" opacity="0"></polygon>
                          </g>
                          <path d="M12,4 L12,6 C8.6862915,6 6,8.6862915 6,12 C6,15.3137085 8.6862915,18 12,18 C15.3137085,18 18,15.3137085 18,12 C18,10.9603196 17.7360885,9.96126435 17.2402578,9.07513926 L18.9856052,8.09853149 C19.6473536,9.28117708 20,10.6161442 20,12 C20,16.418278 16.418278,20 12,20 C7.581722,20 4,16.418278 4,12 C4,7.581722 7.581722,4 12,4 Z"
                          fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 12.000000) scale(-1, 1) translate(-12.000000, -12.000000) "></path>
                        </g>
                      </svg>
                      <span>ارسال</span>
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    

   
    <a href="#top" class="btn btn-primary rounded-circle btn-back-to-top" data-smooth-scroll data-aos="fade-up" data-aos-offset="2000" data-aos-mirror="true" data-aos-once="false">
      <img src="assets/img/icons/interface/icon-arrow-up.svg" alt="Icon" class="icon bg-white" data-inject-svg>
    </a>
    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

    <!-- 
             This appears in the demo only.  This script ensures our demo countdowns are always showing a date in the future 
             by altering the date before the countdown is initialized 
        -->
    <script type="text/javascript">
      (($) => {
            var now             = new Date;
            var day             = 864e5;
            var weeksToAdd      = 2;
            var tenWeeksFromNow = new Date(+now + day * 7 * weeksToAdd).toISOString().slice(0,10).replace(/\-/g, 'index.html');
            $('[data-countdown-date].add-countdown-time').attr('data-countdown-date', tenWeeksFromNow);
          })(jQuery);
    </script>

    <!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->

    <!-- AOS (Animate On Scroll - animates elements into view while scrolling down) -->
    <script type="text/javascript" src="assets/js/aos.js"></script>
    <!-- Clipboard (copies content from browser into OS clipboard) -->
    <script type="text/javascript" src="assets/js/clipboard.min.js"></script>
    <!-- Fancybox (handles image and video lightbox and galleries) -->
    <script type="text/javascript" src="assets/js/jquery.fancybox.min.js"></script>
    <!-- Flatpickr (calendar/date/time picker UI) -->
    <script type="text/javascript" src="assets/js/flatpickr.min.js"></script>
    <!-- Flickity (handles touch enabled carousels and sliders) -->
    <script type="text/javascript" src="assets/js/flickity.pkgd.min.js"></script>
    <!-- Ion rangeSlider (flexible and pretty range slider elements) -->
    <script type="text/javascript" src="assets/js/ion.rangeSlider.min.js"></script>
    <!-- Isotope (masonry layouts and filtering) -->
    <script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
    <!-- jarallax (parallax effect and video backgrounds) -->
    <script type="text/javascript" src="assets/js/jarallax.min.js"></script>
    <script type="text/javascript" src="assets/js/jarallax-video.min.js"></script>
    <script type="text/javascript" src="assets/js/jarallax-element.min.js"></script>
    <!-- jQuery Countdown (displays countdown text to a specified date) -->
    <script type="text/javascript" src="assets/js/jquery.countdown.min.js"></script>
    <!-- jQuery smartWizard facilitates steppable wizard content -->
    <script type="text/javascript" src="assets/js/jquery.smartWizard.min.js"></script>
    <!-- Plyr (unified player for Video, Audio, Vimeo and Youtube) -->
    <script type="text/javascript" src="assets/js/plyr.polyfilled.min.js"></script>
    <!-- Prism (displays formatted code boxes) -->
    <script type="text/javascript" src="assets/js/prism.js"></script>
    <!-- ScrollMonitor (manages events for elements scrolling in and out of view) -->
    <script type="text/javascript" src="assets/js/scrollMonitor.js"></script>
    <!-- Smooth scroll (animation to links in-page)-->
    <script type="text/javascript" src="assets/js/smooth-scroll.polyfills.min.js"></script>
    <!-- SVGInjector (replaces img tags with SVG code to allow easy inclusion of SVGs with the benefit of inheriting colors and styles)-->
    <script type="text/javascript" src="assets/js/svg-injector.umd.production.js"></script>
    <!-- TwitterFetcher (displays a feed of tweets from a specified account)-->
    <script type="text/javascript" src="assets/js/twitterFetcher_min.js"></script>
    <!-- Typed text (animated typing effect)-->
    <script type="text/javascript" src="assets/js/typed.min.js"></script>
    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/theme.js"></script>
    <!-- This script appears only on the demo.  It is used to delay unnecessary image loading until after the main page content is loaded. -->
    <script type="text/javascript">
      window.addEventListener("load",function(){
            setTimeout(function() {
              const delayedImages = document.querySelectorAll('[data-delay-src]');
              theme.mrUtil.forEach(delayedImages, (index, elem) => {
                const source = elem.getAttribute('data-delay-src');
                elem.removeAttribute('data-delay-src');
                elem.setAttribute('src', source);
              });
            }, 500);
          });
    </script>

    <script type="text/javascript">
      // This script appears only in the demo - it disables forms with no action attribute to prevent 
      // navigating away from the page.
      jQuery("form:not([action])").on('submit', function(){return false;});
    </script>

  </body>


<!-- Mirrored from jumpstart.mediumra.re/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jan 2020 23:55:17 GMT -->
</html>
