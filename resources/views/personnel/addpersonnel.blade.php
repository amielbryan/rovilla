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
                    <label for="rate" class="sr-only">Daily Rate</label>
                    <input type="number" name="rate" id="rate"  placeholder="Enter daily rate" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('rate') border-red-500 @enderror" value="{{ old('rate') }}">
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
                <div class="mb-4">
                    <label for="dtr_id" class="sr-only">dtr_id</label>
                    <input type="hidden" name="dtr_id" id="dtr_id" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('dtr_id') border-red-500 @enderror" value=null>
                    @error('dtr_id')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror                
                </div>
                <div class="mb-4">
                    <label for="site_id" class="sr-only">site_id</label>
                    <input type="hidden" name="site_id" id="site_id" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('site_id') border-red-500 @enderror" value=null>
                    @error('site_id')
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