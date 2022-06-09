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
        <div class="col-6">
            <div class="phonebook">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-unstyled mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="header">
                    <p>Add new contact</p>
                    <a href="{{ route('phonebook.index') }}">
                        <button class="btn btn-sm shadow-none">View all contacts</button>
                    </a>
                </div>
                <form action="{{ route('phonebook.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="body">
                    <div class="mb-3 row">
                        <label for="username" class="col-sm-3 col-form-label">Full Name</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control shadow-none" id="full-name" name="full_name" value="" required>
                        </div>
                    </div>
                    <div class="emails mb-3">
                        <div class="mb-1 row">
                            <label for="email" class="col-sm-3 col-form-label">E-mail address</label>
                            <div class="col-sm-5">
                                <input type="email" class="form-control shadow-none" id="email" value="" placeholder="Email address" name="email[]" required>
                            </div>
                            <a class="add-email col-sm-1">
                                +
                            </a>
                        </div>
                    </div>

                    <div class="phones mb-3">
                        <div class="mb-1 row">
                            <label for="phone" class="col-sm-3 col-form-label">Phone</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control shadow-none" id="phone" value="" placeholder="00 36 12 345 6789" name="phone[]">
                            </div>
                            <a class="add-phone col-sm-1">
                                +
                            </a>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="username" class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-6">
                            <input type="file" class="form-control shadow-none" id="image" name="image" accept="image/png, image/jpeg">
                        </div>
                    </div>

                    <div class="main-address">
                        <div class="mb-2 row">
                            <label for="username" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control shadow-none" id="address" name="address" placeholder="1234 Main St">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="username" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control shadow-none" id="image" name="city" placeholder="City">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="form-control shadow-none" id="image" name="zip" placeholder="Zip">
                            </div>
                        </div>
                    </div>


                    <div class="mb-1 row">
                        <label for="username" class="col-sm-3 col-form-label">Mailing address</label>
                        <div class="col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input shadow-none" type="checkbox" checked="" value="" id="address-check" name="address_check">
                                <label class="form-check-label" for="address-check">
                                    Same as address
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mailing-address" style="display: none">
                        <div class="mb-2 row">
                            <label for="username" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control shadow-none" id="address" name="mailing_address" placeholder="1234 Main St">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="username" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control shadow-none" id="image" name="mailing_city" placeholder="City">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="form-control shadow-none" id="image" name="mailing_zip" placeholder="Zip">
                            </div>
                        </div>
                    </div>

                    <div class="mt-5 row">
                        <div class="col-3">
                            <button type="submit" class="save-btn btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        const emails = $(".emails");
        const phones = $(".phones");
        const add_email = $(".add-email");
        const add_phone = $(".add-phone");

        $(add_email).click(function(e) {
            e.preventDefault();
            $(emails).append('' +
                '<div class="mb-1 row"><label for="email" class="col-sm-3 col-form-label"></label> <div class="col-sm-5"> <input type="email" class="form-control shadow-none" id="email" value="" placeholder="Email address" name="email[]"> </div></div>');
        });

        $(add_phone).click(function(e) {
            e.preventDefault();
            $(phones).append('' +
                '<div class="mb-1 row"><label for="phone" class="col-sm-3 col-form-label"></label> <div class="col-sm-5"> <input type="text" class="form-control shadow-none" id="phone" value="" placeholder="Phone number" name="phone[]"> </div></div>');
        });

        $("#address-check").change(function() {
            if($("#address-check").prop('checked')) {
                $(this).removeAttr('checked');
                $(".mailing-address").css("display","none");
            }
            else {
                $(this).attr('checked','checked');
                $(".mailing-address").css("display","block");
            }
        });

    });
</script>
</body>
</html>
