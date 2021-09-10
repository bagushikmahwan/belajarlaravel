<h1 style="color: red">{{ $page }}</h1      >

@for ($i = 0;$i<10;$i++)
        {{$i}}
@endfor
<br>

@foreach ($data as $item)
    {{ $loop->iteration}}
    {{ $item }} <br>
@endforeach

@php
    $nama = 'sugab';
@endphp
{{$nama}}
{{--dd($data)--}}
