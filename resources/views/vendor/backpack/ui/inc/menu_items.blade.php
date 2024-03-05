{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>


<x-backpack::menu-item title="Users" icon="la la-user" :link="backpack_url('user')" />
<x-backpack::menu-separator title="Tasks Manager" />

<x-backpack::menu-item title="Tasks" icon="la la-tasks" :link="backpack_url('task')" />
<x-backpack::menu-item title="Tags" icon="la la-tags" :link="backpack_url('tag')" />
<x-backpack::menu-item title="Task types" icon="la la-sticky-note" :link="backpack_url('task-type')" />
