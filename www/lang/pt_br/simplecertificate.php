<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'simplecertificate', language 'pt_br', version '2.0'.
 *
 * @package     simplecertificate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['awarded'] = 'Obitido';
$string['awardedto'] = 'Obtido para';
$string['cantdeleteissue'] = 'Ocorreu um erro ao remover os certificados emitidos';
$string['certificateimage'] = 'Arquivo de Imagem do certificado';
$string['certificateimage_help'] = 'Esta é a imagem que será utilizada no certificado';
$string['certificatename'] = 'Nome do certificado';
$string['certificatename_help'] = 'Nome do certificado';
$string['certificatetext'] = 'Texto do certificado';
$string['certificatetext_help'] = 'Este é o texto que será utilizado no certificado, algumas palavras especiais serão substituídas por variáveis, tais como nome do curso, o nome do estudante, nota ... Estes são:

{USERNAME} -> Nome completo do usuário

{COURSENAME} -> Nome do curso completo (ou um nome alternativo do curso definido)

{GRADE} -> Nota Formatada

{DATE} -> Data Formatada

{OUTCOME} -> Resultado

{HOURS} -> Carga horária do curso

{TEACHERS} -> Lista de professores

O texto pode usar HTML básico, as fontes básicas, tabelas, mas evite a definição qualquer posição.';
$string['certificatetextx'] = 'Posição Horizontal do texto do certificado\'';
$string['certificatetexty'] = 'Posição Vertical do texto do certificado\'';
$string['certificateverification'] = 'Verificação do Certificado';
$string['certlifetime'] = 'Manter os certificados emitidos por: (em Meses)';
$string['certlifetime_help'] = 'Está opção especifica por quanto tempo deve ser guardado um certificado emitido. Certificados emitidos mais velhos que o tempo determinado nesta opção será automaticamente removidos.';
$string['code'] = 'Código';
$string['completiondate'] = 'Conclusão de Curso';
$string['coursegrade'] = 'Nota do curso';
$string['coursehours'] = 'Carga horária do curso';
$string['coursehours_help'] = 'Carga horária do curso';
$string['coursename'] = 'Nome alternativo do Curso';
$string['coursename_help'] = 'Nome Alternativo do curso.

O nome alternativo do curso irá substituir o nome do curso no textmark {COURSENAME}, e também no nome do arquivo gerado  para download.
Muito útil quando um curso tem um nome, mas no certificado deveria parecer outro nome. Por exemplo:

Nome do curso:  "Trabalho de final de curso"
Nome alternativo "Português Instrumental"

Então, no texto de certificado, a textmark {COURSENAME} vai ser substituída por "Português Instrumental", e o nome do arquivo do certificado será portuges_instrumental-<NOME_DO_CERIFICADO>.pdf';
$string['coursetimereq'] = 'Minutos mínimos de participação no curso';
$string['coursetimereq_help'] = 'Coloque o tempo mínimo de participação (em minutos) que um estudante deve ter para conseguir obter o certificado';
$string['datefmt'] = 'Formato da data';
$string['datefmt_help'] = 'Coloque um formato de data válido aceito pelo PHP (http://www.php.net/manual/pt_BR/function.strftime.php). ou deixe-o em branco para usar o valor de formatação padrão definido pela a configuração de idioma do usuário.';
$string['defaultcertificatetextx'] = 'Posição Horizontal padrão do texto do certificado';
$string['defaultcertificatetexty'] = 'Posição Vertical padrão do texto do certificado';
$string['defaultheight'] = 'Altura Padrão';
$string['defaultwidth'] = 'Largura Padrão';
$string['deletissuedcertificates'] = 'Remover os certificados emitidos';
$string['delivery'] = 'Envio';
$string['delivery_help'] = 'Escolha como o certificado deve ser entregue aos alunos:<br>
<ul>
<li>Visualizar em uma nova janela: Abre uma nova janela no navegador do aluno contendo o certificado.</li>
<li>Forçar o download: Abre uma janela de download de arquivo para o aluno salvar em seu computador.</li>
<li>por Email: Envia o certificado para o email do aluno, e abre o certificado em uma nova janela do navegador.</li>
</ul><p>
Depois que estudante emite seu certificado, se ele clicar na atividade certificado aparecerá a data de emissão do certificado e ele poderá revisar ocertificado emitido</p>';
$string['designoptions'] = 'Opções de Design';
$string['download'] = 'Download de um único arquivo pdf com todos os certificados';
$string['emailcertificate'] = 'Email (ainda deve escolher salvar!)';
$string['emailfrom'] = 'Nome alternativo do remetente do email';
$string['emailfrom_help'] = 'Nome a ser usado como remetente dos email enviados';
$string['emailothers'] = 'Enviar email para outros';
$string['emailothers_help'] = 'Digite os endereços de emails que vão receber o alerta de emissão de certificado';
$string['emailstudenttext'] = 'Olá {$a->username},

	Segue em anexo o certificado do curso: {$a->course}.


ESTA É UMA MENSAGEM AUTOMÁTICA, NÃO RESPONDA POR FAVOR';
$string['emailteachermail'] = '{$a->student} recebeu o certificado: \'{$a->certificate}\' para o curso
{$a->course}.

Você pode vê-lo aqui:

    {$a->url}';
$string['emailteachermailhtml'] = '{$a->student} recebeu o certificado: \'<i>{$a->certificate}</i>\'
para o curso {$a->course}.

Você pode vê-lo aqui:

    <a href="{$a->url}">Certificate Report</a>.';
$string['emailteachers'] = 'Enviar email para os Professores';
$string['emailteachers_help'] = 'Quando habilitado, os professores recebem os emails toda vez que um estudante emitir um certificado.';
$string['filenotfound'] = 'Arquivo não encontrado: {$a}';
$string['getcertificate'] = 'Obter o Certificado';
$string['grade'] = 'Nota';
$string['gradefmt'] = 'Formato da nota';
$string['gradefmt_help'] = 'Pode-se escolher o formato da nota que são:<br>
<ul>
<li>Nota por percentual: Imprime a nota como um percentual.</li>
<li>Nota pot pontos: Imprime a nota por pontos, o valor da nota tirada.</li>
<li>Nota por conceito: Imprime o conceito relacionado a nota obtida (A, A+, B, ...).</li>
</ul>';
$string['gradeletter'] = 'Nota por Conceito';
$string['gradepercent'] = 'Nota por perrcentual';
$string['gradepoints'] = 'Nota por pontos';
$string['height'] = 'Altura do certificado';
$string['hours'] = 'horas';
$string['intro'] = 'Introdução';
$string['invalidcode'] = 'Código do certificado é inválido';
$string['issued'] = 'Emitidos';
$string['issueddate'] = 'Data da emissão';
$string['issueoptions'] = 'Opções de Emissão';
$string['keywords'] = 'cetificate, course, pdf, moodle';
$string['modulename'] = 'Certificado Simples';
$string['modulenameplural'] = 'Certificados Simples';
$string['neverdeleteoption'] = 'Nunca remover';
$string['nocertificatesissued'] = 'Nenhum certificado emitido';
$string['openbrowser'] = 'Visualizar em uma nova janela';
$string['opendownload'] = 'Pressione o botão abaixo para salvar o seu certificado no seu computador.';
$string['openemail'] = 'Pressione o botão abaixo e seu certificado será enviado por email.';
$string['openwindow'] = 'Pressione o botão abaixo para visualizar o seu certificado em uma nova tela';
$string['pluginadministration'] = 'Administração de Certificado';
$string['pluginname'] = 'Certificado Simples';
$string['printdate'] = 'Tipo de data do certificado';
$string['printdate_help'] = 'Esta é a data que será impressa, você pose escolher entre a data que o estudante completou o curso, ou a data de emissão do certificado.
Também pode-se escolher a data que uma certa atividade foi corrigida, se em algum dos casos o estudante não tiver a data, então a data de emissão será usada.';
$string['printgrade'] = 'Tipo de nota do certificado';
$string['printgrade_help'] = 'Pode-se escolher a nota que será impressa no certificado, esta pode ser a nota final do curso ou a nota em uma atividade.';
$string['printoutcome'] = 'Imprimir resultado (Outcome)';
$string['printoutcome_help'] = 'Você pode escolher qualquer resultado (outcome) definido neste curso. Será impresso o nome do resultado e o resultado recebido  pelo usuário. Um exemplo poderia ser: Resultado: Proficiente.';
$string['receiveddate'] = 'Data de Recebimento';
$string['report'] = 'Relatório';
$string['size'] = 'Tamanho do Certificado';
$string['size_help'] = 'Esse é o tamanho, Largura e Altura (em milímetros) do certificado, o padrão é A4 paisagem';
$string['summaryofattempts'] = 'Resumo dos certificados emitidos';
$string['textposition'] = 'Posicionamento do Texto do Certificado';
$string['textposition_help'] = 'Essas são as coordenadas XY (em milímetros) do texto do certificado';
$string['userdateformat'] = 'Formato definido pelas definições do usuário';
$string['viewcertificateviews'] = '{$a} certificados emitidos';
$string['width'] = 'Largura do certificado';
