<?php include ('perch/runtime.php'); ?>

    <?php perch_layout('header'); ?>



    <!-- Main jumbotron -->
    <section class="jumbotron">
        <div class="container-fluid">
            <div class="col-lg-offset-1 col-md-offset-1 col-lg-5 col-md-6 xl-mt-100 sm-mt-50 title">
                <h1>At the Fork</h1>
                <h4>A film about husbandry and wife</h4>
                <h6 class="col-md-offset-1 col-md-10 hidden-xs ">"A beautiful, caring, sensitive and surprisingly non-judgmental look at how most animals are produced in the United States.”  - Mark Bittman</h6>
                <p class="col-md-6 col-sm-6 xs-mt-30"><a class="button btn-charcoal btn-lg btn-block" href="#see-the-film" role="button">See the Film</a></p>
                <p class="col-md-6 col-sm-6 sm-mt-30 xs-mt-20"><a class="button btn-outline-charcoal btn-lg btn-block" data-toggle="modal" data-target="#trailer" role="button">Watch the Teaser</a></p>
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
    <?php perch_content('The Challenge'); ?>


    <!-- /End of Fork Challenge -->
    <!-- Quotes -->
    <?php perch_content('Quote'); ?>

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



    <!-- /Credits -->
    <?php perch_content('Footer'); ?>

    <!-- Trailer Modal -->
    <?php perch_content('modal'); ?>

    <?php perch_layout('scripts'); ?>

</body>

</html>
