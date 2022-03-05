@extends('payroll.payroll')

@section('content')
    <div class="flex">
        <div class="w-full bg-white p-8">
            <a href="{{ route('personnel.create')}}"><button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-50 mb-4">Add Personnel</button></a>

            <h2 class="font-semibold text-xl bg-blue-500 text-white text-center p-2 ">Personnel</h2>
            <table class="w-full table-auto table-auto border border-blue-500" id="tabledit">
                <thead class="rounded">
                    <tr>
                        <td class="border border-blue-500 bg-blue-500 text-white text-center text-lg font-semibold">ID</td>
                        <td class="border border-blue-500 bg-blue-500 text-white text-center text-lg font-semibold">Personnel Name</td>
                        <td class="border border-blue-500 bg-blue-500 text-white text-center text-lg font-semibold">Daily Rate</td>
                        <td class="border border-blue-500 bg-blue-500 text-white text-center text-lg font-semibold">Status</td>
                        <td class="border border-blue-500 bg-blue-500 text-white text-center text-lg font-semibold">Action Perform</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($personnel as $row)
                    <tr>
                        <td class="border border-blue-500 w-12 text-center">
                            {{ $row->id }}
                        </td>
                        <td class="border border-blue-500 text-center">
                             {{ $row->name }}
                        </td > 
                        <td class="border border-blue-500 text-center">
                             {{ $row->rate }}
                        </td > 
                        <td class="border border-blue-500 text-center">
                             {{ $row->status }}
                        </td > 
                        <td class="border border-blue-500 text-center">
                            <a href="{{ route('editpersonnel', $row->id) }}"><button class="bg-blue-500 text-white px-4 py-2 rounded">Edit</button></a>
                            <form action="{{ route('personnel.destroy', $row->id) }}" method="post" class="inline">
                                @method('delete')
                                @csrf
                                <button class="bg-blue-500 text-white px-4 py-2 rounded ">  Delete</button>
                            </form>
                        </td>                   
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $personnel->links() }}   



        </div>
    </div>
@endsection