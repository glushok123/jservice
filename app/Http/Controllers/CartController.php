<?php

namespace App\Http\Controllers;

use Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    /**
     * Корзина список
     */
    public function cartList()
    {
        $cartItems = Cart::getContent();

        return view('shop.cart.list', compact('cartItems'));
    }

    /**
     * Добавление в корзину
     */
    public function addToCart(Request $request)
    {
        Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
        ]);

        return response()->json([
            'status' => 'success',
            'textCart' => $this->getTextHeaderCart(),
        ]);
    }

    /**
     * Обновление корзины
     */
    public function updateCart(Request $request)
    {
        Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        return response()->json([
            'status' => 'success',
            'textCart' => $this->getTextHeaderCart(),
        ]);
    }

    /**
     * Удаление из корзины
     */
    public function removeCart(Request $request)
    {
        Cart::remove($request->id);

        return response()->json([
            'status' => 'success',
            'textCart' => $this->getTextHeaderCart(),
        ]);
    }

    /**
     * Очистка корзины
     */
    public function clearAllCart()
    {
        Cart::clear();
        session()->flash('success', 'All Item Cart Clear Successfully !');

        return response()->json([
            'status' => 'success',
            'textCart' => $this->getTextHeaderCart(),
        ]);
    }

    /**
     * Текст для корзины в шапке
     */
    public function getTextHeaderCart(): string
    {
		$textCart = 'пусто';
		$cartCollection = Cart::getContent();

		if ($cartCollection->count() > 0){
			$textCart = $cartCollection->count() . ' товара, ' . \Cart::getSubTotal() . ' р.';
		}

        return $textCart;
    }
}