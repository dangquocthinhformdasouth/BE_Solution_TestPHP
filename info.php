<?php
    if(isset($_POST['submit'])){
        $yourname = $_POST['yourname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $company = $_POST['company'];
        $message = $_POST['message'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you for...</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container p-4">
        <h3 style="color: #447AB3;">Thank you for contacting us</h3>
        <p class="my-5">We will be back in touch with you within one business day using the infomation you just provided below:</p>
        <table>
            <tr>
                <td><b>Name:</b></td>
                <td><?php echo $yourname;?></td>
            </tr>
            <tr>
                <td><b>Phone:</b></td>
                <td><?php echo $phone;?></td>
            </tr>
            <tr>
                <td><b>Email Address:</b></td>
                <td style="color: #447AB3;"><u><?php echo $email;?></u></td>
            </tr>
            <tr>
                <td><b>Company:</b></td>
                <td><?php echo $company;?></td>
            </tr>
        </table>
    </div>
</body>

</html>
<?php
    }
?>