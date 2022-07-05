@@extends('layouts.app')

@@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
@if($config->options->localized)
                   @lang('models/{{ $config->modelNames->camelPlural }}.plural')
@else
                    <h1>{{ $config->modelNames->humanPlural }}</h1>
@endif
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="@{{ route('{!! $config->modelNames->camelPlural !!}.create') }}">
@if($config->options->localized)
                         @@lang('crud.add_new')
@else
                        Add New
@endif
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @@include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            {!! $table !!}
        </div>
    </div>

@@endsection