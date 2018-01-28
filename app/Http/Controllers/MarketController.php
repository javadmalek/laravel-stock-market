<?php

namespace App\Http\Controllers;

use App\Market;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator, Input, Redirect, Session;
use View;


class MarketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return View::make('markets.index')->with('markets', Auth::user()->markets);
    }

    public function create()
    {
        return View::make('markets.create');
    }

    public function store(Request $request)
    {
        $rules = array(
            'title' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('markets/create')
                ->withErrors($validator);
        } else {
            $market = new Market();
            $market->_user_id = Auth::user()->id;
            $market->title = Input::get('title');
            $market->description = Input::get('description');
            $market->save();

            Session::flash('message', 'Successfully created market!');
            return Redirect::to('markets');
        }
    }

    public function show($id)
    {
        $market = Auth::user()->markets->find($id);
        if ($market) {
            return View::make('markets.view')->with('market', $market);
        }
        return response()->view('errors.404');
    }

    public function edit($id)
    {
        $market = Auth::user()->markets->find($id);
        if ($market) {
            return View::make('markets.edit')->with('market', $market);
        }
        return response()->view('errors.404');
    }

    public function update(Request $request, $id)
    {
        $rules = array(
            'title' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('markets/' . $id . '/edit')
                ->withErrors($validator);
        } else {
            $market = Auth::user()->markets->find($id);
            if ($market) {
                $market->title = Input::get('title');
                $market->description = Input::get('description');
                $market->save();

                Session::flash('message', 'Successfully update market!');
            } else
                Session::flash('message', 'Failed to update the market!');

            return Redirect::to('markets');
        }
    }

    public function destroy($id)
    {
        $market = Auth::user()->markets->find($id);
        if ($market) {
            $market->delete();
            Session::flash('message', 'Successfully removed market!');
        } else {
            Session::flash('message', 'Failed to remove the market!');
        }
        return Redirect::to('markets');
    }
}
