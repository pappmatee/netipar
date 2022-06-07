@extends('layout')
@section('content')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Phonebook</a></li>
                <li class="breadcrumb-item active" aria-current="page">View</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Phonebook</h4>
                        <a href="/">
                            <button type="button" class="btn btn-outline-primary btn-sm btn-icon-text">
                                <i class="btn-icon-prepend" data-feather="user-plus"></i>
                                Add new contact
                            </button>
                        </a>
                        <div class="table-responsive mt-3">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Phone number</th>
                                        <th>Address</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="py-1 align-middle">
                                            <img src="http://via.placeholder.com/36x36" alt="image">
                                        </td>
                                        <td class="align-middle">John Doe</td>
                                        <td class="align-middle">
                                            <p class="m-0">+36 12 345 6789</p>
                                            <p class="m-0">+36 12 345 6789</p>
                                        </td>
                                        <td class="align-middle">
                                            <p>4244, Újfehértó, Farkasnyári utca 44.</p>
                                            <p>4244, Újfehértó, Farkasnyári utca 44.</p>
                                        </td>
                                        <td class="align-middle">
                                            <a class="me-2"><i data-feather="edit" width="17"></i></a>
                                            <a class="ms-2 text-danger"><i data-feather="trash" width="17"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-1 align-middle">
                                            <img src="http://via.placeholder.com/36x36" alt="image">
                                        </td>
                                        <td class="align-middle">John Doe</td>
                                        <td class="align-middle">
                                            <p class="m-0">+36 12 345 6789</p>
                                            <p class="m-0">+36 12 345 6789</p>
                                        </td>
                                        <td class="align-middle">
                                            <p>4244, Újfehértó, Farkasnyári utca 44.</p>
                                            <p>4244, Újfehértó, Farkasnyári utca 44.</p>
                                        </td>
                                        <td class="align-middle">
                                            <a class="me-2"><i data-feather="edit" width="17"></i></a>
                                            <a class="ms-2 text-danger"><i data-feather="trash" width="17"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
