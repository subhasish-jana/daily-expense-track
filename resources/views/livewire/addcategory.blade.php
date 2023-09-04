<div>
    @if(session()->has('success'))
        <h1 style="background-color: #82b782;">{{session('success')}}</h1><br>
    @endif
    <h1><b>Add Category</b></h1><br>
    <form wire:submit.prevent="submit">
        <label for="fname">Category Name :</label>
        <input type="text" placeholder="Category Name" wire:model="category_name" class="block w-full text-sm text-slate-500
            file:mr-4 file:py-2 file:px-4
            file:rounded-full file:border-0
            file:text-sm file:font-semibold
            file:bg-violet-50 file:text-violet-700
            hover:file:bg-violet-100">
        @error('category_name') <span> {{$message}} </span> @enderror
        <br><br>
        <button type="submit" style="background-color: rgb(59 130 246);padding: 10px;">Save</button>
    </form>
</div>
