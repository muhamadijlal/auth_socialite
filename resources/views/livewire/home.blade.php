<div class="flex w-full items-center h-screen justify-center">
  <div class="rounded-lg border p-10 border-slate-300 text-center">
    <h1 class="text-xl font-bold text-slate-800 mb-10">Welcome!</h1>
    <h3 class="text-lg font-semibold">{{ $name }}</h3>
    <p>{{ $email }}</p>

    <button wire:click="logout"
      class="mt-10 bg-red-600 hover:bg-red-700 p-2 rounded-lg font-bold text-white">Logout</button>
  </div>
</div>