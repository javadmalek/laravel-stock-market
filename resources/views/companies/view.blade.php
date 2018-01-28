@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">View Company</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="col-lg-6" style="padding-top: 16px">
                                Company Title:<strong> {{ $company->title }}</strong>
                            </div>
                            <div class="col-lg-6" style="padding-top: 16px">
                                Office Address:<strong>{{ $company->office_address }}</strong>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-6" style="padding-top: 16px">
                                Office Telephone:<strong>{{ $company->office_tele }}</strong>
                            </div>
                            <div class="col-lg-6" style="padding-top: 16px">
                                Web Url:<strong>{{ $company->web_url }}</strong>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-6" style="padding-top: 16px">
                                Description:<strong>{{ $company->description }}</strong>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
