<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Form | Dev Megat</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Send Email</h2>
        <form id="emailForm" action="send_email.php" method="post">
            <div class="mb-3">
                <label for="recipient" class="form-label">Recipient Email</label>
                <input type="email" class="form-control" id="recipient" name="recipient" required>
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Email</button>
        </form>
    </div>

    <!-- Include SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const emailForm = document.getElementById('emailForm');

            emailForm.addEventListener('submit', function (e) {
                e.preventDefault();

                Swal.fire({
                    icon: 'info',
                    title: 'Sending Email...',
                    text: 'Please wait while we send the email.',
                    allowOutsideClick: false,
                    showCancelButton: false,
                    showConfirmButton: false,
                });

                emailForm.submit();
            });
        });
    </script>

    <footer class="text-center mt-5">
        <p>Created By <a href="https://megatirfan.com" target="_blank">Megat Irfan</a></p>
    </footer>
</body>
</html>
