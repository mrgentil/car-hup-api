<div class="sidebar-nav">
    <div class="sidebar-nav-body">
        <div class="side-menu-close">
            <i class="la la-times"></i>
        </div><!-- end menu-toggler -->
        <div class="author-content">
            <div class="d-flex align-items-center">
                <div class="author-img avatar-sm">
                    @if (auth()->user()->avatar)
                        <img
                            src="{{ asset('storage/' . auth()->user()->avatar) }}"
                            alt="Image utilisateur" width="40" height="40"  style="border-radius: 20px;">
                    @else
                        <img
                            src="{{ asset('images/363639-200.png') }}"
                            alt="Image utilisateur" width="40" height="40">
                    @endif
                </div>
                <div class="author-bio">
                    <h4 class="author__title">{{auth()->user()->name}}</h4>
                    <span class="author__meta">
                        Membre depuis {{$month}} {{$formattedDate}}
                    </span>
                </div>
            </div>
        </div>
        <div class="sidebar-menu-wrap">
            <ul class="sidebar-menu list-items">
                <li class="page-active"><a href="{{url('/')}}"><i class="la la-dashboard mr-2"></i>Dashboard</a></li>
                <li><a href="user-dashboard-booking.html"><i class="la la-shopping-cart mr-2 text-color"></i>Mes Réservations</a></li>
                <li><a href="{{route('users.index')}}"><i class="la la-user mr-2 text-color-2"></i>Utilisateurs</a></li>
                <li><a href="user-dashboard-reviews.html"><i class="la la-star mr-2 text-color-3"></i>My Reviews</a></li>
                <li><a href="user-dashboard-wishlist.html"><i class="la la-heart mr-2 text-color-4"></i>Wishlist</a></li>
                <li><a href="user-dashboard-settings.html"><i class="la la-cog mr-2 text-color-5"></i>Settings</a></li>
                <li><a href="javascript:void(0)" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="la la-power-off mr-2 text-color-6"></i>Déconnexion</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div><!-- end sidebar-menu-wrap -->
    </div>
</div>
