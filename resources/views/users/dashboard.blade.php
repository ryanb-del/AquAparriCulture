



@can('admin-access')
    @extends('layouts.Admin.app')

        @section('content')

        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in as User") }}
                </div>
            </div>
        </div>
    </div>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                       
                        

                        <div class="row">
                            <div class="col-sm-4">
                            <h1 class="text-center">Add Vegetable</h1>

                            <div class="card">
                                <div class="card-body">
                                    <form action="{{route('admin.vegetable.store')}}" method="post">

                                        @csrf
                                        @method('POST')
                                        <label for="">Add Image</label>
                                        <input type="file" class="form-control" name="image" accept="image/jpeg, image/png" id="">

                                        <label for="">Name of Vegetable</label>
                                        <input type="text" class="form-control" name="vegs" id="">

                                        <label for="">Description</label>
                                        <textarea name="desc" class="form-control" id=""></textarea>

                                        <input type="submit" class="btn btn-primary mt-3" value="Add Vegetable">

                                    </form>
                                </div>
                            </div>


                            </div>

                            <div class="col-sm-7">
                                <h3 class="text-center">List of All Vegetables</h3>
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table">
                                            <thead>
                                                <th>Image</th>
                                                <th>Name of Fruits</th>
                                                <th>Description</th>
                                                <th>Option/s</th>
                                            </thead>
                                            @foreach ($vegies as $vegs)
                                           
                                                <tr>
                                                    <td>{{$vegs->images}}</td>
                                                    <td>{{$vegs->vegies}}</td>
                                                    <td>{{$vegs->descrip}}</td>
                                                    <td>
                                                        <form action="{{route('admin.vegetable.destroy',$vegs->id)}}" method="post">

                                                        @csrf
                                                        @method('DELETE')
                                                           
                                                            <input onclick="return confirm('Kayat mu talaga nga idelete ta record?')" stype="submit" class="btn btn-danger" value="Delete">
                                                            <a href="{{route('admin.vegetable.edit',$vegs->id)}}" class="btn btn-primary">Edit</a>
                                                        </form>
                                                    </td>
                                                </tr>


                                                
                                            @endforeach
                                           

                                               
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                           
                            
                            
                           
                        
                        </div>
                    </div>
                </div>
            </div>
        @endsection
@endcan

