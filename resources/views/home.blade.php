<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css"
rel="stylesheet"
/>

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"
></script>

    <title>Todo</title>
  </head>
  <body class="bg-dark">
   <div class="container w-50 mt-5">
     <div class="card shadow-sm">
       <div class="card-body">
         <h3>ToDo List</h3>
         <form action="{{route('store')}}" method="POST">
        @csrf
        <div class="input-group">
          <input type="text" name="name" class="form-control" placeholder="Add your todo...">
          
          <button type="submit" class="btn btn-dark btn-sm px-3">Add</button></div>
        </form>
        @if (count($todolist))
        <ul class="list-group list-group-flush mt-3">
          @foreach ($todolist as $todo)
          <li class="list-group-item">
            <form action="{{route('destroy', $todo->id)}}" method="POST">
              {{$todo->descripton}}
            @csrf
            @method('delete')
            <button class="btn btn-dark btn-sm float-end">Delete</button>
          </form>
          </li>
              
          @endforeach
        </ul>
            
        @endif
       </div>
     </div>
   </div>

  </body>
</html>