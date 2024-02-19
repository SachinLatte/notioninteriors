<?php include "head.php" ?>
    <!-- <div id="royal_preloader"></div> -->
    <div id="page" class="site">
<?php include "navigations.php" ?>
        <div id="content" class="site-content">
            <div class="page-header dtable text-center header-transparent page-header-contact">
                <div class="dcell">
                    <div class="container">
                        <h1 class="page-title">Contact Us</h1>
                        <!-- <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Contacts</li>
                        </ul>     -->
                    </div>
                </div>
            </div>
        </div>
        <section class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center mb-5 mb-lg-0">
                        <div class="contact-left">
                            <h2>Get in Touch</h2>
                            <!-- <p class="font14">Your email address will not be published. Required fields are marked *</p> -->
                            <form id="ajax-form" name="ajax-form" action="contact.php" method="post" class="wpcf7">
                                <div class="main-form">
                                    <p>
                                        <label for="name"> <span class="error" id="err-name">please enter name</span></label>
                                        <input type="text" name="name" value="" size="40" class="" aria-invalid="false" placeholder="Full Name" required autocomplete = "off">
                                    </p>
                                    <p>
                                        <label for="mobile"> <span class="error" id="err-name">please enter mobile number</span></label>
                                        <input type="number" name="mobile" value="" size="40" class="" aria-invalid="false" placeholder="Mobile Number" required autocomplete = "off">
                                    </p>
                                    <p>
                                        <label for="email"> 
                                            <span class="error" id="err-email">please enter e-mail</span>
                                            <span class="error" id="err-emailvld">e-mail is not a valid format</span>
                                        </label>
                                        <input type="email" name="email" id="email" value="" size="40" class="" aria-invalid="false" placeholder="Email Id" required autocomplete = "off">
                                    </p>
                                    <p>
                                        <label for="message"></label>
                                        <textarea name="message" id="message" cols="40" rows="10" class="" aria-invalid="false" placeholder="Message..." required autocomplete = "off"></textarea>
                                    </p>
                                    <p><button type="submit" id="send" class="octf-btn">Send Message</button></p>
                                    <div class="clear"></div>   
                                    <div class="error" id="err-form">There was a problem validating the form please check!</div>
                                    <div class="error" id="err-timedout">The connection to the server timed out!</div>
                                    <div class="error" id="err-state"></div>
                                </div>
                            </form>

                            <div class="clear"></div>
                            <div id="ajaxsuccess">Successfully sent!!</div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-right">
                            <div class="ot-heading">
                                <!-- <span>[ our contact details ]</span> -->
                                <h2 class="main-heading">Let's Start a Project</h2>
                            </div>
                            <p>Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days. We will be happy to answer your questions.</p>
                            <div class="contact-info">
                                <i class="ot-flaticon-place"></i>
                                <div class="info-text">
                                    <h6>Our Address:</h6>
                                    <p>Ambe Bhawan, Opposite Suchita Business Park, Ghatkopar East Mumbai-400077</p>
                                </div>
                            </div>
                            <div class="contact-info">
                                <i class="ot-flaticon-mail"></i>
                                <div class="info-text">
                                    <h6>Our Mailbox:</h6>
                                    <p><a href="mailto:notionplanningsystems@gmail.com" style="color:#c1c1c1;">notionplanningsystems@gmail.com</a></p>
                                </div>
                            </div>
                            <div class="contact-info">
                                <i class="ot-flaticon-phone-call"></i>
                                <div class="info-text">
                                    <h6>Our Phone:</h6>
                                    <p><a href="tel:977-315-3714" style="color:#c1c1c1;">+91 9773153714</a></p>
                                </div>
                            </div>
                            <div class="list-social">
                                <ul>
                                <li><a href="https://www.facebook.com/NotionPlanningSystem" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/notionplanningsystems/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="javascript:void(0)" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="contact-map">
            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4600.225806019407!2d72.90760687590664!3d19.085009651688267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c62d83ef5761%3A0xdfb5c1af15e603c3!2sAmbe%20Bhavan%2C%20F.%20P.%20No.%20271%2C%20Jathabhai%20Road%2C%20Behind%20Allahabad%20Bank%2C%20Near%20Hanuman%20Mandir%2C%20Raighad%20Chowk%2C%2C%20AS%20Gawde%20Marg%2C%20Shival%20Nagar%2C%20Saibaba%20Nagar%2C%20Pant%20Nagar%2C%20Ghatkopar%20East%2C%20Mumbai%2C%20Maharashtra%20400077!5e1!3m2!1sen!2sin!4v1683872397009!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

<?php include "tail.php" ?>