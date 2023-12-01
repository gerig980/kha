@extends('layouts.backend.app1')

@include('layouts.backend.styling_scss')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Paneli</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-8">
            <div class="card --vz-card-bg">
                <div class="card-header align-items-center d-flex">
                    <h4 class="h4 mb-0 flex-grow-1">Përdoruesit</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Emri</th>
                            <th scope="col">Email</th>
                            <th scope="col">Roli</th>
                            <th scope="col" style="width: 150px;">Veprime</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($admins as $admin)
                            <tr>
                                <td><a href="#" class="fw-medium">{{ $loop->iteration }}</a></td>
                                <td>{{ $admin->name }}</td>
                                <td>{{ $admin->email }}</td>
                                @foreach ($roles as $role )
                                    
                                
                                @if ($admin->role == $role->id)
                                <td>{{ $role->name }}</td>
                                @endif
                                @endforeach
                                <td>
                                    <a data-bs-toggle="modal" data-bs-target=".update-user-modal-{{ $admin->id }}"
                                       class="btn btn-sm btn-soft-warning btn-animation waves-effect waves-light"><i
                                            class="ri-edit-line"></i></a>

                                    <div class="modal fade update-user-modal-{{ $admin->id }}" tabindex="-1"
                                         role="dialog"
                                         aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="fadeInleftModalLabel">Modifiko User</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <form action="{{ route('app.admins.update', $admin->id) }}"
                                                      method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="mb-4">
                                                            <label>Emri</label>
                                                            <input type="text" name="name"
                                                                   class="fuzzy-search form-control"
                                                                   placeholder="Emri i user" required
                                                                   value="{{ old('name', $admin->name) }}"/>
                                                        </div>

                                                        <div class="mb-4">
                                                            <label>Roli</label>
                                                            <select name="role_id" class="fuzzy-search form-control">
                                                                @foreach ($roles as $role)
                                                                    <option
                                                                        {{ (int)old('role', $admin->role) === $role->id ? 'selected' : '' }} value="{{ $role->id }}">{{ $role->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="mb-4">
                                                            <label>Email</label>
                                                            <input type="email" name="email"
                                                                   class="fuzzy-search form-control mb-4"
                                                                   placeholder="Email i user"
                                                                   value="{{ old('email', $admin->email) }}"/>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="submit"
                                                               class="btn btn-success waves-effect waves-light"
                                                               value="Ndrysho">
                                                        <button type="button" class="btn btn-danger"
                                                                data-bs-dismiss="modal">Anullo
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <button onclick="deleteData({{ $admin->id }})"
                                            class="btn btn-sm btn-soft-danger btn-animation waves-effect waves-light"><i
                                            class="ri-delete-bin-5-line"></i></button>
                                    <form id="delete-form-{{ $admin->id }}" method="POST"
                                          action="{{ route('app.admins.delete', $admin->id) }}">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Shto user</h4>
                </div>
                <div class="card-body">
                    <div id="fuzzysearch-list">
                        <form method="POST" enctype="multipart/form-data" action="{{ route('app.admins.store') }}">
                            @csrf
                            @method('POST')
                            <div class="mb-4">
                                <label>Emri</label>
                                <input type="text" name="name" class="fuzzy-search form-control"
                                       placeholder="Emri i user" required value="{{ old('name') }}"/>
                            </div>

                            <div class="mb-4">
                                <label>Roli</label>
                                <select name="role" class="fuzzy-search form-control">
                                    @foreach ($roles as $role)
                                        <option
                                            {{ (int)old('role') === $role->id ? 'selected' : '' }} value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-4">
                                <label>Email</label>
                                <input type="email" name="email" class="fuzzy-search form-control mb-4"
                                       placeholder="Email i user" value="{{ old('email') }}"/>
                            </div>

                            <div class="mb-4">
                                <label>Password</label>
                                <input type="password" name="password" class="fuzzy-search form-control mb-4"
                                       placeholder="password"/>
                            </div>

                            <div class="text-end">
                                <input type="submit" class="btn btn-success waves-effect waves-light mt-3" name="submit"
                                       value="Shto">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('js')
    <script>
        function deleteData(id) {
            Swal.fire({
                title: 'Jeni të sigurt që doni ta fshini user-in?',
                text: "Nuk mundeni ta ktheni përsëri nëse e fshini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Po, fshije user-in!',
                cancelButtonText: 'Anullo'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            })
        }
    </script>
@endpush
