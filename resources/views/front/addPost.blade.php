@extends('front.layouts.master')

@section('content')
<div class="container text-right">
    
    <div class="col-lg-10">
        <h3>Ajouter une Annonce</h3>
        <hr>
    </div>

{!! Form::open(array('files'=>true )) !!}
    <div class="form-group">
        <label>NOM DE L ANNONCE</label>
        {{ Form::text('title',null,['class'=>'form-control']) }}
    </div>
    <div class="form-group">
        <label>DETAILS DE L ANNONCE</label>
        {{ Form::text('text',null,['class'=>'form-control']) }}
        </div>
    <div class="form-group">
        <label>PRIX</label>
        {{ Form::text('price',null,['class'=>'form-control']) }}
    </div>
    <div class="form-group">
        <label>TYPE</label>
        {{ Form::select('category_id',$categories,1,['class'=>'form-control']) }}
    </div>
    <div class="form-group">
        <label>PAYS</label>
        {{ Form::select('country_id',$countries,1,['class'=>'form-control']) }}
    </div>
     <div class="form-group">
        <label>PHOTO</label>
        <input type="file" class="form-control" name="images[]" multiple />
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    {{Form::close()}}
</div>
@endsection