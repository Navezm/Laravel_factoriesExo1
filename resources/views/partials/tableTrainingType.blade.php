<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($trainingTypes as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
        </tr>
      @endforeach
    </tbody>
</table>