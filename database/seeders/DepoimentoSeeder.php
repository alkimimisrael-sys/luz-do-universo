<?php

namespace Database\Seeders;

use App\Models\Depoimento;
use Illuminate\Database\Seeder;

class DepoimentoSeeder extends Seeder
{
    public function run(): void
    {
        $depoimentos = [
            [
                'nome'       => 'Maria Aparecida Santos',
                'parentesco' => 'Filha do residente Sr. João Santos',
                'texto'      => 'Desde que meu pai passou a morar no Residencial Luz do Universo, eu durmo tranquila. A equipe é atenciosa, o ambiente é limpo e aconchegante, e meu pai está muito mais animado. Ele participa das atividades e fez novas amizades. Recomendo de coração para quem quer o melhor para seus pais.',
                'nota'       => 5,
                'ativo'      => true,
            ],
            [
                'nome'       => 'Roberto Ferreira Lima',
                'parentesco' => 'Filho da residente Sra. Benedita Lima',
                'texto'      => 'Minha mãe tem 84 anos e sempre foi muito difícil convencê-la a aceitar cuidados. No Luz do Universo, ela se sentiu em casa desde o primeiro dia. Os cuidadores são muito pacientes e carinhosos. A alimentação é deliciosa e sempre variada. Estamos muito satisfeitos!',
                'nota'       => 5,
                'ativo'      => true,
            ],
            [
                'nome'       => 'Claudia Rodrigues',
                'parentesco' => 'Neta do residente Sr. Antônio Rodrigues',
                'texto'      => 'Meu avô está aqui há dois anos e eu posso dizer que a qualidade de vida dele melhorou imensamente. Ele faz fisioterapia, participa das aulas de música e está sempre bem-humorado. A estrutura é linda e a equipe é muito profissional. Obrigada Luz do Universo!',
                'nota'       => 5,
                'ativo'      => true,
            ],
            [
                'nome'       => 'Fernanda Oliveira Costa',
                'parentesco' => 'Sobrinha da residente Sra. Conceição Oliveira',
                'texto'      => 'Escolhemos o Luz do Universo após visitar vários residenciais. A diferença é clara: aqui há amor no que fazem. Minha tia é bem cuidada, recebe atenção médica constante e tem uma rotina saudável. O espaço é muito bem cuidado e arejado. Vale cada centavo!',
                'nota'       => 5,
                'ativo'      => true,
            ],
            [
                'nome'       => 'Paulo Henrique Meireles',
                'parentesco' => 'Filho do residente Sr. Geraldo Meireles',
                'texto'      => 'No começo tínhamos receio, mas logo percebemos que a decisão foi a melhor possível. Meu pai tem Alzheimer e a equipe sabe exatamente como lidar com ele com carinho e competência. As enfermeiras são excepcionais. Muito grato a toda a equipe.',
                'nota'       => 5,
                'ativo'      => true,
            ],
            [
                'nome'       => 'Ana Paula Souza',
                'parentesco' => 'Filha da residente Sra. Iraci Souza',
                'texto'      => 'Minha mãe entrou com saúde debilitada e em poucos meses já estava muito melhor. A fisioterapia, a alimentação balanceada e o cuidado constante fizeram toda a diferença. A família fica tranquila sabendo que ela está em boas mãos. Super recomendo!',
                'nota'       => 4,
                'ativo'      => true,
            ],
        ];

        foreach ($depoimentos as $depoimento) {
            Depoimento::create($depoimento);
        }
    }
}
