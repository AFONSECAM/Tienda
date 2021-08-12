<h3>Permisos especiales</h3>
<label for="">{!! Form::radio('special', 'all-access') !!} Acceso total</label>
<label for="">{!! Form::radio('special', 'no-access') !!} Ningún acceso</label>

<h3>Listado de permisos</h3>
<div class="form-group">
    <ul class="list-unstyled">
        @foreach($permissions as $permission)
        <li>
            {!! Form::checkbox('permissions[]', $permission->id, null) !!}
            {{ $permission->name}}:
            <em>{{ $permission->description }}</em>
        </li>
        @endforeach
    </ul>
</div>