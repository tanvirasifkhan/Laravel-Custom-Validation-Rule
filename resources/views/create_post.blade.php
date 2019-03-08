<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Create Post | Laravel Custom Validation Rule</title>
  </head>
  <body>
    <div class="container mt-5">
       <div class="row justify-content-center">
          <div class="col-5">
              <h3 class="text-center text-muted">Create New Post</h3>
              @if(Session::has('message'))
                <div class="alert alert-success" role="alert">
                   {{ Session::get('message') }}
                </div>
              @endif
              <div class="card mt-5">
                  <div class="card-body">
                     <form action="{{ route('post.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                           <label for="">Title</label>
                           <input type="text" class="form-control {{ ($errors->has('title'))?'is-invalid':'' }}" name="title" value="{{ old('title') }}" placeholder="Enter title...">
                           @if($errors->has('title'))
                              <span class="text-danger">{{ $errors->first('title') }}</span>
                           @endif
                        </div>
                        <div class="form-group">
                           <label for="">Category</label>
                           <input type="text" class="form-control {{ ($errors->has('category'))?'is-invalid':'' }}" name="category" value="{{ old('category') }}" placeholder="Enter category...">
                           @if($errors->has('category'))
                              <span class="text-danger">{{ $errors->first('category') }}</span>
                           @endif
                        </div>
                        <div class="form-group">
                           <label for="">Description</label>
                           <textarea class="form-control {{ ($errors->has('description'))?'is-invalid':'' }}" name="description" value="{{ old('description') }}" placeholder="Enter description..."></textarea>
                           @if($errors->has('description'))
                              <span class="text-danger">{{ $errors->first('description') }}</span>
                           @endif
                        </div>
                        <button type="submit" class="btn btn-success">Create</button>
                     </form>
                  </div>
              </div>
          </div>
       </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
