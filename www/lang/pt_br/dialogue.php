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
 * Strings for component 'dialogue', language 'pt_br', version '2.0'.
 *
 * @package     dialogue
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmynewentries'] = 'Adicionar novas mensagens';
$string['addmynewentry'] = 'Adicionar minha nova mensagem';
$string['addsubject'] = 'Adicionar Assunto';
$string['addsubject_help'] = '<p> Você pode usar este link para adicionar um assunto para o diálogo. É uma boa idéia de ter sempre um assunto para o diálogo, mantém o diálogo sobre a pista e se concentra nas respostas sobre o tema. Se você quer começar a falar sobre outro assunto, é melhor para fechar o diálogo atual e iniciar um novo diálogo sobre o assunto. </p>';
$string['allowmultiple'] = 'Permitir que mais de um Diálogo com a mesma pessoa';
$string['allowmultiple_help'] = '<p> Esta opção permite que uma pessoa iniciar mais de um diálogo com alguém. O padrão é Não, que só permite um diálogo (aberta) entre duas pessoas. </p><p> Permitir múltiplos diálogos pode resultar em um abuso de esta facilidade. Algumas pessoas podem ser &quot;importunado&quot; por outros que abrem muitos diálogos indesejados com eles. </p>';
$string['allowstudentdialogues'] = 'Permitir diálogos entre alunos';
$string['attachment'] = 'Anexo:';
$string['cannotadd'] = 'Não é possível abrir um diálogo, a menos que você seja um membro deste grupo';
$string['cannotaddall'] = 'Não é possível abrir um diálogo com todos os participantes';
$string['close'] = 'Fechar';
$string['closed'] = 'Fechado';
$string['closeddialogues'] = 'Diálogos fechados';
$string['closedialogue'] = 'Fechar Diálogo';
$string['closedialogue_help'] = '<h1> Diálogos de fechamento </h1><p> Você pode fechar um diálogo a qualquer momento. Fechando um diálogo interrompe o diálogo e remove da sua lista atual de diálogos. Isto é, diálogos fechados não aparecem nesta página. </p><p> Você será capaz de ver diálogos fechados, mas você não pode adicionar a eles. No entanto, diálogos fechados pode ser excluído se você tiver atualizado o diálogo e definir um período diferente de zero dias para exclusões de diálogo. Após esse ponto, obviamente, não estará disponível até mesmo para visualização. </p><p> Se você fechar este diálogo, então você vai ter que começar um novo diálogo, se você quiser continuar a &quot;falar&quot; com esta pessoa. Essa pessoa vai voltar a aparecer na lista de pessoas que você pode começar diálogos com. </p>';
$string['configtrackreadentries'] = 'Defina como &quot;sim&quot; se você quiser acompanhar lido / não lido para cada usuário.';
$string['confirmclosure'] = 'Você está encerrando um diálogo com {$a}. Diálogos encerrados não podem ser abertos novamente. Se você encerrar este diálogo poderá acessá-lo mas não editá-lo. Para contatar a mesma pessoa será necessário iniciar um novo diálogo. <br /><br />Tem certeza que quer encerrar este Diálogo ?';
$string['currentattachment'] = 'Anexo atual:';
$string['deleteafter'] = 'Excluir diálogos fechados após (Dias)';
$string['deleteafter_help'] = '<h1> Exclusão de Diálogos </h1><p> Esta opção define o intervalo de tempo em dias para a exclusão dos diálogos. Ela só se aplica aos diálogos FECHADOS. </p><p> Se o período de tempo é definido para zero, então os diálogos nunca são excluídos. </p>';
$string['deleteattachment'] = 'Excluir anexo';
$string['dialogue:close'] = 'Fechar';
$string['dialogue:manage'] = 'Gerenciar';
$string['dialogue:open'] = 'Abrir';
$string['dialogue:participate'] = 'Participar';
$string['dialogue:participateany'] = 'Participar de qualquer diálogo';
$string['dialogue:viewall'] = 'Ver qualquer diálogo';
$string['dialoguebetween'] = 'Diálogo entre {$a->sender} e {$a->recipient}';
$string['dialogueclosed'] = 'Diálogo Fechado';
$string['dialogueintro'] = 'Introdução do diálogo';
$string['dialoguemail'] = '{$a->userfrom} enviou uma nova mensagem de diálogo para \'{$a->dialogue}\'.
Você pode acessar esta mensagem no seguinte endereço:
{$a->url}';
$string['dialoguemailhtml'] = '{$a->userfrom} postou uma nova mensagem <i>&quot;{$a->dialogue}</i> \' <br /><br /> Você pode vê-lo anexado ao seu <a href="{$a->url}">diálogo</a> .';
$string['dialoguename'] = 'Nome do diálogo';
$string['dialogueopened'] = 'iálogo aberto com {$a->name} </p><p> Você tem R $ a-&gt; minutos EditTime para editá-lo se você quiser fazer quaisquer alterações. </p>';
$string['dialoguetype'] = 'Tipo de Diálogo';
$string['dialoguetype_help'] = '<h1> Tipos de diálogo </h1><p> Existem três tipos de Diálogos. </p><ol><li><p> <b>Professor para o aluno</b> Isto permite diálogos entre professores e alunos. Diálogos pode ser iniciado por professores ou alunos. Nas listas de pessoas, os professores só ver os alunos e os estudantes só ver professores. </p></li><li><p> <b>Aluno para aluno</b> Isto permite diálogos entre os alunos. Os professores <b>não</b> estão incluídos em todo este tipo de diálogo </p></li><li><p> Isso permite que <b>todos</b> todos na classe para iniciar um diálogo com qualquer outra pessoa. Os professores podem iniciar diálogos com outros professores e estudantes, os alunos podem iniciar o diálogo com outros alunos e professores. </p></li></ol>';
$string['dialoguewith'] = 'Diálogo com {$a}';
$string['edittime'] = 'Editar tempo (minutos)';
$string['edittime_help'] = '<h1> Definir Editar hora </h1><p> Esta opção controla o tempo que o usuário tem para editar uma entrada de diálogo depois de ter sido submetido. </p><p> Após o tempo de edição tenha decorrido o usuário não será mais permitido editar o post e, se permitido, uma notificação de e-mail do post será enviada. </p>';
$string['erroremptymessage'] = 'Erro: mensagem vazia.';
$string['everybody'] = 'Todo o mundo';
$string['firstentry'] = 'Primeira entrada';
$string['furtherinformation'] = 'Mais informações';
$string['lastentry'] = 'Última Entrada';
$string['maildefault'] = '<h1> Definir notificação de correio </h1><p> Esta opção determina se as mensagens de notificação são enviadas. Se esta opção estiver definida para &quot;Sim&quot; um e-mail curto é enviado para o destinatário de uma nova entrada. A mensagem de e-mail não contém o texto da entrada, simplesmente uma frase para dizer uma nova entrada foi adicionada e um link para o diálogo. </p><p> Note que esta opção se aplica a todos os diálogos ativos na instância de diálogo. A opção pode ser alterada a qualquer momento.';
$string['maildefault_help'] = '@ TODO';
$string['mailnotification'] = 'Aviso via email';
$string['mailnotification_help'] = 'Notificação de ajuda do correio';
$string['modulename'] = 'Diálogo';
$string['modulenameplural'] = 'Diálogos';
$string['multiple_help'] = '<h1> Diálogos múltiplss </h1><p> Esta opção permite a uma pessoa iniciar mais de um diálogo com alguém. O padrão é Não, que só permite um diálogo (aberta) entre duas pessoas. </p><p> Permitir múltiplos diálogos pode resultar em um abuso de esta facilidade. Algumas pessoas podem ser "importunado" por outros que abrem muitos diálogos indesejados com eles. </p>';
$string['multipleconversations'] = 'Permitir mais de um Diálogo aberto com a mesma pessoa';
$string['multipleconversations_help'] = '@ TODO';
$string['namehascloseddialogue'] = '{$a} encerrou o diálogo';
$string['newdialogueentries'] = 'Novas mensagens do diálogo';
$string['newentry'] = 'Nova mensagem';
$string['noavailablepeople'] = 'Não há ninguém disponível para ter um diálogo.';
$string['noentry'] = 'Nenhuma entrada';
$string['nopersonchosen'] = 'Nenhuma pessoa escolhida';
$string['nosubject'] = 'Sem assunto';
$string['notavailable'] = 'Visitantes não podem participar das atividades de Diálogo';
$string['notextentered'] = 'Nenhum texto inserido';
$string['notstarted'] = 'Você ainda não começou este diálogo';
$string['notyetseen'] = 'Ainda não visto';
$string['numberofentries'] = 'Número de entradas';
$string['numberofentriesadded'] = '<p>Número de mensagens adicionadas: {$a->number}</p><p>Você tem {$a->edittime} mins para editar, se desejar fazer alguma alteração.</p>';
$string['of'] = 'de';
$string['onwrote'] = 'Em {$a->timestamp} {$a->picture} {$a->author} escreveu';
$string['onyouwrote'] = 'Em  {$a->timestamp} {$a->picture} você escreveu';
$string['open'] = 'Iniciado';
$string['openadialoguewith'] = 'Abrir um diálogo com';
$string['opendialogue'] = 'Enviar diálogo';
$string['opendialogueentries'] = 'Abrir mensagens do diálogo';
$string['opendialogues'] = 'Diálogos Abertos';
$string['otherdialogues'] = 'Outros diálogos';
$string['pane0'] = 'Abrir um Diálogo';
$string['pane1'] = '{$a} Diálogos atuais abertos';
$string['pane1one'] = 'Um Diálogo Aberto';
$string['pane3'] = '{$a} diálogos fechados';
$string['pane3one'] = 'Um diálogo fechado';
$string['pluginadministration'] = 'Administração de Diálogo';
$string['pluginname'] = 'Diálogo';
$string['posts'] = 'mensagens';
$string['questions'] = 'Questões';
$string['questions_help'] = 'Ajuda de questões';
$string['replyupdated'] = 'Responder atualizados';
$string['seen'] = 'Visto {$a} atrás';
$string['sendmailmessages'] = 'Enviar mensagens de correio sobre as minhas novas entradas';
$string['status'] = 'Estado';
$string['studenttostudent'] = 'Aluno para aluno';
$string['subject'] = 'Assunto';
$string['subjectadded'] = 'Assunto Adicionado';
$string['teachertostudent'] = 'Professor para o aluno';
$string['trackdialogue'] = 'Controlar entradas não lidas';
$string['typefirstentry'] = 'Digite aqui a primeira entrada';
$string['typefollowup'] = 'Digite aqui a nova mensagem';
$string['typeofdialogue'] = 'Tipo de Diálogo';
$string['typeofdialogue_help'] = 'Tipo de ajuda do Diálogo';
$string['typereply'] = 'Digite aqui a resposta';
$string['unread'] = 'Mensagens não lidas';
$string['unreadnumber'] = '{$a} mensagens não lidas';
$string['unreadone'] = '1 mensagem não lida';
$string['updated'] = '(Atualizado em, {$a})';
$string['viewallentries'] = 'Ver {$a} mensagens do diálogo';
