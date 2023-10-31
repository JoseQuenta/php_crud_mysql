<!-- para que se pueda ver la pagina en el servidor local se debe de poner en la url localhost/Proyecto/index.php -->
<?php include("db.php") ?>
<?php include("includes/header.php") ?>

<h1>Hello Word</h1>
<h2>bienvenido</h2>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <!-- //esto es importante, ya que es el formulario que se va a enviar a la base de datos  -->
                <form action="save_task.php" method="POST">

                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Task title" autofocus>
                    </div>

                    <!-- este div es para que se pueda escribir en el text area   -->
                     
                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control" placeholder="Task description"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="save_task" value="Save Task">
                </form>
            </div>

        </div>

        <div class="col-md-8">

        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>