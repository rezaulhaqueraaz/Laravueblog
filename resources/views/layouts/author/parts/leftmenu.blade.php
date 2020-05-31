<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li class="text-muted menu-title">Navigation</li>
                <li class="has_sub">
                    <a href="{{route('author.dashboard')}}" class="waves-effect"><i class="ti-home"></i> <span> Dashboard </span></a>
                </li>
                <li >
                    <a href="#" class="waves-effect"><i class="md md-receipt"></i> <span>Post</span><span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('author.post')}}">Add new</a></li>
                        <li><a href="{{route('author.post.all')}}">All Post</a></li>
                    </ul>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
