@extends('test.test2')

@section('content')
    <ul class="problem-list">
        @foreach ($list as $key => $value)
            <li class="problem-list__item ">
                <div>{{$key}}</div>
                <div>
                    <p>sites:</p>
                    <div>
                        <?php $numItems = count($value); $i = 0; ?>
                        @foreach($value as $key2 => $value2)
                            @if(++$i === $numItems)
                                <span>{{$value2}}</span>
                            @else
                                <span>{{$value2}},</span>
                            @endif
                        @endforeach
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
@endsection