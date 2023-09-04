<div>
    <div class="col-md-12">
        <h1><b>Subcategory LIst </b></h1>
        <a href="{{ route('add-subcategory') }}" class="px-6 py-3 text-blue-100 no-underline bg-blue-500 rounded hover:bg-blue-600 hover:underline hover:text-blue-200 float-right">Add Subcategory</a>
            
    <br>
    </div>
    
    <br>
    <div class="col-md-12">
     
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Sl. No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Sub Category Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Create Date
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($subcategory as $key => $subcategory)
                
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$key + 1}}
                            </td>
                            <td class="px-6 py-4">
                                {{$subcategory['category']['category_name']}}
                            </td>
                            <td class="px-6 py-4">
                                {{$subcategory['subcategory_name']}}
                            </td>
                            <td class="px-6 py-4">
                                {{$subcategory['created_at']->format('d-m-Y')}}
                            </td>
                        </tr>
                    
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
