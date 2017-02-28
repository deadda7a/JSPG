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

	public function __construct() {
		self::readUserConfig();
		self::sanitizeUserConfig();
	}

	private function readUserConfig () {
		require_once(START_DIR . "Config.php");
		$this->userConfig = $config;
	}

	private function sanitizeUserConfig () {
		$this->imageFolder = START_DIR . $this->userConfig["imageFolder"];
	}

	public function getImageFolder () {
		return $this->imageFolder;
	}
}