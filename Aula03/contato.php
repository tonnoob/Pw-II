<?php include("estrutura/cabecalho.php"); ?>

    <Section>
        <h1> Contato </h1>

    </section>

    <section class="centro">
        <form>
            <div>
            <div><label>Nome</label></div>
            <input type="text"  class="tx" placeholder="Digite seu nome"/> 
            </div>

            <br>

            <div>
            <div><label>Gênero</label></div>
            <input type="radio"  name="Genero" /> Maculino
            <input type="radio" name="Genero" /> Feminino 
            </div>

            <br>

            <div>
            <div><label>E-mail</label></div>
            <input type="email"  class="tx" placeholder="Digite seu e-mail"/> 
            </div>

            <br>

            <div>
            <div><label>Assunto</label></div>
            <input type="text"  class="tx" placeholder="Digite o assunto"/>  
            </div>

            <br>

            <div>
            <div><label>Dúvida</label> </div>
            <textarea  class="tx" ></textarea>
            </div>

            <br>

            <div>
            <input type="submit"  class="bt" value="Enviar"/> 
            </div>


        </form>

    </section>


<?php include("estrutura/rodape.php"); ?>