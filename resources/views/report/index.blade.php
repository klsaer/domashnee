@extends('layouts.main')
@section('content')
    <div class="content">
            <div class="reports">
                @foreach($reports as $index)
                        <div class="report">
                            <h1 class="report_number">{{ $index['number'] }}</h3>
                            <p class="report_desc">{{ $index['description'] }}</p>
                            <p class="report_date">{{ $index['created_at'] }}</p>
                        </div>
                @endforeach
            </div>
    </div>
@endsection()