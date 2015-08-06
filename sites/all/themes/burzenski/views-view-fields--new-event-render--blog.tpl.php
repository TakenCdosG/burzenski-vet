<div class="new_text ">  
    <h2><?php print Date("F j, Y", $row->node_created); ?></h2>
    <h3><?php print $row->node_title; ?></h3>
    <!--<h4><?php print $fields['view_node']->content ?></h4>-->
    <div class="container-link">
        <h4><span class="field-content"><a href="content/news">READ NEWS></a></span></h4>
        <h4 class="middle"><span class="field-content"><a href="blog">VIEW BLOG></a></span></h4>
        <h4 class="last-h4"><span class="field-content"><a href="list-events">VIEW EVENTS></a></span></h4>
    </div>
    
    <div class="text_content_bottom">
        <?php $global_node_config = node_load(98); ?>
        <?php print $global_node_config->field_home_quarter_content_quote['und'][0]['value']; ?>
        <h4 class=""><span class="field-content"><a href="content/gary-i-glassman">READ MORE></a></span></h4>
    </div>
</div>





