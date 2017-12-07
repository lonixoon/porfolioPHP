@extends('test.test2')

@section('content')
    <ul class="problem-list">
        @foreach ($list as $key2 => $value2)
            <li class="problem-list__item ">
                <div>{{$key2}}</div>
                <div>
                    <p>sites:</p>
                    <div>
                        <?php $numItems = count($value2); $i = 0; ?>
                        @foreach($value2 as $key3 => $value3)
                            @if(++$i === $numItems)
                                <span>{{$value3}}</span>
                            @else
                                <span>{{$value3}},</span>
                            @endif
                        @endforeach
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
@endsection