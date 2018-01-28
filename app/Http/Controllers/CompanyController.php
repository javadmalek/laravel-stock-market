<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Company;
use Validator, Input, Redirect, Session;
use View;


class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return View::make('companies.index')->with('companies', Auth::user()->companies);
    }

    public function create()
    {
        return View::make('companies.create');
    }

    public function store(Request $request)
    {
        $rules = array(
            'title' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('companies/create')
                ->withErrors($validator);
        } else {
            $company = new Company();
            $company->_user_id = Auth::user()->id;
            $company->title = Input::get('title');
            $company->office_address = Input::get('office_address');
            $company->office_tele = Input::get('office_tele');
            $company->web_url = Input::get('web_url');
            $company->description = Input::get('description');
            $company->save();

            Session::flash('message', 'Successfully created company!');
            return Redirect::to('companies');
        }
    }

    public function show($id)
    {
        $company = Auth::user()->companies->find($id);
        if ($company) {
            return View::make('companies.view')->with('company', $company);
        }
        return response()->view('errors.404');
    }

    public function edit($id)
    {
        $company = Auth::user()->companies->find($id);
        if ($company) {
            return View::make('companies.edit')->with('company', $company);
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
            return Redirect::to('companies/' . $id . '/edit')
                ->withErrors($validator);
        } else {
            $company = Auth::user()->companies->find($id);
            if ($company) {
                $company->title = Input::get('title');
                $company->office_address = Input::get('office_address');
                $company->office_tele = Input::get('office_tele');
                $company->web_url = Input::get('web_url');
                $company->description = Input::get('description');
                $company->save();

                Session::flash('message', 'Successfully update company!');
            } else
                Session::flash('message', 'Failed to update the company!');

            return Redirect::to('companies');
        }
    }

    public function destroy($id)
    {
        $company = Auth::user()->companies->find($id);
        if ($company) {
            $company->delete();
            Session::flash('message', 'Successfully removed company!');
        } else {
            Session::flash('message', 'Failed to remove the company!');
        }
        return Redirect::to('companies');
    }
}
