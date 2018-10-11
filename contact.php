<?php 
include ('header.php'); 
?>
            <!-- page header -->
            <section class="header header-bg-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="header-content">
                                <div class="header-content-inner">
                                    <h1>LET'S TALK !</h1>
                                    <p>We’d love to talk about any enquiry and suggession; use our form below and one of our team will be in touch. </p>
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-4">
                                            <div class="contact-icon">
                                                <a href="https://www.facebook.com/kolhapurtour/" target="_blank">
                                                    <i class="flaticon-facebook"></i>
                                                    <h5>Facebook</h5> 
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-4">
                                            <div class="contact-icon">
                                                <a href="#">
                                                    <i class="flaticon-smartphone"></i>
                                                    <h5>+919890305454</h5>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="contact-icon">
                                                <a href="#">
                                                    <i class="flaticon-mail"></i>
                                                    <h5><span class="__cf_email__" data-cfemail="81e0e5ece8efc1e9eef5ece0e8edafe2eeec"></span>Service@umbrellasystems.co.in</h5>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="ui breadcrumb">
                                        <a href="index.php" class="section">Home</a>
                                        <div class="divider"> / </div>
                                        <div class="active section">Contact</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact -->
            <section class="contact-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="contact_map">
                                <!-- The element that will contain Google Map. This is used in both the Javascript and CSS above. -->
                                <div id="map"></div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="contact-form">
                                <form action="connect.php" method="post">
                                    <h2>Let's Talk!</h2>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">

                                                <label>First Name</label>
                                                <input type="text" class="form-control" id="f_name" name="f_name" placeholder="Enter your First Name" required="Please Enter Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" id="l_name" name="l_name" placeholder="Enter Your Last Name" required="Please Enter Last Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Your Email" required="Please Enter Email">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" required="Please Enter Mobile Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label></label>
                                        <textarea class="form-control" id="message" name="message" placeholder="Your Comment" rows="5"></textarea>
                                    </div>
                                    <input type="submit" name="submit" class="thm-btn" value="Submit">
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="contact-details">
                                <h2>Contact Details</h2>
                                <div class="contact-content">
                                    <h4>Visit us at our headquarter</h4>
                                    <p>
                                        Plot No. 2, Samata Colony, Tembalaiwadi, Kolhapur, Maharashtra 416001
                                    </p>
                                </div>
                                <div class="contact-content">
                                    <h4>General Inquiries</h4>
                                    <p>
                                       <span class="glyphicon glyphicon-earphone">Phone 09890305454</span>
                                    </p>
                                </div>
                                <div class="contact-content">
                                    <h4>Address</h4>
                                    <p>   
                                        Plot No. 2,<br>
                                        Samata Colony, Tembalaiwadi, <br>
                                        Kolhapur,Maharashtra<br>
                                        416001.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Newsletter -->
            <section class="get-offer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <span>Subscribe to our Newsletter</span>
                            <h2>& Discover the best offers!</h2>
                        </div>
                        <div class="col-sm-7">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter Your Email" name="q">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="flaticon-paper-plane"></i> Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Footer Section -->
        <?php 
           include ('footer.php'); 
         ?>

        <!-- <footer>
            <div class="container">
                <div class="row">
                    <!- Address -->
               <!--  <div class="col-sm-4 col-md-3">
                        <div class="footer-box address-inner">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the.  </p>
                            <div class="address">
                                <i class="flaticon-placeholder"></i>
                                <p>PO Box 16122 Collins Street<br>
                                    West Victoria 8007 Australia</p>
                            </div>
                            <div class="address">
                                <i class="flaticon-customer-service"></i>
                                <p> +880153625892</p>
                            </div>
                            <div class="address">
                                <i class="flaticon-mail"></i>
                                <p> <a class="__cf_email__" href="http://travel.bdtask.com/cdn-cgi/l/email-protection" data-cfemail="d9b8bdb4b0b799beb4b8b0b5f7bab6b4">[email&#160;protected]</a><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e-;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-6">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="footer-box">
                                    <h4 class="footer-title">Information</h4>
                                    <ul class="categoty">
                                        <li><a href="#">Pygmy miles</a></li>
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Online Enquiry</a></li>
                                        <li><a href="#">Call us</a></li>
                                        <li><a href="#">Terms and Conditions</a></li>
                                        <li><a href="#">Privacy & Cookies Policy</a></li>
                                        <li><a href="#">Become a partner</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="footer-box">
                                    <h4 class="footer-title">Experiences</h4>
                                    <ul class="categoty">
                                        <li><a href="#">Epic journeys</a></li>
                                        <li><a href="#">Hidden tribes</a></li>
                                        <li><a href="#">Eco lodges & tours</a></li>
                                        <li><a href="#">Endangered Wildlife</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="footer-box">
                                    <h4 class="footer-title">Destinations</h4>
                                    <ul class="categoty">
                                        <li><a href="#">Europe</a></li>
                                        <li><a href="#">Africa</a></li>
                                        <li><a href="#">Asia</a></li>
                                        <li><a href="#">Oceania</a></li>
                                        <li><a href="#">North America</a></li>
                                        <li><a href="#">South America</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 hidden-sm">
                        <div class="footer-box">
                            <h4 class="footer-title">Flickr Gallery</h4>
                            <ul class="gallery-list">
                                <li> <a href="#"><img src="assets/images/flickr-1.jpg" alt=""></a></li>
                                <li> <a href="#"><img src="assets/images/flickr-2.jpg" alt=""></a></li>
                                <li> <a href="#"><img src="assets/images/flickr-3.jpg" alt=""></a></li>
                                <li> <a href="#"><img src="assets/images/flickr-4.jpg" alt=""></a></li>
                                <li> <a href="#"><img src="assets/images/flickr-5.jpg" alt=""></a></li>
                                <li> <a href="#"><img src="assets/images/flickr-6.jpg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <p>Copyright Â© 2016. All rights reserved</p>
                        </div>
                        <div class="col-sm-7">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Service</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Shop</a></li>
                                    <li><a href="#">Forum</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer> -->
        <!-- jQuery -->
        <script src="assets/js/jquery.min.js" type="text/javascript"></script>
        <!-- jquery ui js -->
        <script src="assets/js/jquery-ui.min.js" type="text/javascript"></script>
        <!-- bootstrap js -->
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- fraction slider js -->
        <script src="assets/js/jquery.fractionslider.js" type="text/javascript"></script>
        <!-- owl carousel js --> 
        <script src="assets/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
        <!-- counter -->
        <script src="assets/js/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="assets/js/waypoints.js" type="text/javascript"></script>
        <!-- filter portfolio -->
        <script src="assets/js/jquery.shuffle.min.js" type="text/javascript"></script>
        <script src="assets/js/portfolio.js" type="text/javascript"></script>
        <!-- magnific popup -->
        <script src="assets/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <!-- range slider -->
        <script src="assets/js/ion.rangeSlider.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.easing.min.js" type="text/javascript"></script>
        <!-- custom -->
        <script src="assets/js/custom.js" type="text/javascript"></script>
        <!-- google map -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=%20AIzaSyDcMXKkIZSG1Ev3nNkDE5vZpfT_KG9zBT8"></script>
        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);

            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {


                    // How zoomed in you want the map to start at (always required)
                    zoom: 10, scrollwheel: false,
                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(16.7050, 74.2433), //Kolhapur

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType": "administrative", "elementType": "labels.text.fill", "stylers": [{"color": "#444444"}]}, {"featureType": "administrative.locality", "elementType": "labels.text.stroke", "stylers": [{"visibility": "on"}]}, {"featureType": "administrative.locality", "elementType": "labels.icon", "stylers": [{"visibility": "on"}, {"color": "#f1c40f"}]}, {"featureType": "landscape", "elementType": "all", "stylers": [{"color": "#f2f2f2"}]}, {"featureType": "poi", "elementType": "all", "stylers": [{"visibility": "off"}]}, {"featureType": "road", "elementType": "all", "stylers": [{"saturation": -100}, {"lightness": 45}]}, {"featureType": "road.highway", "elementType": "all", "stylers": [{"visibility": "simplified"}]}, {"featureType": "road.arterial", "elementType": "labels.icon", "stylers": [{"visibility": "off"}]}, {"featureType": "transit", "elementType": "all", "stylers": [{"visibility": "off"}]}, {"featureType": "water", "elementType": "all", "stylers": [{"color": "#fec107"}, {"visibility": "on"}]}]
                };

                // image from external URL

                var myIcon = 'assets/images/marker.png';

                //preparing the image so it can be used as a marker
                //https://developers.google.com/maps/documentation/javascript/reference#Icon
                //includes hacky fix "size" to allow for wobble
                var catIcon = {
                    url: myIcon,
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(16.7050, 74.2433), //Kolhapur
                    map: map,
                    icon: catIcon,
                    title: 'Snazzy!',
                    animation: google.maps.Animation.DROP,
                });
            }
        </script>
    <script>/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/\>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script></body>

<!-- Mirrored from travel.bdtask.com/travel_demo/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Jun 2017 09:06:09 GMT -->
</html>