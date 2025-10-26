<?php include 'includes/header.php'; ?>
<section class="container py-4">
    <div class="row mb-4">
        <section class="container py-5">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h1 class="display-4 fw-bold gradient-text mb-3" style="letter-spacing:2px;">Welcome to My Biography</h1>
                    <p class="lead mb-4">Hello! I'm <span class="fw-bold">Basilgo Ken LLoyd</span>, a 21 years old student of Lapu-Lapu City College, a passionate individual who loves learning and exploring new things. My goal is to make a positive impact in my community and beyond. This website shares a bit about me, my hobbies, activities, and memories. Feel free to browse around!</p>
                </div>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-md-8">
                    <div class="card border-0 shadow-lg bg-white bg-opacity-75 rounded-4 p-3">
                        <div class="row g-0 align-items-center">
                            <div class="col-auto">
                                <img src="assets/images/profile.jpg" alt="Profile" class="rounded-circle border border-3 border-primary shadow-sm me-3" style="width:70px;height:70px;object-fit:cover;">
                            </div>
                            <div class="col">
                                <ul class="list-group list-group-flush bg-transparent">
                                    <li class="list-group-item bg-transparent"><strong>Full Name:</strong> Basilgo Ken LLoyd</li>
                                    <li class="list-group-item bg-transparent"><strong>Birthday:</strong> November 20, 2003</li>
                                    <li class="list-group-item bg-transparent"><strong>Location:</strong> Lapu-Lapu City, Philippines</li>
                                    <li class="list-group-item bg-transparent"><strong>Profession:</strong> Student</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-lg border-0 bg-gradient bg-opacity-75" style="background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);">
                        <div class="card-body">
                            <h3 class="card-title gradient-text">My Hobbies</h3>
                            <ul class="ps-3">
                                <li>Reading books</li>
                                <li>Photography</li>
                                <li>Traveling</li>
                                <li>Cooking</li>
                                <li>Playing guitar</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent border-0"><a href="hobby.php" class="btn btn-outline-primary btn-sm">See more</a></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-lg border-0 bg-gradient bg-opacity-75" style="background: linear-gradient(135deg, #e0c3fc 0%, #8ec5fc 100%);">
                        <div class="card-body">
                            <h3 class="card-title gradient-text">My Activities</h3>
                            <ul class="ps-3">
                                <li>Volunteering at local shelters</li>
                                <li>Attending tech meetups</li>
                                <li>Hiking and outdoor adventures</li>
                                <li>Organizing community events</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent border-0"><a href="activity.php" class="btn btn-outline-primary btn-sm">See more</a></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-lg border-0 bg-gradient bg-opacity-75" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                        <div class="card-body">
                            <h3 class="card-title gradient-text">Gallery</h3>
                            <div class="d-flex flex-wrap gap-2 justify-content-center">
                                <img src="assets/images/sample1.jpg" alt="Sample 1" class="rounded-3 shadow-sm border border-white" style="width:60px;height:40px;object-fit:cover;cursor:pointer;" onclick="showImage(this.src)">
                                <img src="assets/images/sample2.jpg" alt="Sample 2" class="rounded-3 shadow-sm border border-white" style="width:60px;height:40px;object-fit:cover;cursor:pointer;" onclick="showImage(this.src)">
                                <img src="assets/images/sample3.jpg" alt="Sample 3" class="rounded-3 shadow-sm border border-white" style="width:60px;height:40px;object-fit:cover;cursor:pointer;" onclick="showImage(this.src)">
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-0"><a href="gallery.php" class="btn btn-outline-primary btn-sm">See more</a></div>
                    </div>
                </div>
            </div>
    </section>
<?php include 'includes/footer.php'; ?>