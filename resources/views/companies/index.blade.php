@extends('layouts.app')

@section('content')
    <div class="container">

        <!--Begin::Companies-->
        <div class="row">
            <div class="col-xl-12">
                <div class="m-portlet m-portlet--mobile ">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    List of your Companies
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <!--begin: Datatable -->
                        <div class="m-section">
                            <span class="m-section__sub">The list of all of your companies: </span>
                            <div class="m-section__content">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>title</th>
                                        <th>address</th>
                                        <th>Telephone</th>
                                        <th>Url</th>
                                        <th>actions
                                            <a class="btn m-btn--square  btn-success pull-right"
                                               href="{{ URL::to('companies/create') }}">New Company</a></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($companies as $key => $company)
                                        <tr>
                                            <th scope="row">{{ $company->id }}</th>
                                            <td>{{ $company->title }}</td>
                                            <td>{{ $company->office_address }}</td>
                                            <td>{{ $company->office_tele }}</td>
                                            <td>{{ $company->web_url }}</td>
                                            <td>
                                                {{ Form::open(array('url' => 'companies/' . $company->id, 'class' => 'pull-right')) }}
                                                {{ Form::hidden('_method', 'DELETE') }}
                                                {{ Form::submit('Delete', array('class' => 'btn m-btn--square  btn-danger',
                                                                         'onclick' => "return confirm('Are you sure you want to remove?')")) }}
                                                {{ Form::close() }}

                                                <a class="btn m-btn--square  btn-info"
                                                   href="{{ URL::to('companies/' . $company->id) }}">View</a>
                                                <a class="btn m-btn--square  btn-info"
                                                   href="{{ URL::to('companies/' . $company->id . '/edit') }}">Edit</a>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end: Datatable -->
                    </div>
                </div>
            </div>
        </div>
        <!--End::Companies -->
    </div>
@endsection
