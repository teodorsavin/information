@extends('master')
@section('title', 'Edit information')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal" method="post">
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <fieldset>
                    <legend>Edit personal information</legend>
                    <div class="form-group">
                        <label for="first-name" class="col-lg-2 control-label">First Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="first-name" placeholder="First name" name="first_name" value="{!! $information->first_name !!}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="last-name" class="col-lg-2 control-label">Last Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="last-name" placeholder="Last name" name="last_name" value="{!! $information->last_name !!}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bsn" class="col-lg-2 control-label">BSN</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="bsn" placeholder="BSN" name="bsn" value="{!! $information->bsn !!}">
                            <span class="help-block">Don't worry! This will be encrypted!</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-lg-2 control-label">E-mail</label>
                        <div class="col-lg-10">
                            <input type="email" class="form-control" id="email" placeholder="E-mail" name="email" value="{!! $information->email !!}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-lg-2 control-label">Phone number</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="phone" placeholder="Phone number" name="phone" value="{!! $information->phone !!}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="street" class="col-lg-2 control-label">Street</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="street" placeholder="The Hitchhiker's Guide to the Galaxy" name="street" value="{!! $information->street !!}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="house-number" class="col-lg-2 control-label">House Number</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="house-number" placeholder="42" name="house_number" value="{!! $information->house_number !!}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="postal-code" class="col-lg-2 control-label">Postal code</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="postal-code" placeholder="1019BW" name="postal_code" value="{!! $information->postal_code !!}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="city" class="col-lg-2 control-label">City</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="city" placeholder="Gotham City" name="city" value="{!! $information->city !!}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="country" class="col-lg-2 control-label">Country</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="country" placeholder="Neverland" name="country" value="{!! $information->country !!}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="iban" class="col-lg-2 control-label">IBAN</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="iban" placeholder="NL12ABNA1234567890" name="iban" value="{!! $information->IBAN !!}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="credit-card-number" class="col-lg-2 control-label">Credit Card</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="credit-card-number" placeholder="1234 5432 6789 9876" name="credit_card_number" value="{!! $information->credit_card_number !!}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="civ" class="col-lg-2 control-label">CIV</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="civ" placeholder="123" name="civ" value="{!! $information->civ !!}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection