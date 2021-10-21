
<?php


	get_header();

?>

<?php
$post_date = get_the_date( 'm d Y' ); 

?>

<section id="news_inner_sec_1" class="sidebar">
    <div id="news_inner_sec_1_sub">
        <div id="news_inner_sec_1_container" class="border-for-left">
            <!-- <div class="bg-layer h-100"> -->
                <div class="row m-0">
                    <div class="col-lg-12 pagepath">
                            <ul>
                                <li><a href="<?php echo site_url();?>"><p class="para-pg">HOME</p></a></li>
                                <li><p class="para-pg-arw">></p></li>
                                <li><a href="<?php echo site_url();?>/news/"><p class="para-pg">NEWS</p></a></li>
                                <li><p class="para-pg-arw">></p></li>
                                <li><p class="para-pg clr">Title of article</p></li>
                            </ul>
                    </div>
                </div>
                <div class="row hr-row m-0">
                    <div class="col-lg-12">
                            <hr>
                    </div>
                </div>


                <div class="row m-0">
                    <div class="col-lg-12">
                        <h1 class="site_main_title"><?php the_title(); ?></h1>
                        <img class="img-fluid" src="<?php echo get_field('news_banner'); ?>" alt="">
                        <p class="site_sub_title pt-4"><?php echo $post_date; ?></p>
                    </div>
                </div>

                <div class="row m-0">
                    <div class="col-lg-12 p-0">
                        <div class="news_content">

                        <div class="colmnews">
                                <p class="para"><?php echo get_field('paragraph_1'); ?></p>
                        </div>

                        <div class="colmnews">
                            <img class="img-fluid" src="<?php echo get_field('sub_image_2'); ?>" alt="">
                        </div>

                        <div class="colmnews">
                            <img class="img-fluid" src="<?php echo get_field('sub_image_1'); ?>" alt="">
                        </div>

                        <div class="colmnews">
                            <p class="para"><?php echo get_field('paragraph_2'); ?></p>
                        </div>
                        </div>
                    </div>
                </div>

                

                <div class="row m-0 prvnextrow">
                    <div class="col-lg-6 p-0 prv">
                        <?php 
                         $prev_post = get_adjacent_post(false, '', true);
                            if(!empty($prev_post)) {
                                $prevpost = get_permalink($prev_post->ID);
                                ?>
                                 <p class="site_sub_title">PREVIOUS</p>
                                <a href="<?php echo $prevpost; ?>"><div class="viewmore-btn"><p><</p></div></a>
                                <?php
                            }
                        
                        ?>
                   
                    </div>
                    <div class="col-lg-6 p-0 nest">
                        <?php
                            $next_post = get_adjacent_post(false, '', false);
                            if(!empty($next_post)) {
                                $nextpost = get_permalink($next_post->ID);
                                 ?>
                                 <a href="<?php echo $nextpost; ?>"><div class="viewmore-btn"><p>></p></div></a>
                                 <p class="site_sub_title">NEWT</p>
                                <?php
                            }
                        ?>
                       
                    </div>
                    <div class="col-lg-12">
                        <hr>
                    </div>
                    <hr>
                </div>



            
            <!-- </div> -->
        </div>
    </div>
</section>


<?php

	get_footer();

?>