<?php
/**
 * Created by PhpStorm.
 * User: spfeifer
 * Date: 2/28/17
 * Time: 5:58 PM
 */

namespace Mini\Helper;

class FileSystemHelper {
	public function scanDirForSubfolders ($dir) {
		$allFiles = glob($dir . "/*");
		$folders = array_filter($allFiles, 'is_dir');

		return $folders;
	}

	public function parseInfoJson ($infoFile) {
		if(file_exists($infoFile)) {
			$fileContent = file_get_contents($infoFile);

			if($array = json_decode($fileContent, true)) {
				return $array;
			}
		}

		return false;
	}
}