<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $answers[] = [
            "response" => '7 camadas',
            "question_id" => 1,
            "user_id" => 1,
        ];

        $answers[] = [
            "response" => 'Conjunto de computadores interligados entre si, compartilhando recursos.',
            "question_id" => 2,
            "user_id" => 1,
        ];

        $answers[] = [
            "response" => 'LAN, MAN, WAN',
            "question_id" => 3,
            "user_id" => 1,
        ];

        $answers[] = [
            "response" => 'Barramento, Anel, Estrela, Híbrida',
            "question_id" => 4,
            "user_id" => 1,
        ];

        $answers[] = [
            "response" => 'Transmissão simultânea para todos os hosts na rede.',
            "question_id" => 5,
            "user_id" => 1,
        ];

        $answers[] = [
            "response" => 'Roteador',
            "question_id" => 6,
            "user_id" => 1,
        ];

        $answers[] = [
            "response" => 'Cabo coaxial',
            "question_id" => 7,
            "user_id" => 1,
        ];

        $answers[] = [
            "response" => 'Branco-laranja / laranja / branco-verde / azul / branco-azul / verde / branco-marrom / marrom',
            "question_id" => 8,
            "user_id" => 1,
        ];

        $answers[] = [
            "response" => 'Monomodo e Multimodo',
            "question_id" => 9,
            "user_id" => 1,
        ];

        $answers[] = [
            "response" => 'Enlace',
            "question_id" => 10,
            "user_id" => 1,
        ];

        $answers[] = [
            "response" => 'TCP E UDP',
            "question_id" => 11,
            "user_id" => 1,
        ];

        $answers[] = [
            "response" => 'Encaminhamento e roteamento',
            "question_id" => 12,
            "user_id" => 1,
        ];

        $answers[] = [
            "response" => 'Física, Enlace, Rede, Transporte, Sessão, Apresentação e Aplicação.',
            "question_id" => 13,
            "user_id" => 1,
        ];

        $answers[] = [
            "response" => 'Segmento',
            "question_id" => 14,
            "user_id" => 1,
        ];

        $answers[] = [
            "response" => 'Dado',
            "question_id" => 15,
            "user_id" => 1,
        ];

        $answers[] = [
            "response" => '4 camadas',
            "question_id" => 16,
            "user_id" => 1,
        ];

        $answers[] = [
            "response" => 'Rede',
            "question_id" => 17,
            "user_id" => 1,
        ];

        $answers[] = [
            "response" => '03 bytes',
            "question_id" => 18,
            "user_id" => 1,
        ];

        $answers[] = [
            "response" => 'DHCP',
            "question_id" => 19,
            "user_id" => 1,
        ];

        $answers[] = [
            "response" => 'ordenação shell e hashing.',
            "question_id" => 20,
            "user_id" => 1,
        ];

        foreach ($answers as $answer) {
            Answer::create([
                'response' => $answer['response'],
                'question_id' => $answer['question_id'],
                'user_id' => $answer['user_id'],
            ]);
        }
    }
}
