<h2>Semua Aspirasi</h2>

@foreach($aspirasis as $a)
    <div style="border:1px solid #ccc; margin:10px; padding:10px;">
        <p>{{ $a->isi }}</p>
        <small>User ID: {{ $a->user_id }}</small>
    </div>
@endforeach