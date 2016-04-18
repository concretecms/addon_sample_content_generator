<?php     

namespace Concrete\Package\SampleContentGenerator;
use Package;
use SinglePage;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends Package {

	protected $pkgHandle = 'sample_content_generator';
	protected $appVersionRequired = '5.5.0';
	protected $pkgVersion = '0.9'; 
	
	public function getPackageDescription() {
		return t('Allows a user to generate installation data for a concrete5 site or add-on.');
	}
	
	public function getPackageName() {
		return t('Sample Content and Install Generator');
	}
	
	public function install() {
		$pkg = parent::install();
		$p = SinglePage::add('/dashboard/generate_install_data',$pkg);
	}

}