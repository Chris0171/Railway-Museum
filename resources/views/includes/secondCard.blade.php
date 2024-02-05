<!-- Segunda tarjeta de información -->
<x-wrapper>
    <x-slot name="wTitle">Seleccione entradas que desea comprar.</x-slot>
    <!-- Campo 1 -->
    <x-buyField>
        <x-slot name="fieldName">Personas con discapacidad (Gratis):</x-slot>
    </x-buyField>
    <!-- Campo 2 -->
    <x-buyField>
        <x-slot name="fieldName">Menores de cuatro años (Gratis):</x-slot>
    </x-buyField>
    <!-- Campo 3 -->
    <x-buyField>
        <x-slot name="fieldName">Personas sin empleo (Gratis):</x-slot>
    </x-buyField>
    <!-- Campo 4 -->
    <x-buyField>
        <x-slot name="fieldName">Menores entre 4 y 12 años (3€):</x-slot>
    </x-buyField>
    <!-- Campo 5 -->
    <x-buyField>
        <x-slot name="fieldName">Mayores de 65 años (3$):</x-slot>
    </x-buyField>
    <!-- Campo 6 -->
    <x-buyField>
        <x-slot name="fieldName">Estudieantes (3$):</x-slot>
    </x-buyField>
    <!-- Campo 7 -->
    <x-buyField>
        <x-slot name="fieldName">Profesores (3$):</x-slot>
    </x-buyField>
    <!-- Campo 8 -->
    <x-buyField>
        <x-slot name="fieldName">Adultos (7$):</x-slot>
    </x-buyField>
    <x-slot name="errorText">Debe comprar al menos una entrada para continuar.</x-slot>

    <x-slot name="btnPrev">
        <div class="col-auto me-auto">
            <button type="button" class="btn btn-danger fw-bold btnPrev">Anterior</button>
        </div>
    </x-slot>
</x-wrapper>
