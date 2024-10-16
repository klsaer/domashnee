@extends('layouts.main')
@section('content')
    <div class="content">
            <div class="reports">
                @foreach($reports as $report)
                        <div class="report">
                            <h1 class="report_number">{{ $report['number'] }}</h3>
                            <p class="report_desc">{{ $report['description'] }}</p>
                            <p class="report_date">{{ $report['created_at'] }}</p>
                            <form method="POST" action="{{route('reports.destroy', $report->id)}}">
                                @method('delete')
                                @csrf
                                <input type="submit" value="Удалить">
                            </form>
                        </div>
                @endforeach
            </div>
            <form method="POST" action="{{route('reports.store')}}">
                @csrf
                <label for="description" class="text-3xl font-bold underline">Описание</label>
                <textarea id="description" type="string" class="bg-gray-50" placeholder="Описание" ></textarea>
                <input type="submit" value="Создать">
            </form>
    </div>
@endsection()