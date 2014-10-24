<?

namespace Concrete\Package\SampleContentGenerator\Controller\SinglePage\Dashboard;
use \Concrete\Core\Page\Controller\PageController;
use \Concrete\Core\Backup\ContentExporter;
use Loader;
class GenerateInstallData extends PageController {

	public function get_files() {
		$export = new ContentExporter();
		$filesLink = $export->getFilesArchive();
		$this->set('filesLink', REL_DIR_FILES_UPLOADED . '/tmp/' . $filesLink . '.zip');
	}
	
	public function get_content_xml() {
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