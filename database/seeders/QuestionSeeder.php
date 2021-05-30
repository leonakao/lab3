<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $questions[] = [
            'text' => 'Em quantas camadas se divide o modelo de referência OSI?',
            'subject_id' => 1,
        ];

        $questions[] = [
            'text' => 'O que é uma rede de computadores?',
            'subject_id' => 1,
        ];

        $questions[] = [
            'text' => 'Quanto à dispersão geográfica como são classificadas as redes de computadores?',
            'subject_id' => 1,
        ];

        $questions[] = [
            'text' => 'Quanto á topologia física, como são denominadas as redes?',
            'subject_id' => 1,
        ];

        $questions[] = [
            'text' => 'O que é a tecnologia Broadcast?',
            'subject_id' => 1,
        ];

        $questions[] = [
            'text' => 'Qual aparelho tem a função de escolher o melhor caminho para o envio da informação?',
            'subject_id' => 1,
        ];

        $questions[] = [
            'text' => 'Qual cabo foi o primeiro a aparecer na estrutura de rede?',
            'subject_id' => 1,
        ];

        $questions[] = [
            'text' => 'Qual das sequências abaixo é para cabeamento padrão 568B?',
            'subject_id' => 1,
        ];

        $questions[] = [
            'text' => 'Como se classificam as fibras ópticas?',
            'subject_id' => 1,
        ];

        $questions[] = [
            'text' => 'Qual camada do Modelo OSI é responsável pela correção de erros e fluxo de dados de modo básico?',
            'subject_id' => 1,
        ];

        $questions[] = [
            'text' => 'Quais são os principais protocolos da camada de Transporte?',
            'subject_id' => 1,
        ];

        $questions[] = [
            'text' => 'Quais são as principais funções da camada de rede?',
            'subject_id' => 1,
        ];

        $questions[] = [
            'text' => 'Qual a ordem correta das camadas?',
            'subject_id' => 1,
        ];

        $questions[] = [
            'text' => 'Como é denominado o dado (PDU) na camada de transporte?',
            'subject_id' => 1,
        ];

        $questions[] = [
            'text' => 'Como é denominado o dado (PDU) na camada de Aplicação?',
            'subject_id' => 1,
        ];

        $questions[] = [
            'text' => 'Quantas camadas tem o modelo padrão TCP/IP?',
            'subject_id' => 1,
        ];

        $questions[] = [
            'text' => 'A qual camada pertence o protocolo IP?',
            'subject_id' => 1,
        ];

        $questions[] = [
            'text' => 'Na classe padrão C, quantos bytes são reservados para redes?',
            'subject_id' => 1,
        ];

        $questions[] = [
            'text' => 'Como é denominado o protocolo de configuração dinâmica de IP?',
            'subject_id' => 1,
        ];

        $questions[] = [
            'text' => 'São métodos ou algoritmos conhecidos de ordenação de dados por troca',
            'subject_id' => 2,
        ];

        foreach ($questions as $question) {
            Question::create([
                'text' => $question['text'],
                'subject_id' => $question['subject_id'],
            ]);
        }
    }
}
