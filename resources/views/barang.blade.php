@extends('utama')

@section('judul_menu')
    Ditampilkan dari section judul menu, dengan data: {{$isi_data}} <br>

    @php
        
    @endphp

    @if ($isi_data == 1)
        data diisi dengan angka 1
    @elseif($isi_data > 2)
        data diisi dengan angka lebih dari 1
    @else
        tidak valid
    @endif

    @for ($x = 0; $x < 5; $x++)
        nilainya adalah {{$x}} <br>
    @endfor
@endsection

@section('isi_menu')
    

@endsection