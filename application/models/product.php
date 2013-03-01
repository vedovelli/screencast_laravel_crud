<?php

class Product extends Eloquent {

	public $includes = array('models');

	public function models() {
		return $this->has_many('ProductModels');
	}

}