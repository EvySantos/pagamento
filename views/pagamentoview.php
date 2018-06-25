
<!-- Nav tabs -->
<div class="content">
    <div class="card mt-4">
    <ul class="nav nav-tabs nav-justified">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">Cartão</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Boleto</a>
        </li>
        
    </ul>
    <!-- Tab panels -->
    <div class="tab-content card">
        <!--Panel 1-->
        <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
            <br>
            <form method="post" action="<?= $cartao ?>">
                <p class="h3 text-center mb-2">Pagamento</p>

                <!-- Default input name -->
                <label for="nome" class="blue lighten-5">Nome:</label>
                <input type="text" name="nome" class="form-control">

                <br>

                <!-- Default input email -->
                <label for="numcartao" class="blue lighten-5">Número do Cartão:</label>
                <input type="text" name="numcartao" class="form-control">

                <br>

                <!-- Default input email -->
                <label for="dtval" class="blue lighten-5">Validade:</label>
                <input type="text" name="dtval" class="form-control">

                <br>

                <!-- Default input password -->
                <label for="codseg" class="blue lighten-5">Código de Segurança:</label>
                <input type="password" name="codseg" class="form-control">


                <input type="hidden" name="cpf" value="0" class="form-control">
                <input type="hidden" name="email" value="sememail@sememail.com" class="form-control">


                <div class="text-center mt-4">
                    <button class="btn btn-unique" type="submit">Concluir</button>
                </div>
            </form>
            <!-- Default form register -->.
        </div>
            

                <!--/.Panel 1-->
                <!--Panel 2-->
        <div class="tab-pane fade" id="panel2" role="tabpanel">
            <br>
            <form method="post" action="<?= $boleto ?>">     
                <label for="nome" class="blue lighten-5">Nome:</label>
                <input type="text" name="nome" class="form-control">

                <br>
                <label for="cpf" class="blue lighten-5">CPF:</label>
                <input type="text" name="cpf" class="form-control">

                <br>

                <label for="email" class="blue lighten-5">E-Mail:</label>
                <input type="email" name="email" class="form-control">

                <input type="hidden" name="numcartao" value="0" class="form-control">
                <input type="hidden" name="dtval" value="0" class="form-control">
                <input type="hidden" name="codseg"  value="0" class="form-control">
                <div class="text-center mt-4">
                    <button class="btn btn-unique" type="submit">Concluir</button>
                </div>
            </form>   
    </div>
        <!--/.Panel 2-->
</div>
    