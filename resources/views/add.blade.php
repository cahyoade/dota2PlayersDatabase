<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl w-full flex mx-auto mb-12 sm:px-6 lg:px-8">
            <div class="w-8/12 flex flex-col">
                <p class="text-xl font-bold">Add Player</p>
                <p class="text-md font-normal">Provide information about the player.</p>
            </div>
            <form class="w-full flex flex-col items-start bg-white px-8 py-6 rounded" method="post" action="{{ route('storePlayer') }}">
                @csrf
                <div class="mb-3 w-3/5 flex flex-col">
                    <label for="id" class="mb-1">Player ID</label>
                    <input type="text" class="w-full rounded border-zinc-400" name="id">
                </div>
                <div class="mb-3 w-3/5 flex flex-col">
                    <label for="name" class="mb-1">Full Name</label>
                    <input type="text" class="w-full rounded border-zinc-400" name="name">
                </div>
                <div class="mb-3 w-3/5 flex flex-col">
                    <label for="nationality" class="mb-1">Nationality in 2 letter country code</label>
                    <input type="text" class="w-full rounded border-zinc-400" name="nationality">
                </div>
                <div class="mb-3 w-3/5 flex flex-col">
                    <label for="role" class="mb-1">Role</label>
                    <input type="text" class="w-full rounded border-zinc-400" name="role">
                </div>
                <div class="mb-6 w-3/5 flex flex-col">
                    <label for="team" class="mb-1">Team ID</label>
                    <input type="text" class="w-full rounded border-zinc-400" name="team">
                </div>
                <div class="text-center w-full flex justify-end ">
                    <input type="submit" class="py-2 px-4 rounded bg-zinc-900 text-white " value="Add Player" />
                </div>
            </form>
        </div>

        <div class="max-w-7xl w-full flex mx-auto mb-12 sm:px-6 lg:px-8" id="team">
            <div class="w-8/12 flex flex-col">
                <p class="text-xl font-bold">Add Team</p>
                <p class="text-md font-normal">Provide information about the Team.</p>
            </div>
            <form class="w-full flex flex-col items-start bg-white px-8 py-6 rounded" method="post" action="{{ route('storeTeam') }}">
                @csrf
                <div class="mb-3 w-3/5 flex flex-col">
                    <label for="id" class="mb-1">Team ID</label>
                    <input type="text" class="w-full rounded border-zinc-400" name="id">
                </div>
                <div class="mb-3 w-3/5 flex flex-col">
                    <label for="name" class="mb-1">Team Name</label>
                    <input type="text" class="w-full rounded border-zinc-400" name="name">
                </div>
                <div class="mb-3 w-3/5 flex flex-col">
                    <label for="location" class="mb-1">location in 2 letter country code</label>
                    <input type="text" class="w-full rounded border-zinc-400" name="location">
                </div>
                <div class="mb-3 w-3/5 flex flex-col">
                    <label for="earnings" class="mb-1">Earnings</label>
                    <input type="text" class="w-full rounded border-zinc-400" name="earnings">
                </div>
                <div class="text-center w-full flex justify-end ">
                    <input type="submit" class="py-2 px-4 rounded bg-zinc-900 text-white " value="Add Team" />
                </div>
            </form>
        </div>
          
        <div class="max-w-7xl w-full flex mx-auto mb-12 sm:px-6 lg:px-8" id="country">
            <div class="w-8/12 flex flex-col">
                <p class="text-xl font-bold">Add Country</p>
                <p class="text-md font-normal">Provide information about the Country.</p>
            </div>
            <form class="w-full flex flex-col items-start bg-white px-8 py-6 rounded" method="post" action="{{ route('storeCountry') }}">
                @csrf
                <div class="mb-3 w-3/5 flex flex-col">
                    <label for="id" class="mb-1">Country ID</label>
                    <input type="text" class="w-full rounded border-zinc-400" name="id">
                </div>
                <div class="mb-3 w-3/5 flex flex-col">
                    <label for="name" class="mb-1">Country Name</label>
                    <input type="text" class="w-full rounded border-zinc-400" name="name">
                </div>
                <div class="mb-3 w-3/5 flex flex-col">
                    <label for="flag" class="mb-1">Flag File Name</label>
                    <input type="text" class="w-full rounded border-zinc-400" name="flag">
                </div>
                <div class="text-center w-full flex justify-end ">
                    <input type="submit" class="py-2 px-4 rounded bg-zinc-900 text-white " value="Add Country" />
                </div>
            </form>
        </div>  
    </div>
</x-app-layout>
