<section class="restaurant-admin" id="ADMIN">
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="col-md-12 text-center">
                    <div class="home_text wow fadeInUp">
                    <a href="/admin"><h3>ADMIN</h3></a>
                    <a href="/admin/restaurant"><h2>Add New Restaurant</h2></a>
                        <img src="/images/shape.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-md-12">
                    <?php if(isset($form_restaurant)){
                        echo $form_restaurant;
                    }?>
                </div>
            </div>
        </div>
    </div>
</section>
