<div class="container">
    <div class="content p-0 m-0">
        @include('nav_bar')

        {{-- Content --}}
        <div class="flex-auto py-4 h-screen">
            <div class="flex justify-between items-center">
                <h3 class="text-3xl font-extrabold dark:text-white/75 uppercase">Datatable Template</h3>
            </div>

            <div class="datatable-menu">
                <livewire:template-table/>
            </div>
        </div>
    </div>
</div>
