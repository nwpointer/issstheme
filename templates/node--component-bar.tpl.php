<?php 
  $node = node_load($nid);
  // required fields
  $body = render($content['body']);
  $background = field_get_items('node', $node, 'field_bar_color');
  $background = $background[0]["value"];

?>

<div class="bar" style="<?php print "background-color:$background";  ?>"></div>