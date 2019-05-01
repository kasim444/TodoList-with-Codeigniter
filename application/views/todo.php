<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODO List with Codeigniter</title>
    <?php $this->load->view('dependencies/style'); ?>
</head>

<body>
    <div class="container">
        <div class="row">
            <h1 class="text-center">TODO List with Code🔥</h1>
        </div>

        <div class="row" id="insertTodo">
            <form action="<?=base_url("todo/insert")?>" method="post">
                <div class="col-md-10">
                    <input type="text" placeholder="Add todos..." name="todo_title">
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary btn-sm">
                        Add
                    </button>
                </div>
            </form>
        </div>

        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>Todo</th>
                        <th>Complate</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($todos as $todo) : ?>
                    <tr>
                        <td><?=$todo->title?></td>
                        <td>
                            <input type="checkbox" data-url="<?=base_url("todo/iscomplatedsetter/$todo->id")?>"
                                class="js-switch" <?=($todo->isComplated ? 'checked' : '')?> />
                        </td>
                        <td>
                            <a href="<?=base_url("todo/delete/$todo->id")?>" class="btn btn-danger btn-sm">Sil</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>


    <?php $this->load->view('dependencies/script'); ?>
</body>

</html>