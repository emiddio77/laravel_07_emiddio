<x-layout>
<div class="container">
<div class="row">
    <div class="col-12">
        <form method="POST" action="{{route('movie.store')}}">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Titolo</label>
              <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              
            </div>
                      
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>

</div>


</x-layout>