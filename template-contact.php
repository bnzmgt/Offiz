<?php
/**
 * Template Name: Contact
 */

get_header();

?>
<div id="content" class="page">
    <div class="page-intro">
        <?php if( get_field('contact_cover') ): ?>
        <div class="intro-inner" style="background-image: url('<?php the_field('contact_cover'); ?>')">
            <?php endif; ?>
            <div class="outer-inner">
                <div class="container inner-box clearfix">
                    <div class="inner-box-container">
                        <div class="intro-title h-7">
                            
                        </div>
                    </div><!-- end .inner-container -->
                </div><!-- end .inner-box -->
            </div><!-- end .outer-inner -->
        </div><!-- end .intro-inner -->
    </div>
    <!-- end .page-intro -->

    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="container w-11/12 lg:w-9/12 mx-auto px-4 md:px-8">
            <div class="flex flex-col md:flex-row mb-6">
                <div class="flex w-full md:w-1/3 flex-row md:flex-col">
                    <h1 class="mb-4 text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl"><?php the_title(); ?> </h1>
                </div>
                <div class="flex w-full md:w-2/3 flex-col">
                    <?php echo the_content(); ?>

                    <?php echo do_shortcode('[simple_contact_form]'); ?>

                    <div class="mt-4">
                        <?php the_field('location_map'); ?>
                    </div>
                </div>
            </div>
           
        </div>
    </div>

    <!-- end .content-wrap -->

</div>
<!-- end .page -->
<?php get_footer(); ?>