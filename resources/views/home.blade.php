@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{--create new client--}}
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Új ügyfél  létrehozása</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.create-client') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Regisztráció
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{--create document group--}}
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header">Új dokumentum csoport létrehozása</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.create-document-group') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Létrehozás
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{--create new document--}}
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header">Új dokumentum feltöltése</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.upload-document') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="exampleFormControlSelect1" class="col-md-4 col-form-label text-md-right">Dokumentum csoport</label>
                            <div class="col-md-6">
                                <select class="form-control" id="exampleFormControlSelect1" name="document_group_id" required>
                                    @foreach($documentGroups as $group)
                                        <option selected>Válasszon dokumentum csoportot</option>
                                        <option value="{{ $group->id }}">{{ $group->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleFormControlFile1" class="col-md-4 col-form-label text-md-right"></label>
                            <input name="file" type="file" class="form-control-file col-md-8" id="exampleFormControlFile1">
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Feltöltés
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
