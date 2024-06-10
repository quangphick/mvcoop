<nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
        <div class="logo d-flex justify-content-between">
            <a href="{{ url('admin') }}"><img src="{{ asset('assets/admin/img/logo.png') }}" alt></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
            <li class="mm-active">
                <a href="{{ url('admin') }}" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{ asset('assets/admin/img/menu-icon/dashboard.svg') }}" alt>
                    </div>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{ asset('assets/admin/img/menu-icon/5.svg') }}" alt>
                    </div>
                    <span>Quan ly san pham</span>
                </a>
                <ul>
                    <li><a href="{{ url('admin/products') }}">San pham</a></li>
                    <li><a href="{{ url('admin/products/create') }}">Them moi san pham</a></li>
                </ul>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{ asset('assets/admin/img/menu-icon/2.svg') }}" alt>
                    </div>
                    <span>Quan ly nguoi dung</span>
                </a>
                <ul>
                    <li><a href="{{ url('admin/users') }}">Nguoi dung</a></li>
                    <li><a href="{{ url('admin/users/create') }}">Them moi nguoi dung</a></li>
                </ul>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{ asset('assets/admin/img/menu-icon/3.svg') }}" alt>
                    </div>
                    <span>Quan ly danh muc</span>
                </a>
                <ul>
                    <li><a href="{{ url('admin/categories') }}">Danh muc</a></li>
                    <li><a href="{{ url('admin/categories/create') }}">Them moi danh muc</a></li>
                </ul>
            </li>
        </ul>
    </nav>