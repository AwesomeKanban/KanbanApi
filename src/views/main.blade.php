@include('header')

{{--<div class="container mt-5">--}}
{{--    <h1>Материалы для изучения</h1>--}}
{{--    <ul class="list-group">--}}
{{--        <li class="list-group-item">Учебник по HTML и CSS</li>--}}
{{--        <li class="list-group-item">Видеокурс по JavaScript</li>--}}
{{--        <li class="list-group-item">Статья о принципах адаптивного дизайна</li>--}}
{{--        <li class="list-group-item">Книга по алгоритмам и структурам данных</li>--}}
{{--    </ul>--}}
{{--</div>--}}


<div class="container">
    <h1 id="helloH"></h1>
    <h5>Доступные курсы</h5>

    <div class="card">
        <h5 class="card-header">Featured</h5>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <br>
    <div class="card">
        <h5 class="card-header">Featured</h5>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <br>
    <div class="card">
        <h5 class="card-header">Featured</h5>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <br>
</div>

@include('footer')