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
 * Strings for component 'completion', language 'pt_br', version '2.0'.
 *
 * @package     completion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'Nota de aprovação';
$string['activities'] = 'Atividades';
$string['activitiescompleted'] = 'Atividades concluídas';
$string['activitycompletion'] = 'Conclusão de atividades no curso';
$string['addcourseprerequisite'] = 'Acrescentar prerequisitos do curso';
$string['afterspecifieddate'] = 'Após data especificada';
$string['aggregationmethod'] = 'Forma de agregação';
$string['all'] = 'Todos';
$string['any'] = 'Qualquer';
$string['approval'] = 'Aprovação';
$string['badautocompletion'] = 'Quando selecionar conclusão automática deve também habilitar pelo menos um requisito (abaixo).';
$string['completedunlocked'] = 'Opções de conclusão desbloqueadas';
$string['completedunlockedtext'] = 'Quando você salva as mudanças, o estado de conclusão de  todos os estudantes será apagado. Se você mudar de ideia, não salve os dados deste formulário.';
$string['completedwarning'] = 'Opções de conclusão bloqueadas';
$string['completedwarningtext'] = 'Um ou mais estudantes ({$a}) já marcaram esta atividade como concluída. Mudar os requisitos de conclusão apagará o estado de progresso e poderá causar confusão. Por isto as opções estão bloqueadas e não devem ser desbloqueadas a menos que seja absolutamente necessário.';
$string['completion'] = 'Acompanhamento de andamento';
$string['completion-alt-auto-enabled'] = 'O sistema marca este item como completado de acordo com as condições';
$string['completion-alt-auto-fail'] = 'Completado (não obteve nota para aprovação)';
$string['completion-alt-auto-n'] = 'Não completado';
$string['completion-alt-auto-pass'] = 'Completado (foi atingida a nota de aprovação)';
$string['completion-alt-auto-y'] = 'Completado';
$string['completion-alt-manual-enabled'] = 'Os cursistas podem marcar manualmente este item como completado';
$string['completion-alt-manual-n'] = 'Não concluído; selecionar para deixar como concluído';
$string['completion-alt-manual-y'] = 'Concluído; selecionar para deixar como não concluído';
$string['completion-title-manual-n'] = 'Marcar como concluído';
$string['completion-title-manual-y'] = 'Marcar como não concluído';
$string['completion_automatic'] = 'Mostrar atividade como concluída quando as condições forem satisfeitas';
$string['completion_help'] = 'Se habilitada, a conclusão de atividade é acompanhada, manual ou automaticamente, sob certas condições. Se desejado, podem ser configuradas múltiplas condições. Nesse caso, a atividade só será considerada concluída quando TODAS as condições forem satisfeitas.

Uma marca próxima ao nome da atividade na página do curso indica que ela foi concluída.';
$string['completion_link'] = 'activity/completion';
$string['completion_manual'] = 'Os estudantes podem marcar manualmente a atividade como concluída';
$string['completion_none'] = 'Não indicar a conclusão de atividade';
$string['completiondisabled'] = 'Desativado, não é exibido nas configurações de atividade';
$string['completionenabled'] = 'Habilitado, controle pela configuração de atividades e de requisitos para concluí-las';
$string['completionexpected'] = 'Conclusão esperada em';
$string['completionexpected_help'] = 'Esta configuração especifica a data em que a atividade está prevista para ser concluída. A data não é mostrada aos alunos e só é exibida no relatório de conclusão da atividade.';
$string['completionicons'] = 'Caixas para marcar atividades concluídas';
$string['completionicons_help'] = 'Uma marca próxima ao nome da atividade pode ser usada para indicar que a atividade foi completada.

Se forem mostrados pontinhos, você pode clicar neles para marcar quando achar que já completou a atividade. (Se mudar de ideia é só clicar novamente). A marca é opcional e é só uma forma de acompanhar seu avanço no curso.

Se for mostrada uma caixa em branco, a marca aparecerá automaticamente quando você completar a atividade de acordo com as condições estabelecidas pelo professor.';
$string['completionmenuitem'] = 'Conclusão';
$string['completionnotenabled'] = 'Acompanhamento de conclusão não habilitado';
$string['completionnotenabledforcourse'] = 'Acompanhamento de conclusão não está habilitado neste curso';
$string['completionnotenabledforsite'] = 'Acompanhamento de conclusão não está habilitado neste site';
$string['completiononunenrolment'] = 'Conclusão quando desinscrever';
$string['completionsettingslocked'] = 'Configurações de conclusão bloqueadas';
$string['completionstartonenrol'] = 'Acompanhamento de conclusão começa na inscrição';
$string['completionstartonenrolhelp'] = 'Comece a acompanhar o progresso do aluno na conclusão do curso após a inscrição nos cursos';
$string['completionusegrade'] = 'Requer nota';
$string['completionusegrade_desc'] = 'Estudante deve receber uma nota para concluir esta atividade';
$string['completionusegrade_help'] = 'Se habilitado, a atividade será considerada concluída quando o cursista receber uma nota. Os ícones de aprovado ou reprovado podem ser exibidos se for fixada uma nota de aprovação para a atividade.';
$string['completionview'] = 'Requer visualização';
$string['completionview_desc'] = 'O estudante deve visualizar esta atividade para concluí-la';
$string['configenablecompletion'] = 'Quando habilitado, permite ligar o acompanhamento de conclusão de atividades no nível do curso.';
$string['confirmselfcompletion'] = 'Confirmar auto-concluir';
$string['coursealreadycompleted'] = 'Você já completou este curso';
$string['coursecomplete'] = 'Curso concluído';
$string['coursecompleted'] = 'Curso concluído';
$string['coursegrade'] = 'Nota do curso';
$string['courseprerequisites'] = 'Pré-requisitos do curso';
$string['coursesavailable'] = 'Cursos disponíveis';
$string['coursesavailableexplaination'] = '<i>Critérios de conclusão do curso devem ser definidos para um curso para aparecer nesta lista</i>';
$string['criteria'] = 'Critérios';
$string['criteriagroup'] = 'Grupo de critérios';
$string['criteriarequiredall'] = 'Todos os critérios abaixo são necessários';
$string['criteriarequiredany'] = 'Qualquer um dos critérios abaixo são necessários';
$string['csvdownload'] = 'Download em formato de planilha (UTF-8. csv)';
$string['datepassed'] = 'Data passada';
$string['days'] = 'Dias';
$string['daysafterenrolment'] = 'Dias após a inscrição';
$string['deletecoursecompletiondata'] = 'Excluir dados de conclusão de curso';
$string['durationafterenrolment'] = 'Duração após a inscrição';
$string['editcoursecompletionsettings'] = 'Editar configurações de conclusão do curso';
$string['enablecompletion'] = 'Ativar acompanhamento de conclusão';
$string['enrolmentduration'] = 'Dias restantes';
$string['err_noactivities'] = 'Informações de conclusão não estão ativadas para nenhuma atividade, de modo que nenhuma informação pode ser exibida. Você pode ativar informações de conclusão editando as configurações para uma atividade.';
$string['err_nocourses'] = 'O acompanhamento de conclusão de curso não está habilitado para nenhum outro curso e, por isto, nada pode ser mostrado. Você pode habilitar o acompanhamento de conclusão de curso nas configurações do curso.';
$string['err_nograde'] = 'Não foi fixada uma nota de aprovação para este curso. Para habilitar estes critérios deve criar uma nota de aprovação para o curso.';
$string['err_noroles'] = 'Não há papéis com a permissão \'moodle/course:markcomplete\' neste curso. Este permissão pode ser acrescentada na definição dos papéis.';
$string['err_nousers'] = 'Não há cursistas neste curso ou grupo para os que possa ser mostrada a informação de progresso no curso. (Por padrão, a informação de progresso só é mostrada para os cursistas, assim, este erro será mostrado se não houver cursistas. Os administradores podem alterar esta opção nas telas de administração).';
$string['err_settingslocked'] = 'Um ou mais cursistas já cumpriram o critério, por isto a configuração está bloqueada. Desbloquear a configuração dos critérios apagará os dados de usuários e poderá causar confusão.';
$string['err_system'] = 'Ocorreu um erro interno no sistema de acompanhamento de tarefas concluídas. (Os administradores do ambiente podem habilitar a informação sobre falhas para ver mais detalhes).';
$string['excelcsvdownload'] = 'Download em formato compatível com Excel (. csv)';
$string['fraction'] = 'Fração';
$string['inprogress'] = 'Em andamento';
$string['manualcompletionby'] = 'Conclusão manual por';
$string['manualselfcompletion'] = 'Conclusão manual por si mesmo';
$string['markcomplete'] = 'Marcar como concluído';
$string['markedcompleteby'] = 'Marcado como concluída por {$a}';
$string['markingyourselfcomplete'] = 'Se marcar como concluído';
$string['moredetails'] = 'Mais detalhes';
$string['nocriteriaset'] = 'Não existem critérios de conclusão para este curso';
$string['notenroled'] = 'Você não está inscrito neste curso';
$string['notyetstarted'] = 'Não iniciado ainda';
$string['overallcriteriaaggregation'] = 'Tipo de critério global de agregação';
$string['passinggrade'] = 'Nota de aprovação';
$string['pending'] = 'Pendentes';
$string['periodpostenrolment'] = 'Período de pós-inscrição';
$string['prerequisites'] = 'Pré-requisitos';
$string['prerequisitescompleted'] = 'Prérequisitos completados';
$string['progress'] = 'Progresso do estudante';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['recognitionofpriorlearning'] = 'Reconhecimento de aprendizagem anterior';
$string['remainingenroledfortime'] = 'Permanecer matriculado por um período específico de tempo';
$string['remainingenroleduntildate'] = 'Permanecer matriculado até uma data especificada';
$string['reportpage'] = 'Exibindo usuários {$a->from} a {$a->to} de {$a->total}.';
$string['requiredcriteria'] = 'Critérios exigidos';
$string['restoringcompletiondata'] = 'Escrevendo dados de conclusão';
$string['saved'] = 'Salvo';
$string['seedetails'] = 'Ver detalhes';
$string['self'] = 'Auto';
$string['selfcompletion'] = 'Auto conclusão';
$string['showinguser'] = 'Exibindo usuário';
$string['unenrolingfromcourse'] = 'Cancelando inscrição no curso';
$string['unenrolment'] = 'Desinscrição';
$string['unit'] = 'Unidade';
$string['unlockcompletion'] = 'Desbloquear opções de conclusão';
$string['unlockcompletiondelete'] = 'Desbloquear opções de conclusão e apagar os dados de progresso dos usuários';
$string['usealternateselector'] = 'Usar o seletor de cursos alternativo';
$string['usernotenroled'] = 'Usuário não está inscrito neste curso';
$string['viewcoursereport'] = 'Ver relatório do curso';
$string['viewingactivity'] = 'Visualizando o {$a}';
$string['writingcompletiondata'] = 'Gravando dados de conclusão';
$string['xdays'] = '{$a} dias';
$string['yourprogress'] = 'Seu progresso';
