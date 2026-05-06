<x-app-layout>
    <x-slot name="header">
        <h2>Dashboard HMIT</h2>
    </x-slot>

    <div class="p-6">
        <h3>Halo, {{ auth()->user()->name }}</h3>
        <p>Selamat datang di sistem aspirasi HMIT.</p>

        <br>

        <a href="/aspirasi" style="background:blue;color:white;padding:10px;display:inline-block;">
            Buat Aspirasi
        </a>

    </div>
</x-app-layout>