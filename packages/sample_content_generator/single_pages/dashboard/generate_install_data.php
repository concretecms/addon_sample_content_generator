
<?=Loader::helper('concrete/dashboard')->getDashboardPaneHeaderWrapper(t('Generate Installation Data'))?>

<? if ($this->controller->getTask() == 'get_files') { ?>

	<h3><?=t('Files')?></h3>
	
	<a href="<?=$filesLink?>"><?=t("Download all file manager files.")?></a>

	<br/><br/>
	<a class="btn" href="<?=$this->url('/dashboard/generate_install_data')?>"><?=t('Back')?></a>


<? } else if ($this->controller->getTask() == 'get_content_xml') { ?>

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
<form method="post" action="<?=$this->action('get_content_xml')?>">
    <button type="submit" class="btn btn-default"><?=t('Go')?></button>
</form>
<div class="ccm-spacer"></div>

<? } ?>

<?=Loader::helper('concrete/dashboard')->getDashboardPaneFooterWrapper();?>