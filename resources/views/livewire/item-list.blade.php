<div>
    <div class="col-md-12">
        <h1><b>Item LIst </b></h1>
        <a href="{{ route('item') }}" class="px-6 py-3 text-blue-100 no-underline bg-blue-500 rounded hover:bg-blue-600 hover:underline hover:text-blue-200 float-right">Add Item</a>
            
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
                            Item Group Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Item Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Create Date
                        </th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $i = 0;
                    ?>
                @foreach($item as $key => $item)
                <?php 
                        $i ++;
                    ?>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$i}}
                        </th>
                        <td class="px-6 py-4">
                            {{$item['item_name']}}
                        </td>
                        <td class="px-6 py-4">
                            {{$item['item_group_name']}}
                        </td>
                        <td class="px-6 py-4">
                            {{$item['created_at']->format('d-m-Y')}}
                        </td>
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
