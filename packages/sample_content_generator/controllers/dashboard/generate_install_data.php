<?

class DashboardGenerateInstallDataController extends Controller {

	public function get_files() {
		Loader::library("content/exporter");
		$export = new ContentExporter();
		$filesLink = $export->getFilesArchive();
		$this->set('filesLink', REL_DIR_FILES_UPLOADED . '/tmp/' . $filesLink . '.zip');
	}
	
	public function get_content_xml() {
		Loader::library("content/exporter");
		$export = new ContentExporter();
		$export->run();
		$export->removeItem('packages', 'package', 'sample_content_generator');
		$export->removeItem('singlepages', 'page', 'sample_content_generator');
		// check packages
		$xml = $export->output();
		
		$th = Loader::helper('text');
		$xml = $th->formatXML($xml);
		
		$this->set('outputContent', $xml);
	}
	
	
	
}