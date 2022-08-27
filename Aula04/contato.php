<?php include("estrutura/cabecalho.php"); ?>


    <Section>
        <h1> Contato </h1>
    </section>

    <section>
        <form action="dados-contato.php" method="post">

            <div>
                <label> Nome: </label> </div>
                <input type="text" class="tx" name="txNome" placeholder="Digite seu nome">
                </label>
            </br>
            </br>
            <div>
                <label> Gênero </label>
                <input type="radio" name="rGenero"/> Masculino
                <input type="radio" name="rGenero"/> Feminino
            </div>
            </br>
            <div>
                <label> Email: </div>
                <input type="email" class="tx" name="txEmail" placeholder="Digite seu email">
                </label>
            </br>
            </br>
            <div>  
                <label> Assunto: </div>
                <input type="text" class="tx" name="txAssunto" placeholder="Digite o assunto">
                </label>
            </br>
            </br>
            <div>
                <label> Mensagem: </div>
                <textarea class="msg" name="txMsg"></textarea>
            </label>
            
            <div>
                <input type="submit" class="bt" value="Enviar">
            </div>
        </form>
    </section>
<?php include("estrutura/rodape.php"); ?>