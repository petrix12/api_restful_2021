{{-- @extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found')) --}}
@php
    $message = 'sdfdsf';
    $code = 404;
    return response()->json(['error' => $message, 'code' => $code], $code);
@endphp

