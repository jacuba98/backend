@extends('diseño.app')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded-top p-3">
        <form method="POST" action="{{ route('propiedad.store') }}">
        {{ csrf_field() }}
            <h6 class="mb-4">Floating Label</h6>
            <div class="form-floating mb-3">
                <input name="name" type="text" class="form-control" id="name"
                    placeholder="Juan Perez">
                <label for="floatingInput">Name of property</label>
            </div>
            <div class="form-floating mb-3">
                <textarea name="description" class="form-control" placeholder="Leave a comment here"
                    id="description" style="height: 150px;"></textarea>
                <label for="floatingTextarea">Description</label>
            </div>
            <div class="form-floating mb-3">
                <input name="price" type="text" class="form-control" id="price"
                    placeholder="$10,000">
                <label for="floatingInput">Price</label>
            </div>
            <div class="form-floating mb-3">
                <select name="address_id" class="form-select" id="address_id"
                    aria-label="Floating label select example">
                    <option selected>Address</option>
                    <option value="1">Address #1</option>
                    <option value="2">Address #2</option>
                    <option value="3">Address #3</option>
                </select>
                <label for="floatingSelect">Address</label>
            </div>
            <div class="form-floating mb-3">
                <select name="rooms" class="form-select" id="rooms"
                    aria-label="Floating label select example">
                    <option selected>Rooms</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
                <label for="floatingSelect">Rooms</label>
            </div>
            <div class="form-floating mb-3">
                <select name="beds" class="form-select" id="beds"
                    aria-label="Floating label select example">
                    <option selected>Beds</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
                <label for="floatingSelect">Beds</label>
            </div>
            <div class="form-floating mb-3">
                <select name="baths" class="form-select" id="baths"
                    aria-label="Floating label select example">
                    <option selected>Baths</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
                <label for="floatingSelect">Baths</label>
            </div>
            <div class="form-floating mb-3">
                <select name="tipo" class="form-select" id="tipo"
                    aria-label="Floating label select example">
                    <option selected>Tipo</option>
                    <option value="1">Casa</option>
                    <option value="2">Apartamento</option>
                    <option value="3">Cuarto</option>
                </select>
                <label for="floatingSelect">Tipo</label>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
@endsection