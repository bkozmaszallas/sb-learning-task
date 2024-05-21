<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.head')
    <body>
        @include('layouts.header')
        @include('pages.home.index')
        @include('pages.home.whychooseus')
        @include('pages.home.ourpartners')
    </body>
</html>
