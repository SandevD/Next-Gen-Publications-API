@extends('dashboard.layouts.master')

@section('admin-content')
    @if (Session::has('success'))
        <div class="rounded-md bg-green-400 pl-4 mt-3 ">
            <div class="flex">
                <div class="flex-shrink-0">

                </div>
                <div class="ml-3">
                    <div class="p-2 text-md text-black">
                        <p> {{ Session::get('success') }}</p>
                        @php
                            Session::forget('success');
                        @endphp
                    </div>
                </div>
            </div>
        </div>
    @endif




    @if (count($errors) > 0)
        <div class="rounded-md bg-red-50 pl-12 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <!-- Heroicon name: solid/x-circle -->

                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-red-800">Whoops! There were some problems with your input.</h3>
                    <div class="mt-2 text-sm text-red-700">
                        <ul role="list" class="list-disc pl-5 space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <form method="POST" action="{{ route('roles.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="row p-12">
        <div class="text-lg font-medium text-gray-900 py-5">
            <div class="py-2">
                <strong>Name:</strong>
            </div>
            {!! Form::text('name', null, [
                'placeholder' => 'Name',
                'class' =>
                    'flex-1  block  focus:ring-indigo-500 focus:border-indigo-500 min-w-0  rounded-md sm:text-sm border-gray-300 px-5',
            ]) !!}
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="relative py-5 items-start">
                <div>
                    <strong class="my-5">Permission:</strong>
                </div>
                <br />
                @foreach ($permission as $value)
                    <div>
                        <label
                            class="font-medium text-gray-700 p-5">{{ Form::checkbox('permission[]', $value->id, ['class' => 'p-2']) }}

                            {{ $value->name }}
                        </label>
                    </div>
                    <br />
                @endforeach
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit"
                class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit</button>
        </div>
    </div>
    </form>


@endsection
