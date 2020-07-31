<tbody class="bg-white divide-y divide-gray-200">
    <tr>
        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
            <div class="flex items-center">

                <div class="ml-4">
                    <div class="text-sm leading-5 font-medium text-gray-900">
                        {{ $user->name }}
                    </div>
                    <div class="text-sm leading-5 text-gray-500">
                        {{ $user->email }}
                    </div>
                </div>
            </div>
        </td>
        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
            <div class="text-sm leading-5 text-gray-900">{{ $user->username }}</div>

        </td>
        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
            <div class="text-sm leading-5 text-gray-900">{{ $user->phonenumber }}</div>

        </td>
        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                @if($user->password_set)
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                        Active
                    </span>
                @else
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-grey-200 text-grey-800">
                        Inactive
                    </span>
                @endif

        </td>
        <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
            <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-4">Edit</a>
            <a href="#" wire:click.prevent="resetPassword({{ $user->id}})" class="text-indigo-600 hover:text-indigo-900">Reset Password</a>

        </td>
    </tr>

    <!-- More rows... -->
</tbody>
