@extends('back.layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">ANNONCES</h1>
    </div>

</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading text-right">
                <button class="btn btn-success" type="button">AJOUTER UN NOUVEAU USER</button>
            </div>

            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>NUMERO</th>
                                <th>ADRESSE</th>
                                <th>DETAILS</th>
                                <th>PRIX</th>
                                <th>VENDU</th>
                                <th>USER</th>
                                <th>CATEGORIE</th>
                                <th>PAYS</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->text}}</td>
                                    <td>{{$post->price}}</td>
                                    <td>{{Form::checkbox('active',null,$post->is_active)}}</td>
                                    <td>{{$post->user->name}}</td>
                                    <td>{{$post->category->category_name}}</td>
                                    <td>{{$post->country->name}}</td> 
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></button>
                                            {!! Form::open(array(
                                                'method' => 'DELETE',
                                                'route' => ['post.destroy',$post->id],
                                                'onsubmit' => "return confirm('Voulez-vouz vraiment supprimez cette annonce?')"
                                                )) !!}
                                                <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button>
                                            {!! Form::close() !!}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="well">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection