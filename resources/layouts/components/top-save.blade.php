<div class="row gx-0 kanban-header rounded-2 px-card py-2 mt-2 mb-3">
    <div class="col d-flex align-items-center">
        <h5 class="mb-0">{{@$title}}</h5>
    </div>
    <div class="col-auto d-flex align-items-center">
        {{ $slot }}
    </div>
</div>
{{-- @component('enableError',true) --}}
{{-- @includeIf('admin.layouts.components.errors') --}}