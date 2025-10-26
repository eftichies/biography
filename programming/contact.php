<?php include 'includes/header.php'; ?>
<section class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow-lg border-0">
                <div class="card-body">
                    <h1 class="card-title gradient-text mb-3">Contact Me</h1>
                    <form name="contactForm" action="" method="post" onsubmit="return validateForm()">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" id="email" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message:</label>
                            <textarea id="message" name="message" class="form-control"></textarea>
                        </div>
                        <input type="submit" value="Send" class="btn btn-primary px-4">
                    </form>
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $name = htmlspecialchars($_POST['name']);
                        $email = htmlspecialchars($_POST['email']);
                        $message = htmlspecialchars($_POST['message']);
                        echo "<p class='mt-3 alert alert-success'>Thank you, $name! Your message has been received.</p>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'includes/footer.php'; ?>