<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-16">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items center">
                    <h2 class="text-3xl font-bold mr-6">Players</h2>
                    <button class="bg-green-300 px-3 rounded ">
                        <a class="flex items-center" href={{ route('add')}}>
                            <span class="text-3xl font-bold mr-2">+</span>Add Player
                        </a>
                    </button>
                    </div>
                    <div>
                        <label for="Search">Search</label>
                        <input class="rounded ml-2 h-8 tableSearch" name="search" type="text">
                    </div>
                </div>
                <div class="w-full rounded-lg overflow-x-hidden overflow-y-scroll max-h-96 no-scrollbar">
                    <table class="w-full text-left h-12">
                        <thead class="bg-zinc-900 text-white sticky top-0">
                            <tr>
                                <th class="pl-6 py-2">Player ID</th>
                                <th class="pl-6 py-2">Name</th>
                                <th class="pl-6 py-2">Nationality</th>
                                <th class="pl-6 py-2">Role</th>
                                <th class="pl-6 py-2">Team</th>
                                <th class="pl-6 py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($playersData as $player)
                            <tr class="h-10 bg-white border-b-2">
                                <td class="pl-6 py-2">{{ $player->id }}</td>
                                <td class="pl-6 py-2">{{ $player->name }}</td>
                                <td class="pl-6 py-2">{{ $player->nationality }}</td>
                                <td class="pl-6 py-2">{{ $player->role }}</td>
                                @if ($player->team == '')
                                    <td class="pl-6 py-2">none</td>
                                @else
                                    <td class="pl-6 py-2">{{ $player->team }}</td>
                                @endif
                                <td class="pl-6 py-2">
                                    <a class="text-amber-400 mr-3" href={{route('editPlayer', $player->id)}}>edit</a>
                                    <a class="text-red-400" href={{ route('deletePlayer', $player->id) }}>delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mb-16">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items center">
                    <h2 class="text-3xl font-bold mr-6">Teams</h2>
                    <button class="bg-green-300 px-3 rounded">
                        <a class="flex items-center" href={{ route('add').'/#team'}}>
                            <span class="text-3xl font-bold mr-2">+</span>Add Team
                        </a>
                    </button>
                    </div>
                    <div>
                        <label for="Search">Search</label>
                        <input class="rounded ml-2 h-8 tableSearch" name="search" type="text">
                    </div>
                </div>
                <div class="w-full rounded-lg overflow-x-hidden overflow-y-scroll max-h-96 no-scrollbar">
                    <table class="w-full text-left h-12">
                        <thead class="bg-zinc-900 text-white sticky top-0">
                            <tr>
                                <th class="pl-6 py-2">Team ID</th>
                                <th class="pl-6 py-2">Team Name</th>
                                <th class="pl-6 py-2">Location</th>
                                <th class="pl-6 py-2">Earnings</th>
                                <th class="pl-6 py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($teamsData as $team)
                            <tr class="h-10 bg-white border-b-2">
                                <td class="pl-6 py-2">{{ $team->id }}</td>
                                <td class="pl-6 py-2">{{ $team->name }}</td>
                                <td class="pl-6 py-2">{{ $team->location }}</td>
                                <td class="pl-6 py-2">${{ $team->earnings }}</td>
                                <td class="pl-6 py-2">
                                    <a class="text-amber-400 mr-3" href={{ route('editTeam', $team->id) }}>edit</a>
                                    <a class="text-red-400" href={{ route('deleteTeam', $team->id) }}>delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mb-16">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items center">
                    <h2 class="text-3xl font-bold mr-6">Countries</h2>
                    <button class="bg-green-300 px-3 rounded">
                        <a class="flex items-center" href={{ route('add').'#country'}}>
                            <span class="text-3xl font-bold mr-2">+</span>Add Country
                        </a>
                    </button>
                    </div>
                    <div>
                        <label for="Search">Search</label>
                        <input class="rounded ml-2 h-8 tableSearch" name="search" type="text">
                    </div>
                </div>
                <div class="w-full rounded-lg overflow-x-hidden overflow-y-scroll max-h-96 no-scrollbar">
                    <table class="w-full text-left h-12">
                        <thead class="bg-zinc-900 text-white sticky top-0">
                            <tr>
                                <th class="pl-6 py-2">Country ID</th>
                                <th class="pl-6 py-2">Name</th>
                                <th class="pl-6 py-2">Flag</th>
                                <th class="pl-6 py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($countriesData as $country)
                            <tr class="h-10 bg-white border-b-2">
                                <td class="pl-6 py-2">{{ $country->id }}</td>
                                <td class="pl-6 py-2">{{ $country->name }}</td>
                                <td class="pl-6 py-2">{{ $country->flag }}</td>
                                <td class="pl-6 py-2">
                                    <a class="text-amber-400 mr-3" href={{ route('editCountry', $country->id) }}>edit</a>
                                    <a class="text-red-400" href={{ route('deleteCountry', $country->id) }}>delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
