
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
  
    <table class="table">
        <thead>
            <tr>
              
                <th>Name</th>
                <th>Email</th>
                <th>Photo</th>
            </thead>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
             
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>
                    {{-- <img src=""></img> --}}
                   <img src ="storage/{{ $item->image }}" width="100" height="100" class="img img-responsive">
                    {{-- <img src="{{ asset($item->photo) }}" width="50" height="50" class="img img-responsive"> --}}
                </td>
                </tr>
                @endforeach
    </table>
</body>
</html>
