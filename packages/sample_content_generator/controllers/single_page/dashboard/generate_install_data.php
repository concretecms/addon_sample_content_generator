<?

namespace Concrete\Package\SampleContentGenerator\Controller\SinglePage\Dashboard;
use \Concrete\Core\Page\Controller\PageController;
use \Concrete\Core\Backup\ContentExporter;
use Loader;
use View;

class GenerateInstallData extends PageController {
    public function view() {
        $v = View::getInstance();
        $v->requireAsset('select2');

        $defaultNodes = array('pagetypes', 'attributekeys', 'attributesets', 'pagetemplates', 'themes', 'stacks', 'pages', 'sociallinks','pagefeeds');
        $allNodes = array('attributecategories','features','featurecategories','conversationeditors','conversationratingtypes','pagetypepublishtargettypes','composercontroltypes','pagetypes','attributetypes','blocktypes','blocktypesets','gatheringsources','gatheringitemtemplates','attributekeys', 'attributesets', 'pagetemplates', 'themes','packages','permissionaccessentitytypes','permissionkeys','workflowtypes','jobs','singlepages','stacks', 'pages', 'systemcaptcha','sociallinks','pagefeeds','thumbnailtypes','trees');

        $this->set('defaultNodes', $defaultNodes);
        $this->set('allNodes', $allNodes);
    }

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

    public function get_custom_content_xml() {
        $export = new ContentExporter();
        $export->run();
        $export->removeItem('packages', 'package', 'sample_content_generator');
        $export->removeItem('singlepages', 'page', 'sample_content_generator');
        // check packages
        $xml = $export->output();

        $th = Loader::helper('text');
        $xml = $th->formatXML($xml);

        $nodestooutput = $this->post('nodes');

        $dom = new \DOMDocument('1.0');
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;
        $dom->loadXML($xml);

        $domElemsToRemove = array();

        foreach($dom->childNodes as $child) {
            foreach($child->childNodes as $c) {
                if (!in_array($c->nodeName, $nodestooutput)) {
                    $domElemsToRemove[] = $c;
                }
            }
        }

        foreach( $domElemsToRemove as $domElement ){
            $domElement->parentNode->removeChild($domElement);
        }

        $this->set('outputContent', $dom->saveXML());
    }
}