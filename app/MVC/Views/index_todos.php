<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-6 mt-5">
            <div class="card">
                <div class="card-body">
                    <h1>Hello world</h1>
                    <ul class="list-group">
                        <?php foreach ($todos as $todo): ?>
                            <li class="list-group-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <?= $todo->task ?>
                                    </div>
                                    <div>
                                        <form method="post" id="complete-<?= $todo->id ?>"
                                              action="/todos/<?= $todo->id ?>/complete">
                                            <input onchange="$('form#complete-<?= $todo->id ?>').submit()"
                                                   type="checkbox" <?= $todo->complete ? "checked" : "" ?>>
                                        </form>
                                    </div>
                                </div>


                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-5">
            <div class="card">
                <div class="card-body">
                    <h2>Создать задачу</h2>
                    <form method="post" action="/todos/create">
                        <input name="task" required type="text" placeholder="Название задачи" class="form-control">
                        <input type="submit" class="btn btn-success mt-2" value="Добавить">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
</script>
</body>
</html>
