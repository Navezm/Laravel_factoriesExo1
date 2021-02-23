<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Surname</th>
        <th scope="col">Age</th>
        <th scope="col">Situation</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($students as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->surname}}</td>
            <td>{{$item->age}}</td>
            <td>
                @if ($item->situation)
                    Employed
                @else
                    Unemployed
                @endif
            </td>
        </tr>
      @endforeach
    </tbody>
</table>