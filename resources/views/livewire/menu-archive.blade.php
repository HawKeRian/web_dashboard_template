<div class="container">
    <div class="content p-0 m-0">
        @include('nav_bar')

        {{-- Content --}}
        <div class="flex-auto py-4">
            <div class="flex justify-between items-center">
                <h3 class="text-3xl font-extrabold dark:text-white/75 uppercase">Archive/Logging Template</h3>

                @include('theme_menu')
            </div>

            <div class="archive-content">
                {{-- Archive Table Content --}}
                <livewire:archive-table/>
            </div>

        </div>
    </div>
</div>