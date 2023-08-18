<div>
    @if(session()->has('success'))
        <h1 style="background-color: #82b782;">{{session('success')}}</h1><br>
    @endif
    <h1><b>Add Item</b></h1><br>
    <div class="col-md-12">
        <form wire:submit.prevent="submit">
        
            <label for="fname">Select Item Group :</label>
            <select wire:model="selectgroup" class="block w-full text-sm text-slate-500
            file:mr-4 file:py-2 file:px-4
            file:rounded-full file:border-0
            file:text-sm file:font-semibold
            file:bg-violet-50 file:text-violet-700
            hover:file:bg-violet-100">
                <option value="">-Select-</option>
                @foreach($itemgroup as $key => $itemgroup)
                <option value="{{ $itemgroup['id'] }}">{{ $itemgroup->item_group_name }}</option>
                @endforeach
            </select>
            @error('selectgroup') <span> {{$message}} </span> @enderror<br><br>
            <label for="fname">Item Name :</label>
            <input type="text" placeholder="Item Name" wire:model="name"  class="block w-full text-sm text-slate-500
            file:mr-4 file:py-2 file:px-4
            file:rounded-full file:border-0
            file:text-sm file:font-semibold
            file:bg-violet-50 file:text-violet-700
            hover:file:bg-violet-100">
            @error('name') <span> {{$message}} </span> @enderror
            <br><br>
            <button type="submit" style="background-color: rgb(59 130 246);padding: 10px;">
                Save
            </button>
        </form>
    </div>
</div>
