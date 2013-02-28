<?php

class ProductModels extends Eloquent {

	public static $table = 'product_models';

	public function product() {
		return $this->belongs_to('Product');
	}

}