<x-app-layout>
    <x-slot name="header">
        <h2>Aspirasi</h2>
    </x-slot>

    <div class="p-6">

        <h3>Halo, {{ auth()->user()->name }}</h3>

        @if(session('success'))
            <div style="color: green; margin-bottom: 10px;">
                {{ session('success') }}
            </div>
        @endif

        <!-- FORM TAMBAH -->
        <form method="POST" action="/aspirasi">
            @csrf
            <textarea name="isi" placeholder="Tulis aspirasi..." required style="width:100%; height:100px;"></textarea>
            <br><br>
            <button type="submit">Kirim</button>
        </form>

        <hr><br>

        <!-- LIST ASPIRASI -->
        <h4>Daftar Aspirasi Saya:</h4>

        @forelse($aspirasis as $aspirasi)
            <div style="border:1px solid #ccc; padding:10px; margin-bottom:10px;">
                <p>{{ $aspirasi->isi }}</p>

                <!-- FORM HAPUS -->
                <form method="POST" action="/aspirasi/{{ $aspirasi->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="color:red;">Hapus</button>
                </form>
            </div>
        @empty
            <p>Belum ada aspirasi.</p>
        @endforelse

    </div>
</x-app-layout>