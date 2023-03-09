<x-backend.layouts.master>
    <x-slot:title>
Admin
</x-slot>
<x-slot:subtitle>
    Dashboard
                </x-slot>
    <div class="row">
        <x-backend.layouts.partials.contents.primary/>
        <x-backend.layouts.partials.contents.warning/>
        <x-backend.layouts.partials.contents.success/>
        <x-backend.layouts.partials.contents.danger/>
    </div>
    <div class="row">
        <x-backend.layouts.partials.graph.area/>
        <x-backend.layouts.partials.graph.bar/>
     </div>



</x-backend.layouts.master>
