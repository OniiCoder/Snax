@extends('layouts.vendor-header')

@section('content')
<link rel="stylesheet" href="{{ asset('css/signinandsignup.css') }}">

    <section class="note">
        <div class="container">
            <p class="note-head">Hi, {{ Auth::user()->name }}</p>
            
            <div class="note-tab">
                <div class="note-detailss">
                    @if($businessProfileNum == 0)
                    <p class="note-title">Please complete your business profile below</p>

                    <section class="siv">
                        <form method="POST" action="{{ url('/vendor/save-business') }}">
                        @csrf
                            <div class="form-group">
                                <label class="siv-label" for="exampleFormControlInput2">Business Name</label>
                                <input type="text" placeholder="Name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} siv-form" id="exampleFormControlInput2" name="business_name" required>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="siv-label" for="exampleFormControlInput3">Business Category</label>
                                <select class="custom-select siv-form" id="exampleFormControlInput3" name="business_category" required>
                                    <option selected>Select Category</option>
                                    <option value="food">Food</option>
                                    <option value="drinks">Drinks</option>
                                    <option value="both">Both</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="siv-label" for="exampleFormControlInput4">Business Description</label>
                                <textarea name="business_description" placeholder="what is your main purpose and how would you like to use our platform and also what are you offering?" id="exampleFormControlInput4" class="form-control textarea siv-form" required></textarea>
                            </div>
                            <div class="fotm-button">
                                <button type="submit" class="siv-submit">Save</button>
                            </div>
                        </form>
                    </section>

                    @else
                    <p class="note-title">Business Profile</p>
                    <p><i>Business Name</i>: <b>{{$newBusiness->business_name}}</b></p>
                    <p><i>Business Category</i>: <b>{{$newBusiness->business_category}}</b></p>
                    <p><i>Business Description</i>: <b>{{$newBusiness->business_description}}</b></p>

                    @endif
                </div>
            </div>
        </div>
    </section>

    @endsection