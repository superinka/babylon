<!--main-menu -->
<div class="main-menu mt30">
  <div class="container"> 
  <div class="row">   
      <nav class = "navbar navbar-default" role = "navigation">
        <div class = "navbar-header">
          <button type = "button" class = "navbar-toggle" 
             data-toggle = "collapse" data-target = "#navbar-collapse">
             <span class = "sr-only">Toggle navigation</span>
             <span class = "icon-bar"></span>
             <span class = "icon-bar"></span>
             <span class = "icon-bar"></span>
          </button>
        </div>
        <?php /* Primary navigation */
        wp_nav_menu( array(
          'menu' => 'main-menu',
          'depth' => 2,
          'container' => 'collapse navbar-collapse',
          'menu_class' => 'nav navbar-nav ext-menu',
          //Process nav menu using our custom nav walker
          'walker' => new wp_bootstrap_navwalker())
        );
        ?>
      </nav>
      
  </div>
  </div>  
</div>
<!--main-menu -->