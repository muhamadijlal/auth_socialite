<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <div class="flex items-center">
      <img class="size-14 mx-auto w-auto rounded-full" src="{{ asset('assets/images/livewire.png') }}" alt="livewire" />
      <span class="text-2xl font-bold">+</span>
      <img class="size-14 mx-auto w-auto rounded-full" src="{{ asset('assets/images/socialite.jpg') }}"
        alt="socialite" />
    </div>
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">
      Create your account
    </h2>
  </div>

  <div class="mt-10 rounded-lg border border-gray-200 bg-white p-8 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" wire:submit="register">
      <div>
        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
        <div class="mt-2">
          <input id="name" wire:model.live="form.name" name="name" type="name"
            class="@if ($errors->has('form.name')) is-invalid @elseif($form->name == null) @else is-valid @enderror block w-full rounded-md border-0 px-4 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6" />
        </div>
        @error('form.name')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
      </div>

      <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
        <div class="mt-2">
          <input id="email" wire:model.live="form.email" name="email" type="email"
            class="@if ($errors->has('form.email')) is-invalid @elseif($form->email == null) @else is-valid @enderror block w-full rounded-md border-0 px-4 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6" />
        </div>
        @error('form.email')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
        </div>
        <div class="mt-2">
          <input id="password" wire:model.live="form.password" name="password" type="password"
            class="@if ($errors->has('form.password')) is-invalid @elseif($form->password == null) @else is-valid @enderror block w-full rounded-md border-0 px-4 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6" />
        </div>
        @error('form.password')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password_confirmation" class="block text-sm font-medium leading-6 text-gray-900">Password
            Confirmation</label>
        </div>
        <div class="mt-2">
          <input id="password_confirmation" wire:model.live="form.password_confirmation" name="password_confirmation"
            type="password"
            class="@if ($errors->has('form.password_confirmation')) is-invalid @elseif($form->password_confirmation == null) @else is-valid @enderror block w-full rounded-md border-0 px-4 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6" />
        </div>
        @error('form.password_confirmation')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
      </div>

      <div>
        <button type="submit"
          class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
          Register
        </button>
      </div>
    </form>

    <div class="mt-10 relative">
      <hr />
      <div class="text-xs font-semibold text-slate-800 flex justify-center text-center -top-2 absolute w-full">
        <p class="bg-white w-32">Or Continue With</p>
      </div>
    </div>

    <div class="mt-10 flex gap-5">
      <a href="{{ url('auth/google') }}"
        class="rounded-md flex items-center justify-center gap-3 bg-white w-full px-3 py-1 font-semibold ring-1 ring-slate-300 hover:bg-slate-50">
        <img class="size-4" src="{{ asset('assets/images/Google_logo.png') }}" alt="google-logo">
        <span>Google</span>
      </a href="#">

      <a href="{{ url('auth/github') }}"
        class="rounded-md flex items-center justify-center gap-3 bg-white w-full px-3 py-1 font-semibold ring-1 ring-slate-300 hover:bg-slate-50">
        <img class="size-4" src="{{ asset('assets/images/Github_logo.png') }}" alt="github-logo">
        <span>GitHub</span>
      </a href="#">
    </div>

    <p class="mt-10 text-center text-sm text-gray-500">
      Have an account yet ?
      <a href="/login" wire:navigate class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Login</a>
    </p>
  </div>
</div>