<x-layouts.app>

    <x-main.client-sidebar />

    <x-layouts.auth>

        <x-main.navbar :breadcrumbs="['Client Dashboard', 'Events']" title="Events" />

        <div class="container-fluid py-2">

            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <div class="row">
                                    <div class="col-6 text-start">
                                        <h6 class="text-white text-capitalize ps-3">Events table</h6>
                                    </div>
                                    <div class="col-6 text-end pe-4">
                                        <a class="btn bg-gradient-dark mb-0 " href="/client/event/create">
                                            <i class="material-icons text-sm">add</i>&nbsp;&nbsp;Create new Event
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">

                            @if (Session::has('success'))
                                <div class="alert alert-success mx-10 text-white text-sm">
                                    {{ Session::get('success') }}
                                </div>
                            @endif

                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Name</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Type</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Start Date</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                End Date</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Guests Invited</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Guests Accepted</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($events as $event)
                                            <tr>
                                                <td class="align-middle">
                                                    {{ $event->name }}
                                                </td>
                                                <td class="align-middle">
                                                    {{ $event->event_type }}
                                                </td>
                                                <td class="align-middle text-center">
                                                    {{ $event->start_date_time }}
                                                </td>
                                                <td class="align-middle text-center">
                                                    {{ $event->end_date_time }}
                                                </td>
                                                <td class="align-middle text-center">
                                                    {{ count($event->guests) }}
                                                </td>
                                                <td class="align-middle text-center">
                                                    0
                                                </td>
                                                <td class="align-middle text-center">
                                                    <button class="btn btn-sm btn-secondary">
                                                        <i class="material-icons text-sm">group_add</i>
                                                        &nbsp;&nbsp;invite</button>
                                                    <button class="btn btn-sm btn-primary">
                                                        <i class="material-icons text-sm">edit</i>
                                                        &nbsp;&nbsp;edit</button>
                                                </td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </x-layouts.auth>
</x-layouts.app>
