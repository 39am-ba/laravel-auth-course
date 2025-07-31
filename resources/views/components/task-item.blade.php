<div>
    <div class="flex justify-between items-center pr-6 my-3">
        <div class="flex items-center">
            <input type="checkbox" class="hover:cursor-pointer accent-orange-600 size-8 appearance-none bg-white border-3 border-gray-300 rounded-4xl checked:bg-orange-500 checked:border-orange-500">
            <span class="ml-4">{{  $contents  }}</span>
        </div>
        <div>
            <form action="/deleteTask" method="post">
                @csrf
                <input name="id" type="hidden" value="{{  $id  }}">
                <button type="submit" class="hover:cursor-pointer hover:bg-red-500 hover:text-white transition p-1 px-3 rounded-3xl text-2xl">X</button>
            </form>
        </div>
    </div>
</div>