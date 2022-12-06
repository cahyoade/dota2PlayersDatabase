<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl w-full flex mx-auto mb-12 sm:px-6 lg:px-8">
            <div class="max-w-7xl w-full flex mx-auto mb-12 sm:px-6 lg:px-8" id="country">
                <div class="w-8/12 flex flex-col">
                    <p class="text-xl font-bold">Edit Country</p>
                    <p class="text-md font-normal">Provide information about the Country.</p>
                </div>
                <form class="w-full flex flex-col items-start bg-white px-8 py-6 rounded" method="post" action="{{ route('updateCountry', $country[0]->id) }}">
                    @csrf
                    <div class="mb-3 w-3/5 flex flex-col">
                        <label for="id" class="mb-1">Country ID</label>
                        <input type="text" value="{{ $country[0]->id }}" class="w-full rounded border-zinc-400" name="id">
                    </div>
                    <div class="mb-3 w-3/5 flex flex-col">
                        <label for="name" class="mb-1">Country Name</label>
                        <input type="text" value="{{ $country[0]->name }}" class="w-full rounded border-zinc-400" name="name">
                    </div>
                    <div class="mb-3 w-3/5 flex flex-col">
                        <label for="flag" class="mb-1">Flag File Name</label>
                        <input type="text" value="{{ $country[0]->flag }}" class="w-full rounded border-zinc-400" name="flag">
                    </div>
                    <div class="text-center w-full flex justify-end ">
                        <input type="submit" class="py-2 px-4 rounded bg-zinc-900 text-white " value="Save" />
                    </div>
                </form>
            </div>  
        </div>
    </div>
</x-app-layout>
