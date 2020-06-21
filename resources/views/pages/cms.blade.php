@extends('pages.components.main')

@section("body")
    <div class="container">
    <div class="mt-3">
        <h1 class="text-white">Admin panel</h1>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="#artikel" class="nav-link active" role="tab" data-toggle="tab">Artikel</a>
            </li>

            <li class="nav-item">
                <a href="#content" class="nav-link" role="tab" data-toggle="tab">Alert</a>
            </li>

            <li class="nav-item">
                <a href="#editpage" class="nav-link" role="tab" data-toggle="tab">Edit webpagina</a>
            </li>
        </ul>
    </div>
    <div class="tab-content">
        {{--        Aritkel--}}
        <div role="tabpanel" class="tab-pane active mt-4" id="artikel">
            <form method="POST" action="">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Titel</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                           aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Sub titel</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                           aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Content</span>
                    </div>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Selecteer webpagina</span>
                    </div>
                    <select id="inputState" class="form-control">
                        <option selected>Home</option>
                        <option>Activtieiten</option>
                        <option>Cursussen</option>
                        <option>De vereniging</option>
                        <option>Zwerm Gezien?</option>
                        <option>Lid worden</option>
                        <option>Agenda</option>
                        <option>Nieuws</option>
                        <option>De winkel</option>
                        <option>De stretselaar</option>
                        <option>Foto's en Video's</option>
                        <option>Contact</option>
                    </select>
                </div>
                <button type="submit" name="submit-artikel" class="btn btn-primary mt-4">Voeg artikel toe</button>
            </form>
        </div>
        {{--        Alert --}}
        <div role="tabpanel" class="tab-pane mt-4" id="content">
            <form method="POST" action="">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Titel</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                           aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Content</span>
                    </div>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Selecteer webpagina</span>
                    </div>
                    <select id="inputState" class="form-control">
                        <option selected>Home</option>
                        <option>Activtieiten</option>
                        <option>Cursussen</option>
                        <option>De vereniging</option>
                        <option>Zwerm Gezien?</option>
                        <option>Lid worden</option>
                        <option>Agenda</option>
                        <option>Nieuws</option>
                        <option>De winkel</option>
                        <option>De stretselaar</option>
                        <option>Foto's en Video's</option>
                        <option>Contact</option>
                    </select>
                </div>
                <button type="submit" name="submit-alert" class="btn btn-primary mt-4">Voeg alert toe</button>
            </form>
        </div>
        {{--        Edit page--}}
        <div role="tabpanel" class="tab-pane" id="editpage">
            <div class="input-group mt-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Selecteer webpagina</span>
                </div>
                <select id="inputState" class="form-control">
                    <option selected>Home</option>
                    <option>Activtieiten</option>
                    <option>Cursussen</option>
                    <option>De vereniging</option>
                    <option>Zwerm Gezien?</option>
                    <option>Lid worden</option>
                    <option>Agenda</option>
                    <option>Nieuws</option>
                    <option>De winkel</option>
                    <option>De stretselaar</option>
                    <option>Foto's en Video's</option>
                    <option>Contact</option>
                </select>
            </div>
            <div class="drag-container">
                <div class="input-group mt-3 draggable" pos="1" draggable="true">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Content</span>
                    </div>
                    <textarea class="form-control" draggable="true" ondragstart="drag(event)" id="drag1">Hier komen alle artikelen1</textarea>
                </div>
                <div class="input-group mt-3 draggable" pos="2" draggable="true">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Content</span>
                    </div>
                    <textarea class="form-control" draggable="true" ondragstart="drag(event)" id="drag1">Hier komen alle artikelen2</textarea>
                </div>
                <div class="input-group mt-3 draggable" pos="3" draggable="true">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Content</span>
                    </div>
                    <textarea class="form-control" draggable="true" ondragstart="drag(event)" id="drag1">Hier komen alle artikelen3</textarea>
                </div>
                <div class="input-group mt-3 draggable" pos="4" draggable="true">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Content</span>
                    </div>
                    <textarea class="form-control" draggable="true" ondragstart="drag(event)" id="drag1">Hier komen alle artikelen4</textarea>
                </div>
            </div>
            <button type="submit" name="submit-alert" class="btn btn-primary mt-4">Bewerk</button>
        </div>
    </div>
        <script>
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

