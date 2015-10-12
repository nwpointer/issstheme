<?php 
  $node = node_load($nid);
  // required fields
  $header = render($content['field_header']);
  $body = render($content['body']);
  $buttonText = render($content['field_button_text']);
  
  $buttonUrl = field_get_items('node', $node, 'field_button_link');
  $buttonUrl = $buttonUrl[0]["value"];
  $backgroundItems = field_get_items('node', $node, 'field_background');
  $backgroundItems = $backgroundItems[0]["uri"];
  $background = file_create_url($backgroundItems);

?>



<article 
  class="<?php print $classes; ?>" 
  data-nid="<?php print $node->nid; ?>" 
  style="<?php print "background:url($background)";  ?>">
  <div class="container">
    <div class="content">
      <?php
        print("
          <h1> 
            $header 
          </h1>
          <p>
            $body
          </p>
          <a href='$buttonUrl' class='button'> $buttonText </a>
        ");
       ?>
    </div> <!-- /content -->
  </div>
</article> <!-- /article #node -->