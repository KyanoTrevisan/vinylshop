<footer class="container flex items-center justify-between p-4 mx-auto text-sm border-t">
    <div>The Vinyl Shop - © {{ date('Y') }}</div>
    @env('local')
    <div class="p-2 bg-gray-200 rounded-md" x-data="{ showIcons: false }" @click="showIcons = true">
        <div class="text-xs text-center text-gray-400 cursor-pointer ">
            <span class="sm:hidden">&lt; 640</span>
            <span class="hidden sm:block md:hidden">SM | 640 - 768</span>
            <span class="hidden md:block lg:hidden">MD | 768 - 1024</span>
            <span class="hidden lg:block xl:hidden">LG | 1024 - 1280</span>
            <span class="hidden xl:block 2xl:hidden">XL | 1280 - 1536</span>
            <span class="hidden 2xl:block">2XL | &gt; 1536</span>
        </div>
        <div class="fixed left-0 right-0 flex justify-center p-2 mx-2 space-x-4 border rounded-md shadow-lg bottom-16 sm:mx-8 bg-amber-200/25 backdrop-blur-sm"
            x-show="showIcons" x-cloak x-transition.duration.300ms @click.outside="showIcons = false">
            ...
        </div>
    </div>
    @endenv
    <div>Build with Laravel {{ app()->version() }}</div>
</footer>
