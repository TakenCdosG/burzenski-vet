<div class="new_text ">  

<h2><?php print Date("F j, Y",strtotime($row->field_field_date_news[0]['raw']['value'])); ?></h2>
<h3><?php print $row->node_title; ?></h3>
<h4><?php print $fields['view_node']->content ?></h4>
<h4 class="view-all-news"><span class="field-content"><a href="content/news">VIEW ALL NEWS></a></span></h4>

<div class="text_content_bottom">
    <?php $global_node_config = node_load(98); ?>
    <?php print $global_node_config->field_home_quarter_content_quote['und'][0]['value']; ?>
    <h4 class=""><span class="field-content"><a href="content/gary-i-glassman">READ MORE></a></span></h4>
</div>

</div>

	
