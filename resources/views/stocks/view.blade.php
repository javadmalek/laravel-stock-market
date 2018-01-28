@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">View Stock</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="col-lg-6" style="padding-top: 16px">
                                Company: <strong> {{ $stock->company->title }}</strong>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-6" style="padding-top: 16px">
                                Market: <strong> {{ $stock->market->title }}</strong>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-6" style="padding-top: 16px">
                                Type: <strong> {{ $stock->type }}</strong>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-6" style="padding-top: 16px">
                                Price: <strong> {{ number_format($stock->price) }}</strong>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-6" style="padding-top: 16px">
                                Description: <strong>{{ $stock->description }}</strong>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
