<?php
//BANCO DE DADOS
$produtos = [
    [
        "Nome" => "Shampoo",
        "Marca" => "L'Oreal",
        "Preço" => 18.00
    ],
    [
        "Nome" => "Condicionador",
        "Marca" => "L'Oreal",
        "Preço" => 51.50
    ],
    [
        "Nome" => "Creme para pentear",
        "Marca" => "Salonline",
        "Preço" => 34.50
    ],
        [
        "Nome" => "Leav-In",
        "Marca" => "Italilian",
        "Preço" => 14.90
    ]
        ];
        
foreach ($produtos as $produtos){
    echo '
        <div>
            <h2>' . $produtos["Nome"] . '</h2>
            <p style="font-style: italic;">' . $produtos["Marca"] . '</p>
            <p>R$' .$produtos["Preço"] . '</p>
            <button>Comprar</button>
        </div>
    ';
//OS .(pontos) ESTÃO NA FUNÇÃO DE CONCATENAÇÃO.
}

?>