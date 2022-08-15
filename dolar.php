<h3>Cotação do Dólar:</h3>

<div>
    <h4>Dólar Agora</h4>
</div>
<br>
<div>
    <button id="buscarD"> Dólar Agora </button>
</div>
<br>
<div>
    <p>Compra🏙️: <span id="compra"> </span> </p>
    <p>Venda💩: <span id="venda"> </span> </p>
    <p>Máximo🤑: <span id="max"> </span> </p>
    <p>Minimo😔: <span id="min"> </span> </p>
</div>

<script>
    document.querySelector("#buscarD").addEventListener('click', function(){
        const opcoes = {
            method:"GET",
            mode:"cors",
            cache:"default"
        }

        fetch(`https://economia.awesomeapi.com.br/json/last/USD-BRL`, opcoes)
        .then(
            response=>{ response.json()
            .then(data => {
                document.querySelector("#compra").textContent = data['USDBRL']['bid'];
                document.querySelector("#venda").textContent = data['USDBRL']['ask'];
                document.querySelector("#max").textContent = data['USDBRL']['high'];
                document.querySelector("#min").textContent = data['USDBRL']['low'];
            });
            }
        )
        
    });
    
</script>
