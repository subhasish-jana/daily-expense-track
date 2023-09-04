<div>
    @if(session()->has('success'))
        <h1 style="background-color: #82b782;">{{session('success')}}</h1><br>
    @endif
    <h1><b>Add Subcategory</b></h1><br>
    <div class="col-md-12">
        <form wire:submit.prevent="submit">
        
            <label for="fname">Select Category :</label>
            <select wire:model="selectcategory" class="block w-full text-sm text-slate-500
            file:mr-4 file:py-2 file:px-4
            file:rounded-full file:border-0
            file:text-sm file:font-semibold
            file:bg-violet-50 file:text-violet-700
            hover:file:bg-violet-100">
                <option value="">-Select-</option>
                @foreach($Category as $key => $Category)
                    <option value="{{ $Category->id }}">{{ $Category->category_name }}</option>

                @endforeach
            </select>
            @error('selectcategory') <span> {{$message}} </span> @enderror<br><br>
            <label for="fname">Subcategory Name :</label>
            <input type="text" placeholder="Subcategory Name" wire:model="subcategory"  class="block w-full text-sm text-slate-500
            file:mr-4 file:py-2 file:px-4
            file:rounded-full file:border-0
            file:text-sm file:font-semibold
            file:bg-violet-50 file:text-violet-700
            hover:file:bg-violet-100">
            @error('subcategory') <span> {{$message}} </span> @enderror
            <br><br>
            <button type="submit" style="background-color: rgb(59 130 246);padding: 10px;">
                Save
            </button>
        </form>
    </div>
</div>
