<footer id="site-footer" class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-xl-0">
                    <div class="widget-footer">
                        <a href="index.php"><img src="images/logo1.png" class="footer-logo" alt=""></a>
                        <p>For over Five Years, Notion Planning System has been providing value beyond our client's expectations.</p>
                        <div class="footer-social list-social">
                            <ul>
                                <li><a href="https://www.facebook.com/NotionPlanningSystem" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/notionplanningsystems/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="javascript:void(0)" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-xl-0">
                    <div class="widget-footer">
                        <h6>Contacts</h6>
                        <ul class="footer-list">
                            <li class="footer-list-item">
                                <span class="list-item-icon"><i class="ot-flaticon-place"></i></span>
                                <span class="list-item-text">Ambe Bhawan, Opposite Suchita Business Park, Ghatkopar East Mumbai-400077</span>
                            </li>
                            <li class="footer-list-item">
                                <span class="list-item-icon"><i class="ot-flaticon-mail"></i></span>
                                <span class="list-item-text"> <a href="mailto:notionplanningsystems@gmail.com">notionplanningsystems@gmail.com</a></span>
                            </li>
                            <li class="footer-list-item">
                                <span class="list-item-icon"><i class="ot-flaticon-phone-call"></i></span>
                                <span class="list-item-text"> <a href="tel:977-315-3714">+91 9773153714</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-md-0">
                    <div class="widget-footer widget-contact">
                        <h6>Our Services</h6>
                        <ul>
                            <li><a href="residential.php">Residential Projects</a></li>
                            <li><a href="commercial.php">Commercial Projects</a></li>
                            <li><a href="developers.php">Developers Projects</a></li>
                            <li><a href="turnkey.php">Turnkey Projects</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="widget-footer footer-widget-subcribe">
                        <h6>Subscribe</h6>
                        <form class="mc4wp-form" method="post">
                            <div class="mc4wp-form-fields">
                                <div class="subscribe-inner-form">
                                    <input type="email" name="EMAIL" placeholder="YOUR EMAIL" required="">
                                    <button type="submit" class="subscribe-btn-icon"><i class="ot-flaticon-send"></i></button>
                                </div>
                            </div>
                        </form>
                        <p>Follow our newsletter to stay updated</p>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- #site-footer -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 mb-4 mb-lg-0">
                    <p>Copyright ©<span id="copyYear">2020</span> All Rights Reserved.</p>
                </div>
                <div class="col-lg-5 col-md-12 align-self-center">
                    <ul class="icon-list-items inline-items justify-content-lg-end">
                        <li class="icon-list-item inline-item">
                            <a href="#"><span class="icon-list-text">Powered By</span></a>
                        </li>
                        <li class="icon-list-item inline-item">
                            <a href="https://www.digitallatte.in/" target="_blank" style="color: #ddaf75;"><span class="icon-list-text">Digitallatte</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!-- #page -->
<a id="back-to-top" href="#" class="show"><i class="ot-flaticon-left-arrow"></i></a>
        <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/mousewheel.min.js"></script>
    <script src="js/lightgallery-all.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/easypiechart.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="https://alexandrebuffet.fr/codepen/slider/slick-animation.min.js"></script>
    <script src="js/scripts.js"></script>
    <!-- REVOLUTION JS FILES -->
    <script  src="plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script  src="plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    
    <script  src="plugins/revolution/revolution/js/extensions/revolution-plugin.js"></script>
    <!-- REVOLUTION SLIDER SCRIPT FILES -->
    <script  src="js/rev-script-1.js"></script>
    <!-- Load More Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        let date = new Date;
        let yearSpan = date.getFullYear();
        document.getElementById("copyYear").innerHTML = yearSpan;
    </script>
    <script>
        $(document).ready(function(){
        $(".content").slice(0, 4).show();
        $("#loadMore").on("click", function(e){
            e.preventDefault();
            $(".content:hidden").slice(0, 4).slideDown();
            if($(".content:hidden").length == 0) {
            $("#loadMore").text("No Content").addClass("noContent");
            }
        });
        });
    </script>
</body>
</html>