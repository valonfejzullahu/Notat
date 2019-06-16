@extends("shared.admin_layout")

@section("content")

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add class') }}</div>

                    <div class="card-body">
                        <form method="POST" action="/classes">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Class name') }}</label>

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
                                <label for="department" class="col-md-4 col-form-label text-md-right">{{ __('Department') }}</label>

                                <div class="col-md-6">
                                    <select id="department" name="department" class="form-control">
                                        <option selected value="1">Industrial Engineering</option>
                                        <option value="2">Information Technology</option>
                                        <option value="3">Network Engineering</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="professor" class="col-md-4 col-form-label text-md-right">{{ __('Professor') }}</label>

                                <div class="col-md-6">
                                    <select id="role" name="professor" class="form-control">
                                        <option value="2">Prof Xavier</option>
                                        <option value="4">Professor</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Create') }}
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