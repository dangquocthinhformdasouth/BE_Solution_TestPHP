<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BE-Solution-test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 p-5 ">
                <div class="d-flex justify-content-between">
                    <h5 style="color: #215285;">Send us a Message</h5>
                    <i class="fa-regular fa-envelope h3 text-info"></i>
                </div>
                <form method="POST" action="info.php" id="form-message" class="row my-4">
                    <div class="col-6">
                        <label for="" class="text-secondary">Your name</label>
                        <input type="text" id="yourname" name="yourname" class="form-control" placeholder="...">
                        <hr>
                    </div>
                    <div class="col-6">
                        <label for="" class="text-secondary">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="...">
                        <hr>
                    </div>
                    <div class="col-6">
                        <label for="" class="text-secondary">Phone</label>
                        <input type="number" id="phone" name="phone" class="form-control" placeholder="...">
                        <hr>
                    </div>
                    <div class="col-6">
                        <label for="" class="text-secondary">Company</label>
                        <input type="text" id="company" name="company" class="form-control" placeholder="...">
                        <hr>
                    </div>
                    <div class="col-12">
                        <label for="exampleFormControlTextarea1" class="form-label text-secondary">Message</label>
                        <textarea class="form-control" id="message" name="message" id="exampleFormControlTextarea1" placeholder="..." rows="3"></textarea>
                        <hr>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <button type="submit" name="submit" class="btn text-light px-4" style="background-color: #5867DD;">Send</button>
                    </div>
                </form>
            </div>
            <div class="col-4 bg-info-dark p-5 ">
                <h5 class="text-light">Contact Infomation</h5>
                <div class="container text-light my-5">
                    <div class="location d-flex align-items-center">
                        <i class="fa-solid fa-location-dot h4"></i>
                        <p class="info p-3">360 King Stress <br> Feasterville Trevose, PA 19053</p>
                    </div>
                    <div class="phone d-flex align-items-center">
                        <i class="fa-solid fa-mobile-screen h4"></i>
                        <p class="info p-3">(800) 900-200-300</p>
                    </div>
                    <div class="email d-flex align-items-center ">
                        <i class="fa-solid fa-envelope-open-text h4"></i>
                        <p class="info p-3">info@gmail.com</p>
                    </div>
                </div>
                <div class="app-info">
                    <a href="#"><i class="bi bi-twitter h3"></i></a>
                    <a href="#"><i class="bi bi-linkedin h3 px-4"></i></a>
                    <a href="#"><i class="bi bi-instagram h3"></i></a>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal" id="error-modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <h2 class="">Face-plant!</h2>
                        <p class="h4 text-secondary py-3">Ooops, something went wrong.</p>
                        <p><i id="error" class="fa-regular fa-circle-xmark text-danger my-5"></i></p>
                        <button type="button" id="try-again" class="btn btn-danger form-control" data-bs-dismiss="modal">Try again</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>