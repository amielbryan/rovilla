@extends('payroll.payroll')

@section('content')
    <div class="flex">
        <div class="w-full bg-white p-8">
            <a href="{{ route('position.create')}}"><button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-50 mb-4">Add Position</button></a>            
            <h2 class="font-semibold text-xl bg-blue-500 text-white text-center p-2 ">Position Available</h2>
            <table class="w-full table-auto table-auto border border-blue-500" id="tabledit">
                <thead class="rounded">
                    <tr>
                        <td class="border border-blue-500 bg-blue-500 text-white text-center text-lg font-semibold">ID</td>
                        <td class="border border-blue-500 bg-blue-500 text-white text-center text-lg font-semibold">Position Name</td>
                        <td class="border border-blue-500 bg-blue-500 text-white text-center text-lg font-semibold">Action Perform</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($position as $row)
                    <tr>
                        <td class="border border-blue-500 w-12 text-center">
                            {{ $row->id }}
                        </td>
                        <td class="border border-blue-500 text-center">
                             {{ $row->position_name }}
                        </td > 
                        <td class="border border-blue-500 text-center">
                            <a href="{{ route('editposition', $row->id) }}"><button class="bg-blue-500 text-white px-4 py-2 rounded">Edit</button></a>
                            <form action="{{ route('position.destroy', $row->id) }}" method="post" class="inline">
                                @method('delete')
                                @csrf
                                <button class="bg-blue-500 text-white px-4 py-2 rounded ">  Delete</button>
                            </form>
                        </td>                   
                    </tr>
                    @endforeach
                </tbody>
            </table>




            {{ $position->links() }}    
        </div>
        <span>
            
        </span>
    </div>
@endsection
