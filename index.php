<?php include "components/header.php"?>
<body>
    <h1>hola</h1>
    <div class="container-fluid row">
        <form class="col-4" method="POST">
        <!-- <form class="col-4" method="POST" action="controller/registrar_usuario.php"></form> -->
            <?php
            include "model/conection.php";
            include "controller/registrar_usuario.php";
            ?>
            <?=$messge?>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="mb-3">
                <label for="celphone" class="form-label">Celphone</label>
                <input type="number" class="form-control" name="celphone" id="celphone">
            </div>
            <button type="submit" class="btn btn-primary" name="btnRegistrar">Enviar</button>
        </form>

        <div class="col-8 p-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Email</th>
                        <th scope="col">Name</th>
                        <th scope="col">Celphone</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "model/conection.php";
                    $query = 'select * from usuarios ';
                    $sql = $conection->query($query);
                    while ($row = $sql->fetch_object()) {
                    ?>
                        <tr>
                            <th scope="row"><?= $row->id ?></th>
                            <td><?= $row->email ?></td>
                            <td><?= $row->name ?></td>
                            <td><?= $row->celphone ?></td>
                            <td>
                                <a href="controller/editar_usuario.php?id=<?=$row->id?>">Editar</a>
                                <a href="controller/eliminar_usuario.php?id=<?=$row->id?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>


</body>
<?php include "components/footer.php"?>
