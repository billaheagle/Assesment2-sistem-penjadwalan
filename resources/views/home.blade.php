@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            Home<br><br>
            Jumlah Students =  {{ $students }} <br><br>
            Jumlah Lecturer =  {{ $lecturer }}
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection



