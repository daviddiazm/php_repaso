<?php
// include __DIR__ "/../model/cone"
include "../model/conection.php";

$id = $_GET["id"];
$query = "SELECT * FROM usuarios WHERE id = $id";
$sql = $conection->query($query);
$user = $sql->fetch_object();

if (isset($_POST["btnEditar"])) {
    if (!empty($_POST["email"]) && !empty($_POST["name"]) && !empty($_POST["celphone"])) {
        $email = $_POST["email"];
        $name = $_POST["name"];
        $celphone = $_POST["celphone"];
        $query = "UPDATE usuarios SET email = '$email', name = '$name', celphone = '$celphone' WHERE id = $id ";
        $sql = $conection->query($query);
        if ($sql) {
            echo "<h2>Se actualizo correctamente</h2>";
            header("location:../index.php");
        }
    } else {
        echo "<h2>Falta insertar algun valor</h2>";
    }
}

?>


<?php include "../components/header.php" ?>
<form class="col-4 " method="POST">
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?= $user->email ?>">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="name" value="<?= $user->name ?>">
    </div>
    <div class="mb-3">
        <label for="celphone" class="form-label">Celphone</label>
        <input type="number" class="form-control" name="celphone" id="celphone" value="<?= $user->celphone ?>">
    </div>
    <button type="submit" class="btn btn-primary" name="btnEditar">Enviar</button>
</form>
<?php include "../components/footer.php" ?>