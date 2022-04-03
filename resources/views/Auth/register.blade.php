<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>FormWizard_v1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="colorlib.com">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet"
        href="{{ asset('asset/fonts/material-design-iconic-font/css/material-design-iconic-font.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
</head>

<body>
    <div class="wrapper" style="width: 100%">
        <form action="/postregister" id="wizard" method="post">
            @csrf
            <!-- SECTION 1 -->
            <h2></h2>
            <section>
                <div class="inner">

                    <div class="form-content col-md-12">
                        <div class="form-header">
                            <h3>REGISTRASI</h3>
                        </div>
                        {{-- <p>Please fill with your details</p> --}}
                        <div style="margin-top: -50px" class="col-md-12">
                            <div class="form-holder">
                                <input style="width: 100%" type="number" name="nik" placeholder="nik**"
                                    class="form-control">
                            </div>
                            <div class="form-holder">
                                <input type="text" name="name" placeholder="Last Name" class="form-control">
                            </div>
                            <div class="form-holder">
                                <input type="email" name="email" placeholder="email" class="form-control">
                            </div>
                            <div class="form-holder">
                                <input type="password" name="password" placeholder="password" class="form-control">
                            </div>
							
                        </div>
                        <div>
                            <br>
                           <center> <a href="/login">Login</a></center>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block mt-3 mb-3">save</button>
                        </div>

                    </div>
                </div>
            </section>


        </form>
    </div>

    <!-- JQUERY -->
    <script src=" {{ asset('asset/js/jquery-3.3.1.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>
    <!-- JQUERY STEP -->
    <script src=" {{ asset('asset/js/jquery.steps.js') }}"></script>
    <script src=" {{ asset('asset/js/main.js') }}"></script>
    <!-- Template created and distributed by Colorlib -->
</body>

</html>
