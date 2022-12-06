<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl w-full flex mx-auto mb-12 sm:px-6 lg:px-8">
            <div class="w-8/12 flex flex-col">
                <p class="text-xl font-bold">Edit Player</p>
                <p class="text-md font-normal">Provide information about the player.</p>
            </div>

            <form class="w-full flex flex-col items-start bg-white px-8 py-6 rounded" method="post" action={{ route('updatePlayer', $player[0]->id) }}>
                @csrf
                <div class="mb-3 w-3/5 flex flex-col">
                    <label for="id" class="mb-1">Player ID</label>
                    <input type="text" value="{{$player[0]->id}}" class=" w-full rounded border-zinc-400" name="id">
                </div>
                <div class="mb-3 w-3/5 flex flex-col">
                    <label for="name" class="mb-1">Full Name</label>
                    <input type="text" value="{{$player[0]->name}}" class="w-full rounded border-zinc-400" name="name">
                </div>
                <div class="mb-3 w-3/5 flex flex-col">
                    <label for="nationality" class="mb-1">Nationality in 2 letter country code</label>
                    <input type="text" value="{{$player[0]->nationality}}" class="w-full rounded border-zinc-400" name="nationality">
                </div>
                <div class="mb-3 w-3/5 flex flex-col">
                    <label for="role" class="mb-1">Role</label>
                    <input type="text" value="{{$player[0]->role}}" class="w-full rounded border-zinc-400" name="role">
                </div>
                <div class="mb-6 w-3/5 flex flex-col">
                    <label for="team" class="mb-1">Team ID</label>
                    <input type="text" value="{{$player[0]->team}}" class="w-full rounded border-zinc-400" name="team">
                </div>
                <div class="text-center w-full flex justify-end ">
                    <input type="submit" class="py-2 px-4 rounded bg-zinc-900 text-white " value="Save" />
                </div>
            </form>
        </div> 
    </div>
</x-app-layout>
