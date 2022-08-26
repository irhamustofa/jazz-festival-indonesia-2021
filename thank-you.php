<?php
    session_start();

    if (!$_SESSION['data']) {
        header('Location: index.html');
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - Jazz Festival Indonesia 2021</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Philosopher:wght@400;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./resources/css/style.css">
</head>

<body>

    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="resources/images/jfi-logo-small.png" alt="Jazz Festival Indonesia 2021" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html#ticket">Ticket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html#lineup">Line-up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html#gallery-content">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="header">
        <div class="container pt-5">

            <div class="row align-items-center text-center">
                <div class="col-md-8 offset-md-2 px-5">
                    <div class="content-container">
                        <h1 class="mb-4">Thank You for Joining Us!</h1>
                        <p class="mb-5">You could use this e-ticket to enter the event. See you there!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="invoice">
        <div class="container">

            <div class="row">
                <div class="col">
                    <div class="card ticket-card">
                        <div class="card-body">
                            <h3 class="mb-4">Ticket</h3>

                            <div class="row mb-5">
                                <div class="col-md-8">
                                    <div class="row mb-4">
                                        <div class="col">
                                            <span class="text-muted">Name</span>
                                            <h5 id="overview-name" class="m-0"><?php echo $_SESSION['data']['name'] ?></h5>
                                        </div>
                                        <div class="col">
                                            <span class="text-muted">Email</span>
                                            <h5 id="overview-email" class="m-0"><?php echo $_SESSION['data']['email'] ?></h5>
                                        </div>
                                    </div>
        
                                    <div class="row">
                                        <div class="col">
                                            <span class="text-muted">Ticket(s)</span>
                                            <h5 id="overview-ticket-total" class="m-0"><?php echo $_SESSION['data']['ticket_total'] ?></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="barcode-container text-center">
                                        <img src="<?php echo $_SESSION['data']['barcode_image_url'] ?>" alt="<?php echo $_SESSION['data']['barcode_image_url'] ?>" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-graphic">
                            <h1><?php echo $_SESSION['data']['category'] ?></h1>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', () => {
            
        })
    </script>
</body>

</html>