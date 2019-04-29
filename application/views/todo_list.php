<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODO List</title>
    <?php $this->load->view("dependencies/style"); ?>
</head>
<body>
    <div class="container">
        <h3 class="text-center">TODO List</h3>
        <div class="row">
            <div class="col-md-12">
                <form action="<?=base_url("todo/insert")?>" method="post">
                    <div class="row">
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="todo_title">
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary">Kaydet</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <th>Açıklama</th>
                        <th>Durum</th>
                        <th>Sil</th>
                    </thead>
                    <tbody>
                        <?php foreach ($todos as $todo) { ?>
                        <tr>
                            <td>
                                <?=$todo->title?>
                            </td>
                            <td>
                                <?=$todo->isComplated?>
                            </td>
                            <td>
                                <a href="#" class="btn btn-danger">Sil</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <?php $this->load->view("dependencies/script"); ?>
</body>
</html>