@props([
    'title' => '',
    'events' => [],
    'createEvents' => true,
    'editEvents' => true,
])

<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <div class="row">
                        <div class="col-6 text-start">
                            <h6 class="text-white text-capitalize ps-3">{{ $title }}</h6>
                        </div>
                        @if ($createEvents)
                            <div class="col-6 text-end pe-4">
                                <a class="btn bg-gradient-dark mb-0 " href="/client/event/create">
                                    <i class="material-icons text-sm">add</i>&nbsp;&nbsp;Create new Event
                                </a>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
            <div class="card-body px-0 pb-2">

                @if ($createEvents && Session::has('success'))
                    <div class="alert alert-success mx-10 text-white text-sm">
                        {{ Session::get('success') }}
                    </div>
                @endif

                <div class="table-responsive p-2">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Name</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
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
                                @if ($editEvents)
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Options</th>
                                @endif
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
                                        <a class="btn btn-sm btn-secondary"
                                            href="/client/events/{{ $event->id }}/invites">
                                            {{ count($event->guests) }}
                                        </a>
                                    </td>
                                    <td class="align-middle text-center">
                                        0
                                    </td>
                                    @if ($editEvents)
                                        <td class="align-middle text-center">
                                            {{-- <a class="btn btn-sm btn-secondary"
                                                href="/client/events/{{ $event->id }}/invites">
                                                <i class="material-icons text-sm">group_add</i>
                                                &nbsp;&nbsp;invite
                                            </a> --}}
                                            <a class="btn btn-sm btn-primary"
                                                href="/client/events/{{ $event->id }}/edit">
                                                <i class="material-icons text-sm">edit</i>&nbsp;&nbsp;edit
                                            </a>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
