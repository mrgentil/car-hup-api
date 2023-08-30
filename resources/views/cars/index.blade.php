@extends('layouts.main')

@section('content')
    <div class="dashboard-content-wrap">
        <div class="dashboard-bread dashboard--bread">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title font-size-30 text-white">Les Voitures</h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div>
                    <!-- end col-lg-6 -->
                    <div class="col-lg-4">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a  href="{{route('cars.create')}}" class="text-white">+</a></li>
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
                                        <h3 class="title">Voitures</h3>
                                    </div>
                                </div>
                            </div>
                            <div  class="form-content">
                                <div class="table-form table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">Marque</th>
                                            <th scope="col">Modele</th>
                                            <th scope="col">Année de fabrication</th>
                                            <th scope="col">Couleur</th>
                                            <th scope="col">Type de Carburant</th>
                                            <th scope="col">Prix par jour</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($cars as $item)
                                            <tr>
                                                <td>{{$item->brand}}</td>
                                                <td>{{$item->model}}</td>
                                                <td>{{$item->year_of_manufacture}}</td>
                                                <td>{{$item->color}}</td>
                                                <td>{{$item->type_of_fuel}}</td>
                                                <td>{{$item->price_by_day}}$</td>


                                                <td>
                                                    @if ($item->is_available == 1)
                                                        <span class="badge badge-success py-1 px-2">Disponible</span>
                                                    @else
                                                        <span class="badge badge-danger py-1 px-2">Non Disponible</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{route('cars.show',$item)}}" class="mr-1 shadow btn btn-primary btn-xs sharp"><i class="la la-eye"></i></a>
                                                    <form
                                                        action="{{ route('cars.updateStatus', ['car' => $item->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                        @if ($item->is_available)
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
                                                Aucun Véhicule trouvé
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
                                {{ $cars->links('pagination.bootstrap') }}
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



