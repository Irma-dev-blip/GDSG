<?php
$pageTitle = 'Contact';
require __DIR__ . '/includes/functions.php';
require __DIR__ . '/includes/header.php';
?>
<section class="py-5">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6">
                <h1 class="display-6 fw-bold">Contact</h1>
                <p class="lead text-muted">Get in touch with the Geospatial Data Science Group for research collaboration, publications, and partnerships.</p>
                <div class="card card-soft p-4 mt-4">
                    <h5>Contact Information</h5>
                    <p class="text-muted mb-1">Email: info@gdsg.org</p>
                    <p class="text-muted mb-1">Phone: +1 (555) 123-4567</p>
                    <p class="text-muted">Office hours: Mon - Fri, 9:00 AM - 6:00 PM</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-soft p-4 shadow-sm">
                    <h5>Send a message</h5>
                    <form action="#" method="post" class="mt-3">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-primary-custom">Submit Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
