<x-layouts.app>
    <x-main.client-sidebar />
    <x-layouts.auth>

        <x-main.navbar :breadcrumbs="['Client Dashboard', 'Events', 'Create Event']" title="Create New Event" />

        <div class="container-fluid py-2">

            <div class="row mb-4">
                <div class="col-md-12 mb-lg-0 mb-4">
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
                                    <x-inputs.text label="Event Name" id="event_name" />
                                </div>
                                <div class="col-md-6 mb-md-0 mb-2">
                                    <x-inputs.select initial="Event Type" id="event_type" :options="$eventTypes" key="id"
                                        value="name" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </x-layouts.auth>
</x-layouts.app>
