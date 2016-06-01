<?php include ('../perch/runtime.php'); ?>

    <?php perch_layout('header'); ?>



    <!-- Main jumbotron -->
    <section class="jumbotron">
        <div class="container-fluid">
            <div class="col-xs-12 xl-mt-100 sm-mt-50 title text-center">
              <h2><?php perch_content ('Thank You Title'); ?></h2>
            </div>
            <div class="col-xs-12 xs-mt-50 lg-mb-50 title text-center">
              <p><?php perch_content ('Thank You Content'); ?></p>
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
