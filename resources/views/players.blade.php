<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-16">
    <div class="mb-16">
        <div class="flex items-center justify-between mb-4">
            <div class="flex items center">
            <h2 class="text-3xl font-bold mr-6">Players</h2>
            <button class=" px-3 rounded ">
                <a class="flex items-center" href={{ route('dashboard')}}>
                Edit Data
                </a>
            </button>
            </div>
            <div>
                <label for="Search">Search</label>
                <input class="rounded ml-2 h-8 tableSearch" name="search" type="text">
            </div>
        </div>
        <div class="w-full rounded-lg overflow-x-hidden overflow-y-scroll max-h-1400px no-scrollbar">
            <table class="w-full text-left h-12">
                <thead class="bg-zinc-900 text-white sticky top-0">
                    <tr>
                        <th class="pl-6 py-2">Player ID</th>
                        <th class="pl-6 py-2">Name</th>
                        <th class="pl-6 py-2">Nationality</th>
                        <th class="pl-6 py-2">Role</th>
                        <th class="pl-6 py-2">Team</th>
                    </tr>
                </thead>
                <tbody class="">
                    @foreach ($playersData as $player)
                    <tr class="h-10 bg-white border-b-2">
                        <td class="pl-6 py-2">{{ $player->id }}</td>
                        <td class="pl-6 py-2">{{ $player->name }}</td>
                        <td class="pl-6 py-2 flex">
                            <img class="mr-3 w-8" src="/storage/images/{{$player->flag}}" alt="nationality flag">
                            {{ $player->nationality }}
                        </td>
                        <td class="pl-6 py-2">{{ $player->role }}</td>
                        @if ($player->team == '')
                            <td class="pl-6 py-2">none</td>
                        @else
                            <td class="pl-6 py-2">{{ $player->team }}</td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</x-app-layout>