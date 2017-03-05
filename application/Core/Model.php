<?php

namespace Mini\Core;
use Mini\Helper\UserConfig;
use Mini\Helper\FileSystemHelper;

class Model
{
	protected $fileSystemHelper;
	protected $imageFolder;
	protected $defaultAuthor;

    function __construct()
    {
    	$userConfig = new UserConfig();
    	$this->fileSystemHelper = new FileSystemHelper();
		$this->imageFolder = $userConfig->getImageFolder();
		$this->defaultAuthor = $userConfig->getDefaultAuthor();
    }
}
