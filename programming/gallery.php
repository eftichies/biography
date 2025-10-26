<?php include 'includes/header.php'; ?>
<section class="container py-5">
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h1 class="display-4 fw-bold gradient-text mb-3" style="letter-spacing:2px;">Gallery</h1>
            <p class="lead mb-4">A collection of my favorite moments and memories.</p>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
        <div class="col">
            <div class="card h-100 shadow-lg border-0 bg-gradient bg-opacity-75" style="background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);">
                <img src="assets/images/sample1.jpg" class="card-img-top" alt="Sample 1" style="height:160px;object-fit:cover;cursor:pointer;" onclick="showImage(this.src)">
            </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow-lg border-0 bg-gradient bg-opacity-75" style="background: linear-gradient(135deg, #e0c3fc 0%, #8ec5fc 100%);">
                <img src="assets/images/sample2.jpg" class="card-img-top" alt="Sample 2" style="height:160px;object-fit:cover;cursor:pointer;" onclick="showImage(this.src)">
            </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow-lg border-0 bg-gradient bg-opacity-75" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                <img src="assets/images/sample3.jpg" class="card-img-top" alt="Sample 3" style="height:160px;object-fit:cover;cursor:pointer;" onclick="showImage(this.src)">
            </div>
        </div>
    </div>
    <div id="modal" class="modal" style="display:none;">
        <span onclick="closeModal()" class="close">&times;</span>
        <img class="modal-content" id="modal-img">
    </div>
</section>
<?php include 'includes/footer.php'; ?>