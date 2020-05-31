<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>

                <li class="text-muted menu-title">Navigation</li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-home"></i> <span> Dashboard </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    </ul>
                </li>
                <li >
                    <a href="#" class="waves-effect"><i class="md md-receipt"></i> <span>Post</span><span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('admin.post')}}">Add new</a></li>
                        <li><a href="{{route('admin.post.table')}}">All Post</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-home"></i> <span> Entry Section </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('admin.category')}}">Category</a></li>
                        <li><a href="{{route('admin.tag')}}">Tag</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="{{route('admin.user')}}" class="waves-effect"><i class="md md-timer-auto"></i><span>Users</span></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
