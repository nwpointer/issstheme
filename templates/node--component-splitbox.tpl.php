<?php 
  $node = node_load($nid);
  // required fields
  $body = render($content['body']);
  $backgroundItems = field_get_items('node', $node, 'field_splitbox_background');
  $backgroundItems = $backgroundItems[0]["uri"];
  $background = file_create_url($backgroundItems);

?>


<!-- <article 
  class="<?php print $classes; ?>" 
  data-nid="<?php print $node->nid; ?>"
  style="float:left"
>
  <div class="splitbox-bk" style="<?php print "background:url($background)";  ?>">
      <?php print($body) ?>
  </div>

  <div class="splitbox-content">
   <div class="content">
     <?php print($body) ?>
   </div>
  </div>
</article> -->

<div id="container2">
    <div id="container1"  >
      <div id="col1" style="<?php print "background:url($background)";  ?>" >
        this layout requires text here or the div will collapse
      </div>
      <div id="col2">
        <div class="content">
        <?php print($body) ?>
        </div>
        
      </div>
    </div>
  </div>