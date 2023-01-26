<?php 
require 'includes/header.php';
?>
<body class="body-cadastrar-page">
    <main>
        <div class="container-form cadastrar">
            <div class="container-form-itself">
                <h1>Cadastrar Aluno</h1>
                <form action="cadastrar_action.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label my-label"> Nome: 
                            <input class="form-control" type="text" name="nome">
                        </label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label my-label">Email: 
                            <input class="form-control" type="email" name="email">
                        </label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label my-label">Telefone
                            <input class="form-control"  type="tel" name="telefone" required placeholder="(xx) xxxxx-xxxx" >
                        </label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label my-label">Situação:
                            <select class="form-select" aria-label="Default select example" name="situacao">
                                
                                <option value="ativo">Ativo</option>
                                <option value="inativo">Inativo</option>
                            </select>
                        </label>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label my-label">Mensalidade
                            <input class="form-control" type="text" name="mensalidade">
                        </label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label my-label">Senha: 
                            <input class="form-control" type="password" name="senha">
                        </label>
                    </div>
                    <div class="mb-3">
                    <label class="form-label my-label">Observação:
                        <textarea class="form-control" name="observacao" cols="60" rows="5"; style="width: 100%"></textarea>
                    </label>

                    </div>


                    <div class="btn-save">
                        <input class="btn btn-primary" type="submit" value="SALVAR">
                    </div>
                </form>
            </div>
        </div>    
    </main>
    <?php
        require 'includes/footer.php';
    ?>
</body>
