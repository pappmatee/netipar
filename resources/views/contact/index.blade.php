<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Netipar próba feladat</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/swal.css') }}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <meta name="_token" content="{{ csrf_token() }}" />
</head>
<body>
    <div class="main container vh-100">
        <div class="row">
            <div class="col-10">
                <div class="phonebook">
                    <div class="header">
                        <p>Phonebook</p>
                        <a href="{{ route('phonebook.create') }}">
                            <button class="btn btn-sm shadow-none">Add new contact</button>
                        </a>
                    </div>
                    <div class="body">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $contact)
                                <tr id="contact-row-{{$contact->id}}">
                                    <td class="align-middle">
                                        <img class="user_image" src="{{ $contact->image ? asset('storage/'.$contact->image->file_name) : 'https://via.placeholder.com/64.png' }}">
                                    </td>
                                    <td class="align-middle">
                                        <p class="full_name m-0">{{ $contact->full_name }}</p>
                                    </td>
                                    <td class="align-middle">
                                        @foreach($contact->emails as $email)
                                            <p class="email m-0">{{ $email->email }}</p>
                                        @endforeach
                                    </td>
                                    <td class="align-middle">
                                        @foreach($contact->phones as $phone)
                                            <p class="phone m-0">{{ $phone->phone }}</p>
                                        @endforeach
                                    </td>
                                    <td class="align-middle">
                                        <p class="address m-0">{{ $contact->address->zip.' '.$contact->address->city.' '.$contact->address->address }}</p>
                                        <p class="address m-0">{{ $contact->address->mailing_zip.' '.$contact->address->mailing_city.' '.$contact->address->mailing_address }}</p>
                                    </td>
                                    <td class="align-middle text-end">
                                        <a class="edit-contact me-2" href="{{ route('phonebook.edit', $contact->id) }}">
                                            <img src="{{ asset('icons/edit.svg') }}">
                                        </a>
                                        <a class="delete-contact" id="delete-contact" contact="{{ $contact->id }}" href="#">
                                            <img src="{{ asset('icons/trash-2.svg') }}">
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ url('css/jquery/jquery.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

    @if(Session::has('success'))
        <script>
            $(document).ready(function () {
                swal({
                    text: '{{ Session::get('success') }}',
                    icon: 'success',
                    buttons: false,
                    timer: 2000,
                });
            });
        </script>
    @endif

    <script>
        $(document).on("click","#delete-contact", function (e) {
            var contact_id = $(this).attr('contact');
            console.log(contact_id);
            swal('Are you sure you want to delete?', {
                icon: 'error',
                buttons: {
                    cancel: {
                        text: "No",
                        value: null,
                        visible: true,
                        className: "btn shadow-none btn-vortex",
                        dangerMode: true,
                        closeModal: true,
                    },
                    confirm: {
                        text: "Delete",
                        value: null,
                        visible: true,
                        className: "confirm-delete btn shadow-none btn-vortex-danger",
                        closeModal: false,
                    }
                },
            });
            $(document).on("click",".confirm-delete", function (e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                $.ajax({
                    url: '/destroy/' + contact_id,
                    data: {id: contact_id},
                    method: 'post',
                    success: function(result) {
                        $('#contact-row-' + contact_id).remove();
                        swal('Deleted successfully', {
                            icon: 'success',
                            buttons: false,
                            timer: 2000,
                        });
                    },
                    error: function(result) {
                        console.log(result);
                        swal('Error occurred', {
                            icon: 'error',
                            buttons: false,
                            timer: 2000,
                        });
                    },
                });
            });
        });
    </script>
</body>
</html>
