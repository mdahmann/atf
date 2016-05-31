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
    <?php perch_content ('Filmmakers Section'); ?>

    <!-- /End of Filmmakers -->
    <!-- Credits -->
    <!--
    ================================================== -->
    <?php perch_content ('Credits'); ?>

    <?php perch_content ('Screening Partners'); ?>


    <?php perch_form('form.html'); ?>

    <!-- /Credits -->
    <?php perch_layout('footer'); ?>

    <!-- Trailer Modal -->
    <?php perch_content('modal'); ?>

    <?php perch_layout('scripts'); ?>

</body>

</html>
