@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">View Market</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="col-lg-6" style="padding-top: 16px">
                                Market Title:<strong> {{ $market->title }}</strong>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-6" style="padding-top: 16px">
                                Description:<strong>{{ $market->description }}</strong>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
