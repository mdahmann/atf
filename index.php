<?php include ('perch/runtime.php'); ?>

    <?php perch_layout('header'); ?>



    <!-- Main jumbotron -->
    <section class="jumbotron">
        <div class="container-fluid">
            <div class="col-lg-offset-1 col-md-offset-1 col-lg-5 col-md-6 xl-mt-100 sm-mt-50 title">
                <h1>At the Fork</h1>
                <h4>A film about husbandry and wife</h4>
                <h6 class="col-md-offset-1 col-md-10 hidden-xs ">"A film that's super awesome and really great about animals"</h6>
                <p class="col-md-6 xs-mt-30"><a class="button btn-charcoal btn-lg btn-block" href="#see-the-film" role="button">See the Film</a></p>
                <p class="col-md-6 xs-mt-30"><a class="button btn-outline-charcoal btn-lg btn-block" data-toggle="modal" data-target="#trailer" role="button">Watch the Trailer</a></p>
            </div>
            <div class="col-md-5 pull-right">
                <img src="images/jumbotron.png" class="img-fluid">
            </div>
        </div>
    </section>

    <section class="container-fluid row-charcoal">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-12 xs-mt-50 xs-mb-50">
                      <?php perch_content ('About Section'); ?>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <!-- See the Film -->
    <!--
    ================================================== -->
    <?php perch_content('See the Film'); ?>

    <!-- Reviews Carousel
    ================================================== -->
    <?php perch_content('Carousel'); ?>

    <!-- /.carousel -->
    <!-- Fork Challenge -->
    <!--
    ================================================== -->
    <section class="container xs-mt-50 xs-mb-70" id="challenge">
        <div class="row row-centered">
            <div class="col-md-12 col-centered">
                <a id="challenge"></a>
                <h2>The At the Fork Challenge</h2>
                <h3>21 Days of Recipes, Lifestyle Challenges & Shopping Guides</h3>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12 xs-mt-50 col-centered">
                <h3>What's in The Challenge</h3>
                <p>The At the Fork eating challenge is a national campaign that offers participants a step-by-step plan to improve the lives of farm animals while expanding an ethical eating lifestyle. You’ll receive 21 days of higher-welfare and plant-based
                    recipes and a “Daily Challenge Recipe” from featured chefs. In each email you’ll also receive helpful shopping guides, expert articles, information about higher-welfare products, fun facts about farm animals, and information on how
                    your voice and choices are making a difference.</p>
            </div>
        </div>
        <div class="row row-centered">
            <div class="col-md-12 xs-mt-50">
                <h3>Ready to make a difference?</h3>
                <p class="col-sm-4 col-xs-10 col-centered xs-mt-20"><a class="button btn-charcoal btn-lg btn-block" href="#see-the-film" role="button">See the Film</a></p>
            </div>
        </div>
    </section>
    <!-- /End of Fork Challenge -->
    <!-- Quotes -->
    <section id="quotes" class="container-fluid row-green">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>“YOU WON’T EVEN BELIEVE HOW GREAT THIS FILM IS.”</h2>
                        <h5>NAME PERSON, <em>Title of Somewhere</em></h5>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /End of Quotes -->

    <!-- Filmmakers -->
    <!--
    ================================================== -->
    <section class="container xs-mt-80 xs-mb-70" id="filmmakers">
        <div class="row row-centered">
            <div class="col-md-12 col-centered xs-mt-40 lg-mb-100">
                <a id="filmmakers"></a>
                <h2><span>Meet the Filmmakers</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 xs-mt-80">
                <img class="img-fluid" src="http://placehold.it/450x450" />
            </div>
            <div class="col-md-7 xs-mt-80">
                <h2 class="text-left">John Papola</h2>
                <h3 class="text-left">Director / Writer / Producer</h3>
                <p>Director John Papola is the CEO and co-founder of Emergent Order, and an award-winning creative with more than a 15 years of experience in broadcast and digital media. As a creative executive at MTV, Nickelodeon and Spike, John launched
                    numerous new shows, developed industry-leading branding practices, and produced/directed a number of documentary-driven specials. An economics geek with a passion for complex ideas, Papola is known in international education and public
                    policy circles as the co-creator of the Keynes vs. Hayek video series, which has brought macroeconomics to millions of people worldwide.</p>
            </div>
        </div>
        <div class="row xs-mt-50">
            <div class="col-md-7 xs-mt-50">
                <h2 class="text-left">Lisa Versaci</h2>
                <h3 class="text-left">Producer / Writer</h3>
                <p>Lisa Versaci is veteran television producer with an uncanny knack for spotting talent. While at Nickelodeon, Lisa produced longform specials for the network’s premiere properties and spearheaded many successful network initiatives. With
                    her husband John Papola and At the Fork editor Josh Meyers, Lisa is a co-founder and co-owner of Emergent Order, a creative agency based in Austin, Texas. Lisa has been on a plant-based diet for 26 years and is responsible for single-handedly
                    convincing Burger King to add a veggie burger to their permanent menu. </p>
            </div>
            <div class="col-md-5 xs-mt-50">
                <img class="img-fluid" src="http://placehold.it/450x450" />
            </div>
        </div>
        <div class="row row-centered xs-mt-50">
          <?php perch_content ('Filmmakers Secondary'); ?>
        </div>
    </section>
    <!-- /End of Filmmakers -->
    <!-- Credits -->
    <!--
    ================================================== -->
    <section class="container xs-mt-80 xs-mb-80">
        <div class="row row-centered">
            <div class="col-md-12">
                <h3>A production of</h3>
                <div class="xs-mt-50 col-md-3 col-sm-4 col-xs-6 col-centered">
                    <img class="img-fluid" src="images/emergentorder.png" />
                </div>

            </div>
        </div>
        <div class="row row-centered">
            <div class="col-md-12 xs-mt-70">
                <h3>In Partnership With</h3>
                <div class="xs-mt-50 col-md-3 col-sm-4 col-xs-6 col-centered">
                    <img class="img-fluid" src="images/logo-w-f@2x.png" />
                </div>
                <div class="col-md-offset-1 col-sm-offset-1 col-md-3 col-sm-4 col-xs-6 xs-mt-50 col-centered">
                    <img class="img-fluid" src="images/logo-h-s-u-s@2x.png" />
                </div>
            </div>
        </div>
        <div class="row row-centered xs-mb-50">
            <div class="col-md-12 xs-mt-70">
                <h3>Screening Partners</h3>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-sm-12 sm-mt-50 xs-mt-20">

                    <div id="partners-carousel">

                      <?php perch_content('Partners'); ?>


                    </div>
                  </div>
                </div>
              </div>
            </div>
    </section>
    <?php perch_form('form.html'); ?>

    <!-- /Credits -->
    <?php perch_layout('footer'); ?>

    <!-- Trailer Modal -->
    <?php perch_content('modal'); ?>

    <?php perch_layout('scripts'); ?>

</body>

</html>
