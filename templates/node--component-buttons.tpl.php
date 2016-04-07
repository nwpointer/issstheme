<?php 
  $node = node_load($nid);
  // required fields
  $body = render($content['body']);
  $title = render($content['field_header_button']);
  $backgroundItems = field_get_items('node', $node, 'field_background_image');
  $backgroundItems = $backgroundItems[0]["uri"];
  $background = file_create_url($backgroundItems);

  $button1Text = render($content['field_button1_text']);
  $button1Url = field_get_items('node', $node, 'field_button1_link');
  $button1Url = $button1Url[0]["value"];

  $button2Text = render($content['field_button2_text']);
  $button2Url = field_get_items('node', $node, 'field_button2_link');
  $button2Url = $button2Url[0]["value"];

  $button3Text = render($content['field_button3_text']);
  $button3Url = field_get_items('node', $node, 'field_button3_link');
  $button3Url = $button3Url[0]["value"];

  $button4Text = render($content['field_button4_text']);
  $button4Url = field_get_items('node', $node, 'field_button4_link');
  $button4Url = $button4Url[0]["value"];

  $button5Text = render($content['field_button5_text']);
  $button5Url = field_get_items('node', $node, 'field_button5_link');
  $button5Url = $button5Url[0]["value"];

  $button6Text = render($content['field_button6_text']);
  $button6Url = field_get_items('node', $node, 'field_button6_link');
  $button6Url = $button6Url[0]["value"];

?>

<article 
  class="<?php print $classes; ?> buttonbackground" 
  data-nid="<?php print $node->nid; ?>" 
  style="<?php print "background:url($background) no-repeat center center fixed; background-size: cover"; ?>">
    <div class="content">
      <div class="shadowed">
        <?php
          print("
            <h1> 
              $title 
            </h1>
            <div class='buttonrow'>
	            <a href='$button1Url' class='yellowbutton'> $button1Text </a>
	            <a href='$button2Url' class='yellowbutton'> $button2Text </a>
	            <a href='$button3Url' class='yellowbutton'> $button3Text </a>
            </div>
            <div class='buttonrow'>
	            <a href='$button4Url' class='yellowbutton'> $button4Text </a>
	            <a href='$button5Url' class='yellowbutton'> $button5Text </a>
	            <a href='$button6Url' class='yellowbutton'> $button6Text </a>
	        </div>
          ");
         ?>
      </div>
    </div> <!-- /content -->
</article> <!-- /article #node -->