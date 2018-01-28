@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Market</div>
                    <div class="panel-body">
                        <!--begin::Form-->
                        {{ Html::ul($errors->all()) }}
                        {{ Form::open(array('url' => 'markets/', 'method' => 'POST', 'class' => 'form-horizontal', 'id' => '"maskForm"')) }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            {{ Form::label('title', 'Market Title', array('class' => 'col-lg-3 col-form-label')) }}

                            <div class="col-lg-6">
                                {{ Form::text('title', Input::old('title'), array('class' => 'form-control m-input', 'placeholder' => 'Enter your market title', 'required' => 'required')) }}
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            {{ Form::label('description', 'Description', array('class' => 'col-lg-3 col-form-label')) }}

                            <div class="col-lg-6">
                                {{ Form::textarea('description', Input::old('description'), array('class' => 'form-control m-input', 'placeholder' => 'Enter your market description')) }}
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {{ Form::submit('Create Market!', array('class' => 'btn btn-success')) }}
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
