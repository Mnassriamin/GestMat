<section>
    <header class="mb-3">
        <h2 class="h5 text-primary font-weight-bold">
            {{ __('Update Password') }}
        </h2>
        <p class="text-muted small">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-4">
        @csrf
        @method('put')

        <!-- Current Password -->
        <div class="mb-3">
            <label for="update_password_current_password" class="form-label text-secondary">
                {{ __('Current Password') }}
            </label>
            <input
                id="update_password_current_password"
                name="current_password"
                type="password"
                class="form-control"
                autocomplete="current-password"
            />
            @if($errors->updatePassword->get('current_password'))
                <small class="text-danger">
                    {{ $errors->updatePassword->first('current_password') }}
                </small>
            @endif
        </div>

        <!-- New Password -->
        <div class="mb-3">
            <label for="update_password_password" class="form-label text-secondary">
                {{ __('New Password') }}
            </label>
            <input
                id="update_password_password"
                name="password"
                type="password"
                class="form-control"
                autocomplete="new-password"
            />
            @if($errors->updatePassword->get('password'))
                <small class="text-danger">
                    {{ $errors->updatePassword->first('password') }}
                </small>
            @endif
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
            <label for="update_password_password_confirmation" class="form-label text-secondary">
                {{ __('Confirm Password') }}
            </label>
            <input
                id="update_password_password_confirmation"
                name="password_confirmation"
                type="password"
                class="form-control"
                autocomplete="new-password"
            />
            @if($errors->updatePassword->get('password_confirmation'))
                <small class="text-danger">
                    {{ $errors->updatePassword->first('password_confirmation') }}
                </small>
            @endif
        </div>

        <!-- Save Button -->
        <div class="d-flex justify-content-between align-items-center">
            <button type="submit" class="btn btn-primary">
                {{ __('Save') }}
            </button>

            @if (session('status') === 'password-updated')
                <small class="text-success">
                    {{ __('Saved.') }}
                </small>
            @endif
        </div>
    </form>
</section>
