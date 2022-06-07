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
            <div class="col-12">
                <div class="phonebook">
                    <div class="header">
                        <p>Phonebook</p>
                        <a>
                            <button class="btn btn-outline-primary btn-sm">Add new contact</button>
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
                                <tr>
                                    <td class="align-middle">
                                        <img class="user_image" src="https://via.placeholder.com/64.png">
                                    </td>
                                    <td class="align-middle">
                                        <p class="full_name m-0">John Doe</p>
                                    </td>
                                    <td class="align-middle">
                                        <p class="email m-0">test@test.com</p>
                                        <p class="email m-0">test@test.com</p>
                                    </td>
                                    <td class="align-middle">
                                        <p class="phone m-0">+36 12 3456 789</p>
                                        <p class="phone m-0">+36 12 3456 789</p>
                                    </td>
                                    <td class="align-middle">
                                        <p class="address m-0">0000, City, Street, House number</p>
                                        <p class="address m-0">0000, City, Street, House number</p>
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
                                <tr>
                                    <td class="align-middle">
                                        <img class="user_image" src="https://via.placeholder.com/64.png">
                                    </td>
                                    <td class="align-middle">
                                        <p class="full_name m-0">John Doe</p>
                                    </td>
                                    <td class="align-middle">
                                        <p class="email m-0">test@test.com</p>
                                        <p class="email m-0">test@test.com</p>
                                    </td>
                                    <td class="align-middle">
                                        <p class="phone m-0">+36 12 3456 789</p>
                                        <p class="phone m-0">+36 12 3456 789</p>
                                    </td>
                                    <td class="align-middle">
                                        <p class="address m-0">0000, City, Street, House number</p>
                                        <p class="address m-0">0000, City, Street, House number</p>
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
                                <tr>
                                    <td class="align-middle">
                                        <img class="user_image" src="https://via.placeholder.com/64.png">
                                    </td>
                                    <td class="align-middle">
                                        <p class="full_name m-0">John Doe</p>
                                    </td>
                                    <td class="align-middle">
                                        <p class="email m-0">test@test.com</p>
                                        <p class="email m-0">test@test.com</p>
                                    </td>
                                    <td class="align-middle">
                                        <p class="phone m-0">+36 12 3456 789</p>
                                        <p class="phone m-0">+36 12 3456 789</p>
                                    </td>
                                    <td class="align-middle">
                                        <p class="address m-0">0000, City, Street, House number</p>
                                        <p class="address m-0">0000, City, Street, House number</p>
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
                                <tr>
                                    <td class="align-middle">
                                        <img class="user_image" src="https://via.placeholder.com/64.png">
                                    </td>
                                    <td class="align-middle">
                                        <p class="full_name m-0">John Doe</p>
                                    </td>
                                    <td class="align-middle">
                                        <p class="email m-0">test@test.com</p>
                                        <p class="email m-0">test@test.com</p>
                                    </td>
                                    <td class="align-middle">
                                        <p class="phone m-0">+36 12 3456 789</p>
                                        <p class="phone m-0">+36 12 3456 789</p>
                                    </td>
                                    <td class="align-middle">
                                        <p class="address m-0">0000, City, Street, House number</p>
                                        <p class="address m-0">0000, City, Street, House number</p>
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
                                <tr>
                                    <td class="align-middle">
                                        <img class="user_image" src="https://via.placeholder.com/64.png">
                                    </td>
                                    <td class="align-middle">
                                        <p class="full_name m-0">John Doe</p>
                                    </td>
                                    <td class="align-middle">
                                        <p class="email m-0">test@test.com</p>
                                        <p class="email m-0">test@test.com</p>
                                    </td>
                                    <td class="align-middle">
                                        <p class="phone m-0">+36 12 3456 789</p>
                                        <p class="phone m-0">+36 12 3456 789</p>
                                    </td>
                                    <td class="align-middle">
                                        <p class="address m-0">0000, City, Street, House number</p>
                                        <p class="address m-0">0000, City, Street, House number</p>
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
                                <tr>
                                    <td class="align-middle">
                                        <img class="user_image" src="https://via.placeholder.com/64.png">
                                    </td>
                                    <td class="align-middle">
                                        <p class="full_name m-0">John Doe</p>
                                    </td>
                                    <td class="align-middle">
                                        <p class="email m-0">test@test.com</p>
                                        <p class="email m-0">test@test.com</p>
                                    </td>
                                    <td class="align-middle">
                                        <p class="phone m-0">+36 12 3456 789</p>
                                        <p class="phone m-0">+36 12 3456 789</p>
                                    </td>
                                    <td class="align-middle">
                                        <p class="address m-0">0000, City, Street, House number</p>
                                        <p class="address m-0">0000, City, Street, House number</p>
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
