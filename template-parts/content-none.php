<?php
/**
 * Content to display on page where no content is found
 */
?>

<section class="element-spacing medium border-bottom-over-white">
    <div class="section-header">
        <h2 class="section-title">Services</h2>
        <div class="section-description">
            <p>If you're in need of services, we've got you covered. Check out our offers below and reach out if you have any questions.</p>
        </div>
    </div>
</section>
<?php echo get_crispydiv_services_grid( true, true, array( 'background-white' ) ); ?>

<?php if ( ! empty( get_crispydiv_courses_grid() ) ) { ?>
    <section class="element-spacing medium border-bottom-over-white">
        <div class="section-header">
            <h2 class="section-title">Courses</h2>
            <div class="section-description">
                <p>You're a do-it-yourself-er? Awesome. We're into that too. Check out our Courses to learn how to handle custom development and design.</p>
            </div>
        </div>
    </section>
    <?php echo get_crispydiv_courses_grid(); ?>
<?php } ?>
