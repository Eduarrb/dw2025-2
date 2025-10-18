<aside class="filtros">
    <div class="filtros__head">
        <h3 class="filtros__head--title title-n3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z" />
            </svg>
            Filtros
        </h3>
        <div class="filtros__head--canti">
            8 productos
        </div>
    </div>
    <form class="filtros__form mt-2">
        <div class="filtros__form__box">
            <label for="">
                <i class="fa-solid fa-magnifying-glass"></i>
            </label>
            <input type="text" placeholder="Buscar productos...">
        </div>
    </form>
    <h4 class="title-n4 mt-3">Categorias</h4>
    <div class="filtros__cat mt-2">
        <article class="filtros__cat--item active">
            <i class="fa-solid fa-bullseye"></i> Todos
        </article>
        <article class="filtros__cat--item">
            <i class="fa-solid fa-fire-flame-curved"></i> Procesadores
        </article>
        <article class="filtros__cat--item">
            <i class="fa-solid fa-fire-flame-curved"></i> Procesadores
        </article>
        <article class="filtros__cat--item">
            <i class="fa-solid fa-fire-flame-curved"></i> Procesadores
        </article>
    </div>
    <h4 class="title-n4 mt-3">Rango de precios</h4>
    <div class="filtros__prices mt-2">
        <article class="filtros__prices--item">
            Debajo de S/ 100.00
        </article>
        <article class="filtros__prices--item">
            S/ 100.00 - S/ 500.00
        </article>
        <article class="filtros__prices--item">
            S/ 500.00 - S/ 1000.00
        </article>
    </div>
</aside>
<section class="products d-flex gap-2">
    <?php get_productos(); ?>
</section>