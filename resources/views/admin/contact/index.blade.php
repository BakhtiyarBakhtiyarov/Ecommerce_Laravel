@extends('admin.layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="col-sm-12">
            <div class="card card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h1>Contact Page</h1>
                <form enctype="multipart/form-data" method="POST" action="{{ route('contact.update') }}" class="form-horizontal mt-4">
                    @csrf
                    <div class="form-group" style="width: 50%">
                        <label>Phone</label>
                        <input value="{{ $contact->phone }}" type="text" class="form-control" name="contacts_phone">
                    </div>

                    <div class="form-group" style="width: 50%; padding-top: 20px">
                        <label>Email</label>
                        <input value="{{ $contact->email }}" type="text" class="form-control" name="contacts_email" />
                    </div>

                    <div class="form-group" style="width: 50%; padding-top: 20px">
                        <label>Facebook</label>
                        <input value="{{ $contact->facebook }}" type="text" class="form-control" name="contacts_facebook" />
                    </div>

                    <div class="form-group" style="width: 50%; padding-top: 20px">
                        <label>Instagram</label>
                        <input value="{{ $contact->instagram }}" type="text" class="form-control" name="contacts_instagram" />
                    </div>

                    <div class="button-group" style="margin-left: 450px; padding-top: 20px">
                        <button type="submit" class="btn waves-effect waves-light btn-success">Edit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection