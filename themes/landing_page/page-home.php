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

get_template_part('includes/header'); 
?>


<!-- WELCOME SECTION
====================== -->
<style>
.jumbotron{
    border-radius:0px!important;
    box-shadow:1px 1px 4px rgba(0,0,0,0.4);
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    background-image: url(https://static.pexels.com/photos/24324/pexels-photo.jpg); 
    position: relative;
    height: 100%;
}

.jumbotron .btn{
    border-radius:0px!important;
    box-shadow:1px 1px 4px rgba(0,0,0,0.4);
    padding:10px 40px;
}
  
  .horizontal-list {
    list-style: none;
    padding: 0;
  }
  .horizontal-list > li {
    display: inline-block;
  }
</style>
<div class="container">
   
	<div class="row"><br>

		<div class="jumbotron">
          <h1>Jumbotron</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nunc est, tempus et venenatis id, ornare sed lorem.Curabitur sed ipsum et odio interdum pharetra nec sed libero. Sed velit massa, consectetur in mollis eget, elementum eu diam.</p>
          <p><a class="btn btn-primary btn-lg">Learn more</a></p>
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

<?php endif; ?>


<!-- FEATURE GALLERY
====================== -->







<?php get_template_part('includes/footer'); ?>
