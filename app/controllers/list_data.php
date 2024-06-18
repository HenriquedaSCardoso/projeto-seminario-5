<?php
$data = [
    "vehicles" => [
        [
            "id" => 1,
            "placa" => "ADF3F22",
            "modelo" => "Nissan Sintra",
            "data_registro" => "2024-06-18",
            "cpf_registro" => "422.960.990-68"
        ]
    ],
    "owners" =>  [
        [
            "id" => 1,
            "nome" => "Halla Parker",
            "cpf" => "422.960.990-68",
            "data_registro" => "09/06/2024"
        ],
        [
            "id" => 2,
            "nome" => "Vivian Marsh",
            "cpf" => "047.795.390-56",
            "data_registro" => "10/06/2024"
        ],
        [
            "id" => 3,
            "nome" => "Doris Finley",
            "cpf" => "232.611.940-14",
            "data_registro" => "11/06/2024"
        ],
        [
            "id" => 4,
            "nome" => "Martina Paul",
            "cpf" => "547.747.040-24",
            "data_registro" => "12/06/2024"
        ],
        [
            "id" => 5,
            "nome" => "Kathleen Campos",
            "cpf" => "139.885.870-60",
            "data_registro" => "13/06/2024"
        ]
    ],
    "parking" => [
        [],
    ]
];

function list_data($data)
{
    $table = "<table class='table rounded-3 table-bordered'>";
    $table .= "<thead class='table-dark'>";
    $table .= "<tr>";
    foreach (array_keys($data[0]) as $cabecalho) {
        $table .= "<th scope='col'>" . $cabecalho . "</th>";
    }
    $table .= "</tr>";
    $table .= "</thead>";
    $table .= "<tbody class='table-group-divider'>";
    foreach ($data as $linha) {
        $table .= "<tr>";
        foreach ($linha as $elemento) {
            $table .= "<td>" . $elemento . "</td>";
        }
        $table .= "</tr>";
    }
    $table .= "</tbody>";
    return $table;
};
