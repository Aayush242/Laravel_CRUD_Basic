<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Laravel - CRUD </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
  <style>
    .container
    {
      background-color: #c3c3c3;
      border-radius:10px;
      padding:2%;
      width : 88%;
      border:2px solid black;
      position: absolute;
      top: 70% ;
      left : 50%; 
      transform : translate(-50%,-50%);
    }
  </style>
</head>

<body>
  
    <div class="row">
      <div class="col-lg-12 margin-tb">
        <div class="pull-left">
          <h2>Crud through Laravel</h2>
        </div>
        <br>
        <div class="pull-right mb-2"> 
          <a class="btn btn-success" href="{{ route('people.create') }}"> Create New Data</a>
        </div>
      </div>
    </div>

    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
    @endif
  <div class="container mt-2">  
    <table class="table table-bordered">  
      <tr>
        <th>S.No</th>
        <th width="300px">People Name</th>
        <th>People Email</th>
        <th width="300px">People Dob</th>
        <th>People age</th>
        <th>Description</th>
        <th>Phone_no</th>
        <th>Hobby</th>  
        <th>Gender</th>
        <th width="400px">Action</th> 
      </tr>

      @foreach ($people as $people)
        <tr>
          <td>{{ $people->id }}</td>
          <td>{{ $people->name }}</td>
          <td>{{ $people->email }}</td>
          <td>{{ $people->Dob }}</td>
          <td>{{ $people->age }}</td>
          <td>{{ $people->description }}</td>
          <td>{{ $people->phone_no }}</td>
          <td>{{ $people->hobby }}</td>
          <td>{{ $people->gender }}</td>
          <td>

            <form action="{{ route('people.destroy',$people->id) }}" method="Post">
              <a class="btn btn-primary" href="{{ route('people.edit',$people->id) }}">Edit</a>
              <br>
              
              <button type="submit" class="btn btn-danger">Delete</button>    
              
              @csrf
              @method('DELETE')

              <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('people.show', $people->id) }}"> Show</a>
              </div>
            </form>
          </td>
        </tr>
      @endforeach

    </table>

    <!-- <?php dd();
    ?> -->
  </div>
</body>
</html>