<?php
/**
 * Created by PhpStorm.
 * User: spfeifer
 * Date: 2/28/17
 * Time: 7:45 PM
 */

namespace Mini\Controller;
use Mini\Model\GalleryList;

class GallerylistController {
	private $galleryList;

	public function index() {
		$this->galleryList = new GalleryList();

		require APP . 'view/_templates/header.php';
		require APP . 'view/galleryList/index.php';
		require APP . 'view/_templates/footer.php';
	}

}
