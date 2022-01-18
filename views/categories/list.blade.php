@extends("layout.admin")

@section("content")
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Categories</h1>

  <div class="card shadow mb-4">

    <div class="card-header py-3">
    <a class="btn btn-primary" href="{{route('categories.create')}}">
    <i class="fas fa-plus"></i> Add Category
    </a>
    </div>
    <div class="card-body">
    @if (count($categories))
    <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

    <tbody>
    @foreach($categories as $category)
    <tr>
    <td>{{$category->name}}</td>
    <td>{{$category->description}}</td>
    <td nowrap>
    <a class="btn btn-xs btn-primary btn-p" href="{{route('categories.show',$category)}}"><i
    class="fas fa-eye fa-xs"></i></a>
    <a class="btn btn-xs btn-warning btn-p" href="{{route('categories.edit',$category)}}"><i
    class="fas fa-pen fa-xs"></i></a>
    <form method="POST" action="{{route('categories.destroy',$category)}}" role="form"
    class="inline" onsubmit="return confirm('Are you sure you want to delete this record?');">
    @csrf
    @method("DELETE")
    <button type="submit" class="btn btn-xs btn-danger btn-p">
    <i class="fas fa-trash fa-xs"></i></button>
    </form>
    </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
    @else
    <h6>No categories registered</h6>
    @endif
    </div>
  </div>
</div>
@endsection

@section("moreScripts")
<script>
$('#dataTable').dataTable( {
  destroy: true,
  "order": [[ 0, 'asc' ]],  
  "columns": [
    null,
    null,
    { "orderable": false }
    ]
  } );
  
  </script>
  @endsection