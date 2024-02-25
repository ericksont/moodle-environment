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
 * Strings for component 'workshop', language 'pt_br', version '2.0'.
 *
 * @package     workshop
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesscontrol'] = 'Controle de acesso';
$string['aggregategrades'] = 'Recalcular notas';
$string['aggregation'] = 'Agregação de notas';
$string['allocate'] = 'Alocar envios';
$string['allocatedetails'] = 'esperados: {$a->expected}<br />enviados: {$a->submitted}<br />a serem alocados: {$a->allocate}';
$string['allocation'] = 'Alocação de envio';
$string['allocationdone'] = 'Alocação concluída';
$string['allocationerror'] = 'Erro de alocação';
$string['allsubmissions'] = 'Todos os envios';
$string['alreadygraded'] = 'Já foi avaliada';
$string['areainstructauthors'] = 'Instruções para envio';
$string['areainstructreviewers'] = 'Instruções para avaliação';
$string['areasubmissionattachment'] = 'Anexos do envio';
$string['areasubmissioncontent'] = 'Textos enviados';
$string['assess'] = 'Avaliar';
$string['assessedexample'] = 'Exemplo de envio avaliado';
$string['assessedsubmission'] = 'Envio avaliado';
$string['assessingexample'] = 'Avaliando o exemplo enviado';
$string['assessingsubmission'] = 'Avaliação de envio';
$string['assessment'] = 'Avaliação';
$string['assessmentby'] = 'por <a href="{$a->url}">{$a->name}</a>';
$string['assessmentbyfullname'] = 'Avaliação por {$a}';
$string['assessmentbyyourself'] = 'Sua avaliação';
$string['assessmentdeleted'] = 'Avaliação desalocada';
$string['assessmentend'] = 'Prazo limite para avaliação';
$string['assessmentenddatetime'] = 'Prazo limite da avaliação: {$a->daydatetime} ({$a->distanceday})';
$string['assessmentform'] = 'Formulário de avaliação';
$string['assessmentofsubmission'] = '<a href="{$a->assessmenturl}">Avaliação</a> de <a href="{$a->submissionurl}">{$a->submissiontitle}</a>';
$string['assessmentreference'] = 'Avaliação de referência';
$string['assessmentreferenceconflict'] = 'Não é possível avaliar um envio de exemplo para o qual você forneceu uma referência de avaliação.';
$string['assessmentreferenceneeded'] = 'Você precisa avaliar esse envio de exemplo para fornecer uma referência de avaliação. Clique \'Continuar\' para avaliar o envio.';
$string['assessmentsettings'] = 'Configurações da avaliação';
$string['assessmentstart'] = 'Aberto para avaliação a partir de';
$string['assessmentstartdatetime'] = 'Aberto para avaliação de {$a->daydatetime} ({$a->distanceday})';
$string['assessmentweight'] = 'Peso da avaliação';
$string['assignedassessments'] = 'Envios atribuídos para avaliação';
$string['assignedassessmentsnone'] = 'Você não recebeu nenhum envio para avaliar';
$string['backtoeditform'] = 'Voltar para formulário de edição';
$string['byfullname'] = 'por <a href="{$a->url}">{$a->name}</a>';
$string['calculategradinggrades'] = 'Calcular notas de avaliação';
$string['calculategradinggradesdetails'] = 'esperado: {$a->expected}<br />calculado: {$a->calculated}';
$string['calculatesubmissiongrades'] = 'Calcular notas de envios';
$string['calculatesubmissiongradesdetails'] = 'esperado: {$a->expected}<br />calculado: {$a->calculated}';
$string['chooseuser'] = 'Escolher usuário...';
$string['clearaggregatedgrades'] = 'Limpar todas as notas agregadas';
$string['clearaggregatedgrades_help'] = 'As notas agregadas do envio e as notas da avaliação serão zeradas. Você pode voltar a calcular estas notas a partir do zero em fase de avaliação de classificação novamente.';
$string['clearaggregatedgradesconfirm'] = 'Tem certeza de que deseja limpar as notas calculadas dos envios e as notas de avaliação?';
$string['clearassessments'] = 'Limpar avaliações';
$string['clearassessments_help'] = 'As notas calculadas do envio e as notas de avaliação serão zeradas. A informação de como os formulários de avaliação são preenchidos ainda é mantida, mas todos os revisores devem abrir novamente o formulário de avaliação e salvá-lo novamente para obter as notas atribuídas novamente.';
$string['clearassessmentsconfirm'] = 'Tem certeza de que deseja limpar todas as notações de avaliação? Você não poderá recuperar as informações por conta própria, os revisores terão de reavaliar as submissões alocadas.';
$string['configexamplesmode'] = 'O modo padrão de avaliação de exemplos dos laboratórios de avaliação';
$string['configgrade'] = 'Nota máxima padrão para envio nos laboratórios de avaliação';
$string['configgradedecimals'] = 'Número padrão de dígitos que devem ser mostrados após o ponto decimal ao exibir notas.';
$string['configgradinggrade'] = 'Nota máxima padrão para a avaliação nos laboratórios de avaliação';
$string['configmaxbytes'] = 'Padrão máximo de tamanho de arquivo enviado para todos os laboratórios de avaliação no site (sujeito a limites de cursos e outras configurações locais)';
$string['configstrategy'] = 'Estratégia de classificação padrão para os laboratórios de avaliação';
$string['createsubmission'] = 'Enviar';
$string['daysago'] = '{$a} dias atrás';
$string['daysleft'] = 'faltam {$a} dias';
$string['daystoday'] = 'hoje';
$string['daystomorrow'] = 'amanhã';
$string['daysyesterday'] = 'ontem';
$string['editassessmentform'] = 'Editar formulário de avaliação';
$string['editassessmentformstrategy'] = 'Editar formulário de avaliação ({$a})';
$string['editingassessmentform'] = 'Editando formulário de avaliação';
$string['editingsubmission'] = 'Edição de envio';
$string['editsubmission'] = 'Editar envio';
$string['err_multiplesubmissions'] = 'Ao editar este formulário, uma outra versão do envio foi salva. Envios múltiplos por usuário não são permitidos.';
$string['err_removegrademappings'] = 'Não foi possível remover os mapeamentos de nota não utilizados';
$string['evaluategradeswait'] = 'Por favor, aguarde até que as avaliações sejam avaliadas e as notas calculadas';
$string['evaluation'] = 'Cálculo da nota da avaliação';
$string['evaluationmethod'] = 'Método do cálculo da nota da avaliação';
$string['evaluationmethod_help'] = 'O método de avaliação de classificação determina como o grau de avaliação é calculado. Não há atualmente apenas uma opção - comparação com a melhor avaliação.';
$string['example'] = 'Exemplo de um envio';
$string['exampleadd'] = 'Adicionar exemplo de um envio';
$string['exampleassess'] = 'Avaliar exemplo de um envio';
$string['exampleassessments'] = 'Exemplos de envios para avaliar';
$string['exampleassesstask'] = 'Avaliar exemplos';
$string['exampleassesstaskdetails'] = 'esperados: {$a->expected} <br /> avaliados: {$a->assessed}';
$string['examplecomparing'] = 'Comparação de avaliações de exemplos de envios';
$string['exampledelete'] = 'Excluir exemplo';
$string['exampledeleteconfirm'] = 'Tem certeza de que deseja excluir o exemplo de envio a seguir? Clique em "Continuar" botão para excluir o envio.';
$string['exampleedit'] = 'Editar exemplo';
$string['exampleediting'] = 'Edição de exemplo';
$string['exampleneedassessed'] = 'Você tem que avaliar todos os exemplos de envios primeiro';
$string['exampleneedsubmission'] = 'Você tem que enviar seu trabalho e avaliar todos os exemplos de envios primeiro';
$string['examplesbeforeassessment'] = 'Os exemplos estão disponíveis após o envio e devem ser avaliados antes da avaliação por pares';
$string['examplesbeforesubmission'] = 'Exemplos devem ser avaliados antes de seu envio';
$string['examplesmode'] = 'Modo de avaliação de exemplos';
$string['examplesubmissions'] = 'Exemplos de envios';
$string['examplesvoluntary'] = 'A avaliação dos exemplos de envios é voluntária';
$string['feedbackauthor'] = 'Retorno para o autor';
$string['feedbackby'] = 'Comentários por {$a}';
$string['feedbackreviewer'] = 'Retorno para o revisor';
$string['formataggregatedgrade'] = '{$a->grade}';
$string['formataggregatedgradeover'] = '<del>{$a->grade}</del><br /><ins>{$a->over}</ins>';
$string['formatpeergrade'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span>';
$string['formatpeergradeover'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span>';
$string['formatpeergradeoverweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span> @ <span class="weight">{$a->weight}</span>';
$string['formatpeergradeweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span> @ <span class="weight">{$a->weight}</span>';
$string['givengrades'] = 'Notas dadas';
$string['gradecalculated'] = 'Nota calculada para envio';
$string['gradedecimals'] = 'Casas decimais nas notas';
$string['gradegivento'] = '&gt;';
$string['gradeinfo'] = 'Nota: {$a->received} de {$a->max}';
$string['gradeitemassessment'] = '{$a->workshopname} (avaliação)';
$string['gradeitemsubmission'] = '{$a->workshopname} (envio)';
$string['gradeover'] = 'Sobrescrever nota para envio';
$string['gradereceivedfrom'] = '&lt;';
$string['gradesreport'] = 'Relatório de notas do laboratório de avaliação';
$string['gradinggrade'] = 'Nota para avaliação';
$string['gradinggrade_help'] = 'Esta configuração define a nota máxima que pode ser obtida para uma avaliação de envio.';
$string['gradinggradecalculated'] = 'Nota calculada para avaliação';
$string['gradinggradeof'] = 'Nota para avaliação (de{$a})';
$string['gradinggradeover'] = 'Sobrescrever nota para avaliação';
$string['gradingsettings'] = 'Configurações de nota';
$string['iamsure'] = 'Sim, eu tenho certeza';
$string['info'] = 'Informação';
$string['instructauthors'] = 'Instruções para envio';
$string['instructreviewers'] = 'Instruções para avaliação';
$string['introduction'] = 'Introdução';
$string['latesubmissions'] = 'Envios atrasados';
$string['latesubmissions_desc'] = 'Aceitar envios após o prazo limite';
$string['latesubmissions_help'] = 'Se habilitado, um autor pode enviar seu trabalho após o prazo limite de envio ou durante a fase de avaliação. No entanto, envio atrasado não pode ser editado.';
$string['latesubmissionsallowed'] = 'Envios atrasados são permitidos';
$string['maxbytes'] = 'Tamanho máximo do arquivo';
$string['modulename'] = 'Laboratório de Avaliação';
$string['modulenameplural'] = 'Laboratórios de Avaliação';
$string['mysubmission'] = 'Meu envio';
$string['nattachments'] = 'Número máximo de anexos enviados';
$string['noexamples'] = 'Nenhum exemplo ainda neste laboratório de avaliação';
$string['noexamplesformready'] = 'Você deve definir o formulário de avaliação antes de fornecer os envios de exemplo';
$string['nogradeyet'] = 'Nenhuma nota ainda';
$string['nosubmissionfound'] = 'Nenhum envio encontrado para este usuário';
$string['nosubmissions'] = 'Nenhum envio neste laboratório de avaliação';
$string['notassessed'] = 'Nada avaliado ainda';
$string['nothingtoreview'] = 'Nada para o revisor';
$string['notoverridden'] = 'Não sobrescrito';
$string['noworkshops'] = 'Não existem laboratório de avaliação neste curso';
$string['noyoursubmission'] = 'Você não enviou seu trabalho ainda';
$string['nullgrade'] = '-';
$string['participant'] = 'Participante';
$string['participantrevierof'] = 'Participante é revisor de';
$string['participantreviewedby'] = 'Participante revisado por';
$string['phaseassessment'] = 'Fase de avaliação';
$string['phaseclosed'] = 'Encerrado';
$string['phaseevaluation'] = 'Fase de cálculo da nota da avaliação';
$string['phasesetup'] = 'Fase de configuração';
$string['phasesubmission'] = 'Fase de envio';
$string['pluginadministration'] = 'Administração do laboratório de avaliação';
$string['pluginname'] = 'Laboratório de Avaliação';
$string['prepareexamples'] = 'Preparar exemplos de envios';
$string['previewassessmentform'] = 'Pré-visualizar';
$string['publishedsubmissions'] = 'Envios publicados';
$string['publishsubmission'] = 'Publicar envios';
$string['publishsubmission_help'] = 'Envios publicados ficam disponíveis aos outros quando o laboratório de avaliação for fechado.';
$string['reassess'] = 'Reavaliar';
$string['receivedgrades'] = 'Notas recebidas';
$string['recentassessments'] = 'Avaliações do laboratório de avaliação:';
$string['recentsubmissions'] = 'Envios do laboratório de avaliação:';
$string['saveandclose'] = 'Salvar e fechar';
$string['saveandcontinue'] = 'Salvar e continuar edição';
$string['saveandpreview'] = 'Salvar e pré-visualizar';
$string['selfassessmentdisabled'] = 'Auto-avaliação desativada';
$string['someuserswosubmission'] = 'Existe pelo menos um autor que ainda não enviou seu trabalho';
$string['sortasc'] = 'Ordenação crescente';
$string['sortdesc'] = 'Ordenação decrescente';
$string['strategy'] = 'Estratégia de classificação';
$string['strategy_help'] = 'A estratégia de classificação determina a forma de avaliação utilizado e do método de classificação de envios. Há 4 opções:

* Classificação acumulativa - Comentários e uma nota são dados de acordo com aspectos específicos
* Comentários - Comentários são feitos levando em conta aspectos específicos, mas nenhuma nota pode ser dada
* Número de erros - Comentários e uma avaliação de sim/não são dados de acordo com afirmações específicas
* Rubrica - Uma avaliação de nível é dada de acordo com critérios específicos';
$string['strategyhaschanged'] = 'A estratégia de classificação oficina mudou desde que o formulário foi aberto para edição.';
$string['submission'] = 'Envio';
$string['submissionattachment'] = 'Anexo';
$string['submissionby'] = 'Envio por {$a}';
$string['submissioncontent'] = 'Conteúdo enviado';
$string['submissionend'] = 'Prazo limite dos envios';
$string['submissionenddatetime'] = 'Prazo limite dos envios: {$a->daydatetime} ({$a->distanceday})';
$string['submissiongrade'] = 'Nota para envio';
$string['submissiongrade_help'] = 'Esta configuração especifica a nota máxima que pode ser obtida pelos trabalhos enviados.';
$string['submissiongradeof'] = 'Notar para envio (de{$a})';
$string['submissionsettings'] = 'Configurações de envio';
$string['submissionstart'] = 'Aberto para envios desde';
$string['submissionstartdatetime'] = 'Aberto para envio de
{$a->daydatetime} ({$a->distanceday})';
$string['submissiontitle'] = 'Título';
$string['switchingphase'] = 'Mudando a fase';
$string['switchphase'] = 'Mudar fase';
$string['switchphase10info'] = 'Você está prestes a mudar o workshop para <strong> fase de instalação</ strong>. Nesta fase, os usuários não podem modificar as suas submissões ou as suas avaliações. Os professores podem utilizar essa fase para alterar as configurações do workshop, modificar a estratégia de classificação dos formulários de ajustes de avaliação.';
$string['switchphase20info'] = 'Você está prestes a mudar o laboratório de avaliação para a  <strong>Fase de envio</strong>. Os estudantes podem enviar os seus trabalhos durante essa fase (dentro das datas de controle de acesso ao envio, se definidas). Os professores podem alocar envios para revisão por colegas.';
$string['switchphase30info'] = 'Você está prestes a mudar o workshop para a <strong>Fase de avaliação</strong>. Nessa fase, os avaliadores podem analisar os envios que lhes foram atribuídos (dentro das datas de controle de acesso de avaliação, se definidas).';
$string['switchphase40info'] = 'Você está prestes a mudar o laboratório de avaliação para a <strong>Fase de cálculo da nota da avaliação</strong>. Nessa fase, os usuários não podem modificar os seus envios ou as suas avaliações. Os professores podem utilizar as ferramentas de avaliação para calcular as notas finais e fornecer feedback aos avaliadores.';
$string['switchphase50info'] = 'Você está prestes a encerrar o laboratório de avaliação. Como resultado as notas calculadas aparecem no livro de notas, e os estudantes podem ver seus envios e suas avaliações de envios.';
$string['taskassesspeers'] = 'Avaliar colegas';
$string['taskassesspeersdetails'] = 'total: {$a->total}<br />pendente: {$a->todo}';
$string['taskassessself'] = 'Avaliar você mesmo';
$string['taskinstructauthors'] = 'Forneça instruções para envio';
$string['taskinstructreviewers'] = 'Forneça instruções para avaliação';
$string['taskintro'] = 'Atribua a introdução do workshop';
$string['tasksubmit'] = 'Envie seu trabalho';
$string['toolbox'] = 'Barra de ferramentas do workshop';
$string['undersetup'] = 'O workshop atualmente está sendo configurado. Por favor, espere até que ele mude para a próxima fase.';
$string['useexamples'] = 'Usar exemplos';
$string['useexamples_desc'] = 'Envios de exemplo são fornecidos para a prática na avaliação';
$string['useexamples_help'] = 'Se habilitado, os usuários podem tentar avaliar um ou mais envios de exemplo e comparar as suas avaliações com uma avaliação de referência. A nota não é computada na nota para avaliação.';
$string['usepeerassessment'] = 'Usar avaliação por pares';
$string['usepeerassessment_desc'] = 'Estudantes podem avaliar o trabalho dos outros';
$string['usepeerassessment_help'] = 'Se habilitado, um usuário pode ser alocado para avaliar envios de outros usuários e receberá uma nota como avaliador, além da nota para seu próprio envio.';
$string['userdatecreated'] = 'enviado em <span>{$a}</span>';
$string['userdatemodified'] = 'modificado em <span>{$a}</span>';
$string['userplan'] = 'Planejador do laboratório de avaliação';
$string['userplan_help'] = 'O planejador do laboratório de avaliação exibe todas as fases da atividade e lista as tarefas para cada fase. A fase atual é destacada e a conclusão da tarefa é indicada com um visto.';
$string['useselfassessment'] = 'Usar auto-avaliação';
$string['useselfassessment_desc'] = 'Estudantes podem avaliar seus próprios trabalhos';
$string['useselfassessment_help'] = 'Se habilitado, um usuário pode ser alocado para avaliar seu próprio envio e receberá uma nota como avaliador, além da nota para o seu próprio envio.';
$string['weightinfo'] = 'Peso: {$a}';
$string['withoutsubmission'] = 'Avaliador sem envio próprio';
$string['workshop:allocate'] = 'Alocar envios para avaliação';
$string['workshop:editdimensions'] = 'Editar formulários de avaliação';
$string['workshop:manageexamples'] = 'Gerenciar envios de exemplo';
$string['workshop:overridegrades'] = 'Sobrescrever as notas calculadas';
$string['workshop:peerassess'] = 'Avaliar colega';
$string['workshop:publishsubmissions'] = 'Publicar envios';
$string['workshop:submit'] = 'Enviar';
$string['workshop:switchphase'] = 'Mudar fase';
$string['workshop:view'] = 'Visualizar workshop';
$string['workshop:viewallassessments'] = 'Ver todas as avaliações';
$string['workshop:viewallsubmissions'] = 'Ver todos os envios';
$string['workshop:viewauthornames'] = 'Ver os nomes dos autores';
$string['workshop:viewauthorpublished'] = 'Ver os autores de envios publicados';
$string['workshop:viewpublishedsubmissions'] = 'Visualizar todos os envios publicados';
$string['workshop:viewreviewernames'] = 'Ver os nomes dos revisores';
$string['workshopfeatures'] = 'Recursos do workshop';
$string['workshopname'] = 'Nome do laboratório de avaliação';
$string['yourassessment'] = 'A sua avaliação';
$string['yoursubmission'] = 'Seu envio';
