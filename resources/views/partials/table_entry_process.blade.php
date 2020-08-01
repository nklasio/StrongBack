<tr>
    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
        <div class="text-sm leading-5 text-gray-900">{{ $process->cooperation->name}}</div>
        <div class="text-sm leading-5 text-gray-500">{{ $process->actiondescription->name}}</div>
        <div class="text-sm leading-5 text-gray-500">{{ $process->action->name}}</div>

    </td>
    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
        <div class="flex items-center">
            <div class="ml-4">
                <div class="text-sm leading-5 font-medium text-gray-900">
                    {{ $process->contract->contractIdentifier }}
                </div>
                <div class="text-sm leading-5 text-gray-500">
                    {{ $process->contract->customer->anrede }} {{ $process->contract->customer->vorname }}
                    {{ $process->contract->customer->name }}
                </div>
            </div>
        </div>
    </td>
    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
        <div class="text-sm leading-5 text-gray-900"> Tel: {{ $process->contract->customer->telefonnummer }}</div>
        <div class="text-sm leading-5 text-gray-500">Mobil: {{ $process->contract->customer->telefon_mobil }}
        </div>
    </td>
    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
        <div class="text-sm leading-5 text-gray-900">{{ $process->contract->customer->strasse }}
            {{ $process->contract->customer->hausnummer }}</div>
        <div class="text-sm leading-5 text-gray-500">{{ $process->contract->customer->platz }}
            {{ $process->contract->customer->ort }}</div>
    </td>
    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
            Active
        </span>
    </td>
    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
        <div class="text-sm leading-5 text-gray-900">{{ $process->user->name }}</div>
        <div class="text-sm leading-5 text-gray-500">{{ $process->user->username }}</div>
    </td>
    <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
    </td>
</tr>
