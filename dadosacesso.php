<div class="dadosacesso1">
    <form action="" method="POST">
                <h2><b>Alterar E-mail de Acesso</b></h2>
                <div class="input-field">
                    <label>Palavra-chave Atual *</label>
                    <input type="password" name="senha" id="senha" placeholder="Inserir Palavra-chave Atual *" required>
                    <button type="button" title="Ver ou ocultar senha" onclick="viewSenha()" style="text-align: right; width: 9%; margin: 0px;"><i class="fas fa-eye"></i></button> 
                    <div class="underline"></div>
                </div>
                <div class="input-field">
                    <label></label>
                </div>
                <div class="input-field">
                    <label>Novo E-mail *</label>
                    <input type="email" name="novoemail" id="novoemail" placeholder="Inserir Novo E-mail *" required>
                    <div class="underline"></div>
                </div>
                <div class="input-field">
                    <label>Confirmar E-mail *</label>
                    <input type="email" name="confiemail" id="confiemail" placeholder="Confirmar Novo E-mail *" required>
                    <div class="underline"></div>
                </div>
                <div class="guardaralteracoes">
                    <div class="guardaral">
                        <button type="submit" class="btn btn-primary" style="margin-bottom: 75px">
                            Atualizar E-mail
                        </button>
                    </div>
                </div>
</form>

<form action="" method="POST">
                <h2><b>Alterar Palavra-chave de Acesso</b></h2>
                <div class="input-field" style="float: none;" >
                    <label>Palavra-chave Atual *</label>
                    <input type="password" name="senha" id="senha2" placeholder="Inserir Palavra-chave Atual *" required>
                    <button type="button" title="Ver ou ocultar senha" onclick="viewSenha2()" style="text-align: right; width: 9%; margin: 0px;"><i class="fas fa-eye"></i></button> 
                    <div class="underline"></div>
                </div>
                <div class="input-field">
                    <label></label>
                </div>
                <div class="input-field">
                    <label>Nova Palavra-chave *</label>
                    <input type="password" name="senha" id="senha3" placeholder="Inserir Nova Palavra-chave *" required>
                    <button type="button" title="Ver ou ocultar senha" onclick="viewSenha3()" style="text-align: right; width: 9%; margin: 0px;"><i class="fas fa-eye"></i></button> 
                    <div class="underline"></div>
                </div>
                <div class="input-field">
                    <label>Confirmar Nova Palavra-chave *</label>
                    <input type="password" name="senha1" id="senha1" placeholder="Confirmar Nova Palavra-chave *" required>
                    <button type="button" title="Ver ou ocultar senha" onclick="viewSenha1()" style="text-align: right; width: 9%; margin: 0px;"><i class="fas fa-eye"></i></button> 
                    <div class="underline"></div>
                </div>
                <div class="guardaralteracoes">
                    <div class="guardaral">
                        <button type="submit" class="btn btn-primary">
                            Atualizar Palavra-Passe
                        </button>
                    </div>
                </div>
</form>
</div>

<script>
    function viewSenha(){
            var tipo = document.getElementById("senha")
            if (tipo.type == "password") {
                tipo.type = "text";
            } else{
                tipo.type = "password";
            }
        }
    
        function viewSenha1(){
            var tipo = document.getElementById("senha1")
            if (tipo.type == "password") {
                tipo.type = "text";
            } else{
                tipo.type = "password";
            }
        }

        function viewSenha2(){
            var tipo = document.getElementById("senha2")
            if (tipo.type == "password") {
                tipo.type = "text";
            } else{
                tipo.type = "password";
            }
        }
        function viewSenha3(){
            var tipo = document.getElementById("senha3")
            if (tipo.type == "password") {
                tipo.type = "text";
            } else{
                tipo.type = "password";
            }
        }

</script>