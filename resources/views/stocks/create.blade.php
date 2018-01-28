@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Stock</div>
                    <div class="panel-body">
                        <!--begin::Form-->
                        {{ Html::ul($errors->all()) }}
                        {{ Form::open(array('url' => 'stocks/', 'method' => 'POST', 'class' => 'form-horizontal', 'id' => '"maskForm"')) }}

                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            {{ Form::label('type', 'Select type of Stock', array( 'class' => 'col-lg-3 col-form-label')) }}
                            <div class="col-lg-6">
                                <div class="m-radio-inline">
                                    {{ Form::select('type', array('NaN' => 'NaN', 'PREFERRED' => 'Preferred Stock', 'COMMON' => 'Common Stock'), Input::old('type'), array('class' => 'form-control m-input')) }}
                                </div>
                                <span class="m-form__help">Please select type of stock</span>
                            </div>

                        </div>

                        <div class="form-group{{ $errors->has('_company_id') ? ' has-error' : '' }}">
                            {{ Form::label('_company_id', 'Select Company of Stock', array( 'class' => 'col-lg-3 col-form-label')) }}
                            <div class="col-lg-6">
                                <div class="m-radio-inline">
                                    <select name="_company_id" id="_company_id" class="form-control m-input">
                                        @foreach(Auth::user()->companies as $company)
                                            <option value="{{$company->id}}">{{$company->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('_market_id') ? ' has-error' : '' }}">
                            {{ Form::label('_market_id', 'Select Market of Stock', array( 'class' => 'col-lg-3 col-form-label')) }}
                            <div class="col-lg-6">
                                <div class="m-radio-inline">
                                    <select name="_market_id" id="_market_id" class="form-control m-input">
                                        @foreach(Auth::user()->markets as $market)
                                            <option value="{{$market->id}}">{{$market->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                            {{ Form::label('price', 'Price', array( 'class' => 'col-lg-3 col-form-label')) }}
                            <div class="col-lg-6">
                                {{ Form::number('price', Input::old('price'), array('class' => 'form-control m-input', 'placeholder' => '00.00', 'required' => 'required', 'step'=>'0.001')) }}
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                            {{ Form::label('description', 'Description', array('class' => 'col-lg-3 col-form-label')) }}

                            <div class="col-lg-6">
                                {{ Form::textarea('description', Input::old('description'), array('class' => 'form-control m-input', 'placeholder' => 'Enter your stock description')) }}
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {{ Form::submit('Create Stock!', array('class' => 'btn btn-success')) }}
                                {{ Form::reset('Reset!', array('class' => 'btn btn-secondary')) }}
                            </div>
                        </div>

                    {{ Form::close() }}
                    <!--end::Form-->

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
