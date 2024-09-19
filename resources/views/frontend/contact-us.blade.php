@extends('frontend.layouts.app')
@section('content')
<style>
   .form-control:focus {
        outline: none;
        box-shadow: none; /* Removes any shadow */
    }
</style>
    <div class="container">
        <div class="row py-5 justify-content-center" style="margin-top: 150px">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center text-success">{{ __('Contact Us') }}</h3>
                    </div>
                    <div class="card-body">
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <form action="{{ route('frontend.contactsend') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="">{{ __('Name') }} <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" required>
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">{{ __('Address') }} </label>
                                    <input type="text" name="address" class="form-control" required>
                                    @error('address')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">{{ __('Phone') }} <span class="text-danger">*</span></label>
                                    <input type="text" name="phone" class="form-control" required>
                                    @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">{{ __('Email') }} <span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control" required>
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">{{ __('Messages') }}</label>
                                    <textarea name="message" class="form-control"></textarea>
                                    @error('message')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-5 justify-content-center">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success w-100">{{ __('Send Message') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
