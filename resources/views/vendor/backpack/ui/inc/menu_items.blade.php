{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Users" icon="la la-question" :link="backpack_url('user')" />
<x-backpack::menu-item title="Default images" icon="la la-question" :link="backpack_url('default-image')" />
<x-backpack::menu-item title="Prices" icon="la la-question" :link="backpack_url('price')" />
<x-backpack::menu-item title="Tour availabilities" icon="la la-question" :link="backpack_url('tour-availability')" />
<x-backpack::menu-item title="Tour bookings" icon="la la-question" :link="backpack_url('tour-booking')" />
<x-backpack::menu-item title="Time slots" icon="la la-question" :link="backpack_url('time-slot')" />
<x-backpack::menu-item title="Price images" icon="la la-question" :link="backpack_url('price-image')" />