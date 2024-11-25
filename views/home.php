<?php include "includes/header.php"; ?>

    <div id="slider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/s1.jpg" alt="" class="w-100"/>
                <div class="carousel-caption bg-dark bg-opacity-75">
                    <h1>This is caption one</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, amet autem cupiditate eius expedita facilis impedit labore quae! Ad dolores incidunt natus quod veniam? Est eum ipsam maiores ratione sunt.</p>
                    <a href="" class="btn btn-success">Read More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/s2.jpg" alt="" class="w-100"/>
                <div class="carousel-caption bg-dark bg-opacity-75">
                    <h1>This is caption two</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, amet autem cupiditate eius expedita facilis impedit labore quae! Ad dolores incidunt natus quod veniam? Est eum ipsam maiores ratione sunt.</p>
                    <a href="" class="btn btn-success">Read More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/s3.jpg" alt="" class="w-100"/>
                <div class="carousel-caption bg-dark bg-opacity-75">
                    <h1>This is caption three</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, amet autem cupiditate eius expedita facilis impedit labore quae! Ad dolores incidunt natus quod veniam? Est eum ipsam maiores ratione sunt.</p>
                    <a href="" class="btn btn-success">Read More</a>
                </div>
            </div>
        </div>
        <a href="#slider" class="carousel-control-prev" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#slider" class="carousel-control-next" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <section class="py-5 bg-info-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h4>This is card header</h4>
                        </div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet atque dolorem dolores ex fugit iure laboriosam, libero nam, nemo officia porro praesentium quod recusandae sint sit tenetur vel vero.</p>
                        </div>
                        <div class="card-footer">
                            <p>This is card footer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h4>This is card header</h4>
                        </div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet atque dolorem dolores ex fugit iure laboriosam, libero nam, nemo officia porro praesentium quod recusandae sint sit tenetur vel vero.</p>
                        </div>
                        <div class="card-footer">
                            <p>This is card footer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h4>This is card header</h4>
                        </div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet atque dolorem dolores ex fugit iure laboriosam, libero nam, nemo officia porro praesentium quod recusandae sint sit tenetur vel vero.</p>
                        </div>
                        <div class="card-footer">
                            <p>This is card footer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h4>This is card header</h4>
                        </div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet atque dolorem dolores ex fugit iure laboriosam, libero nam, nemo officia porro praesentium quod recusandae sint sit tenetur vel vero.</p>
                        </div>
                        <div class="card-footer">
                            <p>This is card footer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-dark-subtle">
        <div class="container">
            <div class="row">
                <?php foreach ($blogs as $blog ) { ?>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="<?php echo $blog['image']; ?>" alt="" class="card-img-top"/>
                        <div class="card-body">
                            <h4><?php echo $blog['title']; ?></h4>
                            <p><?php echo $blog['description']; ?></p>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="py-5 bg-info-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body">
                        <h4>Registration Form</h4>
                        <hr/>
                        <div class="row mb-3">
                            <label class="col-md-3">Full Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="Your Name"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Email Address</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control" placeholder="Your Email"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Mobile</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" placeholder="Your Mobile Number"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="button" class="btn btn-success" value="Register"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </section>

<?php include "includes/footer.php"; ?>