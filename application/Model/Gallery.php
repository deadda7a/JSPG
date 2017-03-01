<?php
/**
 * Created by PhpStorm.
 * User: spfeifer
 * Date: 2/28/17
 * Time: 6:34 PM
 */

namespace Mini\Model;


class Gallery extends Model {
	private $path;
	private $pictures;
	private $name;
	private $author;

	public function __construct() {
		parent::__construct();
	}


}