@extends('payroll.payroll')

@section('content')
    <div class="flex">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <h1 class="font-semibold text-2xl mb-4">Personnel</h1>
            <form action="{{ route('personnel') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Personnel Full Name" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}">
                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror                
                </div>
                
                <div class="mb-4">
                    <label for="position" class="sr-only">Position Name</label>
                    <select name="position" id="position" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('position') border-red-500 @enderror"  value="{{ old('position') }}">
                    @foreach($position as $row)
                    <option value="{{$row->position_name}}">{{$row->position_name}}</option>
                    @endforeach
                    </select>
                    @error('position')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror                
                </div>
                <div class="mb-4">
                    <label for="rate_type" class="sr-only">Rate Type</label>                    
                    <select type="text" name="rate_type" id="rate_type"  class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('rate_type') border-red-500 @enderror" value="{{ old('rate_type') }}">
                    <option value="daily">Daily Rate</option>
                    <option value="fixed">Fixed</option>
                    </select>
                    @error('rate_type')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror                
                </div>
                <div class="mb-4">
                    <label for="rate" class="sr-only">Rate</label>
                    <input type="number" name="rate" id="rate"  placeholder="Enter your rate" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('rate') border-red-500 @enderror" value="{{ old('rate') }}">
                    @error('rate')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror                
                </div>
                <div class="mb-4">
                    <label for="status" class="sr-only">Status</label>
                    <select type="text" name="status" id="status"  class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('status') border-red-500 @enderror" value="{{ old('status') }}">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                    <option value="awol">AWOL</option>
                    </select>
                    @error('status')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror                
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full mb-4">Add Personnel</button>
            </form>


        </div>
    </div>
@endsection