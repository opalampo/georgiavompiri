<?php require("includes/helpers.php"); ?>
<?php require("plugins/Mobile-Detect-2.8.11/Mobile_Detect.php");

$detect = new Mobile_Detect();
?>


<?php render("header", ["title" => "Georgia Vompiri - Civil Engineer in the Netherlands"]); ?>

	<!-----	Google analytics code -------------------------------------------------->
			
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-54940785-2', 'auto');
	  ga('send', 'pageview');

	</script>



<!-- Popups and dark background --------------------------------------------------------------------------------------->
    <!-- Backround that appears while sending message from contact form -->
    <div id="dark-background"></div>



    <!-- Dropdown navigation menu -------------------------------------------->
    <nav id="drop-down-nav">
        <ul>

            <li><a href="#home" class="smooth_scroll_anchor scroll-home">Home</a></li>
            <li><a href="#about-separator" class="smooth_scroll_anchor scroll-about">About</a></li>
            <li><a href="#projects-separator" class="smooth_scroll_anchor scroll-projects">Projects</a></li>
            <li><a href="#contact-separator" class="smooth_scroll_anchor scroll-contact">Contact</a></li>

        </ul>
    </nav>

    <!-- Fixed navigation menu ----------------------------------------->
    <div class="fixed nav-bar">
        <nav class="top-bar" id="nav" data-topbar role="navigation">
            <a href="#" class="box-shadow-menu"></a>
            <a href="#home" class="smooth_scroll_anchor" id="logo-small-screen">
                <img src="img/logo.png">
            </a>
            <ul class="inline-list row navigation-menu">
                <li><a href="#home" class="smooth_scroll_anchor scroll-home" title="Georgia Vompiri, Civil Engineer"><img
                            src="img/logo.png"></a></li>
                <li><a href="#home" class="smooth_scroll_anchor scroll-home">Home</a></li>
                <li><a href="#about-separator" class="smooth_scroll_anchor scroll-about">About</a></li>
                <li><a href="#projects-separator" class="smooth_scroll_anchor scroll-projects">Projects</a></li>
                <li><a href="#contact-separator" class="smooth_scroll_anchor scroll-contact">Contact</a></li>
                <li><a href="https://www.linkedin.com/pub/georgia-vompiri/32/b36/483" target="_blank" class="sociallink"
                       title="Connect with me on Linkedin"><span class="fa fa-linkedin" id="linkedin-fa"></span></a>
                </li>
            </ul>
        </nav>
    </div>

<!-- Home ------------------------------------------------------------------------------------------------------------->
    <section class="row fullWidth" id="home" name="home">
        <div id="move-pic" class="move-pic small-12 small-centered columns">
            <section id="civil-engineer" class="small-4 columns">
                <h1>civil engineer</h1>

                <p>...with broad-spectrum knowledge in areas such as planning and design as well as environmental and
                    structural engineering</p>
            </section>
            <div id="georgia-pic" class="georgia-pic small-4 small-centered columns">
                <img class="georgia-pic-img" src="img/Img184792c.png">
            </div>
            <section id="integral-designer" class="small-4 columns">
                <h1>integral designer</h1>

                <p>...who is capable of integrating multidisciplinary knowledge within the field of Smart-Energy and
                    Sustainable built environment</p>
            </section>
            <div id="div-photo-left" class="small-4 columns">
                <img class="img-photo-left" src="img/civil_engineering.jpg">
            </div>
            <div id="div-photo-right" class="small-4 columns">
                <img class="img-photo-right" src="img/zero-energy-home.jpg">
            </div>

        </div>
    </section>

    <header class="row separator text-center" id="about-separator"  name="about-separator">
        <h2>
            About me...
        </h2>
    </header>

<!--About-------------------------------------------------------------------------------------------------------------->
    <section class="row" id="about">

        <?php if ($detect->isMobile()) { ?>

            <div class="small-12 columns full-CV-small-screen">
                <p> Download my full <a href="files/cv.pdf">CV</a>
                    <a href="files/cv.pdf"><span class="fa fa-file-pdf-o"></span></a>
                </p>
            </div>

        <?php } else { ?>

            <div id="CV" class="reveal-modal" data-reveal>
                <iframe src="files/cv.pdf#view=fitH" width="100%" height="100%">
                </iframe>
                <a class="close-reveal-modal" id="close-modal-CV">&#215;</a>
            </div>

            <!--Popup for CV------------------------------------------>


            <div class="small-12 columns full-CV">
                <p> View my full <a href="#" data-reveal-id="CV">CV</a>
                    <a href="#" data-reveal-id="CV"><span class="fa fa-file-pdf-o"></span></a>
                </p>
            </div>

        <?php } ?>

        <div class="small-12 columns education-experience-languages">
            <div class="small-12 medium-12 large-4 columns fa-about pad0" id="education">
                <span class="fa fa-graduation-cap"></span>

                <h3> Education </h3>


                <div class="small-12 medium-10 large-12 small-centered columns text-left">
                    <p>
                        <strong> Professional Doctorate in Engineering </strong> <br>
                        Specialization: Smart Energy Buildings and Cities, Eindhoven University of Technology (TU/e),
                        The Netherlands, 2015
                    </p>

                    <p>
                        <strong> Summer School on Business Management and Entrepreneurship </strong> <br>
                        ESADE Business School, Barcelona, Spain, Summer 2013
                    </p>

                    <p>
                        <strong> Diploma in Civil Engineering </strong> <br>
                        Specialization: Environmental Engineering and Transportation, Patras Polytechnic University,
                        Greece, 2011
                    </p>
                </div>
            </div>
            <div class="small-12 medium-12 large-4 columns fa-about pad0" id="professional-experience">
                <span class="fa fa-briefcase"></span>

                <h3> Work Experience </h3>

                <div class="small-12 medium-10 large-12 small-centered columns text-left">
                    <p>
                        <strong> Technological Designer </strong> <br>
                        Rijkswaterstaat, Utrecht, The Netherlands, 2014 - Today
                    </p>

                    <p>
                        <strong> Professional Doctorate in Engineering </strong> <br>
                        Specialization: Smart Energy Buildings and Cities, Eindhoven University of Technology (TU/e),
                        The Netherlands, 2013 - 2015
                    </p>
                </div>
            </div>
            <div class="small-12 medium-12 large-4 columns fa-about pad0" id="languages">
                <span class="fa fa-language"></span>

                <h3> Languages </h3>

                <div class="small-12 medium-10 large-12 small-centered columns text-left div-flag">
                    <span class="small-3 medium-2 large-3 columns"><img src="img/Greek_flag.jpg" alt="Greek"
                                                                        title="Greek"></span>
                    <span class="small-9 medium-10 large-9 columns" id="greek-bar"></span>
                </div>
                <div class="small-12 medium-10 large-12 small-centered columns text-left div-flag">
                    <span class="small-3 medium-2 large-3 columns"><img src="img/German_flag.jpg" alt="German"
                                                                        title="German"></span>
                    <span class="small-9 medium-10 large-9 columns" id="german-bar"></span>
                </div>
                <div class="small-12 medium-10 large-12 small-centered columns text-left div-flag">
                    <span class="small-3 medium-2 large-3 columns"><img src="img/English_flag.jpg" alt="English"
                                                                        title="English"></span>
                    <span class="small-9 medium-8 large-9 columns" id="english-bar"></span>
                </div>
                <div class="small-12 medium-10 large-12 small-centered columns text-left div-flag">
                    <span class="small-3 medium-2 large-3 columns"><img src="img/Italian_flag.jpg" alt="Italian"
                                                                        title="Italian"></span>
                    <span class="small-9 medium-8 large-9 columns" id="italian-bar"></span>
                </div>
                <div class="small-12 medium-10 large-12 small-centered columns text-left div-flag">
                    <span class="small-3 medium-2 large-3 columns"><img src="img/Dutch_flag.jpg" alt="Dutch"
                                                                        title="Dutch"></span>
                    <span class="small-9 medium-8 large-9 columns" id="dutch-bar"></span>
                </div>
                <div class="small-12 medium-10 large-12 small-centered columns text-left div-flag">
                    <span class="small-3 medium-2 large-3 columns"><img src="img/French_flag.jpg" alt="French"
                                                                        title="French"></span>
                    <span class="small-9 medium-8 large-9 columns" id="french-bar"></span>
                </div>
            </div>
        </div>

    </section>

    <header class="row separator text-center fullWidth" id="projects-separator" name="projects-separator">
        <h2>
            See my work...
        </h2>
    </header>

<!-- Projects --------------------------------------------------------------------------------------------------------->

    <section class="row" id="projects">
        <div class="small-12 columns">
            <div class="small-12 medium-8 small-centered large-4 large-uncentered columns">
                <div class="small-12 columns project-tile-div">
                    <a id="link-Potentiaal" href="#" data-reveal-id="zeroEnergyBuilding"><img
                            src="img/Tile_ZeroEnergyBuilding.jpg"></a>
                </div>
                <p>Net Zero Energy Building</p>
            </div>
            <div class="small-12 medium-8 small-centered large-4 large-uncentered columns">
                <div class="small-12 columns project-tile-div">
                    <a id="link-Durzam" href="#" data-reveal-id="towardsEnergyNeutrality"><img
                            src="img/Tile_towardsEnergyNeutrality2.jpg" style="margin: 0 auto; width: 100%;"></a>
                </div>
                <p>Towards a Smart Zero-Energy District</p>
            </div>
            <div class="small-12 medium-8 small-centered large-4 large-uncentered columns">
                <div class="small-12 columns project-tile-div">
                    <a id="link-RWS" href="#" data-reveal-id="RWS"><img src="img/Tile_RWS.jpg"></a>
                </div>
                <p>Rijkswaterstaat</p>
            </div>
        </div>
        <div class="small-12 columns">

            <p id="desktop"> Read about these projects on my Desktop site!</p>

        </div>

        <!-- Popup for "Zero Energy Building" project ----------------->
        <div id="zeroEnergyBuilding" class="reveal-modal show-for-large-up" data-reveal>
            <ul class="project-posters-list">
                <li><img src="img/Potentiaal/Slide1.jpg"></li>
                <li><img src="img/Potentiaal/Slide2.jpg"></li>
                <li><img src="img/Potentiaal/Slide3.jpg"></li>
                <li><img src="img/Potentiaal/Slide4.jpg"></li>
            </ul>
            <a class="close-reveal-modal" id="close-modal-zeroEnergyBuilding" href="#projects-separator"
               class="smooth_scroll_anchor">&#215;</a>
            <a id="button-Potentiaal" href="#" data-reveal-id="secondModal-Potentiaal"
               class="secondaryButton show-for-large-up">My part
                in the project...</a>
        </div>

        <div id="secondModal-Potentiaal" class="reveal-modal show-for-large-up" data-reveal>
            <h2>My part in this project...</h2>
            <img src="img/Potentiaal/myPart.jpg">

            <p>I was responsible and mainly involved in the design of a Smart-Energy glazing facade system. The design
                solution of the Facade aims to answer the major following questions: How can we control both the
                indoor-climate and the light intensity in a glass façade? And at the same time keep the energy demand
                low?</p>

            <p>The Smart-Energy Glazing façade system is based on the idea of combining Smart Glazing with Double
                Glazing +
                LSC Components and Selective Reflectors. In terms of percentages 76% of the total Façade surface is
                covered
                with Smart Glazing and the rest of the surface (24%) is covered by a combination of Smart Glazing and
                Double
                Glazing + LSC components.</p>

            <p><b>Smart Glazing</b>
            </p>

            <p>
                Smart Energy Glass is able to control incident solar radiation and use the blocked light. The light is
                turned into electricity and used for switching the glass. The window can switch between three modes: a
                dark,
                a privacy and a bright mode. The generated electricity is used directly to switch the glass. It is an
                autonomous system. So by Implementing Smart Glazing at our façade we achieve to control the indoor
                climate
                and the light intensity in our building and at the same time we keep the energy demand low.
            </p>

            <p><b>Luminescent Solar Concentrator (LSC)</b>
            </p>

            <p>
                <i>Working Principle</i></br>
                The basic LSC design allows sunlight to penetrate the top surface of an inexpensive plastic waveguide.
                This
                light is absorbed by luminescent molecules/luminophore (which could be organic dyes, inorganic
                phosphors, or
                quantum dots) which are embedded in the waveguide, applied in a separate layer on the top or the bottom
                of
                the
                waveguide. The light is re-emitted at a longer wavelength and a fraction becomes trapped by total
                internal
                reflection. Attached to the edge(s) of the waveguide are PV cells for conversion of the light into
                electricity.
            </p>

            <p><b>Selective Reflectors</b>
            </p>

            <p>
                The selective reflectors, if tuned between 1000 nm and 2000 nm will reject the infrared radiation
                reducing
                the heat loads and not interfering with the smart glazing and LSC functioning.
                The 85%-95% of the radiation can be reflected.

            </p>
            <a class="close-reveal-modal">&#215;</a>
        </div>

        <!-- Popup for "Towards Energy Neutrality" project ------------>
        <div id="towardsEnergyNeutrality" class="reveal-modal show-for-large-up" data-reveal>
            <ul class="project-posters-list">
                <li><img src="img/Durzam/Slide1.jpg"></li>
                <li><img src="img/Durzam/Slide2.jpg"></li>
            </ul>
            <a class="close-reveal-modal" id="close-modal-towardsEnergyNeutrality" href="#projects-separator"
               class="smooth_scroll_anchor">&#215;</a>
            <a id="button-Durzam" href="#" data-reveal-id="secondModal-Durzam"
               class="secondaryButton show-for-large-up">My
                part
                in the project...</a>
        </div>

        <div id="secondModal-Durzam" class="reveal-modal show-for-large-up" data-reveal>
            <h2>My part in this project...</h2>
            <img src="img/Durzam/DurzamSocial.jpg">

            <p>My part in this project was a quite challenging working package; the social innovation part of the
                project.
                <b>Social innovation</b> can be defined as new ideas (products, services and models) that simultaneously
                meet social needs (more effectively than alternatives) and create new social relationships or
                collaborations. In other words it is innovation that is good for society and enhances society’s capacity
                to
                act. <b>In this framework ideas such as the Social Platform and Social Card has been developed.
                </b>
            </p>

            <p><b>Social Platform</b>: facilitator of digital interaction to let the residents share information and
                exchange ideas on how to improve the neighborhood even more. Its content is user friendly and
                user-generated. The social platform also includes a personal account for the following:
            </p>

            <p><b>Social Card</b>: Each resident gets his/her own social card which is charged with credit according to
                his
                energy use/house excess of energy and the amount of materials he recycles. Also the district’s energy
                use/excess of
                energy would be charged in term of credits in every residents social card account. Moreover the tenant
                of
                the month – the tenant with the lowest energy consumption- will be awarded with more credit/coins!
                Credit
                can then be either consumed in services like renting electric cars or bikes, or for using the metro (in
                the
                future).</p>


            </br>
            <img src="img/Durzam/DurzamAssociation.jpg">

            <p>Wetering Duurzaam Association acts as the representative of the neighborhood's residents towards
                external stakeholders. In order to do this WDA can collect new ideas to improve the neighborhood and to
                negotiate with external stakeholders through the social platform that was just just mentioned. In
                return,
                the feedback of
                the external parties is transferred back to WDA, who inform the residents (indicated with the green
                arrows). Most likely, the residents need to be aware of the possibilities by the "raising awareness
                activities" and to persuade them to participate more actively:
            </p>

            <p>
            <ul>
                <li><b>Social gardens</b></li>
                <li><b>Window farms</b>: <b>vertical, indoor garden</b> that allows for year-round growing in almost any
                    window. They can be implemented either to houses or even to common/public buildings and different
                    kind
                    of shops (like cafes, restaurants etc) in order to increase the awareness on sustainability issues
                    but
                    also to improve the residents’ quality of life.
                </li>
                </br>
                <li><b>Neighborhood events</b>: to bring people together and increase motivation. Such as open house
                    days to
                    see the energy efficient solution in practice, block events, electric mobility days to promote
                    e-vehicles. Continue with the Weteringbuurt meetings.
                </li>
            </ul>
            </p>

            <a class="close-reveal-modal">&#215;</a>
        </div>

        <!-- Popup for "RWS" project ----------------->
        <div id="RWS" class="reveal-modal show-for-large-up" data-reveal>
            <p>Work in progress... More information coming soon.</p>
            <a class="close-reveal-modal" id="close-modal-RWS" href="#projects-separator"
               class="smooth_scroll_anchor">&#215;</a>

        </div>

    </section>

    <header class="row separator text-center fullWidth" id="contact-separator" name="contact-separator">
        <h2>
            Send me a message...
        </h2>
    </header>

<!-- Contact ---------------------------------------------------------------------------------------------------------->

    <section class="row fullWidth" id="contact">
        <form class="small-centered columns" id="contactForm" action="mail.php" method="post" autocomplete="off">
            <div class="large-12 medium-12  columns">
                <div class="row">
                    <div class="large-6 medium-6 columns">
                        <input type="text" name="senderName" id="senderName" class="required" placeholder="Name"
                               required="required" maxlength="40"/>
                    </div>
                    <div class="large-6 medium-6 columns">
                        <input type="email" name="senderEmail" id="senderEmail" class="required" placeholder="Email"
                               required="required" maxlength="50"/>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 medium-12 columns">
                        <input type="text" name="senderSubject" id="senderSubject" class="required"
                               placeholder="Subject" required="required" maxlength="50"/>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 medium-12 columns">
                        <textarea name="message" id="message" class="required" placeholder="Message" required="required"
                                  cols="80" rows="10" maxlength="10000"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="large-6 medium-6 small-6 columns send-button-div">
                        <input type="submit" id="sendMessage" name="sendMessage" value="Send"/>
                    </div>
                    <div class="large-6 medium-6 small-6 columns clear-button-div">
                        <input type="button" id="clear" class="close-reveal-modal" name="clear" value="Clear"/>
                    </div>
                </div>
            </div>
        </form>

    </section>

<!-- Footer ----------------------------------------------------------------------------------------------------------->

    <footer>
        <hr>
        <div class="small-8 medium-5 large-2 columns small-centered" id="logo-footer-div">
            <a href="#home" class="smooth_scroll_anchor"><img src="img/logo.png"></a>
        </div>

        <p class="text-center" id="copyright">
            &copy; 2014 Georgia Vompiri
        </p>
    </footer>

    <div id="sendingMessage" class="statusMessage large-3 medium-5 small-12 columns"><p>Sending. Please wait...</p>
    </div>
    <div id="successMessage" class="statusMessage large-3 medium-5 small-12 columns"><p>I'll get back to you
            shortly!</p></div>
    <div id="failureMessage" class="statusMessage large-4 medium-6 small-12 columns"><p>There was a problem. Please try
            again.</p></div>
<?php render("footer"); ?>