@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Update Company</div>
                    <div class="panel-body">
                        <!--begin::Form-->
                        {{ Html::ul($errors->all()) }}
                        {{ Form::model($company, array('route' => array('companies.update', $company->id), 'method' => 'PUT', 'class' => 'form-horizontal', 'id' => '"maskForm"')) }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            {{ Form::label('title', 'Company Title', array('class' => 'col-lg-3 col-form-label')) }}

                            <div class="col-lg-6">
                                {{ Form::text('title', Input::old('title'), array('class' => 'form-control m-input', 'placeholder' => 'Enter your company title', 'required' => 'required')) }}
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('office_address') ? ' has-error' : '' }}">
                            {{ Form::label('office_address', 'Office Address', array('class' => 'col-lg-3 col-form-label')) }}

                            <div class="col-lg-6">
                                {{ Form::text('office_address', Input::old('office_address'), array('class' => 'form-control m-input', 'placeholder' => 'Enter your company office address')) }}
                                @if ($errors->has('office_address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('office_address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('office_tele') ? ' has-error' : '' }}">
                            {{ Form::label('office_tele', 'Office Telephone', array('class' => 'col-lg-3 col-form-label')) }}

                            <div class="col-lg-6">
                                {{ Form::text('office_tele', Input::old('office_tele'), array('class' => 'form-control m-input', 'placeholder' => 'Enter your company office telephone')) }}
                                @if ($errors->has('office_tele'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('office_tele') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('web_url') ? ' has-error' : '' }}">
                            {{ Form::label('web_url', 'Web Url', array('class' => 'col-lg-3 col-form-label')) }}

                            <div class="col-lg-6">
                                {{ Form::text('web_url', Input::old('web_url'), array('class' => 'form-control m-input', 'placeholder' => 'Enter your company web url')) }}
                                @if ($errors->has('web_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('web_url') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            {{ Form::label('description', 'Description', array('class' => 'col-lg-3 col-form-label')) }}

                            <div class="col-lg-6">
                                {{ Form::textarea('description', Input::old('description'), array('class' => 'form-control m-input', 'placeholder' => 'Enter your company description')) }}
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {{ Form::submit('Update Company!', array('class' => 'btn btn-success')) }}
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
