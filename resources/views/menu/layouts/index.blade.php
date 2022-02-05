@extends('template.layouts.admin')
@section('content')

    @include('menu.create')

    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-7">
                <x-card class="pull-up">
                    <x-slot name="heading">Hello this is a header for this card!</x-slot>
                    <x-forms.input placeholder="This is place holder" label="Test input" name="test-input"/>
                </x-card>
            </div>
        </div>
    </div>

    @push('js')
        <script>
            $(function () {
                // $('#menu').nestable()
            })
        </script>
    @endpush
@endsection
