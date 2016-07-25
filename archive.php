<?php
get_header();
$beau_archive = NULL;
if (filmmaker_GetOption('archive-page') != NULL) {
	$beau_archive = filmmaker_GetOption('archive-page');
}
if($beau_archive==NULL){
	$beau_archive = "postcatstandard";
}
get_template_part('template/section', $beau_archive);
get_footer();
?>
