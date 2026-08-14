@extends('layouts.default_auth')
@section('admin_content')
    @if (Auth::user()->role == 0)
        
    @endif
    
@endsection
@push('js')
    <script src="{{ versionResource('backend/js/chart/raphael-min.js') }}" defer></script>
    <script src="{{ versionResource('backend/js/chart/morris.min.js') }}" defer></script>
    <script src="{{ versionResource('backend/js/chart/chart.min.js') }}" defer></script>
@endpush
