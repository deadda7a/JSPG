<?php
/**
 * Created by PhpStorm.
 * User: spfeifer
 * Date: 2/28/17
 * Time: 5:58 PM
 */

namespace Mini\Model;

class FileSystemHelper {
	public function scanDirForSubfolders ($dir) {
		$allFiles = glob($dir . "/*");
		$folders = array_filter($allFiles, 'is_dir');

		return $folders;
	}
}