if($page->download_file) {
    $options = array(
    // boolean: halt program execution after file send
    'exit' => false, 
    // boolean|null: whether file should force download (null=let content-type header decide)
    'forceDownload' => true, 
    // string: filename you want the download to show on the user's computer, or blank to use existing.
    'downloadFilename' => '',
    );
	wireSendFile($page->download_file->filename, $options);
	$page->of(false);
	$page->counter = $page->counter + 1;
	$page->save();
	$page->of(true);
}