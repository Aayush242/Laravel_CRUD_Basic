<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adding Data of People</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add People</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('people.index') }}"> Back</a>
                </div>
            </div>
        </div>
    
    
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        
        <form action="{{ route('people.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('people.form')
        </form>
    </div>
</body>
</html>