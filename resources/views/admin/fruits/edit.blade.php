@can('admin-access')
    @extends('layouts.Admin.app')

        @section('content')

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">


                        

                            <div class="card">
                                <div class="card-body">
                                    <form action="{{route('admin.fruits.update',$fruit->id)}}" method="post">

                                   @csrf
                                   @method('PUT')

                                        <label for="">Add Image</label>
                                        <input type="file" class="form-control" name="image" value="{{$fruit->image}}"accept="image/jpeg, image/png" id="">

                                        <label for="">Name of Fruit</label>
                                        <input type="text" class="form-control" value="{{$fruit->fruits}}"name="fruit" id="">

                                        <label for="">Description</label>
                                        <textarea name="desc" class="form-control" value="{{$fruit->desc}}"id=""></textarea>

                                        <input type="submit" class="btn btn-primary mt-3" value="Update">

                                        <a href="/admin/fruits" class="btn btn-danger mt-3">Cancel</a>

                                    </form>
                                </div>
                            </div>


                            </div>

                           
                            
                           
                        
                        </div>
                    </div>
                </div>
            </div>
        @endsection
@endcan