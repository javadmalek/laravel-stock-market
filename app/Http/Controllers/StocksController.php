<?php

namespace App\Http\Controllers;

use App\Stock;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Validator, Input, Redirect, Session;
use View;

class StocksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return View::make('stocks.index')->with('stocks', Auth::user()->stocks);
    }

    public function create()
    {
        return View::make('stocks.create');
    }

    public function store(Request $request)
    {
        $rules = array(
            'price' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('stocks/create')
                ->withErrors($validator);
        } else {
            $stock = new Stock();
            $stock->_user_id = Auth::user()->id;
            $stock->_company_id = Input::get('_company_id');
            $stock->_market_id = Input::get('_market_id');
            $stock->type = Input::get('type');
            $stock->price = Input::get('price');
            $stock->description = Input::get('description');
            $stock->save();

            Session::flash('message', 'Successfully created stock!');
            return Redirect::to('stocks');
        }
    }

    public function show($id)
    {
        $stock = Auth::user()->stocks->find($id);
        if ($stock) {
            return View::make('stocks.view')->with('stock', $stock);
        }
        return response()->view('errors.404');
    }

    public function edit($id)
    {
        $stock = Auth::user()->stocks->find($id);
        if ($stock) {
            return View::make('stocks.edit')->with('stock', $stock);
        }
        return response()->view('errors.404');
    }

    public function update(Request $request, $id)
    {
        $rules = array(
            'price' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('stocks/' . $id . '/edit')
                ->withErrors($validator);
        } else {
            $stock = Auth::user()->stocks->find($id);
            if ($stock) {
                $stock->_company_id = Input::get('_company_id');
                $stock->_market_id = Input::get('_market_id');
                $stock->type = Input::get('type');
                $stock->price = Input::get('price');
                $stock->description = Input::get('description');
                $stock->save();

                Session::flash('message', 'Successfully update stock!');
            } else
                Session::flash('message', 'Failed to update the stock!');

            return Redirect::to('stocks');
        }
    }

    public function destroy($id)
    {
        $stock = Auth::user()->stocks->find($id);
        if ($stock) {
            $stock->delete();
            Session::flash('message', 'Successfully removed stock!');
        } else {
            Session::flash('message', 'Failed to remove the stock!');
        }
        return Redirect::to('stocks');
    }
}