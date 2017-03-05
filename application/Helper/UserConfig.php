<?php
/**
 * Created by PhpStorm.
 * User: spfeifer
 * Date: 2/28/17
 * Time: 5:45 PM
 */

namespace Mini\Helper;

class UserConfig {
	private $userConfig;
	private $imageFolder;
	private $defaultAuthor;

	public function __construct() {
		self::readUserConfig();
		self::sanitizeUserConfig();
	}

	private function readUserConfig () {
		$this->userConfig = require_once(START_DIR . "/Config.php");
	}

	private function sanitizeUserConfig () {
		$this->imageFolder = START_DIR . $this->userConfig["imageFolder"];
		$this->defaultAuthor = $this->userConfig["defaultAuthor"];
	}

	public function getImageFolder () {
		return $this->imageFolder;
	}

	public function getDefaultAuthor () {
		return $this->defaultAuthor;
	}
}