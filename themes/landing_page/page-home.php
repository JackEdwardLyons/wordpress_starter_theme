<?php     
/*
 * Template Name: Home Page
 */


 /* Advanced Custom Fields 
 ========================== */
 // Remember to configure ACF with an about_text 
 // section in order to get this code to work.
$about_text       = get_field('about_text');
$about_background = get_field('about_background');

$jumbo_header     = get_field('jumbo_header');
$jumbo_text       = get_field('jumbo_text');
$jumbo_background = get_field('jumbo_bg');

get_template_part('includes/header'); 
?>


<!-- WELCOME SECTION
====================== -->
<div class="container">
   
	<div class="row"><br>

		<div class="jumbotron" 
             style="background: url('<?php echo $jumbo_background['url']; ?>') center; background-size: cover;">
          <h1><?php echo $jumbo_header; ?></h1>
          <p><?php echo $jumbo_text; ?></p>
          <ul class="horizontal-list">
            <li>
              <a class="btn btn-primary">
                <span class="fa fa-2x fa-instagram"></span>
              </a>
            </li>
            <li>
              <a class="btn btn-primary">
                <span class="fa fa-2x fa-facebook"></span>
              </a>
            </li>
            <li>
              <a class="btn btn-primary">
                <span class="fa fa-2x fa-github"></span>
              </a>
            </li>
            <li>
              <a class="btn btn-primary">
                <span class="fa fa-2x fa-codepen"></span>
              </a>
            </li>
            <li>
              <a class="btn btn-primary">
                <span class="fa fa-2x fa-free-code-camp"></span>
              </a>
            </li>
            <li>
              <a class="btn btn-primary">
                <span class="fa fa-2x fa-envelope-o"></span>
              </a>
            </li>
          </ul>
          
        </div>
	</div>
	
</div>



<!-- ABOUT US SECTION
====================== -->
<!-- if user uploaded photo -->
<?php if( !empty($about_background) ) : ?>
<div style="background: #FFF url('<?php echo $about_background['url']; ?>') bottom; background-size: cover;">
<?php endif; ?>
    <div class="container">
      <div class="row">

          <!-- About Us Text 
          ====================== -->
          <div class="col-xs-6 col-xs-offset-3 text-center">
              <?php echo $about_text; ?>
          </div>

      </div><!-- /.row -->
    </div><!-- /.container -->

</div><!-- end background image -->




<!-- FEATURE GALLERY
====================== -->







<?php get_template_part('includes/footer'); ?>
