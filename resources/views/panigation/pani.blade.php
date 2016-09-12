@extends('layout.layout')
@section('bootstrap')
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@endsection

@section('content')
    @php
    $count = 0
    @endphp
    @foreach($data as $item)
        @if($count % 5 == 0)
            <ul class="group_item">
                @endif
                <li>
                    <a href="#"><img src="{{url($item->images)}}" alt="{{$item->name}}"></a>
                    <a href="#">{{$item->name}}</a>
                    <span>{{$item->price}}</span>
                </li>
                @if($count % 5 == 4)
            </ul>
        @endif
        @php
        $count ++
        @endphp
    @endforeach
    <div class="paniga">{{ $data->links() }}</div>
@endsection