@include('admin.includes.alerts')
@csrf

<div class="form-goup">
    <label >* Nome:</label>
    <input type="text" name="name" class="form-control" placeholder="Nome:" value="{{   $profile->name ?? ''   }}">
</div>

<div class="form-goup">
    <label >Descricao:</label>
    <input type="text" name="description" class="form-control" placeholder="Descricao:" value="{{   $profile->description ?? ''   }}">
</div>
<br>
<div class="form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>