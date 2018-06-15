<form action="/admin/restaurant/add" id="restaurant-form" method="post">


    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li id="tab_restaurant" role="presentation" class="active"><a href="#info" aria-controls="info" role="tab" data-toggle="tab">Info</a></li>
        <li id="tab_restaurant" role="presentation"><a href="#menu" aria-controls="menu" role="tab" data-toggle="tab">Menu</a></li>
        <li id="tab_restaurant" role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="info">
            <div class="row">
                <div class="col-md-6">
                    <h2>Restaurant Information</h2><br>
                    <div class="row store_entry">
                        <div class="col-md-4 text-right entry_title">
                            Store Name :
                        </div>
                        <div class="col-md-6 entry_input">
                            <input type="text" name="store_name" value="" class="form-control"></input>
                        </div>
                    </div>
                    <div class="row store_entry">
                        <div class="col-md-4 text-right entry_title">
                            Unit # :
                        </div>
                        <div class="col-md-6 entry_input">
                            <input type="text" name="suite" value="" class="form-control"></input>
                        </div>
                    </div>
                    <div class="row store_entry">
                        <div class="col-md-4 text-right entry_title">
                            Street # :
                        </div>
                        <div class="col-md-6 entry_input">
                            <input type="text" name="street_num" value="" class="form-control"></input>
                        </div>
                    </div>
                    <div class="row store_entry">
                        <div class="col-md-4 text-right entry_title">
                            Street Name :
                        </div>
                        <div class="col-md-6 entry_input">
                            <input type="text" name="street_name" value="" class="form-control"></input>
                        </div>
                    </div>
                    <div class="row store_entry">
                        <div class="col-md-4 text-right entry_title">
                            City :
                        </div>
                        <div class="col-md-6 entry_input">
                            <input type="text" name="city" value="" class="form-control"></input>
                        </div>
                    </div>
                    <div class="row store_entry">
                        <div class="col-md-4 text-right entry_title">
                            Postal :
                        </div>
                        <div class="col-md-6 entry_input">
                            <input type="text" name="postal" value="" class="form-control"></input>
                        </div>
                    </div>
                    <div class="row store_entry">
                        <div class="col-md-4 text-right entry_title">
                            Description :
                        </div>
                        <div class="col-md-6 entry_input">
                            <textarea name="store_description" value="" class="form-control" style="height:200px;"></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <h2>Contact Information</h2><br>
                    <div class="row store_entry">
                        <div class="col-md-4 text-right entry_title">
                            Manager Name :
                        </div>
                        <div class="col-md-6 entry_input">
                            <input type="text"  name="store_manager" value="" class="form-control"></input>
                        </div>
                    </div>
                    <div class="row store_entry">
                        <div class="col-md-4 text-right entry_title">
                            Phone :
                        </div>
                        <div class="col-md-6 entry_input">
                            <input type="text"  name="store_phone" value="" class="form-control"></input>
                        </div>
                    </div>
                    <div class="row store_entry">
                        <div class="col-md-4 text-right entry_title">
                            E-mail :
                        </div>
                        <div class="col-md-6 entry_input">
                            <input type="text"  name="store_email" value="" class="form-control"></input>
                        </div>
                    </div>
                    <div class="row store_entry">
                        <div class="col-md-4 text-right entry_title">
                            Website :
                        </div>
                        <div class="col-md-6 entry_input">
                            <input type="text"  name="store_website" value="" class="form-control"></input>
                        </div>
                    </div>
                    <div class="row store_entry">
                        <div class="col-md-4 text-right entry_title">
                            Facebook :
                        </div>
                        <div class="col-md-6 entry_input">
                            <input type="text" name="store_facebook" value="" class="form-control"></input>
                        </div>
                    </div>
                    <div class="row store_entry">
                        <div class="col-md-4 text-right entry_title">
                            Instagram :
                        </div>
                        <div class="col-md-6 entry_input">
                            <input type="text" name="store_instagram" value="" class="form-control"></input>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>

        <div role="tabpanel" class="tab-pane" id="menu">
            <div class="col-md-12">
                <h2>Menu</h2>
            </div>


            <div class="col-md-3">
                <a class="add-menu-category">
                    <h3>Category</h3><i class="fa fa-plus-circle"></i>
                </a>
<!--Category-list-->
                <div id="menu-category-list">
                    <div class="row fadeIn animated menu-category-entry" data-category-id="0">
                        <div class="col-md-8">
                            <input type="text" name="menu_category_name[0]" placeholder="New Category" class="form-control category-name" data-category-id="0"></input>
                            <a class="delete-menu-category" data-category-id="0"><i class="fa fa-minus"></i></a>
                        </div>

                        <div class="col-md-1">
                            <a class="btn-active" data-category-id="0"><i class="fa fa-arrow-right" ></i></a>
                        </div>
                    </div>
                </div>
            </div>

<!--Selected Category-->
            <div class="col-md-9" id="menu-item-list">
                <div class="menu-item-list" data-category-id="0">
                    <a class="add-menu-item" data-category-id="0">
                        <h3 class="menu-title" data-category-id="0">New Category - Menu Item</h3>
                        <i class="fa fa-plus-circle"></i>
                    </a>
                    <div class="row menu-item-entry" data-category-id="0" data-menu-id="0">
                        <div class="col-md-2">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4 class="menu_item_title" data-category-id="0" data-menu-id="0">Item #1</h4>
                                </div>
                                <div class="col-md-4">
                                    <a class="delete-menu-item" data-category-id="0" data-menu-id="0"><i class="fa fa-minus-circle"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-9" data-category-id="0" data-menu-id="0">
                            <div class="row">
                                <div class="col-md-7">
                                    <input type="text" name="menu_name[0][0]" placeholder="Menu Name" class="form-control"></input>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="menu_size[0][0]" placeholder="Size" class="form-control"></input>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" name="menu_price[0][0]" placeholder="Price" class="form-control"></input>
                                </div>
                                <div class="col-md-12">
                                    <textarea name="menu_description[0][0]" placeholder="Menu Description" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="settings">
            <div class="col-md-12">
                <h2>Setting</h2>
            </div>
        </div>
    </div>
    <div class="col-md-12 text-right">
        <button type="button" class="btn btn-default btn-back" onClick="history.go(-1);">BACK</button>
        <button type="submit" name="button" class="btn btn-default btn-save">SAVE</button>
    </div>

</form>

<script type="text/javascript">

    var form = {
        category_entry : $('.menu-category-entry:first').clone(),
        category_menu  : $('.menu-item-list:last').clone(),
        menu_item      : $('.menu-item-entry:last').clone()
    };

    $(document).ready(function(){
        $('#tab_restaurant a').click(function (e) {
              e.preventDefault();
              $(this).tab('show');
        });
        $('#tab_restaurant:first').tab('show');
        $('.menu-item-list:first').show();

        $('form#restaurant-form').submit(function(){
            $('.menu-item-list').each().show();
        });
    });

    $("body").on('click', 'a.add-menu-category', function(e){
        e.preventDefault();
        category_id = $('body').find('.menu-category-entry').last().data('category-id');
        addCategory(category_id);
    });

    $("body").on('click','a.add-menu-item', function(e){
        e.preventDefault();
        category_id = $(this).data('category-id');
        menu_id = $('body').find('.menu-item-entry[data-category-id="'+category_id+'"]').last().data('menu-id');
        addItem(category_id, menu_id);
    });


    $("body").on('click', 'a.delete-menu-category', function(e){
        e.preventDefault();
        category_id = $(this).data('category-id');
        removeCategory(category_id);
    });

    $("body").on('click', 'a.delete-menu-item', function(e){
        e.preventDefault();
        category_id = $(this).data('category-id');
        menu_id = $(this).data('menu-id');
        removeItem(category_id, menu_id);
    });

    $("body").on('focus','.category-name', function(e){
        e.preventDefault();
        category_id = $(this).data('category-id');
        console.log(category_id);
        showCategoryMenu(category_id);
    });

    $("body").on('keyup','.category-name', function(e){
        e.preventDefault();
        category_id = $(this).data('category-id');
        category_name = $(this).val() + "- Menu Item ";
        target_title = $('h3.menu-title[data-category-id="'+category_id+'"]').html(category_name);
    });


    function addCategory(category_id) {
        new_category_id = isNaN(category_id) ? 0 : category_id + 1 ;

        new_categoryHTML = form.category_entry.clone().attr("data-category-id", new_category_id);
        new_categoryHTML.find("[data-category-id]").attr("data-category-id", new_category_id);


        new_category_name = new_categoryHTML.find("input.category-name").attr("name").slice(0,-3);
        new_category_name = new_category_name + '['+new_category_id+']';
        new_categoryHTML.find("input.category-name").attr("name", new_category_name);

        new_category_menuHTML = form.category_menu.clone().attr("data-category-id", new_category_id);
        new_category_menuHTML.find("[data-category-id]").attr("data-category-id", new_category_id);

        new_category_menuHTML.find("input[name], textarea[name]").each(function(){
            new_name = $(this).attr("name").slice(0,-6);
            new_name +='['+new_category_id+'][0]';
            $(this).attr("name", new_name);
        });

        $('#menu-category-list').append(new_categoryHTML);
        $('#menu-item-list').append(new_category_menuHTML);
        showCategoryMenu(new_category_id);
    };;

    function showCategoryMenu(category_id) {
        $('.menu-item-list').hide();
        $('.btn-active').addClass('grey');
        $('.btn-active[data-category-id="'+category_id+'"]').removeClass('grey');
        $('.menu-item-list[data-category-id="'+category_id+'"]').show();
    }

    function addItem(menu_category_id, menu_id) {
        new_menu_id = isNaN(menu_id) ? 0 : menu_id + 1 ;
        new_menuHTML = form.menu_item.clone().attr("data-category-id", menu_category_id).attr("data-menu-id", new_menu_id);

        new_menuHTML.find("[data-category-id]").attr("data-category-id", menu_category_id);
        new_menuHTML.find("[data-menu-id]").attr("data-menu-id", new_menu_id);
        new_menuHTML.find(".menu_item_title").html('Item #'+ (new_menu_id+1));
        new_menuHTML.find("input[name], textarea[name]").each(function(){
            new_name = $(this).attr("name").slice(0,-6);
            new_name +='['+menu_category_id+']['+new_menu_id+']';
            $(this).attr("name", new_name);
        });

        $('.menu-item-list[data-category-id="'+menu_category_id+'"]').append(new_menuHTML);
    };

    function removeItem(menu_category_id, menu_id) {
        $('.menu-item-entry[data-category-id="'+menu_category_id+'"][data-menu-id="'+menu_id+'"]').remove();
    }
    function removeCategory(category_id) {
        $('.menu-category-entry[data-category-id="'+category_id+'"]').remove();
        $('.menu-item-list[data-category-id="'+category_id+'"]').remove();
    }

</script>
