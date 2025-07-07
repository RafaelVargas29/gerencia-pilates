<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Aluno</title>
</head>
<body>
    <form method="POST" action="/aluno/store">
        @csrf
        
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="cpf">CPF:</label><br>
        <input type="text" id="cpf" name="cpf" required><br><br>

        <label for="rg">RG</label><br>
        <input type="text" id="rg" name="rg" required><br><br>

        <label for="celular">Celular:</label><br>
        <input type="text" id="celular" name="celular" required><br><br>
        
        <label for="contato_emergencia">Contato de Emergencia</label><br>
        <input type="text" id="contato_emergencia" name="contato_emergencia" required><br><br>

        <label for="data_nascimento">Data de Nascimento:</label><br>
        <input type="date" id="data_nascimento" name="data_nascimento" required><br><br>
        
        <label for="modalidade">Modalidade</label><br>
        <select id="modalidade" name="modalidade" required>
            <option value="pilates">Pilates</option>
            <option value="yoga">Yoga</option>
            <option value="musculacao">Musculação</option>
        </select><br><br>

        <label for="frequencia">Frequencia</label><br>
        <select id="frequencia" name="frequencia" required>
            <option value="diaria">Diária</option>
            <option value="semanal">Semanal</option>
            <option value="mensal">Mensal</option>
        </select><br><br>

        <label for="forma_pagamento">Forma de Pagamento</label><br>
        <select id="forma_pagamento" name="forma_pagamento" required>
            <option value="cartao">Cartão</option>
            <option value="dinheiro">Dinheiro</option>
            <option value="pix">Pix</option>
        </select><br><br>

        <label for="data_vencimento">Data de Vencimento</label><br>
        <input type="date" id="data_vencimento" name="data_vencimento" required><br><br>

        <label for="tipo_aluno">Tipo de Aluno</label><br>
        <select id="tipo_aluno" name="tipo_aluno" required>
            <option value="mensalista">Mensalista</option>
            <option value="gym_pass">Gym pass</option>
            <option value="total_pass">Veterano</option>
        </select><br><br>

        <input type="submit" value="Cadastrar Aluno">

    </form>
</body>
</html>