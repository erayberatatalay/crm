<?PHP
/******************************************
 * SuiteCRM Translations
 * @URL: https://crowdin.com/project/suitecrmtrans
 * @author SuiteCRM Community via Crowdin
 ******************************************/
$manifest = array( 
	'name' => 'Turkish (Turkey)',
	'description' => 'Çeviri: www.crowdin.com/project/suitecrmtranslations',
	'type' => 'langpack',
	'is_uninstallable' => 'Yes',
	'acceptable_sugar_versions' =>
		  array (),
	'acceptable_sugar_flavors' =>
		  array('CE'),
	'author' => 'SuiteCRM Topluluğu',
	'version' => '7.11.18.01',
	'published_date' => '2020-11-07',
      );
$installdefs = array(
	'id'=> 'tr_TR',
	'image_dir'=>'<basepath>/images',
	'copy' => array(
	array('from'=> '<basepath>/include','to'=>'include'),
	array('from'=> '<basepath>/modules','to'=>'modules'),
	array('from'=> '<basepath>/install','to'=>'install'),
   )
 );
?>