@extends('layouts.main')

@section('content')
    <section class="listing-form section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <div class="listing-header pb-4">
                        <h3 class="title font-size-28 pb-2">Ajout Voiture</h3>
                    </div>
                    <div class="form-box">
                        <div class="form-title-wrap">
                            <h3 class="title"><i class="la la-gear mr-2 text-gray"></i>Informations de votre voiture</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            @if(auth()->check())
                                @if (session()->has('success'))
                                    <div class="success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                            <form action="{{route('cars.store')}}" method="POST" enctype="multipart/form-data" class="row">
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box">
                                        <label for="brand">Marque :</label>
                                        <div class="form-group">
                                            <span class="la la-briefcase form-icon"></span>
                                            <input placeholder="Marque" class="form-control" type="text" id="brand" name="brand">
                                            @error('brand') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box">
                                        <label for="make">Modele :</label>
                                        <div class="form-group">
                                            <span class="la la-briefcase form-icon"></span>
                                            <input placeholder="Modele" class="form-control" type="text" id="model" name="model">
                                            @error('model') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box">
                                        <label for="year">Année de fabrication :</label>
                                        <div class="form-group">
                                            <span class="la la-briefcase form-icon"></span>
                                            <input placeholder="Année de fabrication" class="form-control" type="text" id="year_of_manufacture" name="year_of_manufacture">
                                            @error('year_of_manufacture') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box">
                                        <label for="year">Couleur :</label>
                                        <div class="form-group">
                                            <span class="la la-briefcase form-icon"></span>
                                            <input placeholder="Couleur" class="form-control" type="text" id="color" name="color">
                                            @error('color') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box">
                                        <label for="year">Type de carburant :</label>
                                        <div class="form-group">
                                            <span class="la la-briefcase form-icon"></span>
                                            <input placeholder="Type de carburant" class="form-control" type="text" id="type_of_fuel" name="type_of_fuel">
                                            @error('type_of_fuel') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box">
                                        <label for="year">Transmission :</label>
                                        <div class="form-group">
                                            <span class="la la-briefcase form-icon"></span>
                                            <input placeholder="Transmission" class="form-control" type="text" id="transmission" name="transmission">
                                            @error('transmission') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box">
                                        <label for="year">Kilométrage :</label>
                                        <div class="form-group">
                                            <span class="la la-briefcase form-icon"></span>
                                            <input placeholder="Kilométrage" class="form-control" type="text" id="mileage" name="mileage">
                                            @error('mileage') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box">
                                        <label for="year">Portières :</label>
                                        <div class="form-group">
                                            <span class="la la-briefcase form-icon"></span>
                                            <input placeholder="Portières" class="form-control" type="text" id="door" name="door">
                                            @error('door') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box">
                                        <label for="year">Frein :</label>
                                        <div class="form-group">
                                            <span class="la la-briefcase form-icon"></span>
                                            <input placeholder="Frein" class="form-control" type="text" id="brake" name="brake">
                                            @error('brake') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box">
                                        <label for="year">Moteur :</label>
                                        <div class="form-group">
                                            <span class="la la-briefcase form-icon"></span>
                                            <input placeholder="Moteur" class="form-control" type="text" id="engine" name="engine">
                                            @error('engine') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box">
                                        <label for="year">Places :</label>
                                        <div class="form-group">
                                            <span class="la la-briefcase form-icon"></span>
                                            <input placeholder="Places" class="form-control" type="text" id="passengers" name="passengers">
                                            @error('passengers') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box">
                                        <label for="year">Bagages :</label>
                                        <div class="form-group">
                                            <span class="la la-briefcase form-icon"></span>
                                            <input placeholder="Bagages" class="form-control" type="text" id="baggage" name="baggage">
                                            @error('baggage') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 responsive-column">
                                    <div class="input-box">
                                        <label for="year">Prix par jour ($) :</label>
                                        <div class="form-group">
                                            <span class="la la-briefcase form-icon"></span>
                                            <input placeholder="Prix par jour" class="form-control" type="text" id="price_by_day" name="price_by_day">
                                            @error('price_by_day') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-12">
                                    <div class="file-upload-wrap">
                                        <label for="images">Images :</label>
                                        <input class="multi file-upload-input with-preview" type="file" id="images" name="images[]" maxlength="3" multiple>
                                        <span class="file-upload-text"><i class="la la-upload mr-2"></i>Cliquez ou faites glisser les images ici pour les télécharger</span>
                                        @error('images.*') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="submit-box">
                                    <div class="btn-box pt-3">
                                        <button type="submit" class="theme-btn">Enregistrer <i class="la la-arrow-right ml-1"></i></button>
                                    </div>
                                </div><!-- end col-lg-12 -->
                            </form>
                            @endif
                        </div><!-- end form-content -->
                    </div><!-- end form-box --><!-- end form-box -->
                    <!-- end submit-box -->
                </div><!-- end col-lg-9 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
@endsection



