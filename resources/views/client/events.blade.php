<x-layouts.app>

    <x-main.client-sidebar />

    <x-layouts.auth>

        <x-main.navbar :breadcrumbs="['Client Dashboard', 'Events']" title="Events" />

        <div class="container-fluid py-2">

            <x-client.event-table title="Upcoming Events" :events=$events />

            <x-client.event-table title="Past Events" :events=$events :createEvents=false :editEvents=false />

        </div>
    </x-layouts.auth>
</x-layouts.app>
