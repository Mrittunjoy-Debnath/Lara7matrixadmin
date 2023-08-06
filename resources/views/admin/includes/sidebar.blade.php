<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.home') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">School </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ route('admin.add-school') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Add School </span></a></li>
                        <li class="sidebar-item"><a href="{{ route('admin.manage-school') }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Manage School </span></a></li>
                    </ul>
                </li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Class </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ route('admin.add-class') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Add Class </span></a></li>
                        <li class="sidebar-item"><a href="{{ route('admin.manage-class') }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Manage Class </span></a></li>
                    </ul>
                </li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Section </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ route('admin.add-section') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Add Section </span></a></li>
                        <li class="sidebar-item"><a href="{{ route('admin.manage-section') }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Manage Section </span></a></li>
                    </ul>
                </li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Student </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ route('admin.add-student') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Add Student </span></a></li>
                        <li class="sidebar-item"><a href="{{ route('admin.manage-student') }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Manage Student </span></a></li>
                        <li class="sidebar-item"><a href="{{ route('admin.find-student') }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Find Student </span></a></li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
