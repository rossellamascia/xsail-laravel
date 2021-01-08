<x-back_layout>
    <div class="container-fluid">
        <div class="row">
            <x-sidebar />
            <div class="col-md-10">
                <h4 class="my-3">Aggiungi Annuncio</h4>
                <div class="row">
                    <div class="col-12">
                        @if (session('message'))
                            <div class="alert alert-success">
                               
                                   {{ session('message')  }}
                              
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('partners.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="category">Categoria</label>
                                <select name="category" id="category" class="form-control">
                                    <option value="0">Seleziona Categoria</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('category') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category')
                                    <div class="alert alert-danger">

                                        {{ $message }}

                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="price">Prezzo</label>
                                <input type="number" class="form-control" name="price" value="{{ old('price') }}">
                                @error('price')
                                    <div class="alert alert-danger">

                                        {{ $message }}

                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Titolo</label>
                                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                                @error('title')
                                    <div class="alert alert-danger">

                                        {{ $message }}

                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="long_description">Descrizione</label>
                                <textarea class="form-control" name="long_description" id="long_description" cols="30"
                                    rows="10">{{ old('long_description') }}</textarea>
                                @error('long_description')
                                    <div class="alert alert-danger">

                                        {{ $message }}

                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="short_description">Descrizione Corta</label>
                                <textarea class="form-control" name="short_description" id="" cols="10"
                                    rows="10">{{ old('short_description') }}</textarea>
                                @error('short_description')
                                    <div class="alert alert-danger">

                                        {{ $message }}

                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Crea Annuncio</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-back_layout>   
