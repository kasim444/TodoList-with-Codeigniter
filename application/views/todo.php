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
            <div class="col-md-10">
                <input type="text" placeholder="Add todos...">
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary btn-sm">
                    Add
                </button>
            </div>
        </div>

        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>Yapılacak</th>
                        <th>Aktif</th>
                        <th>İşlem</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Codeigniter kasmalı</td>
                        <td>
                            <input type="checkbox" class="js-switch" checked />
                        </td>
                        <td>
                            <button class="btn btn-danger btn-sm">Sil</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Bu hayattan keyif almalı</td>
                        <td>
                            <input type="checkbox" class="js-switch" checked />
                        </td>
                        <td>
                            <button class="btn btn-danger btn-sm">Sil</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <?php $this->load->view('dependencies/script'); ?>
</body>

</html>