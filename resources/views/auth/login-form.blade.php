<div id="username-field" class="field-wrapper input">
    <label for="username">Email</label>
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
    <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" required value="{{old('email') ?? ''}}" autocomplete="email" autofocus>

    @error('email')
        <span class="invalid-feedback d-block">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    
</div>

<div id="password-field" class="field-wrapper input mb-2">
    <div class="d-flex justify-content-between">
        <label for="password">PASSWORD</label>
        <a href="{{route('password.request')}}" class="forgot-pass-link">Forgot Password?</a>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
    <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="********">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="toggle-password" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>

    @error('password')
        <span class="invalid-feedback d-block">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="d-sm-flex justify-content-between">
    <div class="field-wrapper">
        <button type="submit" class="btn btn-primary" value="">{{ __('Login') }}</button>
    </div>
</div>