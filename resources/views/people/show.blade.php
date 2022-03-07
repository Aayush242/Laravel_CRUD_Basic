<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Read </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <style>
            .container{
            background-color: #d4d4d4 ;
            border-radius:10px;
            padding:2%;
            width : 30%;
            border:2px solid black;
            position: absolute;
            top: 50% ;
            left : 50%; 
            transform : translate(-50%,-50%);
        }
    </style>
</head>

<body>
<div class="container mt-2">  
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('people.index') }}" enctype="multipart/form-data"> Back</a>
    </div>

    @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
    @endif

    <form action="{{ route('people.update','$people->id') }}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Full Name: {{$people->name}}</strong>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                            <strong>DOB: {{$people->Dob}}</strong>
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Age: {{$people->age}}</strong>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Gender:
                            @if($people->gender=='male') Male @endif
                            @if($people->gender=='female') Female @endif
                        </strong>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Phone No.: {{$people->phone_no}}</strong>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email: {{$people->email}}</strong>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Hobby:
                            @if($people->hobby=='Singing')Singing  @endif
                            @if($people->hobby=='Dancing')Dancing  @endif
                        </strong>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Description: {{$people->description}}</strong>
                    </div>
                </div>
            </div>

    </form>
    </div>
</div>

</body>
</html>