<!-- Id User Field -->
<div class="col-sm-12">
    {!! Form::label('id_user', 'Id User:') !!}
    <p>{{ $product->id_user }}</p>
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $product->title }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $product->description }}</p>
</div>

<!-- Price Field -->
<div class="col-sm-12">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $product->price }}</p>
</div>

<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $product->image }}</p>
</div>

<!-- State2 Field -->
<div class="col-sm-12">
    {!! Form::label('state2', 'State2:') !!}
    <p>{{ $product->state2 }}</p>
</div>

