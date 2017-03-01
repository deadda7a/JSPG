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
	private $galleries;

	/**
	 * GalleryList constructor.
	 */
	public function __construct() {
		$this->galleries = array();

		parent::__construct();
		self::fillGalleryPaths();
		self::fillGalleries();
	}

	private function fillGalleryPaths () {
		$this->galleryPaths = $this->fileSystemHelper->scanDirForSubfolders($this->imageFolder);
	}

	private function fillGalleries () {
		foreach ($this->galleryPaths as $galleryPath) {
			array_push($this->galleries, new Gallery($galleryPath));
		}
	}

	public function getGalleryPaths () {
		return $this->galleryPaths;
	}
}