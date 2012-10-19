<?php 
Loader::library("content/exporter");

class DashboardGenerateInstallDataController extends Controller {

	public function get_files() {
		$export = new ContentExporter();
		$filesLink = $export->getFilesArchive();
		$this->set('filesLink', REL_DIR_FILES_UPLOADED . '/tmp/' . $filesLink . '.zip');
	}
	
	public function get_content_xml() {
//		Loader::library("content/exporter");
		$export = new ContentExporter2();
		$export->run();
		$export->removeItem('packages', 'package', 'sample_content_generator');
		$export->removeItem('singlepages', 'page', 'sample_content_generator');
		
		$export->removeItem('attributecategories', 'category', 'collection');
		$export->removeItem('attributecategories', 'category', 'user');
		$export->removeItem('attributecategories', 'category', 'file');
		
		$export->removeItem('attributetypes', 'attributetype', 'text');
		$export->removeItem('attributetypes', 'attributetype', 'textarea');
		$export->removeItem('attributetypes', 'attributetype', 'boolean');
		$export->removeItem('attributetypes', 'attributetype', 'date_time');
		$export->removeItem('attributetypes', 'attributetype', 'image_file');
		$export->removeItem('attributetypes', 'attributetype', 'number');
		$export->removeItem('attributetypes', 'attributetype', 'rating');
		$export->removeItem('attributetypes', 'attributetype', 'select');
		$export->removeItem('attributetypes', 'attributetype', 'address');
				
		$export->removeItem('blocktypes', 'blocktype', 'autonav');
		$export->removeItem('blocktypes', 'blocktype', 'content');
		$export->removeItem('blocktypes', 'blocktype', 'dashboard_app_status');
		$export->removeItem('blocktypes', 'blocktype', 'dashboard_featured_addon');
		$export->removeItem('blocktypes', 'blocktype', 'dashboard_featured_theme');
		$export->removeItem('blocktypes', 'blocktype', 'dashboard_newsflow_latest');
		$export->removeItem('blocktypes', 'blocktype', 'dashboard_site_activity');
		$export->removeItem('blocktypes', 'blocktype', 'date_nav');
		$export->removeItem('blocktypes', 'blocktype', 'external_form');
		$export->removeItem('blocktypes', 'blocktype', 'file');
		$export->removeItem('blocktypes', 'blocktype', 'flash_content');
		$export->removeItem('blocktypes', 'blocktype', 'form');
		$export->removeItem('blocktypes', 'blocktype', 'google_map');
		$export->removeItem('blocktypes', 'blocktype', 'guestbook');
		$export->removeItem('blocktypes', 'blocktype', 'html');
		$export->removeItem('blocktypes', 'blocktype', 'image');
		$export->removeItem('blocktypes', 'blocktype', 'next_previous');
		$export->removeItem('blocktypes', 'blocktype', 'page_list');
		$export->removeItem('blocktypes', 'blocktype', 'rss_displayer');
		$export->removeItem('blocktypes', 'blocktype', 'core_scrapbook_display');
		$export->removeItem('blocktypes', 'blocktype', 'search');
		$export->removeItem('blocktypes', 'blocktype', 'slideshow');
		$export->removeItem('blocktypes', 'blocktype', 'core_stack_display');
		$export->removeItem('blocktypes', 'blocktype', 'survey');
		$export->removeItem('blocktypes', 'blocktype', 'tags');
		$export->removeItem('blocktypes', 'blocktype', 'video');
		$export->removeItem('blocktypes', 'blocktype', 'youtube');
		
		$export->removeItem('attributekeys', 'attributekey', 'meta_title');
		$export->removeItem('attributekeys', 'attributekey', 'meta_description');
		$export->removeItem('attributekeys', 'attributekey', 'meta_keywords');
		$export->removeItem('attributekeys', 'attributekey', 'exclude_nav');
		$export->removeItem('attributekeys', 'attributekey', 'exclude_page_list');
		$export->removeItem('attributekeys', 'attributekey', 'header_extra_content');
		$export->removeItem('attributekeys', 'attributekey', 'exclude_search_index');
		$export->removeItem('attributekeys', 'attributekey', 'exclude_sitemapxml');
		$export->removeItem('attributekeys', 'attributekey', 'profile_private_messages_enabled');
		$export->removeItem('attributekeys', 'attributekey', 'profile_private_messages_notification_enabled');
		$export->removeItem('attributekeys', 'attributekey', 'width');
		$export->removeItem('attributekeys', 'attributekey', 'height');
		$export->removeItem('attributekeys', 'attributekey', 'icon_dashboard');
		
		$export->removeItem('attributesets', 'attributeset', 'page_header');
		$export->removeItem('attributesets', 'attributeset', 'navigation');
		
//		$export->removeItem('themes', 'theme', 'default');
//		$export->removeItem('themes', 'theme', 'greensalad');
//		$export->removeItem('themes', 'theme', 'dark_chocolate');
//		$export->removeItem('themes', 'theme', 'greek_yogurt');
		
		$export->removeItem('permissionaccessentitytypes', 'permissionaccessentitytype', 'group');
		$export->removeItem('permissionaccessentitytypes', 'permissionaccessentitytype', 'user');
		$export->removeItem('permissionaccessentitytypes', 'permissionaccessentitytype', 'group_set');
		$export->removeItem('permissionaccessentitytypes', 'permissionaccessentitytype', 'group_combination');
		$export->removeItem('permissionaccessentitytypes', 'permissionaccessentitytype', 'page_owner');
		$export->removeItem('permissionaccessentitytypes', 'permissionaccessentitytype', 'file_uploader');
		
		$export->removeItem('permissionkeys', 'permissionkey', 'view_page');
		$export->removeItem('permissionkeys', 'permissionkey', 'view_page_versions');
		$export->removeItem('permissionkeys', 'permissionkey', 'preview_page_as_user');
		$export->removeItem('permissionkeys', 'permissionkey', 'edit_page_properties');
		$export->removeItem('permissionkeys', 'permissionkey', 'edit_page_contents');
		$export->removeItem('permissionkeys', 'permissionkey', 'edit_page_speed_settings');
		$export->removeItem('permissionkeys', 'permissionkey', 'edit_page_theme');
		$export->removeItem('permissionkeys', 'permissionkey', 'edit_page_type');
		$export->removeItem('permissionkeys', 'permissionkey', 'edit_page_permissions');
		$export->removeItem('permissionkeys', 'permissionkey', 'delete_page');
		$export->removeItem('permissionkeys', 'permissionkey', 'delete_page_versions');
		$export->removeItem('permissionkeys', 'permissionkey', 'approve_page_versions');
		$export->removeItem('permissionkeys', 'permissionkey', 'add_subpage');
		$export->removeItem('permissionkeys', 'permissionkey', 'move_or_copy_page');
		$export->removeItem('permissionkeys', 'permissionkey', 'schedule_page_contents_guest_access');
		$export->removeItem('permissionkeys', 'permissionkey', 'access_user_search');
		$export->removeItem('permissionkeys', 'permissionkey', 'edit_user_properties');
		$export->removeItem('permissionkeys', 'permissionkey', 'view_user_attributes');
		$export->removeItem('permissionkeys', 'permissionkey', 'activate_user');
		$export->removeItem('permissionkeys', 'permissionkey', 'sudo');
		$export->removeItem('permissionkeys', 'permissionkey', 'delete_user');
		$export->removeItem('permissionkeys', 'permissionkey', 'access_group_search');
		$export->removeItem('permissionkeys', 'permissionkey', 'edit_groups');
		$export->removeItem('permissionkeys', 'permissionkey', 'assign_user_groups');
		$export->removeItem('permissionkeys', 'permissionkey', 'view_file_set_file');
		$export->removeItem('permissionkeys', 'permissionkey', 'search_file_set');
		$export->removeItem('permissionkeys', 'permissionkey', 'edit_file_set_file_properties');
		$export->removeItem('permissionkeys', 'permissionkey', 'edit_file_set_file_contents');
		$export->removeItem('permissionkeys', 'permissionkey', 'copy_file_set_files');
		$export->removeItem('permissionkeys', 'permissionkey', 'edit_file_set_permissions');
		$export->removeItem('permissionkeys', 'permissionkey', 'delete_file_set');
		$export->removeItem('permissionkeys', 'permissionkey', 'delete_file_set_files');
		$export->removeItem('permissionkeys', 'permissionkey', 'add_file');
		$export->removeItem('permissionkeys', 'permissionkey', 'view_file');
		$export->removeItem('permissionkeys', 'permissionkey', 'view_file_in_file_manager');
		$export->removeItem('permissionkeys', 'permissionkey', 'edit_file_properties');
		$export->removeItem('permissionkeys', 'permissionkey', 'edit_file_contents');
		$export->removeItem('permissionkeys', 'permissionkey', 'copy_file');
		$export->removeItem('permissionkeys', 'permissionkey', 'edit_file_permissions');
		$export->removeItem('permissionkeys', 'permissionkey', 'delete_file');
		$export->removeItem('permissionkeys', 'permissionkey', 'view_area');
		$export->removeItem('permissionkeys', 'permissionkey', 'edit_area_contents');
		$export->removeItem('permissionkeys', 'permissionkey', 'add_block_to_area');
		$export->removeItem('permissionkeys', 'permissionkey', 'add_stack_to_area');
		$export->removeItem('permissionkeys', 'permissionkey', 'add_layout_to_area');
		$export->removeItem('permissionkeys', 'permissionkey', 'edit_area_design');
		$export->removeItem('permissionkeys', 'permissionkey', 'edit_area_permissions');
		$export->removeItem('permissionkeys', 'permissionkey', 'delete_area_contents');
		$export->removeItem('permissionkeys', 'permissionkey', 'schedule_area_contents_guest_access');
		$export->removeItem('permissionkeys', 'permissionkey', 'add_block');
		$export->removeItem('permissionkeys', 'permissionkey', 'add_stack');
		$export->removeItem('permissionkeys', 'permissionkey', 'view_block');
		$export->removeItem('permissionkeys', 'permissionkey', 'edit_block');
		$export->removeItem('permissionkeys', 'permissionkey', 'edit_block_custom_template');
		$export->removeItem('permissionkeys', 'permissionkey', 'delete_block');
		$export->removeItem('permissionkeys', 'permissionkey', 'edit_block_design');
		$export->removeItem('permissionkeys', 'permissionkey', 'edit_block_permissions');
		$export->removeItem('permissionkeys', 'permissionkey', 'schedule_guest_access');
		$export->removeItem('permissionkeys', 'permissionkey', 'backup');
		$export->removeItem('permissionkeys', 'permissionkey', 'access_task_permissions');
		$export->removeItem('permissionkeys', 'permissionkey', 'access_page_defaults');
		$export->removeItem('permissionkeys', 'permissionkey', 'empty_trash');
		$export->removeItem('permissionkeys', 'permissionkey', 'access_sitemap');
		$export->removeItem('permissionkeys', 'permissionkey', 'uninstall_packages');
		$export->removeItem('permissionkeys', 'permissionkey', 'install_packages');
		$export->removeItem('permissionkeys', 'permissionkey', 'view_newsflow');
		$export->removeItem('permissionkeys', 'permissionkey', 'approve_basic_workflow_action');
		$export->removeItem('permissionkeys', 'permissionkey', 'notify_on_basic_workflow_entry');
		$export->removeItem('permissionkeys', 'permissionkey', 'notify_on_basic_workflow_approve');
		$export->removeItem('permissionkeys', 'permissionkey', 'notify_on_basic_workflow_deny');

		$export->removeItem('workflowtypes', 'workflowtype', 'basic');
		
		$export->removeItem('singlepages', 'page', 'Dashboard');
		$export->removeItem('singlepages', 'page', 'Composer');
		$export->removeItem('singlepages', 'page', 'Drafts');
		$export->removeItem('singlepages', 'page', 'Sitemap');
		$export->removeItem('singlepages', 'page', 'Full Sitemap');
		$export->removeItem('singlepages', 'page', 'Flat View');
		$export->removeItem('singlepages', 'page', 'Page Search');
		$export->removeItem('singlepages', 'page', 'Files');
		$export->removeItem('singlepages', 'page', 'File Manager');
		$export->removeItem('singlepages', 'page', 'Attributes');
		$export->removeItem('singlepages', 'page', 'File Sets');
		$export->removeItem('singlepages', 'page', 'Add File Set');
		$export->removeItem('singlepages', 'page', 'Members');
		$export->removeItem('singlepages', 'page', 'Search Users');
		$export->removeItem('singlepages', 'page', 'User Groups');
		$export->removeItem('singlepages', 'page', 'Attributes');
		$export->removeItem('singlepages', 'page', 'Add User');
		$export->removeItem('singlepages', 'page', 'Add Group');
		$export->removeItem('singlepages', 'page', 'Write');
		$export->removeItem('singlepages', 'page', 'Statistics');
		$export->removeItem('singlepages', 'page', 'Form Results');
		$export->removeItem('singlepages', 'page', 'Surveys');
		$export->removeItem('singlepages', 'page', 'Logs');
		$export->removeItem('singlepages', 'page', 'Pages &amp; Themes');
		$export->removeItem('singlepages', 'page', 'Themes');
		$export->removeItem('singlepages', 'page', 'Add');
		$export->removeItem('singlepages', 'page', 'Inspect');
		$export->removeItem('singlepages', 'page', 'Customize');
		$export->removeItem('singlepages', 'page', 'Page Types');
		$export->removeItem('singlepages', 'page', 'Add Page Type');
		$export->removeItem('singlepages', 'page', 'Single Pages');
		$export->removeItem('singlepages', 'page', 'Stacks &amp; Blocks');
		$export->removeItem('singlepages', 'page', 'Stacks');
		$export->removeItem('singlepages', 'page', 'Stack List');
		$export->removeItem('singlepages', 'page', 'Block Types');
		$export->removeItem('singlepages', 'page', 'Extend concrete5');
		$export->removeItem('singlepages', 'page', 'Dashboard');
		$export->removeItem('singlepages', 'page', 'Add Functionality');
		$export->removeItem('singlepages', 'page', 'Reports');
		$export->removeItem('singlepages', 'page', 'Attributes');
		$export->removeItem('singlepages', 'page', 'Update Add-Ons');
		$export->removeItem('singlepages', 'page', 'Connect to the Community');
		$export->removeItem('singlepages', 'page', 'Get More Themes');
		$export->removeItem('singlepages', 'page', 'Get More Add-Ons');
		$export->removeItem('singlepages', 'page', 'System &amp; Settings');
		$export->removeItem('singlepages', 'page', 'Basics');
		$export->removeItem('singlepages', 'page', 'Bookmark Icons');
		$export->removeItem('singlepages', 'page', 'Rich Text Editor');
		$export->removeItem('singlepages', 'page', 'Site Name');
		$export->removeItem('singlepages', 'page', 'Languages');
		$export->removeItem('singlepages', 'page', 'Time Zone');
		$export->removeItem('singlepages', 'page', 'Interface Preferences');
		$export->removeItem('singlepages', 'page', 'SEO &amp; Statistics');
		$export->removeItem('singlepages', 'page', 'Pretty URLs');
		$export->removeItem('singlepages', 'page', 'Tracking Codes');
		$export->removeItem('singlepages', 'page', 'Statistics');
		$export->removeItem('singlepages', 'page', 'Search Index');
		$export->removeItem('singlepages', 'page', 'Optimization');
		$export->removeItem('singlepages', 'page', 'Cache &amp; Speed Settings');
		$export->removeItem('singlepages', 'page', 'Clear Cache');
		$export->removeItem('singlepages', 'page', 'Automated Jobs');
		$export->removeItem('singlepages', 'page', 'Permissions &amp; Access');
		$export->removeItem('singlepages', 'page', 'File Manager Permissions');
		$export->removeItem('singlepages', 'page', 'Allowed File Types');
		$export->removeItem('singlepages', 'page', 'Task Permissions');
		$export->removeItem('singlepages', 'page', 'IP Blacklist');
		$export->removeItem('singlepages', 'page', 'Captcha Setup');
		$export->removeItem('singlepages', 'page', 'Spam Control');
		$export->removeItem('singlepages', 'page', 'Maintenance Mode');
		
		$export->removeItem('singlepages', 'page', 'Site Access');
		$export->removeItem('singlepages', 'page', 'Login &amp; Registration');
		$export->removeItem('singlepages', 'page', 'Login Destination');
		$export->removeItem('singlepages', 'page', 'Public Profiles');
		$export->removeItem('singlepages', 'page', 'Public Registration');
		$export->removeItem('singlepages', 'page', 'Email');
		$export->removeItem('singlepages', 'page', 'SMTP Method');
		$export->removeItem('singlepages', 'page', 'Email Importers');
		$export->removeItem('singlepages', 'page', 'Attributes');
		$export->removeItem('singlepages', 'page', 'Sets');
		$export->removeItem('singlepages', 'page', 'Types');
		$export->removeItem('singlepages', 'page', 'Environment');
		$export->removeItem('singlepages', 'page', 'Environment Information');
		$export->removeItem('singlepages', 'page', 'Debug Settings');
		$export->removeItem('singlepages', 'page', 'Logging Settings');
		$export->removeItem('singlepages', 'page', 'File Storage Locations');
		$export->removeItem('singlepages', 'page', 'Backup &amp; Restore');
		$export->removeItem('singlepages', 'page', 'Update concrete5');
		$export->removeItem('singlepages', 'page', 'Database XML');
		$export->removeItem('singlepages', 'page', 'Drafts');
		$export->removeItem('singlepages', 'page', 'Trash');
		$export->removeItem('singlepages', 'page', 'Stacks');
		$export->removeItem('singlepages', 'page', 'Login');
		$export->removeItem('singlepages', 'page', 'Register');
		$export->removeItem('singlepages', 'page', 'Profile');
		$export->removeItem('singlepages', 'page', 'Edit');
		$export->removeItem('singlepages', 'page', 'Avatar');
		$export->removeItem('singlepages', 'page', 'Messages');
		$export->removeItem('singlepages', 'page', 'Friends');
		$export->removeItem('singlepages', 'page', 'Page Not Found');
		$export->removeItem('singlepages', 'page', 'Page Forbidden');
		$export->removeItem('singlepages', 'page', 'Download File');
		$export->removeItem('singlepages', 'page', 'Members');
		$export->removeItem('singlepages', 'page', 'Backup Database');
		$export->removeItem('singlepages', 'page', 'Composer');
		
		$export->removeItem('singlepages', 'page', 'Group Sets');
		$export->removeItem('singlepages', 'page', 'Workflow');
		$export->removeItem('singlepages', 'page', 'Workflow List');
		$export->removeItem('singlepages', 'page', 'Waiting for Me');
		$export->removeItem('singlepages', 'page', 'Block &amp; Stack Permissions');
		$export->removeItem('singlepages', 'page', 'Bulk SEO Updater');
		$export->removeItem('singlepages', 'page', 'User Permissions');
		$export->removeItem('singlepages', 'page', 'Advanced Permissions');
		$export->removeItem('singlepages', 'page', 'Proxy Server');
		$export->removeItem('singlepages', 'page', 'GroupSets');
		$export->removeItem('singlepages', 'page', 'GroupSets');
		$export->removeItem('singlepages', 'page', 'Groupets');
		$export->removeItem('singlepages', 'page', 'GroupSets');
		$export->removeItem('singlepages', 'page', 'GroupSets');

		$export->removeItem('taskpermissions', 'taskpermission', 'access_task_permissions');
		$export->removeItem('taskpermissions', 'taskpermission', 'access_sitemap');
		$export->removeItem('taskpermissions', 'taskpermission', 'access_user_search');
		$export->removeItem('taskpermissions', 'taskpermission', 'access_group_search');
		$export->removeItem('taskpermissions', 'taskpermission', 'access_page_defaults');
		$export->removeItem('taskpermissions', 'taskpermission', 'backup');
		$export->removeItem('taskpermissions', 'taskpermission', 'sudo');
		$export->removeItem('taskpermissions', 'taskpermission', 'uninstall_packages');
		$export->removeItem('taskpermissions', 'taskpermission', 'install_packages');
		$export->removeItem('taskpermissions', 'taskpermission', 'delete_user');
		$export->removeItem('taskpermissions', 'taskpermission', 'view_newsflow');

		$export->removeItem('jobs', 'job', 'index_search');
		$export->removeItem('jobs', 'job', 'generate_sitemap');
		$export->removeItem('jobs', 'job', 'process_email');
		$export->removeItem('jobs', 'job', 'remove_old_page_versions');
		
		$export->removeItem('pagetypes', 'pagetype', 'dashboard_header_four_col');
		$export->removeItem('pagetypes', 'pagetype', 'dashboard_primary_five');
		$export->removeItem('pagetypes', 'pagetype', 'core_stack');
		
		
//$export->removeItem('pages', 'page', 'Home');
		$export->removeItem('pages', 'page', 'Customize Dashboard Home');
		$export->removeItem('pages', 'page', 'Welcome to concrete5');
				
		$export->removeItem('systemcaptcha', 'library', 'securimage');	
				
		$export->removeItem('pages', 'page', 'Header Nav');
		$export->removeItem('pages', 'page', 'Side Nav');
		$export->removeItem('pages', 'page', 'Site Name');
		
		// check packages
		$xml = $export->output();
		$xml = str_replace("<forceImageToMatchDimensions>&lt;![CDATA[]]&gt;</forceImageToMatchDimensions>","",$xml);		
		$xml = preg_replace('/<config>.*<\/config>/',"",$xml);		
		
		$th = Loader::helper('text');
		$xml = $th->formatXML($xml);
		
		$this->set('outputContent', $xml);
	}
	
}

class ContentExporter2  extends ContentExporter {
	public function removeItem($parent, $node, $handle) {
//		$query = '//'.$node.'[@handle=\''.$handle.'\' or @package=\''.$handle.'\']';
		$query = '//'.$node.'[@handle=\''.$handle.'\' or @package=\''.$handle.'\' or @name=\''.$handle.'\']';
		$r = $this->x->xpath($query);
		if ($r && isset($r[0]) && $r[0] instanceof SimpleXMLElement) {		
			$dom = dom_import_simplexml($r[0]);
			$dom->parentNode->removeChild($dom);
		}

		$query = '//'.$parent;
		$r = $this->x->xpath($query);
		if ($r && isset($r[0]) && $r[0] instanceof SimpleXMLElement) {		
			$dom = dom_import_simplexml($r[0]);
			if ($dom->childNodes->length < 1) {
				$dom->parentNode->removeChild($dom);
			}
		}
	}	
}

?>