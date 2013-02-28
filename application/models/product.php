<?php

class Product extends Eloquent {

	public function models() {
		return $this->has_many('ProductModels');
	}

}