<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User Profile-->
        <div class="user-profile">
            <div class="user-pro-body">
                <div class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User<span class="caret"></span></a>
                    <div class="dropdown-menu animated flipInY">
                        <!-- text-->
                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                        <!-- text-->
                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                        <!-- text-->
                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                        <!-- text-->
                        <div class="dropdown-divider"></div>
                        <!-- text-->
                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                        <!-- text-->
                        <div class="dropdown-divider"></div>
                        <!-- text-->
                        <a href="pages-login.html" class="dropdown-item"><i class="fas fa-power-off"></i> Logout</a>
                        <!-- text-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <a class="waves-effect waves-dark" href="{{ route('category.index') }}" aria-expanded="false">
                        <i class="far fa-circle text-danger"></i>
                        <span class="hide-menu">Category</span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="{{ route('product.index') }}" aria-expanded="false">
                        <i class="far fa-circle text-danger"></i>
                        <span class="hide-menu">Product</span>
                    </a>
                </li>

                <li>
                    <a class="waves-effect waves-dark" href="{{ route('slider.index') }}" aria-expanded="false">
                        <i class="far fa-circle text-info"></i>
                        <span class="hide-menu">Slider</span>

                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="{{ route('logout') }}" aria-expanded="false">                        <i class="far fa-circle text-success"></i>
                        <span class="hide-menu">Log Out</span>
                    </a>
                </li>

                    </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
