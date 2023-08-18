
<div>
    <div class="col-md-12">
        <h1><b>Expenditure List </b></h1>
        @if(Auth()->User()->user_type=='user')
            <a href="{{ route('add-expenditure') }}" class="px-6 py-3 text-blue-100 no-underline bg-blue-500 rounded hover:bg-blue-600 hover:underline hover:text-blue-200 float-right">Add Expenditure</a>
        @endif
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
                        @if(Auth()->User()->user_type=='admin')
                        <th scope="col" class="px-6 py-3">
                            User Name
                        </th>
                        @endif
                        <th scope="col" class="px-6 py-3">
                            Expense Amount
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
                @foreach($expenditure as $key => $expenditure)
                    <?php 
                        $i ++;
                    ?>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$i}}
                        </th>
                        <td class="px-6 py-4">
                            {{$expenditure['item_group_name']}}
                        </td>
                        <td class="px-6 py-4">
                            {{$expenditure['item_name']}}
                        </td>
                        @if(Auth()->User()->user_type=='admin')
                        <td class="px-6 py-4">
                            {{$expenditure['name']}}
                        </td>
                        @endif
                        <td class="px-6 py-4">
                            {{$expenditure['exp_amt']}}
                        </td>
                        <td class="px-6 py-4">
                            {{$expenditure['created_at']->format('d-m-Y')}}
                        </td>
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
