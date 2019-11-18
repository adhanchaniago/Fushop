<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="<?php echo base_url() ?>"> <img src="<?php echo base_url() ?>assets/images/fusho.png" alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"><i class="fas fa-bars"></i></span>
                    </button>

                    <!-- <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent"> -->
                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        
                        <ul class="navbar-nav" >
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Product
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_1" style="margin-top: -25px">
                                    <a class="dropdown-item" href="category.html"> shop category</a>
                                    <a class="dropdown-item" href="single-product.html">product details</a>
                                    
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Rooms
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_2" style="margin-top: -25px">
                                    <a class="dropdown-item" href="login.html"> login</a>
                                    <a class="dropdown-item" href="tracking.html">tracking</a>
                                    <a class="dropdown-item" href="checkout.html">product checkout</a>
                                    <a class="dropdown-item" href="cart.html">shopping cart</a>
                                    <a class="dropdown-item" href="confirmation.html">confirmation</a>
                                    <a class="dropdown-item" href="elements.html">elements</a>
                                </div>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                        </ul>

                    </div>

                    <!-- Jika memiliki Sesion -->
                    <?php  if ($this->session->userdata('sik_logged')){  
                        $s_data = $this->session->userdata('sik_logged');
                        ?>
                        <div class="hearer_icon d-flex">
                            <a href="javascript:void(0)"><i class="ti-heart"></i></a>
                            
                            <!-- <div class="dropdown cart">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-cart-plus"></i>
                                </a>  
                            </div> -->

                            <li class="dropdown"> 
                                <a class="dropdown-toggle" href="#" data-toggle="dropdown" >
                                    <i class="ti-user"> <?php echo $s_data['first'] ?></i>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="<?php site_url() ?>people">Account</a>
                                    <a class="dropdown-item" href="<?php site_url() ?>Account/logout">Logout</a>
                                </div>
                            </li>
                        </div>
                    <?php }else{ ?>

                        <div class="hearer_icon d-flex">
                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a> 
                            <a href="javascript:void(0)"><i class="ti-heart"></i></a>
                            <!-- <div class="dropdown cart">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-cart-plus"></i>
                                </a>  
                            </div> -->
                            <a href="<?php site_url() ?>Account/login"><i class="ti-user"></i></a>
                        </div>

                    <?php } ?> 
                    
                    
                </nav>

            </div>
        </div>
    </div>
    <!-- <div class="search_input" id="search_input_box">
        <div class="container ">
            <form class="d-flex justify-content-between search-inner">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="ti-close" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div> -->
    <script type="text/javascript">

        function logoutAcc() {
            $.ajax({ 
                type  : 'GET',
                url : "<?php echo site_url();?>/HomeCustomer/getListProductHome", 
                dataType : 'JSON', 
                success : function(dat){

                }
            });
        }

    </script>
</header>