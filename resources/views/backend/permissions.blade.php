@extends('layouts.backend.app1')

@section('title', 'Rolet')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">{{__('dashboard.Panel')}}</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">{{__('dashboard.roles')}}</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="h4 mb-0 flex-grow-1">{{__('dashboard.Roles & Permission')}}</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('roles.update', $role->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <p>{{__('dashboard.Name of Role')}}</p>
                        <input type="text" name="name" class="form-control" value="{{ old('name', $role->name) }}"/>
                        <br>

                        @foreach($modules as $index => $module)
                            <div
                                class="accordion custom-accordionwithicon custom-accordion-border accordion-border-box accordion-secondary">

                                <div class="accordion-item mb-2">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#accordion-module-{{ $module->id }}"
                                                aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                                aria-controls="accordion-module-{{ $module->id }}">
                                            {{ $module->name  }}
                                        </button>
                                    </h2>

                                    <div id="accordion-module-{{ $module->id }}"
                                         class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                                         aria-labelledby="accordionborderedExample1"
                                         data-bs-parent="#accordionBordered">
                                        <div class="accordion-body">

                                            @foreach($module->permissions as $permission)
                                                <div class="btn btn-light txt-dark">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="permission-{{ $permission->id }}" type="checkbox"
                                                               name="permissions[]"
                                                               value="{{ $permission->id }}"
                                                            {{ in_array($permission->id, old('permissions', $role->permissions->pluck('id')->toArray())) ? 'checked' : '' }}>
                                                        <label
                                                            for="permission-{{ $permission->id }}">{{ $permission->name }}</label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <input type="submit" class="btn btn-success waves-effect waves-light mt-3" name="submit"
                               value="{{__('dashboard.change')}}">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
