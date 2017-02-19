@extends('master')
@section('title', 'View personal info')

@section('content')
    <div class="container col-md-8 col-md-offset-2"> <div class="well well bs-component">
            <div class="content">
                <h2 class="header">{!! $information->first_name . ' ' . $information->last_name !!}</h2>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>BSN</td>
                            <td>{!! $information->bsn !!}</td>
                        </tr>
                        <tr>
                            <td>E-mail</td>
                            <td>{!! $information->email !!}</td>
                        </tr>
                        <tr>
                            <td>Phone number</td>
                            <td>{!! $information->phone !!}</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>{!! $information->street . ' ' . $information->house_number . ' ' . $information->post_code . ', ' . $information->city . ', ' . $information->country !!}</td>
                        </tr>
                        <tr>
                            <td>IBAN</td>
                            <td>{!! $information->IBAN !!}</td>
                        </tr>
                        <tr>
                            <td>Credit Card</td>
                            <td>{!! $information->credit_card_number !!}</td>
                        </tr>
                        <tr>
                            <td>CIV</td>
                            <td>{!! $information->civ !!}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <a href="{!! action('InformationController@edit', $information->slug) !!}" class="btn btn-info">Edit</a>
            <form method="post" action="{!! action('InformationController@destroy', $information->slug) !!}" class="pull-left">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <div>
                    <button type="submit" class="btn btn-warning">Delete</button>
                </div>
            </form>
        </div>
    </div>
@endsection