@extends('pages.components.main')

@section("body")
    <div class="container">
    <div class="mt-3">
        <h1 class="text-white">Admin panel</h1>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="#editpage" class="nav-link active" role="tab" data-toggle="tab">Edit webpagina</a>
            </li>

            <li class="nav-item">
                <a href="#artikel" class="nav-link" role="tab" data-toggle="tab">Artikel</a>
            </li>

            <li class="nav-item">
                <a href="#content" class="nav-link" role="tab" data-toggle="tab">Alert</a>
            </li>

        </ul>
    </div>
    <div class="tab-content">

        {{--        Edit page--}}
        <div role="tabpanel" class="tab-pane active mb-3" id="editpage">
            <form method="POST">
                @csrf
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Selecteer webpagina</span>
                    </div>
                    <?php
                    if (isset($_SERVER['QUERY_STRING'])) {
                        $url = $_SERVER['QUERY_STRING'];
                        $current_url = substr($url, strpos($url, "?"));
                    } else {
                        header("Location: /adminpanel?1");
                        exit();
                    }
                    ?>
                    <select id="pageId" onchange="getPageid()" name="page_id" class="form-control">
                        <option value="0" <?php if ($current_url == 0) { echo "selected";} ?>>Kies een van de paginas</option>
                        <option value="1" <?php if ($current_url == 1) { echo "selected";} ?>>Home</option>
                        <option value="2" <?php if ($current_url == 2) { echo "selected";} ?>>Activtieiten</option>
                        <option value="3" <?php if ($current_url == 3) { echo "selected";} ?>>Cursussen</option>
                        <option value="4" <?php if ($current_url == 4) { echo "selected";} ?>>De vereniging</option>
                        <option value="5" <?php if ($current_url == 5) { echo "selected";} ?>>Zwerm gezien?</option>
                        <option value="6" <?php if ($current_url == 6) { echo "selected";} ?>>Lid worden</option>
                        <option value="7" <?php if ($current_url == 7) { echo "selected";} ?>>Agenda</option>
                        <option value="8" <?php if ($current_url == 8) { echo "selected";} ?>>Nieuws</option>
                        <option value="9" <?php if ($current_url == 9) { echo "selected";} ?>>De bijenstal</option>
                        <option value="10" <?php if ($current_url == 10) { echo "selected";} ?>>De winkel</option>
                        <option value="11" <?php if ($current_url == 11) { echo "selected";} ?>>De stretselaar</option>
                        <option value="12" <?php if ($current_url == 12) { echo "selected";} ?>>Foto's en video's</option>
                        <option value="13" <?php if ($current_url == 13) { echo "selected";} ?>>Contact</option>
                    </select>
                </div>
                <div class="drag-container">
                    @foreach($articles as $article)
                        @if($article->page_id == $current_url)
                            <div class="input-group mt-3 draggable" pos="{{ $article->pos }}" draggable="true">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Content</span>
                                </div>
                                <textarea class="form-control" draggable="true" ondragstart="drag(event)" id="drag1">{{ $article->text }}</textarea>
                            </div>
                        @endif
                    @endforeach
                </div>
                <button type="submit" name="submit-edit" class="btn btn-primary mt-4">Bewerk</button>
            </form>
        </div>
        {{--        Aritkel--}}
        <div role="tabpanel" class="tab-pane mt-4" id="artikel">
            <form method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Titel</span>
                    </div>
                    <input type="text" name="titel" class="form-control" aria-label="Sizing example input"
                           aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Subtitel</span>
                    </div>
                    <input type="text" class="form-control" name="subtitel" aria-label="Sizing example input"
                           aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Content</span>
                    </div>
                    <textarea name="text" class="form-control" aria-label="With textarea"></textarea>
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Images</span>
                    </div>
                    <input type="file" class="form-control" name="file" aria-label="Sizing example input"
                           aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Selecteer webpagina</span>
                    </div>
                    <select id="inputState" name="page_id" class="form-control">
                        <option value="1" selected>Home</option>
                        <option value="2">Activtieiten</option>
                        <option value="3">Cursussen</option>
                        <option value="4">De vereniging</option>
                        <option value="5">Zwerm Gezien?</option>
                        <option value="6">Lid worden</option>
                        <option value="7">Agenda</option>
                        <option value="8">Nieuws</option>
                        <option value="9">De bijenstal</option>
                        <option value="10">De winkel</option>
                        <option value="11">De stretselaar</option>
                        <option value="12">Foto's en Video's</option>
                        <option value="13">Contact</option>
                    </select>
                </div>
                <button type="submit" name="submit-artikel" value="submit-artikel" class="btn btn-primary mt-4">Voeg artikel toe</button>
            </form>
        </div>
        {{--        Alert --}}
        <div role="tabpanel" class="tab-pane mt-4" id="content">
            <form method="POST">
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Titel</span>
                    </div>
                    <input type="text" name="titel" class="form-control" aria-label="Sizing example input"
                           aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Content</span>
                    </div>
                    <textarea name="text" class="form-control" aria-label="With textarea"></textarea>
                </div>
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Selecteer webpagina</span>
                    </div>
                    <select id="inputState" name="page_id" class="form-control">
                        <option value="1" selected>Home</option>
                        <option value="2">Activtieiten</option>
                        <option value="3">Cursussen</option>
                        <option value="4">De vereniging</option>
                        <option value="5">Zwerm Gezien?</option>
                        <option value="6">Lid worden</option>
                        <option value="7">Agenda</option>
                        <option value="8">Nieuws</option>
                        <option value="9">De bijenstal</option>
                        <option value="10">De winkel</option>
                        <option value="11">De stretselaar</option>
                        <option value="12">Foto's en Video's</option>
                        <option value="13">Contact</option>
                    </select>
                </div>
                <button type="submit" name="submit-alert" class="btn btn-primary mt-4">Voeg alert toe</button>
            </form>
        </div>
    </div>
        <script>

            let pageID = document.getElementById("pageId");
            function getPageid() {
                window.location.href = "/adminpanel?" + pageID.value;
            }

            const draggables = document.querySelectorAll('.draggable');
            const containers = document.querySelectorAll('.drag-container');

            draggables.forEach(draggable => {
                draggable.addEventListener('dragstart', () => {
                    draggable.classList.add('dragging')
                })

                draggable.addEventListener('dragend', () => {
                    draggable.classList.remove('dragging');
                    setPos();
                })
            })

            containers.forEach(container => {
                container.addEventListener('dragover', e => {
                    e.preventDefault()

                    const afterElement = getDragAfterElement(container, e.clientY)
                    const draggable = document.querySelector('.dragging')

                    if (afterElement == null) {
                        container.appendChild(draggable)
                    } else {
                        container.insertBefore(draggable, afterElement)
                    }

                })
            })

            function getDragAfterElement(container, y) {
                const draggableElements = [...container.querySelectorAll('.draggable:not(.dragging)')]

                return draggableElements.reduce((closest, child) => {
                    const box = child.getBoundingClientRect()
                    const offset = y - box.top - box.height / 2
                    if (offset < 0 && offset > closest.offset) {
                        return { offset: offset, element: child }
                    } else {
                        return closest
                    }
                }, { offset: Number.NEGATIVE_INFINITY }).element
            }

            function setPos() {
                let a = document.querySelector('.drag-container').children;
                let b = Array.from(a);
                let c = 1;
                b.forEach((item) => {
                    item.setAttribute('pos', c);
                    c++;
                });
            }
        </script>
@stop

