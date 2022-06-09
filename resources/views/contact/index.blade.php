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
                                <tr>
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
                                        <p class="address m-0">{{ $contact->addresses->zip.' '.$contact->addresses->city.' '.$contact->addresses->address }}</p>
                                        <p class="address m-0">{{ $contact->addresses->mailing_zip.' '.$contact->addresses->mailing_city.' '.$contact->addresses->mailing_address }}</p>
                                    </td>
                                    <td class="align-middle text-end">
                                        <a class="edit-icon me-2" href="#">
                                            <img src="{{ asset('icons/edit.svg') }}">
                                        </a>
                                        <a class="delete-icon" href="#">
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
