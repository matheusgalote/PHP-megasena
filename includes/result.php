<style>
    .dezena {
        border: 3px solid #ccc;
        border-radius: 50%; 
        margin: 5px;
        width: 80px;
        height: 80px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-weight: bold;
    }
</style>

<img src="img/loading-icegif.gif" width="100" class="mb-5">

<p class="fs-1">
    Concurso:
    <span class="badge bg-success"><?= $res['numero'] ?></span>
</p>

<p class="fs-5">
    Data de apuração:
    <span class="badge bg-success"><?= $res['dataApuracao'] ?></span>
</p>

<p class="fs-5">
    Resultado:
    <span class="badge bg-success"><?= $res['acumulado'] ? 'Acumulado' : 'Premiado' ?></span>
</p>

<p class="fs-3 mt-5 fw-bold">Dezenas sorteadas: </p>
<div class="d-flex justify-content-center fs-2">
    <?php foreach($res['listaDezenas'] as $dezena) { ?>
        <span class="dezena badge bg-success"><?= $dezena ?></span>
    <?php } ?>
</div>
