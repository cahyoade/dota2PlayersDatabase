<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl w-full flex mx-auto mb-12 sm:px-6 lg:px-8">
  
            <div class="max-w-7xl w-full flex mx-auto mb-12 sm:px-6 lg:px-8" id="team">
                <div class="w-8/12 flex flex-col">
                    <p class="text-xl font-bold">Edit Team</p>
                    <p class="text-md font-normal">Provide information about the Team.</p>
                </div>
                <form class="w-full flex flex-col items-start bg-white px-8 py-6 rounded" method="post" action="{{ route('updateTeam', $team[0] ->id) }}">
                    @csrf
                    <div class="mb-3 w-3/5 flex flex-col">
                        <label for="id" class="mb-1">Team ID</label>
                        <input type="text" value="{{$team[0]->id}}" class="w-full rounded border-zinc-400" name="id">
                    </div>
                    <div class="mb-3 w-3/5 flex flex-col">
                        <label for="name" class="mb-1">Team Name</label>
                        <input type="text" value="{{$team[0]->name}}" class="w-full rounded border-zinc-400" name="name">
                    </div>
                    <div class="mb-3 w-3/5 flex flex-col">
                        <label for="location" class="mb-1">location in 2 letter country code</label>
                        <input type="text" value="{{$team[0]->location}}" class="w-full rounded border-zinc-400" name="location">
                    </div>
                    <div class="mb-3 w-3/5 flex flex-col">
                        <label for="earnings" class="mb-1">Earnings</label>
                        <input type="text" value="{{$team[0]->earnings}}" class="w-full rounded border-zinc-400" name="earnings">
                    </div>
                    <div class="text-center w-full flex justify-end ">
                        <input type="submit" class="py-2 px-4 rounded bg-zinc-900 text-white " value="Save" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
