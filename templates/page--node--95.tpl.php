<script>
console.log('hia')
var $ = jQuery;
$(function(){
  $(".content a[href='#accordion']").click(function() {
      $(this).toggleClass('active');
      $(this).parent().nextAll().each(function() {

        if($(this).children("a") && $(this).children("a")[0]){
         if($($(this).children("a")[0]).attr("href") == "#accordion"){
          return false;
         }
        }
        // if ($(this)) {
        //   return false; // stop execution
        // }
        $(this).slideToggle(1);
      });
  });

  $(".content a[href='#accordion']").each(function(i,el) {

      $(el).parent().nextAll().each(function() {
        if($(this).children("a") && $(this).children("a")[0]){
         if($($(this).children("a")[0]).attr("href") == "#accordion"){
          return false;
         }
        }
        // if ($(this)) {
        //   return false; // stop execution
        // }
        $(this).slideToggle(1);
      });
  });


  // $(".content a[href='#accordion']").each(function(i,el){
  //   console.log(el)
  //   $(el).nextAll().each(function() {
  //         if (this.tagName == 'H2') {
  //           return false; // stop execution
  //         }
  //         $(this).slideToggle(1);
  //   });
  // });
})

</script>

<div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <!-- ______________________ HEADER _______________________ -->
  <div id="uo-header">
    
  </div>
  <header id="header">
    <?php if ($site_name): ?>
      <?php if ($title): ?>
        <div id="site-name">
          <div class="container">
            <a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>" rel="home"><?php print $site_name; ?></a>
          </div>
        </div>
      <?php else: /* Use h1 when the content title is empty */ ?>
        <h1 id="site-name">
          <div class="container">
            <a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>" rel="home"><?php print $site_name; ?></a>
          </div>
        </h1>
      <?php endif; ?>
    <?php endif; ?>
    <?php if ($page['navbar']): ?>
      <div id="navbar-region">
        <?php print render($page['navbar']); ?>
      </div>
    <?php endif; ?>
    <div class="container">
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>" rel="home" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>"/>
        </a>
      <?php endif; ?>

      <?php if ($site_slogan): ?>
        <div id="site-slogan"><?php print $site_slogan; ?></div>
      <?php endif; ?>

      <?php if ($page['header']): ?>
        <div id="header-region">
          <?php print render($page['header']); ?>
        </div>
      <?php endif; ?>
    </div>
  </header> <!-- /header -->
  <div id="img-header">
    <div class="container">
      <div class="title-container">
        <?php if ($title): ?>
          <h1 class="title">
            <?php print $title; ?>
          </h1>
          and:
          
        <?php endif; ?>
      </div>
    </div>
    <div id="background">
      <?php
        if ($my_image_field):
           print render($my_image_field);
        endif;
      ?>
    </div>
  </div>

  <!-- ______________________ MAIN _______________________ -->

  <div id="main">
    <?php if ($page['highlighted']): ?>
      <section id="highlighted">
        <?php print render($page['highlighted']) ?>
      </section>
    <?php endif; ?>

    <div class="container primary">

      
      <section id="content" class="sidebar">
        <a href="#" class="button btn-lg">before you arrive</a>
        <a href="#" class="button btn-lg">Iso Schedule</a>
        <a href="#" class="button btn-lg">Volunteer</a>
      </section>
      <section id="content" class="content-body">
  
          <?php if ($breadcrumb || $title|| $messages || $tabs || $action_links): ?>
            <!-- <div id="content-header"> -->

              <?php print $breadcrumb; ?>

              <?php if ($secondary_menu): ?>
                <?php print theme('links', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary', 'class' => array('sub-menu')))); ?>
              <?php endif; ?>

              <?php print render($title_prefix); ?>

              <?php if ($title && !$my_image_field): ?>
                <h1 class="title"><?php print $title; ?></h1>
              <?php endif; ?>

              <?php print render($title_suffix); ?>
              <?php print $messages; ?>
              <?php print render($page['help']); ?>

              <?php if (render($tabs)): ?>
                <div class="tabs"><?php print render($tabs); ?></div>
              <?php endif; ?>

              <?php if ($action_links): ?>
                <ul class="action-links"><?php print render($action_links); ?></ul>
              <?php endif; ?>

            <!-- </div> /#content-header -->
          <?php endif; ?>

          <div id="content-area">
            <?php print render($page['content']) ?>
          </div>

         <!--  <?php print $feed_icons; ?> -->

      </section> <!-- /content-inner /content -->

      <?php if ($page['sidebar_first']): ?>
        <aside id="sidebar-first">
          <?php print render($page['sidebar_first']); ?>
        </aside>
      <?php endif; ?> <!-- /sidebar-first -->

      <?php if ($page['sidebar_second']): ?>
        <aside id="sidebar-second">
          <?php print render($page['sidebar_second']); ?>
        </aside>
      <?php endif; ?> <!-- /sidebar-second -->

      <?php if ($page['content_second']): ?>
        <section id="content">

          <div id="second-content-area">
            <?php print render($page['content']) ?>
          </div>

        </section>
      <?php endif; ?> <!-- /second-content -->
    </div>

    <?php if ($page['prefooter']): ?>
      <section id="prefooter">
        <?php print render($page['prefooter']) ?>
      </section>
    <?php endif; ?>
  </div> <!-- /main -->

  <!-- ______________________ FOOTER _______________________ -->

  <?php if ($page['footer']): ?>
    <footer id="footer">
      <div class="container">
      <?php print render($page['footer']); ?>
      </div>
    </footer> <!-- /footer -->
  <?php endif; ?>

</div> <!-- /page -->
