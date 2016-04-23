@extends('layouts.master')

@section('content')

    <div id="map_info">
        <h2 id="info-title"></h2>
        <h3>必要物資</h3>
        <ul id="info-necessities"></ul>
        <img id="info-image" src="" height="150" width="100%">
    </div>
    <div id="map_canvas" class="col-md-9">
    </div>
    <div id="timeline" class="col-md-3">
        <div class="time">
            @foreach ($refugees as $refugee)
                <?php
                $necessities = json_decode($refugee->necessities);
                // $image = imagecreatefromstring($refugee->situation);
                ?>
                @foreach ($necessities as $n)
                    <div class="timeline-item" lat="{{ $refugee->lat }}" lng="{{ $refugee->lng }}" title="{{ $refugee->place }}" necessities="{{ $refugee->necessities }}" image="{{ $refugee->situation }}">
                        <h3>{{ $refugee->place }}</h3>
                        <p>
                            {{ $n->name }} : {{ $n->amount }}<br />
                        </p>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>

@endsection
