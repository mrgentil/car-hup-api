<div>
    @if (session()->has('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif
        <form wire:submit.prevent="store" enctype="multipart/form-data" class="row">
            @csrf
            <div class="col-lg-6 responsive-column">
                <div class="input-box">
                    <label for="make">Marque :</label>
                    <div class="form-group">
                        <span class="la la-briefcase form-icon"></span>
                        <input placeholder="Marque" class="form-control" type="text" id="brand" wire:model="brand">
                        @error('brand') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6 responsive-column">
                <div class="input-box">
                    <label for="make">Modele :</label>
                    <div class="form-group">
                        <span class="la la-briefcase form-icon"></span>
                        <input placeholder="Modele" class="form-control" type="text" id="model" wire:model="model">
                        @error('model') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6 responsive-column">
                <div class="input-box">
                    <label for="year">Année de fabrication :</label>
                    <div class="form-group">
                        <span class="la la-briefcase form-icon"></span>
                        <input placeholder="Année de fabrication" class="form-control" type="date" id="year_of_manufacture" wire:model="year_of_manufacture">
                        @error('year_of_manufacture') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6 responsive-column">
                <div class="input-box">
                    <label for="year">Couleur :</label>
                    <div class="form-group">
                        <span class="la la-briefcase form-icon"></span>
                        <input placeholder="Couleur" class="form-control" type="text" id="color" wire:model="color">
                        @error('color') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6 responsive-column">
                <div class="input-box">
                    <label for="year">Type de carburant :</label>
                    <div class="form-group">
                        <span class="la la-briefcase form-icon"></span>
                        <input placeholder="Type de carburant" class="form-control" type="text" id="type_of_fuel" wire:model="type_of_fuel">
                        @error('type_of_fuel') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <div class="col-lg-6 responsive-column">
                <div class="input-box">
                    <label for="year">Prix par jour :</label>
                    <div class="form-group">
                        <span class="la la-briefcase form-icon"></span>
                        <input placeholder="Prix par jour" class="form-control" type="text" id="price_by_day" wire:model="price_by_day">
                        @error('price_by_day') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div><!-- end col-lg-6 -->
            <div class="col-lg-12">
                <div class="file-upload-wrap">
                    <label for="images">Images :</label>
                    <input class="multi file-upload-input with-preview" type="file" id="images" wire:model="images" maxlength="3" multiple>
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
{{--    <form wire:submit.prevent="store" enctype="multipart/form-data">--}}
{{--        <div>--}}
{{--            <label for="make">Marque :</label>--}}
{{--            <input type="text" id="make" wire:model="make">--}}
{{--            @error('make') <span class="error">{{ $message }}</span> @enderror--}}
{{--        </div>--}}

{{--        <div>--}}
{{--            <label for="model">Modèle :</label>--}}
{{--            <input type="text" id="model" wire:model="model">--}}
{{--            @error('model') <span class="error">{{ $message }}</span> @enderror--}}
{{--        </div>--}}

{{--        <div>--}}
{{--            <label for="year">Année :</label>--}}
{{--            <input type="text" id="year" wire:model="year">--}}
{{--            @error('year') <span class="error">{{ $message }}</span> @enderror--}}
{{--        </div>--}}

{{--        <div>--}}
{{--            <label for="images">Images :</label>--}}
{{--            <input type="file" id="images" wire:model="images" multiple>--}}
{{--            @error('images.*') <span class="error">{{ $message }}</span> @enderror--}}
{{--        </div>--}}

{{--        <button type="submit">Enregistrer</button>--}}
{{--    </form>--}}
</div>
