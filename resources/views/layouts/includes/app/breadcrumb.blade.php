{{--verificar si hay un elemneto de breadcrumb-- DIRECTIVA IF--}}
@if(count($breadcrumbs))
{{--Margin botton--}}
<nav class= "mb-2 block">
<ol class="flex flex-wrap text-slate-700 text-sm">
    {{--Mrecorrer elementos de breadcrumb--}}
@foreach ($breadcrumbs as $item)
    <li class="flex items-center">

        @unless($loop->first)
        <span class="px-2 test-gray-400">/</span>
        @unduless
        
        <a href="{{@isset ($item['name'])}}""

    </li>
</ol>
{{--Validar el ultimo elemeneto negritas--}}
@if (count($breadcrumbs) > 1)
<h6 class="font-bold mt-2)">
{{ end($breadcrumbs['name'])}}
</nav>

@endinf