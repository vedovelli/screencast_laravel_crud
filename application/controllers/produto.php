<?php

class Produto_Controller extends Base_Controller {

	function __construct() {
		parent::__construct();
		$this->filter('before', 'product_id')->only(array('unidade', 'remover'));
	}

	public function action_index()
	{
		$produtos = Product::all();
		return View::make('produto.lista')
			->with('produtos', $produtos)
			->with('produto', array('id'=>0, 'name'=>''));
	}

	public function action_unidade($id)
	{
		$produtos = Product::all();
		$produto = Product::find($id);
		return View::make('produto.lista')
			->with('produtos', $produtos)
			->with('produto', $produto->to_array());
	}

	public function action_salvar()
	{
		$id = Request::get('id');
		$name = Request::get('name');

		if($id > 0){
			$product = Product::find($id);
		} else {

			$product = new Product();
		}

		$product->name = $name;
		$product->save();
		return Redirect::to('/produto');
	}

	public function action_remover($id)
	{
		$product = Product::find($id);
		if(is_object($product)){
			$product->delete();
			return Redirect::to('/produto');
		} else {
			echo 'Produto não encontrado!';
		}
	}

}