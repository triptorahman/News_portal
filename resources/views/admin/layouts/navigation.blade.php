    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{ route('admin.index') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    
                    @can('Admin')
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Users</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="{{ route('user.list') }}">User List</a></li>
                            
                        </ul>
                    </li>
                    @endcan
                    @can('Admin')
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Catagory</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="{{ route('category.create') }}">Create Catagory</a></li>
                            <li><i class="fa fa-table"></i><a href="{{ route('category.list') }}">Catagory List</a></li>
                        </ul>
                    </li>
                    @endcan

                    @can('Admin')
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Post List</a>{{-- Admin --}}
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="{{ route('admin.post.list') }}">Post List</a></li>
                            {{-- <li><i class="fa fa-table"></i><a href="{{ route('admin.post.list') }}">Pending Post</a></li> --}}
                        </ul>
                    </li>
                    @endcan
                    @cannot('Admin')
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Post</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="{{ route('user.post.create') }}">Create Post</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="{{ route('user.post.list') }}">Post List</a></li>
                        </ul>
                    </li>
                    @endcannot
                    @cannot('Admin')
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Profile</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="{{ route('user.profile', Auth::user()->id) }}">Info</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="{{ route('user.edit', Auth::user()->id) }}">Update Info</a></li>
                        </ul>
                    </li>
                    @endcannot 
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->