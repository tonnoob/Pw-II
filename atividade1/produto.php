<?php include ("estrutura/cabecalho.php");?>

    
<Section>
        <h1> Produto </h1>
    </section>

    <section>
        <form action="dados.php" method="post">

            <div>
                <label> Produto: </label> </div>
                <input type="text" class="tx" name="txProduto" placeholder="Digite o produto">
                </label>
            </br>
            </br>

            <div>
                <label> Valor: </div>
                <input type="text" class="tx" name="txValor" placeholder="Digite o valor">
                </label>
            </br>
            </br>
            <div>  
                <label> Categoria: </div>
                <input type="text" class="tx" name="txCategoria" placeholder="Digite a categoria">
                </label>
            </br>
            </br>

            </label>
            
            <div>
                <input type="submit" class="bt" value="Cadastrar">
            </div>
        </form>
    </section>


<?php include ("estrutura/rodape.php");?>