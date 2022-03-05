@extends('payroll.payroll')

@section('content')
    <div class="card ">
        <div class="w-8/12 bg-white p-6 rounded-lg">
        <form action="{{ route('position.update', $position->id) }}" method="post">
                @csrf
                @method("PATCH")
                <div class="mb-4">
                    <label for="position_name" class="sr-only">Position Name</label>
                    <input type="text" name="position_name" id="position_name" placeholder="Position Name" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('position_name') border-red-500 @enderror" value="{{ $position->position_name }}">
                    @error('position_name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror                
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full mb-4">Update Position</button>
            </form>
        </div>

        
        
    </div>
@endsection