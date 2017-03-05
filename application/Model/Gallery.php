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
	private $fullPath;
	private $folder;
	private $infoFile;
	private $pictures;
	private $name;
	private $author;

	public function __construct($fullPath) {
		parent::__construct();

		$this->fullPath = $fullPath;
		$this->infoFile = $this->fullPath . '/info.json';

		$this->folder = "Nix";

		$this->fillName();
		$this->fillAuthor();
	}

	private function fillName () {
		if ($array = $this->fileSystemHelper->parseInfoJson($this->infoFile)) {
			$this->name = $array['name'];
		} else {
			$this->name = $this->folder;
		}
	}

	private function fillAuthor () {
		if ($array = $this->fileSystemHelper->parseInfoJson($this->infoFile)) {
			$this->author = $array['author'];
		} else {
			$this->author = $this->defaultAuthor;
		}
	}

	public function getFullPath () {
		return $this->fullPath;
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