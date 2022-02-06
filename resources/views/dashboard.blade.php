@extends('layout.dashview')

@section('content')
<div id="wrapper">
    
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand px-1">
                <a href="#">
                    Kanggotan.id
                </a>
            </li>
            <li>
                <a class="bx-xs active" href="#"><i class='bx bx-xs bx-stats px-1'></i>&nbsp;Stats</a>
            </li>
            <li>
                <a class="bx-xs" href="#"><i class='bx bx-xs bx-edit px-1'></i>&nbsp;Post</a>
            </li>
            <li>
                <a class="bx-xs" href="#"><i class='bx bx-xs bx-image px-1'></i>&nbsp;Gallery</a>          
            </li>
            <li>
                <a class="bx-xs" href="#"><i class='bx bx-xs bx-user-circle px-1'></i>&nbsp;Account</a>      
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->
    
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="justify-content-between d-flex top-bar">
            <div>
                <i class='bx menu-size bx-menu' id="menu-toggle"></i>
            </div>
            <div>
                
            </div>
            <div>
                <img src="https://res.cloudinary.com/dnd2ksbgr/image/upload/c_scale,w_30/v1643870999/kisspng-user-profile-computer-icons-login-user-avatars-5b0d9431e004b5.1250351715276165619176_yhgqac.png" alt="">
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    
                    
                    
                    
                    {{-- <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    
</div>
<!-- /#wrapper -->
@endsection