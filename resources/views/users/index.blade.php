@extends('layouts.main')

@section('content')
    <div class="dashboard-content-wrap">
        <div class="dashboard-bread dashboard--bread">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title font-size-30 text-white">Les Utilisateurs</h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div>
                    <!-- end col-lg-6 -->
                    <div class="col-lg-4">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="{{url('/')}}" class="text-white">Accueil</a></li>
                                <li>Utilisateur</li>
                            </ul>
                        </div><!-- end breadcrumb-list -->
                    </div>
                    <div class="col-lg-4">
                        <div class="dashboard-search-box">
                            <div class="contact-form-action">
                                <form action="{{ route('search.post') }}" method="GET">
                                    @csrf
                                    <div class="form-group mb-0">
                                        <label>
                                            <input class="form-control" type="text" name="name" placeholder="Search">
                                        </label>
                                        <button type="submit" class="search-btn"><i class="la la-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
            </div>
        </div><!-- end dashboard-bread -->
        <div class="dashboard-main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-box">
                            <div class="form-title-wrap">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h3 class="title">Utilisateurs</h3>
                                    </div>
                                </div>
                            </div>
                            <div  class="form-content">
                                <div class="table-form table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">Avatar</th>
                                            <th scope="col">Nom</th>
                                            <th scope="col">Prénom</th>
                                            <th scope="col">Téléphone</th>
                                            <th scope="col">Adresse</th>
                                            <th scope="col">Fonction</th>
                                            <th scope="col">Abonnement</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($users as $item)
                                            <tr>
                                                <td>
                                                    @if ($item->avatar)
                                                        <img
                                                            src="{{ asset('storage/' . $item->avatar) }}"
                                                            alt="Image utilisateur" width="40" height="40"  style="border-radius: 20px;">
                                                    @else
                                                        <img
                                                            src="{{ asset('images/363639-200.png') }}"
                                                            alt="Image utilisateur" width="40" height="40">
                                                    @endif
                                                </td>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->first_name}}</td>
                                                <td>{{$item->phone}}</td>
                                                <td>{{$item->address}}</td>
                                                <td>{{$item->role->name}}</td>
                                                <td>{{$item->subscription->name}}</td>
                                                <td>{{$item->email}}</td>

                                                <td>
                                                    @if ($item->is_active == 1)
                                                        <span class="badge badge-success py-1 px-2">Actif</span>
                                                    @else
                                                        <span class="badge badge-danger py-1 px-2">Inactif</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <form
                                                        action="{{ route('users.updateStatus', ['user' => $item->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                        @if ($item->is_active)
                                                            <button class="shadow btn btn-danger btn-xs sharp"
                                                                    type="submit" name="status" value="0">Désactiver
                                                            </button>
                                                        @else
                                                            <button class="shadow btn btn-success btn-xs sharp"
                                                                    type="submit" name="status" value="1">Activer
                                                            </button>
                                                        @endif
                                                    </form>

                                                </td>
                                            </tr>
                                        @empty
                                            <li class="col-md-12 col-sm-12 col-xs-12">
                                                Aucun Utilisateur trouvé
                                            </li>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end form-box -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <nav aria-label="Page navigation example">
                            <div class="pagination justify-content-center">
                                {{ $users->links('pagination.bootstrap') }}
                            </div>


                        </nav>
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
                <div class="border-top mt-5"></div>
                @include('partials.footer')
                <!-- end row -->
            </div><!-- end container-fluid -->
        </div>
        <!-- end dashboard-main-content -->
    </div>
@endsection



