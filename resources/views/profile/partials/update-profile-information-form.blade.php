<section>
    <header class="mb-4">
        <h2 class="h5 text-primary font-weight-bold">
            {{ __('Profile Information') }}
        </h2>
        <p class="text-muted small">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <!-- Resend Verification Form -->
    <form id="send-verification" method="post" action="{{ route('verification.send') }}" class="d-none">
        @csrf
    </form>

    <!-- Update Profile Form -->
    <form method="post" action="{{ route('profile.update') }}">
        @csrf
        @method('patch')

        <!-- Name -->
        <div class="mb-3">
            <label for="name" class="form-label text-secondary">
                {{ __('Name') }}
            </label>
            <input
                id="name"
                name="name"
                type="text"
                class="form-control"
                value="{{ old('name', $user->name) }}"
                required
                autofocus
                autocomplete="name"
            />
            @if ($errors->get('name'))
                <small class="text-danger">
                    {{ $errors->first('name') }}
                </small>
            @endif
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label text-secondary">
                {{ __('Email') }}
            </label>
            <input
                id="email"
                name="email"
                type="email"
                class="form-control"
                value="{{ old('email', $user->email) }}"
                required
                autocomplete="username"
            />
            @if ($errors->get('email'))
                <small class="text-danger">
                    {{ $errors->first('email') }}
                </small>
            @endif

            <!-- Email Verification -->
            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-2">
                    <p class="small text-muted">
                        {{ __('Your email address is unverified.') }}
                        <button
                            form="send-verification"
                            class="btn btn-link p-0 text-decoration-none text-primary small"
                        >
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="text-success small mt-1">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <!-- Save Button -->
        <div class="d-flex justify-content-between align-items-center">
            <button type="submit" class="btn btn-primary">
                {{ __('Save') }}
            </button>

            @if (session('status') === 'profile-updated')
                <small class="text-success">
                    {{ __('Saved.') }}
                </small>
            @endif
        </div>
    </form>
</section>
