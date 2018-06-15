<section class="restaurant-admin" id="ADMIN">
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="col-md-12 text-center">
                    <div class="home_text wow fadeInUp">
                    <a href="/admin/restaurant"><h2>Admin Restaurant</h2></a>
                        <img src="/images/shape.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container-fluid">
                <div class="row bg-red">
                    <div class="col-md-4 col-md-offset-1">
                        <div class="col-md-12">
                            <h2 class="delivery-check"><i class="fa fa-arrow-circle-down"></i> Search by Name & Postal</h2>
                        </div>
                        <div class="col-md-8 restaurant-search">
                            <input type="text" name="restaurant-serach" class="form-control" placeholder="Restaurant Name"><button type="button" class="btn btn-default btn-search"><i class="fa fa-search"></i></button>
                        </div>
                        <div class="col-md-7 postal-search">
                            <input type="text" name="postal" class="form-control" placeholder="Postal Code"><button type="button" class="btn btn-default btn-location"><i class="fa fa-location-arrow"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="col-md-12">
                            <h2 class="delivery-check"><i class="fa fa-arrow-circle-down"></i> Filter by Category</h2>
                        </div>
                        <div class="col-md-8">
                            <select class="form-control menu-category" name="store_category_id">
                                <option value="chinese">Chinese</option>
                                <option value="pizza">Pizza</option>
                                <option value="korean">Korean</option>
                                <option value="mexican">Mexican</option>
                                <option value="thai">Thai</option>
                                <option value="pamburger">Hamburger</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-offset-1">
                        <div id="new-restaurant-flip" class="text-center">
                            <a href="/admin/restaurant/new">
                                <div class="front">
                                    <span class="title-front"><u>NEW</u></span>
                                    RESTAURANT
                                </div>
                                <div class="back">
                                    <span class="title-back"><u>NEW</u></span>
                                    RESTAURANT
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container-fluid">
                <table id="table-restaurant-list" class="table table-condensed table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">ALL</th>
                            <th class="text-center">Category</th>
                            <th>Restaurant</th>
                            <th>Manager</th>
                            <th>Phone</th>
                            <th class="text-center">View</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">DELETE</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($restaurants as $restaurant): ?>
                        <tr>
                            <td class="text-center"><input type="checkbox" name="store_id[]" value="<?= $restaurant['store_id']?>" /></td>
                            <td class="text-center"><?= $restaurant['store_category_id']?></td>
                            <td><?= $restaurant['name']?></td>
                            <td><?= $restaurant['manager']?></td>
                            <td><?= $restaurant['phone']?></td>
                            <td class="text-center">
                                <a href="/admin/restaurant/view/<?= $restaurant['store_id']?>" class="action-icon"><i class="fa fa-tasks icon-black"></i></a>
                                <a href="#" class="action-icon"><i title="Website" class="fa fa-globe icon-inactive"></i></a>
                                <a href="#" class="action-icon"><i title="Facebook Page" class="fa fa-facebook icon-inactive"></i></a>
                                <a href="#" class="action-icon"><i title="Instagram" class="fa fa-instagram icon-inactive"></i></a>
                            </td>
                            <td class="text-center">
                                <i title="Active Status" class="fa fa-circle-o icon-green"></i>
                            </td>

                            <td class="text-center">
                                <a href="#" class="action-icon"><i title="Remove" class="fa fa-remove icon-red"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function(){
        $('#new-restaurant-flip').flip({
            trigger: 'hover',
            autoSize : false
        });
    });
</script>
