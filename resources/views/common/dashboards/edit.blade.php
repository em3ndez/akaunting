@extends('layouts.admin')

@section('title', trans('general.title.edit', ['type' => trans_choice('general.dashboards', 1)]))

@section('content')
    <div class="card">
        {!! Form::model($dashboard, [
            'id' => 'dashboard',
            'method' => 'PATCH',
            'route' => ['dashboards.update', $dashboard->id],
            '@submit.prevent' => 'onSubmit',
            '@keydown' => 'form.errors.clear($event.target.name)',
            'files' => true,
            'role' => 'form',
            'class' => 'form-loading-button',
            'novalidate' => true,
        ]) !!}

            <div class="card-body">
                <div class="row">
                    {{ Form::textGroup('name', trans('general.name'), 'font') }}

                    @can('read-auth-users')
                        {{ Form::checkboxGroup('users', trans_choice('general.users', 2), $users, 'name') }}
                    @endcan

                    {{ Form::radioGroup('enabled', trans('general.enabled'), $dashboard->enabled) }}
                </div>
            </div>

            @can('update-common-dashboards')
                <div class="card-footer">
                    <div class="row save-buttons">
                        {{ Form::saveButtons('dashboards.index') }}
                    </div>
                </div>
            @endcan
        {!! Form::close() !!}
    </div>
@endsection

@push('scripts_start')
    <script src="{{ asset('public/js/common/dashboards.js?v=' . version('short')) }}"></script>
@endpush
