<?php

namespace Mini\Core;
use Mini\Helper\UserConfig;
use Mini\Model\FileSystemHelper;

class Model
{
	protected $imageFolder;
	protected $fileSystemHelper;

    function __construct()
    {
    	$userConfig = new UserConfig();
    	$this->fileSystemHelper = new FileSystemHelper();
		$this->imageFolder = $userConfig->getImageFolder();
    }
}
