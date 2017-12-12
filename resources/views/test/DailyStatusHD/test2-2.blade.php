@extends('test.DailyStatusHD.test2')

@section('content')
    <a href="{{ url('/test2') }}" class="btn">Вернуться к загрузке файла</a>
    <ul class="problem-list">
        {{--<p>Количество тикетов которые необходимо открыть: <span>{{$numberOfRecords}}</span></p>--}}
        <p>
            <div>Общее количество тикетов: <span id="checkboxNoChecked"></span></div>
            <div>Необходимо открыть ещё <span class="problem-list__tiket" id="checkboxChecked"></span></div>

        </p>
        @foreach ($list as $key => $value)
            <li class="problem-list__item">
                <div><label class="problem-list__title" for="{{$key}}">{{$key}}</label><input onclick="checkNumber()" id="{{$key}}"
                                                                                              type="checkbox"></div>
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