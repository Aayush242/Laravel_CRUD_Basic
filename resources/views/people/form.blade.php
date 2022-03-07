<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>people Name:</strong>
            <input type="text" name="name" value="{{ $people->name??''}}" class="form-control" placeholder="People name">
                @error('name')
                <div class="alert alert-danger mt-1 mb-1">
                    {{ $message }}
                </div>
                @enderror
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>people Email:</strong>
            <input type="email" name="email" class="form-control" placeholder="People Email" value="{{ $people->email??''}}">
            @error('email')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>people Dob:</strong>        
            <input type="date" name="Dob" value="{{ $people->Dob??''}}" class="form-control" placeholder="People Dob">
            @error('Dob')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>  
            @enderror
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>People Age:</strong>    
            <input type="number" name="age" value="{{ $people->age??''}}" class="form-control" placeholder="People age">
            @error('age')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description:</strong>
            <input type="text" name="description" value="{{ $people->description??''}}" class="form-control" placeholder="description">
            @error('description')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12"> 
        <div class="form-group">
            <strong>Phone_no:</strong>
            <input type="tel" name="phone_no" value="{{ $people->phone_no??''}}" class="form-control" placeholder="phone_no">
            @error('phone_no')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group ml-3">
            <label><strong>Gender : </strong></label>
            
            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="Male" value="male" @if($person->gender??''=='Male') checked @endif>
                                <label class="form-check-label" for="Male">
                                    Male
                                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="Female" value="female"@if($person->gender??''=='Female'??'') checked @endif>
                 <label class="form-check-label" for="Female">
                     Female
                 </label>
             </div>
        </div>  
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group ml-1 ">
            <strong>Hobby:</strong>
            <input type="checkbox" name="hobby" value="Singing" ><label>Singing</label>
            <input type="checkbox" name="hobby" value="Dancing" ><label>Dancing</label>
            @error('hobby')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <button type="submit" class="btn btn-primary ml-3" >Submit</button>
</div>
