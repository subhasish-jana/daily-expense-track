<div>
    <div class="col-md-12">
        <h1><b>User List </b></h1>
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
                            User Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            User Email
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
                @foreach($user as $key => $user)
                <?php
                $i ++;
                ?>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$i}}
                        </th>
                        <td class="px-6 py-4">
                            {{$user['name']}}
                        </td>
                        <td class="px-6 py-4">
                            {{$user['email']}}
                        </td>
                        <td class="px-6 py-4">
                            {{$user['created_at']}}
                        </td>
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
