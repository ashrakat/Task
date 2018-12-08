<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


/**
 * @resource Product API Controller
 *
 */
class APIProductController extends Controller {

	/**
	 * @param  string $name the name of the product
	 * @return array
	 */
	public function register( Request $request ) {
		$name = $request->get('name');
		$validator = Validator::make( $request->toArray(), [
			'name' => 'required|unique:products',
		 ]);
		$response  = array( 'response' => new \stdClass(), 'success' => true);
		if ( $validator->fails() ) {
			$response['success']  = false;
			return response()->json([$response], 400 );
    }else {
			$product = new Product();
			$product->name = $name;
			$product->save();
      $response['response'] = $product;
		}
		return response()->json([$response], 200);
	}

	/**
	 * @param  int $id the name of the product
	 * @return Product
	 */
	public function getItem( Request $request, $id) {
    $response  = array( 'response' => new \stdClass(), 'success' => true);
		$product = Product::where( [ 'id' => $id ] )->first();
    if(!$product){
      $response['success'] = false;
      $response['response']->item = 'product does not exist';
			return response()->json([$response], 404);
    }
    else
      $response['response'] = $product;
    return response()->json([$response], 200);
	}

  /**
   * @return array
  */
  public function getProducts( Request $request) {
    $response  = array( 'response' => new \stdClass());
    $products = Product::all();
    if(!$products){
      $response['response']->name = 'No products found';
    }
    else
      $response['response'] = $products;
    return response()->json($response);
  }

	/**
	 * @param  string $name the name of the product
	 * @return Product
	 */
	 public function getProduct( Request $request) {
		 $name = $request->get('name');
		 $product = Product::where( [ 'name' => $name ] )->first();
    	if(!$product){
				return view('products.search', ['error' => 'product does not exist']);
    	}
    	else
      	$response['response'] = $product;
			return view('products.search', ['product' => $product]);
		}
}
