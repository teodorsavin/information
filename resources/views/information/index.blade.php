@extends('master')
@section('title', 'View all info')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2> Information </h2>
            </div>
            @if ($information->isEmpty())
                <p class="text-center">There is no info.</p>
            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>First name</th>
                        <th>Last Name</th>
                        <th>BSN</th>
                        <th>Credit Card Number</th>
                        <th>CIV</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($information as $info)
                        <tr>
                            <td>{!! $info->id !!} </td>
                            <td>{!! $info->first_name !!}</td>
                            <td><a href="{!! action('InformationController@show', $info->slug) !!}">{!! $info->last_name !!}</a></td>
                            <td>{!! $info->bsn !!}</td>
                            <td>{!! $info->credit_card_number !!}</td>
                            <td>{!! $info->civ !!}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
            <a href="{!! action('InformationController@create') !!}" class="btn btn-info">Create</a>
        </div>
    </div>
@endsection