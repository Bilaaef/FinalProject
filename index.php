
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Add your Bootstrap and Font Awesome CDN links here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy0WgaWyIp2IxDIkvDfGepNT9aLI9eYWOj"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>
</head>

<body>
    
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://th.bing.com/th/id/OIP.jfxFxZ7PM7GzJmRT2J1rRAHaEo?rs=1&pid=ImgDetMain"
                        class="img-fluid" >
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form method="post" action="form.php">
                        <!-- ... (your existing form code) -->

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" name="email" id="form3Example3"
                                class="form-control form-control-lg" placeholder="Enter a valid email address" />
                            <label class="form-label" for="form3Example3">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" name="password" id="form3Example4"
                                class="form-control form-control-lg" placeholder="Enter password" />
                            <label class="form-label" for="form3Example4">Password</label>
                        </div>

                        <!-- ... (your existing form code) -->

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                                    
                          class="link-danger">Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- ... (your existing code) -->
    </section>

    <!-- ... (your existing code) -->

    <!-- Add your Bootstrap and Font Awesome CDN script tags here -->
    <script src="https://code.jquery.com/jquery3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-XrP1/wWm7a0ggiu1U6Ix+TQdYgPz0so0pfY2D5MdmIwbu//NfKJmV5Cq5Jo/EaQ"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity
