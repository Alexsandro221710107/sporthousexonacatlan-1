@extends('admintemplate.main')

@section('contenido')
<div class="col-md-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Editar Publicidad </h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
    <br />
      <form class="form-horizontal form-label-left input_mask" action = "{{route('actualizarpublicidad')}}" method="POST" enctype='multipart/form-data' name="form_reloj">
        {{csrf_field()}}
        <input type="hidden" class="form-control has-feedback-left" id='fecha' name='fecha'>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">No. Publicidad: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='idbanner' name='idbanner'  value="{{$publicidad->idbanner}}" readonly>
              <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id='nombre' name='nombre' value="{{$publicidad->nombre}}" placeholder="Escriba el Nombre de la Publicidad">
              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Archivo: </label>
            <div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback">
              <input type="file" id="banner" name="banner">
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Descripción: </label>
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <textarea class="form-control has-feedback-left" name="descripcion" rows="10" cols="30" placeholder="Agregue Una Descripcion de la Publicidad">{{$publicidad->descripcion}}</textarea>
            </div>
        </div>
        <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
              <a type="button" class="btn btn-warning" href="{{URL::action('BannerController@reportepublicidad')}}"><i class="fa fa-rotate-left"></i> Cancelar</a>
						  <button class="btn btn-danger" type="reset"><span class="fa fa-trash"></span> Borrar</button>
              <button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Guardar</button>
            </div>
          </div>
      </form>
    </div>
  </div>
</div>
@stop
