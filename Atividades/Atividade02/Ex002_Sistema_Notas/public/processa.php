<?php


    function adicionarAluno($nome, $nota1, $nota2, $nota3, $nota4) {
        $alunos = [];

        // global $alunos;

        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

        if($media > 7){
            $status = "Aprovado";
        } elseif ($media > 5) {
            $status = "Em recuperação";
        } else {
            $status = "Reprovado";
        }


        // Opção para adicionar elementos em um array

        $novoAluno = [
            'nome' => $nome,
            'media' => $media,
            'status' => $status
        ];

        array_push($alunos, $novoAluno);

        foreach($alunos as $aluno) {
            echo "<tr>
                <td>" . $aluno['nome'] . "</td>
                <td>" . $aluno['media'] . "</td>
                <td>" . $aluno['status'] . "</td>
            </tr>";
        };

    };
    

?>