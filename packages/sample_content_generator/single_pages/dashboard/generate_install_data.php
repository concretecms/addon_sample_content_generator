
<?=Loader::helper('concrete/dashboard')->getDashboardPaneHeaderWrapper(t('Generate Installation Data'))?>

<? if ($this->controller->getTask() == 'get_files') { ?>

	<h3><?=t('Files')?></h3>
	
	<a href="<?=$filesLink?>"><?=t("Download all file manager files.")?></a>

	<br/><br/>
	<a class="btn" href="<?=$this->url('/dashboard/generate_install_data')?>"><?=t('Back')?></a>


<? } else if ($this->controller->getTask() == 'get_content_xml' | $this->controller->getTask() == 'get_custom_content_xml') { ?>

<h3><?=t('Data')?></h3>

<textarea style="width: 100%; height: 800px"><?=$outputContent?></textarea>
<br/><br/>
<a class="btn" href="<?=$this->url('/dashboard/generate_install_data')?>"><?=t('Back')?></a>

<? } else { ?>

<h3><?=t('Archive Files.')?></h3>
<p><?=t('Generate a zip of all files in this site.')?></p>
<form method="post" action="<?=$this->action('get_files')?>">
    <button type="submit" class="btn btn-default"><?=t('Go')?></button>
</form>
<div class="ccm-spacer"></div>
<br/><br/>

<h3><?=t('Generate content.xml from current website.')?></h3>
<p><?=t('Once you generate this file you can include it in a custom starting point.')?></p>
<br />
<h4><?php echo t('Full Export'); ?></h4>
<form method="post" action="<?=$this->action('get_content_xml')?>">
    <p><?php echo t('Generate XML for all site data');?></p>
    <button type="submit" class="btn btn-default"><?=t('Generate Complete Site XML')?></button>
</form>
<br />
    <h4><?php echo t('Custom Export');?></h4>
    <form method="post" action="<?=$this->action('get_custom_content_xml')?>">
        <p><?php echo t('Generate XML with the following nodes/data:');?></p>
        <div class="ccm-search-field-content ccm-search-field-content-select2">
            <select multiple="multiple" name="nodes[]" class="nodelist" >
                <?php foreach ($allNodes as $node) { ?>
                    <option value="<?php echo $node;?>" <?php echo (in_array($node, $defaultNodes) ? 'selected="selected"' : ''); ?>>  <?php echo $node; ?></option>
                <?php } ?>
            </select>
        </div>
        <span class="help-block"><?php echo t('Data most commonly used in starting points has been pre-selected'); ?></span>
        <button type="submit" class="btn btn-default"><?=t('Generate Custom Site XML')?></button>
</form>

<div class="ccm-spacer"></div>

<? } ?>

<?=Loader::helper('concrete/dashboard')->getDashboardPaneFooterWrapper();?>

<script type="text/javascript">
    $(document).ready(function(){
        $('.nodelist').select2();
    });
</script>