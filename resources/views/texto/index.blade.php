<div class="container">
    <div class="row">
        <a title="Nuevo Texto" class="btn btn-sm btn-success" href="{{route('ender.create')}}"><i class="fa fa-plus"></i> Crear</a>
        {!! Form::close() !!}
        <br>
		<table align= 'center' border = '6'>
            <thead>
                <tr>
                  <th>texto</th>
                  <th>textarea</th>
                </tr>
            </thead>
            <tbody>
                @foreach($textos as $texto)
                <tr>
                    <td>{{ $texto->texto }}</td>
                    <td>{{ $texto->textarea }}</td>
                    <td>
                      <center>
                          <a class="btn btn-primary btn-xs" href="{{ route('texto.edit',['id' => $texto->id] )}}" >Edit</a>
                          <a class="btn btn-danger btn-xs" href="{{ route('texto/destroy',['id' => $texto->id] )}}" >Delete</a>
                      </center>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
	</div>
</div>
