<?php include ('../perch/runtime.php'); ?>

    <?php perch_layout('header'); ?>



    <!-- Main jumbotron -->
    <section class="jumbotron">
        <div class="container-fluid">
            <div class="col-xs-12 xl-mt-100 sm-mt-50 title text-center">
              <?php perch_content ('Thank You Title'); ?>
            </div>
            <div class="col-xs-12 lg-mt-100 xs-mt-50 title text-center">
              <?php perch_content ('Thank You Content'); ?>
            </div>
        </div>
    </section>




    <!-- /Credits -->
    <?php perch_content('Footer'); ?>

    <!-- Trailer Modal -->
    <?php perch_content('trailer-modal'); ?>

    <?php perch_content('modal'); ?>

    <?php perch_layout('scripts'); ?>

</body>

</html>
