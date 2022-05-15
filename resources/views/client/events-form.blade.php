<x-layouts.app>
    <x-main.client-sidebar />
    <x-layouts.auth>

        <x-main.navbar :breadcrumbs="['Client Dashboard', 'Events', isset($edit) && $edit ? 'Edit Event' : 'Create Event']" :title="isset($edit) && $edit ? 'Edit Event' : 'Create New Event'" />

        <div class="container-fluid py-2">

            <div class="row mb-4">
                <div class="col-md-12 mb-lg-0 mb-4">
                    <form method="post"
                        action="{{ isset($edit) && $edit ? '/client/events/' . $event->id . '/update' : '/client/event/store' }}">
                        @csrf
                        @if ($edit ?? false)
                            @method('PUT')
                        @endif
                        <div class="card mt-4">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                    <div class="row">
                                        <div class="col-6 text-start">
                                            <h6 class="text-white text-capitalize ps-3">Event Information</h6>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-md-6 mb-md-0 mb-2">
                                        <x-inputs.text label="Event Name *" id="name" :value="$event->name ?? ''"
                                            :required=true />
                                    </div>
                                    <div class="col-md-6 mb-md-0 mb-2">
                                        <x-inputs.select label="Event Type *" id="event_type" :selected="$event->getRawOriginal('event_type') ?? ''"
                                            :options="$eventTypes" key="id" value="name" :required=true />
                                    </div>
                                    <div class="col-md-6 mb-md-0 mb-2">
                                        @php
                                            $start_date_time = '';
                                            $end_date_time = '';
                                            if ($edit) {
                                                $start_date_time = Carbon\Carbon::parse($event->start_date_time)->format('Y-m-d\TH:i:s');
                                                $end_date_time = Carbon\Carbon::parse($event->end_date_time)->format('Y-m-d\TH:i:s');
                                            }
                                        @endphp
                                        <x-inputs.datetime label="Event Start *" id="start_date_time" :value="$start_date_time"
                                            :required=true />
                                    </div>
                                    <div class="col-md-6 mb-md-0 mb-2">
                                        <x-inputs.datetime label="Event End *" id="end_date_time" :value="$end_date_time"
                                            :required=true />
                                    </div>
                                    <div class="col-md-12 mb-md-0 mb-2">
                                        <x-inputs.text label="Event Host Name *" id="host" :value="$event->host ?? ''"
                                            :required=true />
                                    </div>
                                    <div class="col-md-12 mb-md-0 mb-2">
                                        <x-inputs.textarea label="Event Message from Host *" id="message"
                                            :value="$event->message ?? ''" :required=true />
                                    </div>
                                    <div class="col-md-12 mb-md-0 mb-3">
                                        <h4>Event Location</h4>
                                    </div>
                                    <div class="col-md-12 mb-md-0 mb-2">
                                        <x-inputs.text label="Location Name *" id="location_name" :value="$event->location_name ?? ''"
                                            :required=true />
                                    </div>
                                    <div class="col-md-6 mb-md-0 mb-2">
                                        <x-inputs.text label="Address *" id="location_address" :value="$event->location_address ?? ''"
                                            :required=true />
                                    </div>
                                    <div class="col-md-6 mb-md-0 mb-2">
                                        <x-inputs.text label="Address2" id="location_address2" :value="$event->location_address2 ?? ''" />
                                    </div>
                                    <div class="col-md-6 mb-md-0 mb-2">
                                        <x-inputs.text label="City *" id="location_city" :value="$event->location_city ?? ''"
                                            :required=true />
                                    </div>
                                    <div class="col-md-6 mb-md-0 mb-2">
                                        <x-inputs.text label="State *" id="location_state" :value="$event->location_state ?? ''"
                                            :required=true />
                                    </div>
                                    <div class="col-md-6 mb-md-0 mb-2">
                                        <x-inputs.text label="Zip *" id="location_zip" :value="$event->location_zip ?? ''"
                                            :required=true />
                                    </div>
                                    <div class="col-md-6 mb-md-0 mb-2">
                                        <x-inputs.text label="Phone" id="location_phone" :value="$event->location_phone ?? ''" />
                                    </div>
                                    <div class="col-md-6 mb-md-0 mb-2">
                                        <x-inputs.text label="Email" id="location_email" :value="$event->location_email ?? ''" />
                                    </div>
                                    <div class="col-md-6 mb-md-0 mb-2">
                                        <x-inputs.text label="Website URL" id="location_url" :value="$event->location_url ?? ''" />
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer p-0 ">
                                <div class="row py-4">
                                    <div class="col-12 text-end pe-4">
                                        <button type="submit" class="btn bg-gradient-dark mb-0 ">
                                            @if ($edit)
                                                <i class="material-icons text-sm">edit</i>&nbsp;&nbsp;Update this Event
                                            @else
                                                <i class="material-icons text-sm">add</i>&nbsp;&nbsp;Create this Event
                                            @endif
                                        </button>
                                    </div>
                                </div>

                            </div>
                    </form>
                </div>
            </div>
        </div>


        </div>
    </x-layouts.auth>
</x-layouts.app>
