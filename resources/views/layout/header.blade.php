<div class="w-full bg-emerald-500 py-5">
    <h1 class="text-3xl text-center">
        Algoritma Book Store
    </h1>
</div>
<ul class="flex justify-center my-5 gap-5">
    <li>
        <a href="/" class="hover:text-red-600">
            Home
        </a>
    </li>
    <li data-dropdown-toggle="dropdown">
        <a class="hover:text-red-600">
            Category
        </a>
    </li>
    <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
            @php
                // jd kek g perlu lagi ngirim2 categories
                $categories = App\Models\Category::all();
            @endphp
            @foreach ($categories as $cat)
                <li class="px-3 py-5 flex justify-center">
                    <a href="/category/{{ $cat->id }}">
                        {{ $cat->category }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    <li>
        <a href="/contact" class="hover:text-red-600">
            Contact
        </a>
    </li>
</ul>
