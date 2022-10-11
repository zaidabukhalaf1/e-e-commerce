{{--    <!-- Sidebar -->--}}
{{--    <div class="s-layout__sidebar">--}}
{{--        <a class="s-sidebar__trigger "style="margin-top:57px">--}}
{{--            <i class="fa fa-bars"></i>--}}
{{--        </a>--}}

{{--        <nav class="s-sidebar__nav">--}}
{{--            <ul>--}}
{{--                <li>--}}
{{--                    <a class="s-sidebar__nav-link" href="{{route('home')}}">--}}
{{--                        <i class="fa fa-home"></i><em>Home</em>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a class="s-sidebar__nav-link" href="{{route("company.index")}}">--}}
{{--                        <i class="fa fa-shopping-bag"></i><em>Company</em>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a class="s-sidebar__nav-link" href="{{route('item.index')}}">--}}
{{--                        <i class="fa fa-shopping-basket"></i><em>Item</em>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a class="s-sidebar__nav-link" href="{{route('department.index')}}">--}}
{{--                        <i class="fa fa-desktop"></i><em>Department</em>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a class="s-sidebar__nav-link" href="{{route('category.index')}}">--}}
{{--                        <i class="fa fa-window-close"></i><em>Category</em>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a class="s-sidebar__nav-link" href="#0">--}}
{{--                        <i class="fa fa-camera"></i><em>Rating</em>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </nav>--}}
{{--    </div>--}}

<div class="wui-side-menu open pinned " style="margin-top: 58px" data-wui-theme="dark">
    <div class="wui-side-menu-header">
        <a href="#" class="wui-side-menu-trigger"><i class="fa fa-bars"></i></a>
        <a href="#" class="wui-side-menu-pin-trigger">
            <i class="fa fa-thumb-tack"></i>
        </a>
    </div>
    <ul class="wui-side-menu-items">
        <li>
            <a  href="{{route('home')}}"class="wui-side-menu-item">
                <i class="box-ico fa fa-home fa-fw"></i>
                <span class="box-title">Home</span>
            </a>
        </li>
        <li>
            <a  href="{{route('category.index')}}"class="wui-side-menu-item">
                <i class="box-ico fa fa-shopping-bag fa-fw"></i>
                <span class="box-title">Category</span>
            </a>
        </li>
        <li>
            <a href="{{route('item.index')}}" class="wui-side-menu-item">
                <i class="box-ico fa fa-list fa-fw"></i>
                <span class="box-title">Item</span>
            </a>

        </li>
        <li>
            <a  href="{{route('department.index')}}" class="wui-side-menu-item">
                <i class="box-ico fa fa-deafness fa-fw"></i>
                <span class="box-title">Department</span>
            </a>
        </li>
        <li>
            <a href="{{route("company.index")}}" class="wui-side-menu-item">
                <i class="box-ico fa fa-building fa-fw"></i>
                <span class="box-title">Company</span>
            </a>
        </li>

    </ul>
</div>
    <div class="wui-content-header">
        <a href="#" class="wui-side-menu-trigger"><i class="fa fa-bars"></i></a>
    </div>
    <div class="wui-content-main">

        <div id="events"></div>
    </div>
