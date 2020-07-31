<div>
    <h1 class="text-3xl text-black pb-6">Users</h1>
    <div class="flex justify-between">
        <input wire:model="search" class="shadow appearance-none border rounded py-2 px-3 text-grey-darker"
            placeholder="Search...">

    </div>
    <div class="flex flex-col">
        <div class="my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div
                class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Name
                            </th>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Username
                            </th>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Phone Number
                            </th>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Status
                            </th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">

                        @foreach($users as $user)
                            @include('partials.table_entry_user')
                        @endforeach



                        <form wire:submit.prevent="save">
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">

                                    <div class="flex items-center">


                                        <div class="ml-4">
                                            <div class="text-sm leading-5 font-medium text-gray-900">
                                                <input wire:model.lazy="name" type="text" placeholder="John Doe" class="shadow appearance-none border rounded py-2 px-3 text-grey-darker">
                                                </div>
                                                <div class=" text-sm leading-5 text-gray-500">
                                                <input wire:model.lazy="email" type="email"
                                                    placeholder="john.doe@hey.com" class="shadow appearance-none border rounded py-2 px-3 mt-2 text-grey-darker">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="text-sm leading-5 text-gray-900">
                                        <input wire:model.lazy="username" type="text" placeholder="pau7en" class="shadow appearance-none border rounded py-2 px-3 text-grey-darker">
                                    </div>

                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="text-sm leading-5 text-gray-900">
                                        <input wire:model.lazy="phonenumber" type="tel" class="shadow appearance-none border rounded py-2 px-3 text-grey-darker">
                                    </div>

                                </td>
                                <td></td>
                                <td
                                    class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                    <button type="submit" class="text-indigo-600 hover:text-indigo-900 ">Save</button>
                                </td>
                            </tr>
                        </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
