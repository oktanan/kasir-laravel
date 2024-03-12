<!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">DASHBOARD</li>
                    <li>
                        <a class="has" href="{{ route('dashboard.index') }}" aria-expanded="false">
                            <i class="icon icon-home"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-label">MASTER DATA</li>
                    <li>
                        <a href="{{ route('produk.index') }}" aria-expanded="false">
                            <i class="icon icon-app-store"></i>
                            <span class="nav-text">Produk</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('pelanggan.index') }}" aria-expanded="false">
                            <i class="fa-solid fa-user"></i>
                            <span class="nav-text">Pelanggan</span>
                        </a>
                    </li>

                    <li class="nav-label">TRANSACTION</li>
                    <li>
                        <a href="{{ route('transaksi.index') }}" aria-expanded="false">
                            <i class="fa-solid fa-cart-plus"></i>
                            <span class="nav-text">Transaksi</span>
                        </a>
                    </li>

                    @if (auth()->user()->level == '1')
                        <li class="nav-label">USER</li>
                        <li>
                            <a href="{{ route('user.index') }}" aria-expanded="false">
                                <i class="fa-solid fa-user-plus"></i>
                                <span class="nav-text">User</span>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>


        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->