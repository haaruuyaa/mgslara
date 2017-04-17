<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset("/bower_components/AdminLTE/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <!-- Optionally, you can add icons to the links -->
        <!--    <li class="active"><a href="#"><span>Link</span></a></li>
            <li><a href="#"><span>Another Link</span></a></li> -->
            <li class=<?php $active = (Request::is('master/*')) ? "active": ""; echo $active.' '; ?>"treeview">
                <a href="#"><span>Master</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li class="<?php $activeHelper = (Request::is('master/helper')) ? "active": ""; echo $activeHelper.' '; ?>"><a href="{{url('master/helper')}}">Helper</a></li>
                    <li class="<?php $activeJenis = (Request::is('master/jenis')) ? "active": ""; echo $activeJenis.' '; ?>"><a href="{{url('master/jenis')}}">Jenis</a></li>
                    <li class="<?php $activeStock = (Request::is('master/stock')) ? "active": ""; echo $activeStock.' '; ?>"><a href="{{url('master/stock')}}">Stock</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>