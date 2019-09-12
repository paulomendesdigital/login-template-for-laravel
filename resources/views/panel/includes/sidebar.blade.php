<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>

                    {{-- ------------------------------------- --}}
                    {{-- DASHBOARD --}}
                    <li class="nav-item ">
                        <a class="nav-link" href="{{url('/panel')}}"><i class="fas fa-fw fa-tachometer-alt"></i>Dashboard <span class="badge badge-success">6</span></a>
                    </li>
                    {{-- END DASHBOARD --}}


                    {{-- ------------------------------------- --}}
                    {{-- USUÁRIOS --}}
                    {{-- END USUÁRIOS --}}


                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/panel/conf/edit/1')}}" ><i class="fas fa-fw fa-cog mr-2"></i>Configuração</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
