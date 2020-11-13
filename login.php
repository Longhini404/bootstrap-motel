<?php include 'header.php'; ?>

<body>

    <?php include 'menu.php'; ?>

    <section class="bg-dark text-white hero hero-with-header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title text-red p-3">Login</h3>
                        </div>
                        <div class="panel-body">
                            <form accept-charset="UTF-8" role="form">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="E-mail" name="email" type="email">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Senha" name="senha" type="password">
                                    </div>
                                    <input class="btn btn-lg btn-red btn-block" type="submit" value="Login">
                                    <a href="cadastro.php" type="button" class="btn btn-lg btn-red btn-block">
                                        Cadastre-se
                                    </a>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>