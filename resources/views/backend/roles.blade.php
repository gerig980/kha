@extends('layouts.backend.app1')

@section('title', 'Rolet')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">{{__('dashboard.roles')}}</h4>
    
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                        <li class="breadcrumb-item active">{{__('dashboard.roles')}}</li>
                    </ol>
                </div>
    
            </div>
        </div>
    </div>
    <!-- end page title -->
    
    <div class="row">
        <div class="col-lg-12">
            <div class="card" id="leadsList">
                <div class="card-header border-0">
    
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-auto ms-auto">
                            <div class="hstack gap-2">
                                <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i>{{__('dashboard.Add Roles')}}</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div>
                        <div class="table-responsive table-card">
                            <table class="table align-middle" id="customerTable">
                                <thead class="table-light">
                                    <tr>
                                        <th class="sort" data-sort="id">{{__('dashboard.No')}}.</th>
                                        <th class="sort" data-sort="name">{{__('dashboard.name')}}</th>
                                        <th class="sort" data-sort="company_name">Slug</th>
                                        <th class="sort" data-sort="action">{{__('dashboard.actions')}}</th>
                                    </tr>
                                </thead>
                                <tbody class="list form-check-all">
                                    @php
                                    $i = 0;
                                    @endphp
                                    @foreach($roles as $role)
                                    @php
                                    $i = $i + 1;
                                    @endphp
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>{{ $role->slug }}</td>
                                        <td>
                                            <ul class="list-inline hstack gap-2 mb-0">
                                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                    <a class="edit-item-btn" href="#editModal{{$role->id}}" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom text-muted"></i></a>
                                                </li>
                                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Delete">
                                                    <a class="remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal{{$role->id}}">
                                                        <i class="ri-delete-bin-fill align-bottom text-muted"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="{{__('dashboard.Edit permissions')}}">
                                                    <a class="edit-item-btn text-black"  href="{{route('permissions',$role->id)}}">
                                                        {{__('dashboard.Edit permissions')}}
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="editModal{{$role->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header bg-light p-3">
                                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                                </div>
                                                <form action="{{ route('roles.update', $role->id) }}"  method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="row g-3">
                                                            <div class="col-lg-12">
                                                                <div>
                                                                    <label for="company_name-field" class="form-label">{{__('dashboard.name')}}*</label>
                                                                    <input type="text" name="name" class="form-control" value="{{ $role->name }}" required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end row-->
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">{{__('dashboard.Close')}}</button>
                                                            <button type="submit" class="btn btn-success" id="add-btn" name="submit">{{__('dashboard.Update Role')}}</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade zoomIn" id="deleteRecordModal{{$role->id}}" tabindex="-1" aria-labelledby="deleteRecordLabel" aria-hidden="true">
                                        <form action="{{ route('roles.update', $role->id) }}"  method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('DELETE')
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                                                    </div>
                                                    <div class="modal-body p-5 text-center">
                                                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px"></lord-icon>
                                                        <div class="mt-4 text-center">
                                                            <h4 class="fs-semibold">{{__('dashboard.Do you want to delete this role')}} {{ $role->name }}?</h4>
                                                            <p class="text-muted fs-14 mb-4 pt-1">{{__('dashboard.This role cant be reversed after delete')}}</p>
                                                            <div class="hstack gap-2 justify-content-center remove">
                                                                <button class="btn btn-link link-success fw-medium text-decoration-none" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i>{{__('dashboard.Close')}}</button>
                                                                <button class="btn btn-danger" id="delete-record" name="submit">{{__('dashboard.Yes i want to delete')}}</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!--end modal -->
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="noresult" style="display: none">
                                <div class="text-center">
                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                    <p class="text-muted mb-0">We've searched more than 150+ leads We did not find any leads for you search.</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-light p-3">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                </div>
                                <form action="{{ route('roles.store') }}"  method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="modal-body">
                                        <div class="row g-3">
                                            <div class="col-lg-12">
                                                <div>
                                                    <label for="company_name-field" class="form-label">{{__('dashboard.name')}}*</label>
                                                    <input type="text" name="name" class="form-control" placeholder="{{__('dashboard.Add name of role')}}" required />
                                                </div>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <div class="modal-footer">
                                        <div class="hstack gap-2 justify-content-end">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">{{__('dashboard.Close')}}</button>
                                            <button type="submit" class="btn btn-success" id="add-btn" name="submit">{{__('dashboard.Add Roles')}}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end modal-->
    
                    
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->
@endsection


