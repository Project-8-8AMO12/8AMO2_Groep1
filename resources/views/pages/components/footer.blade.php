@section("footer")
<nav class="container mb-3">
    <div>
        <h1 class="text-center mb-5">ImkersLeiden</h1>
    </div>
    <div class="d-md-flex" id="footer_id">
        <ul class="col-12 col-md text-center">
            <li class="mb-3"><a href="/activiteiten">Activiteiten</a></li>
            <li><a href="/cursussen">Cursussen</a></li>
        </ul>
        <ul class="col-12 col-md text-center">
            <li class="mb-3"><a href="/vereniging">De vereniging</a></li>
            <li><a href="/nieuws">Het blad</a></li>
        </ul>
        <ul class="col-12 col-md text-center">
            <li class="mb-3"><a href="/agenda">Agenda</a></li>
            <li><a href="/nieuws">Nieuws</a></li>
        </ul>
        <ul class="col-12 col-md text-center">
            <li class="mb-3"><a href="/contact">Contact</a></li>
            <li><a href="/bijengezondheid">Bijengezondheid</a></li>
        </ul>
    </div>
</nav>
<div class="border-top">
    <p class="text-center mt-3">
        ©
        <script>
            var currentTime = new Date()
            var year = currentTime.getFullYear()
            document.write(year)
        </script>
        8AMO2 - JASPER MAURICE GIJS - All Rights Reserved
    </p>
</div>
@show