<!-- component -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profiles</title>
</head>
<body>
    <div class="py-16 bg-gradient-to-br from-green-50 to-cyan-50">  
        <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
            <div class="mb-12 space-y-2 text-center">
              <span class="block w-max mx-auto px-3 py-1.5 border border-green-200 rounded-full bg-green-100 text-green-600">Blog</span>
              <h2 class="text-2xl text-cyan-900 font-bold md:text-4xl">Sharing is Caring</h2>
              <p class="lg:w-6/12 lg:mx-auto">Quam hic dolore cumque voluptate rerum beatae et quae, tempore sunt, debitis dolorum officia aliquid explicabo? Excepturi, voluptate?</p>
            </div>
            <script src="https://cdn.tailwindcss.com"></script>
            @foreach($data as $item)
  
            <div class="d1" style="width:40%; display:flex; height:120px; margin:auto;margin-top:40px; box-shadow:2px 2px solid blue; border-radius:20px; border:1px solid grey">
            <div class="img" style="width:40%;margin-top:10px;" align=right>
                <img src ="storage/{{ $item->image }}" alt="art cover" style=" width:100px; box-shadow:40%; height:100px; border-radius:50%; border:1px solid grey">
            </div>
            <div class="info" style="width:40%;  margin-left:20px;">
               <br/> <h2>{{ $item->name }}</h2>
                <h3>{{ $item->email }}</h3>
            </div>
            </div>
              @endforeach
             
</body>
</html>
