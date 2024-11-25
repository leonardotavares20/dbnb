<nav class="p-10 gap-5 flex">
    <x-nav-link href="/"
                type="a"
                :active="request()->is('/')">Home</x-nav-link>
    <x-nav-link href="/about"
                type="a"
                :active="request()->is('about')">About</x-nav-link>
    <x-nav-link href="/contact"
                type="a"
                :active="request()->is('contact')">Contact</x-nav-link>
    <x-nav-link href="/jobs"
                type="a"
                :active="request()->is('jobs')">Jobs</x-nav-link>
</nav>
