@extends('layouts.app')

@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-user-plus"></i> Add New User</h1>
                <p></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="tile">
                    <div class="tile-body">
                        <form method="post" action="{{ route('newuser') }}">
                            @csrf

                            <div class="form-group">
                                <label class="control-label">Username</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">{{ __('E-Mail Address') }}</label>
                                <input id="email"
                                       type="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required
                                       autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">{{ __('Password') }}</label>
                                <input id="password"
                                     type="password"
                                     class="form-control @error('password') is-invalid @enderror"
                                     name="password" value="{{ old('password') }}" required
                                     autocomplete="password" autofocus>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
	                                <strong>{{ $message }}</strong>
	                            </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm"
                                     type="password"
                                     class="form-control"
                                     name="password_confirmation" value="{{ old('password') }}" required
                                     autocomplete="new-password" autofocus>
                            </div>

                            <div class="tile-footer">
                                <button class="btn btn-primary" type="submit"><i
                                        class="fa fa-fw fa-lg fa-check-circle"></i>Save
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection

@section('script')


@endsection