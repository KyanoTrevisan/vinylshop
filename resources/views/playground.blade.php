<x-vinylshop-layout>
    <x-slot name="title">Playground</x-slot>

    <h2>Sections</h2>
    <div class="grid grid-cols-3 gap-4">
        <x-tmk.section class="col-span-3 md:col-span-1">
            <h3>Section 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi ducimus fuga nesciunt nisi quo sequi
                voluptas. Accusantium consequuntur officiis veritatis.</p>
        </x-tmk.section>
        <x-tmk.section class="col-span-3 md:col-span-1">
            <h3>Section 2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab distinctio eos ex excepturi possimus,
                reprehenderit vitae voluptatum. Accusamus eius eum ex, explicabo illo iste maxime odio soluta, vero
                voluptas, voluptate!</p>
        </x-tmk.section>
        <x-tmk.section class="col-span-3 md:col-span-1">
            <h3>Section 3</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, quasi?</p>
        </x-tmk.section>
    </div>

    <section class="my-4">
        <h2>Blade UI kit Icons</h2>
        <div class="flex gap-4 p-4 my-4 bg-white rounded border shadow">
            <div class="w-6">
                <x-fas-home/>
            </div>
            <div class="w-6 text-orange-600">
                <x-icon name="fas-home"/>
            </div>
            <div class="w-6 text-green-600">
                @svg('fas-home')
            </div>
            <div class="w-6 text-sky-600">
                {{ svg('fas-home') }}
            </div>
        </div>
    </section>

    <section class="my-4">
        <h2>Preloader</h2>
        <x-tmk.preloader class="px-0"/>
        <x-tmk.preloader class="bg-green-100 text-green-700 border border-green-700"/>
        <x-tmk.preloader class="bg-slate-600 text-white italic w-1/2">Loading records...</x-tmk.preloader>
    </section>

    <section class="my-4">
        <h2>Alerts</h2>
        <x-tmk.alert>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis corporis cum eum molestias officiis
            saepe suscipit? Aliquid, aspernatur consequatur, doloremque ex expedita inventore iste magnam minima
            nesciunt optio unde vel?
        </x-tmk.alert>
        <x-tmk.alert type="danger" class="mt-8 shadow-xl">
            lorem ipsum
        </x-tmk.alert>
        <x-tmk.alert type="info" class="mt-8">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex fuga in saepe. Assumenda, commodi consequuntur
            cupiditate delectus doloremque ducimus est eum magni minima officia quasi quisquam rem totam ullam vel.
        </x-tmk.alert>
        <x-tmk.alert type="warning" dismissible="false" close-self="5000">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, aliquam deleniti dolor dolore excepturi
            fugit laborum magni maxime nobis numquam officia possimus quas quo quos, recusandae, reprehenderit rerum
            saepe voluptatum.
        </x-tmk.alert>
    </section>

    <h2>Vinyl Shop logo</h2>
    <section class="flex items-start space-x-4">
        <x-tmk.logo class="w-12"/>
        <x-tmk.logo class="w-24 fill-cyan-700"/>
        <x-tmk.logo class="w-40 fill-neutral-600 hover:w-48 hover:fill-orange-700 hover:drop-shadow-lg transition"/>
    </section>

    <h2>Form</h2>
    <form class="grid grid-cols-10 gap-4">
        {{-- text input --}}
        <div class="col-span-10 sm:col-span-5">
            <x-label for="name" value="Name"/>
            <x-input id="name" type="text" class="block mt-1 w-full" placeholder="Your Name"/>
        </div>
        {{-- select --}}
        <div class="col-span-10 sm:col-span-5">
            <x-label for="country" value="Select a Country"/>
            <x-tmk.form.select id="country" type="text" class="block mt-1 w-full">
                <option value="Belgium">Belgium</option>
                <option value="France">France</option>
                <option value="Germany">Germany</option>
            </x-tmk.form.select>
        </div>
        {{-- textarea --}}
        <div class="col-span-10">
            <x-label for="message" value="Message"/>
            <x-tmk.form.textarea id="message" class="block mt-1 w-full" rows="6" placeholder="Your Message">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, sint!
            </x-tmk.form.textarea>
        </div>
    </form>

    <h2>Buttons</h2>
    <section class="flex space-x-4">
        <x-tmk.form.button type="button">default button</x-tmk.form.button>
        <x-tmk.form.button type="button" color="success">success button</x-tmk.form.button>
        <x-tmk.form.button type="button" color="danger">danger button</x-tmk.form.button>
        <x-tmk.form.button type="button" color="info">info button</x-tmk.form.button>
    </section>

    <h2>Disabled Buttons</h2>
    <section class="flex space-x-4">
        <x-tmk.form.button type="button" disabled>default button</x-tmk.form.button>
        <x-tmk.form.button type="button" color="success" disabled>success button</x-tmk.form.button>
        <x-tmk.form.button type="button" color="danger" disabled>danger button</x-tmk.form.button>
        <x-tmk.form.button type="button" color="info" disabled>info button</x-tmk.form.button>
    </section>

    <h2>Search</h2>
    <x-tmk.form.search placeholder="Search..."/>

    <section>
        <h2>Toggle switch</h2>
        <div class="flex items-center gap-4">
            <x-tmk.form.toggle-switch/>
            <x-tmk.form.toggle-switch color="success" checked/>
            <x-tmk.form.toggle-switch color="danger" class="rotate-90"/>
            <x-tmk.form.toggle-switch color="info"/>
            <x-tmk.form.toggle-switch color="danger" checked disabled/>
        </div>
    </section>

    <section class="my-4">
        <h2>Switch</h2>
        <div class="flex items-center gap-4">
            <x-tmk.form.switch/>
            <x-tmk.form.switch checked color-off="bg-red-200"/>
            <x-tmk.form.switch disabled/>
            <x-tmk.form.switch checked name="save" value="Save me"
                               class="text-white shadow-lg !rounded-full w-28"
                               color-off="bg-orange-800" color-on="bg-sky-800"
                               text-off="switch off" text-on="switch on"/>
            <x-tmk.form.switch name="user" value="on"
                               class="!h-20 !text-5xl"
                               color-off="bg-red-200" color-on="bg-green-500"
                               text-on="😊" text-off="😩"/>
        </div>
    </section>

    <h2>Dynamic data</h2>
    <section class="flex flex-col">
        @php
            $color = 'danger';      // $color is a dynamic value !!!
        @endphp

        <x-tmk.alert type="$color">
            Is this a red, danger alert?<br>
            No, <code class="px-2 text-blue-600 font-black">type="$color"</code> don't work with dynamic values.
        </x-tmk.alert>

        <x-tmk.alert :type="$color">
            Is this a red, danger alert?<br>
            Yes, use <code class="px-2 text-blue-600 font-black">:type="$color"</code> for dynamic values.
        </x-tmk.alert>
    </section>
</x-vinylshop-layout>
