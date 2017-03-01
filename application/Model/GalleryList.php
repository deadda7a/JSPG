<?php

/**
 * Class Songs
 * This is a demo Model class.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

namespace Mini\Model;

use Mini\Core\Model;

class GalleryList extends Model
{
	private $galleryPaths;

	/**
	 * GalleryList constructor.
	 */
	public function __construct() {
		parent::__construct();
		self::fillGalleryPaths();
	}

	private function fillGalleryPaths () {
		$this->galleryPaths = $this->fileSystemHelper->scanDirForSubfolders($this->imageFolder);
	}

	public function getGalleryPaths () {
		return $this->galleryPaths;
	}
}
