<?php
/**
 * Created by PhpStorm.
 * User: spfeifer
 * Date: 2/28/17
 * Time: 6:34 PM
 */

namespace Mini\Model;

use Mini\Core\Model;

class Gallery extends Model {
	private $path;
	private $infoFile;
	private $pictures;
	private $name;
	private $author;

	public function __construct($path) {
		parent::__construct();

		$this->path = $path;
		$this->infoFile = $this->path . '/info.json';


		$this->fillName();
		$this->fillAuthor();
	}

	private function fillName () {
		if ($array = $this->fileSystemHelper->parseInfoJson($this->infoFile)) {
			$this->name = $array['name'];
		} else {
			$this->name = $this->path;
		}
	}

	private function fillAuthor () {
		if ($array = $this->fileSystemHelper->parseInfoJson($this->infoFile)) {
			$this->author = $array['author'];
		} else {
			$this->author = "Anonymous";
		}
	}

	public function getPath () {
		return $this->path;
	}

	public function getName () {
		return $this->name;
	}

	public function getAuthor () {
		return $this->author;
	}

	public function getPictures () {
		return $this->pictures;
	}
}