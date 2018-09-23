<?php /*
  Template Name: Staff Template
 */ ?>


<?php get_header(); ?>


 <?php 

$headerimg = get_post_meta(get_the_ID(), 'headerimg', true);
$sidebar = get_post_meta(get_the_ID(), 'sidebar', true);

?>

 <?php if ($sidebar  == 'yes') { ?>

<div class="pageContent">
    
        <?php } else { ?>

    <div class="pageContent full">
        
        <?php } ?>

        
          <?php if( $headerimg) { ?>
    
        <div class="container">
            
                 <?php if ($sidebar  == 'yes') { ?>
            
            <div class="nine columns offset-by-one">
                
                        <?php } else { ?>
                
                     <div class="fourteen columns offset-by-one">
                
                        <?php } ?>
                
                    <?php } else { ?>
                
                     <div class="container noBannerContent">
                         
                                <?php if ($sidebar  == 'yes') { ?>
                         
                 <div class="eleven columns">
                     
                             <?php } else { ?>
                
                        <div class="sixteen columns">
                            
                             <?php } ?>
                     
                    <?php } ?>
                
                <h1 class="pageTitle"><?php the_title(); ?></h1>
                <p class="md-quote">"We believe that we bear the image and likeness of God inside of us and that this is our deepest reality. We are made in God’s image. However, we tend to picture this in a naïve, romantic, and pious way. We imagine that somewhere inside us there is a beautiful icon of God stamped into our souls. That may well be, but God, as Scripture assures us, is more than an icon. God is fire—wild, infinite, ineffable, non-containable.”
                <span>- Fr Ron Rolheiser, June 25, 2006</span></p>

                <p class="md-paragraph">The most fundamental need of people is something that most people take for granted - a meaningful place in a healthy community, a sense of belonging. Without it, drug rehab, improved housing or employment programs have little effect. Without it, people remain trapped in a lifestyle that is difficult to escape. When people do not feel like they belong, they just cannot seem to recover.</p>
  
            
                  <ul class="clearfix">
                    
                       <?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$arguments = array(
    'post_type' => 'post_staff',
    'post_status' => 'publish',
    'paged' => $paged
);

$staff_query = new WP_Query($arguments);

dd_set_query($staff_query);

?>
                     
                       <?php if ($staff_query->have_posts()) : while ($staff_query->have_posts()) : $staff_query->the_post(); ?>
                      
                      
                             <?php 

$bigimg = get_post_meta(get_the_ID(), 'bigimg', true);
$info1 = get_post_meta(get_the_ID(), 'info1', true);
$info2 = get_post_meta(get_the_ID(), 'info2', true);
$info3 = get_post_meta(get_the_ID(), 'info3', true);
$info4 = get_post_meta(get_the_ID(), 'info4', true);

?>
                      

                        <li <?php post_class('dd_board_post clearfix'); ?>>
                                       
                                            <?php if( $bigimg) { ?>
                                
                                   <div class="dd_board_post_thumb">
                              
                               <a href="<?php the_permalink(); ?>"><img src="<?php echo $bigimg; ?>" alt="" /></a>
                              
                          </div>
                        
                                        <?php } ?>   
                            
                                <div class="dd_board_post_details">
                              
                              <h4><a class="dd_board_post_title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                              <?php the_excerpt(); ?>
                                <?php if( $info1) { ?>
                                
                                <h4><?php echo $info1; ?></h4>
                                
                                      <?php } ?>
                                
                                    <?php if( $info2) { ?>
                                
                               <h4><?php echo $info2; ?></h4>

                         <?php } ?>
                               
                               <?php if( $info3) { ?>
                                
                               <h4><?php echo $info3; ?></h4>

                         <?php } ?>
                               
                               <?php if( $info4) { ?>
                                
                               <h4><?php echo $info4; ?></h4>

                         <?php } ?>
                              
                          </div>
                            
                        </li>

        
                        
          
                    
      <?php endwhile; ?>
                    

<?php endif; ?>
                     
                 </ul>

                 
        <?php
                            kriesi_pagination();

                            dd_restore_query();
?>                  
                 
      
        
                
            </div>
        
             <?php if ($sidebar  == 'yes') { ?>
            
                        <ul class="sidebar four columns offset-by-one clearfix">
                             
             <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Staff")) ; ?>
                             
                             </ul>
                
                        <?php }  ?>
                
        </div>
        
    </div>



<?php get_footer(); ?>