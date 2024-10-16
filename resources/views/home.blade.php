<x-vinylshop-layout>
    {{--    <h1>The Vinyl Shop</h1>--}}
    <x-slot name="description">New Description</x-slot>
    <x-slot name="title">Welcome to the Vinyl Shop</x-slot>

    <p>
        Welcome to the website of the vinyl shop, a large online store with lots of (classic) vinyl records.
    </p>

    @push('script')
        <script>
            console.log('The Vinyl Shop JavaScript works! :)')
        </script>
    @endpush
</x-vinylshop-layout>
