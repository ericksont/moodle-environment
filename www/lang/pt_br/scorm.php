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
 * Strings for component 'scorm', language 'pt_br', version '2.0'.
 *
 * @package     scorm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activation'] = 'Ativação';
$string['activityloading'] = 'Você será redirecionado à atividade em';
$string['activitypleasewait'] = 'Carregando atividade, por favor, aguarde ...';
$string['advanced'] = 'Parâmetros';
$string['allowapidebug'] = 'Debug e rastreamento da API ativa (confugra a captura da mascara com apidebugmask)';
$string['allowtypeexternal'] = 'Habilitar pacote do tipo externo';
$string['allowtypeimsrepository'] = 'Habilitar pacote do tipo IMS';
$string['allowtypelocalsync'] = 'Habilitar tipo de pacote baixados';
$string['apidebugmask'] = 'Macara de captura de debug de API - use um regex simples em &lt;username&gt;:&lt;activityname&gt; ex. admin:.* permite o debug para admins apenas';
$string['areacontent'] = 'Arquivos de conteúdo';
$string['areapackage'] = 'Pacote de arquivos';
$string['asset'] = 'Recurso';
$string['assetlaunched'] = 'Recurso - Visto';
$string['attempt'] = 'tentativa';
$string['attempt1'] = '1 tentativa';
$string['attempts'] = 'Tentativas';
$string['attemptsx'] = '{$a} tentativas';
$string['attr_error'] = 'Valor errado para o atributo ({$a->attr}) no tag {$a->tag}.';
$string['autocontinue'] = 'Continuação automática';
$string['autocontinue_help'] = '<p>Se Continuação Automática estiver assinalada como SIM, quando um SCO chamar o método "close communication", automaticamente o próximo SCO disponível será iniciado.</p>

<p>Se estiver assinalado NÃO, os usuários terão de usar o botão "Continue" para seguir adiante.</p>';
$string['autocontinuedesc'] = 'Esta opção define como padrão a continuação automática';
$string['averageattempt'] = 'Média de tentativas';
$string['badmanifest'] = 'Erros no manifesto: consulte o relatório de erros';
$string['badpackage'] = 'O pacote apresenta problemas. Controle e tente novamente';
$string['browse'] = 'Visitar';
$string['browsed'] = 'Visto';
$string['browsemode'] = 'Modo de pré-visualização';
$string['browserepository'] = 'Navegar no repositório';
$string['cannotfindsco'] = 'Não encontrou SCO';
$string['chooseapacket'] = 'Escolher ou atualizar um pacote';
$string['completed'] = 'Concluído';
$string['confirmloosetracks'] = 'Atenção: provavelmente este pacote foi modificado. Se a estrutura for mudada, os registros das interações dos usuários podem ser perdidos durante a atualização';
$string['contents'] = 'Conteúdo';
$string['coursepacket'] = 'Pacote do curso';
$string['coursestruct'] = 'Estrutura do curso';
$string['currentwindow'] = 'Janela atual';
$string['datadir'] = 'Erro no sistema de arquivos: não é possível criar um diretório para os dados do curso';
$string['deleteallattempts'] = 'Remova todas as tentativas SCORM';
$string['deleteattemptcheck'] = 'Tem certeza que deseja excluir completamente estas tentativas ?';
$string['details'] = 'Detalhes do registro';
$string['directories'] = 'Mostrar os links do diretório';
$string['display'] = 'Mostrar';
$string['displayattemptstatus'] = 'Exibir status da tentativa';
$string['displayattemptstatus_help'] = 'Caso habilitado, pontuações e notas por tentativas serão exibidas na página de rascunho do SCORM.';
$string['displayattemptstatusdesc'] = 'Esta preferência configura o valor padrão para exibir a configuração do status da tentativa';
$string['displaycoursestructure'] = 'Mostrar índice na página de entrada';
$string['displaycoursestructure_help'] = 'Caso habilitado, a tabela de conteúdo será exibida na página de rascunho do SCORM.';
$string['displaycoursestructuredesc'] = 'Esta preferência define o valor padrão para a estrutura do curso de exibição do ajuste página de entrada';
$string['displaydesc'] = 'Esta opção define se visualizar ou não o pacote em uma atividade';
$string['domxml'] = 'biblioteca DOMXML externa';
$string['duedate'] = 'Data de entrega';
$string['element'] = 'Elemento';
$string['enter'] = 'Entrar';
$string['entercourse'] = 'Entrar no curso';
$string['errorlogs'] = 'Relatório de erros';
$string['everyday'] = 'Todos os dias';
$string['everytime'] = 'Quando for usado';
$string['exceededmaxattempts'] = 'Você atingiu a número máximo de tentativas.';
$string['exit'] = 'Sair do curso SCORM';
$string['exitactivity'] = 'Sair da atividade';
$string['expired'] = 'Desculpe, este atividade fechada em {$a} e não está mais disponível';
$string['external'] = 'Atualizar o tempo nos pacotes externos';
$string['failed'] = 'Falhou';
$string['finishscorm'] = 'Se você já finalizou essa atividade, {$a}';
$string['finishscormlinkname'] = 'clique aqui para voltar à página do curso';
$string['firstaccess'] = 'Primeiro acesso';
$string['firstattempt'] = 'Primeira tentativa';
$string['forcecompleted'] = 'Forçar completar';
$string['forcecompleted_help'] = 'Se ativado, o status da tentativa atual é forçado a &quot;concluído&quot;. Essa configuração só é aplicável a pacotes SCORM 1.2. É útil se o pacote SCORM não lidar com revisitar uma tentativa corretamente, em revisão ou o modo de navegação, ou incorretamente questões do status de conclusão.';
$string['forcecompleteddesc'] = 'Esta preferência define o valor padrão para a força de configuração concluída';
$string['forcejavascript'] = 'Força usuários a utilizarem Javascript';
$string['forcejavascript_desc'] = 'Se ativado (recomendado) isso impede o acesso a objetos SCORM quando o JavaScript não é suportado / habilitado em um navegador dos usuários. Se desabilitado o usuário pode visualizar o SCORM, mas API comunicação falhará e nenhuma informação grau será salvo';
$string['forcejavascriptmessage'] = 'Javascript é necessário para visualizar este objeto, por favor habilite Javascript no seu navegador e tente novamente.';
$string['forcenewattempt'] = 'Forçar nova tentativa';
$string['forcenewattempt_help'] = 'Caso habilitado, cada vez que um pacote SCORM seja acessado será contabilizada como uma nova tentativa.';
$string['forcenewattemptdesc'] = 'Esta preferência define o valor padrão para a  configuração forçada de nova tentativa';
$string['found'] = 'Manifesto encontrado';
$string['frameheight'] = 'Configura a altura predefinida do frame utilizado';
$string['framewidth'] = 'Configura a largura predefinida do frame utilizado';
$string['fullscreen'] = 'Preencher toda a tela';
$string['general'] = 'Dados Gerais';
$string['gradeaverage'] = 'Média das notas';
$string['gradeforattempt'] = 'Avaliação por tentativa';
$string['gradehighest'] = 'Nota mais alta';
$string['grademethod'] = 'Método de avaliação';
$string['grademethod_help'] = '<p>Os resultados de uma atividade SCORM/AICC mostrada nas Páginas de Avaliação podem ser calculados em vários modos:</p>
    <ul>
	<li><b>Estado dos SCOes</b><br />Este modo apresenta o número de SCOes concluídos na atividade. O valor máximo é o número de SCOes.</li>
	<li><b>Nota mais alta</b><br />A página de Avaliação irá mostrar o maior resultado obtido pelos usuários em todos os SCOes concluídos.</li>
	<li><b>Média das Notas</b><br />Caso você escolha este modo, o será calculada a média de todos os resultados.</li>
	<li><b>Soma de notas</b><br />Com este modo todos os resultados serão somados.</li>
</ul>';
$string['grademethoddesc'] = 'Esta opção define a modalidade padrão de avaliação';
$string['gradereported'] = 'Nota recebida';
$string['gradescoes'] = 'Objetos de aprendizagem';
$string['gradesum'] = 'Soma de notas';
$string['height'] = 'Altura';
$string['hidden'] = 'Escondido';
$string['hidebrowse'] = 'Esconder botão Prévia';
$string['hidebrowse_help'] = 'O modo de visualização permite que um estudante navegue em uma atividade antes da tentativa. Se o modo de visualização estiver desativado, o botão de visualização ficará oculto.';
$string['hidebrowsedesc'] = 'Esta opção define se habilitar ou não a prévia';
$string['hideexit'] = 'Esconder o botão Sair';
$string['hidenav'] = 'Esconder botões de navegação';
$string['hidenavdesc'] = 'Esta opção define se mostrar ou ocultar os botões de navegação';
$string['hidereview'] = 'Esconder o botão Revisão';
$string['hidetoc'] = 'Mostrar o índice no player';
$string['hidetoc_help'] = 'Esta configuração especifica como a tabela de conteúdo será exibida no reprodutor de SCORM';
$string['hidetocdesc'] = 'Esta opção define se mostrar ou ocultar a estrutura de navegação do curso';
$string['highestattempt'] = 'Tentativa mais alta';
$string['identifier'] = 'Identificador da questão';
$string['incomplete'] = 'Incompleto';
$string['info'] = 'Info';
$string['interactions'] = 'Interações';
$string['invalidactivity'] = 'Atividade SCORM está correta';
$string['last'] = 'Último acesso em';
$string['lastaccess'] = 'Último acesso';
$string['lastattempt'] = 'Última tentativa';
$string['lastattemptlock'] = 'Bloqueio após tentativa final';
$string['lastattemptlock_help'] = 'Caso habilitada, os estudantes será impedidos de abrir o reprodutor de SCORM após utilizarem todas as tentativas.';
$string['lastattemptlockdesc'] = 'Esta preferência define o valor padrão para o bloqueio após a definição tentativa final';
$string['location'] = 'Mostrar a barra de endereço';
$string['max'] = 'Pontuação máxima';
$string['maximumattempts'] = 'Número de tentativas';
$string['maximumattempts_help'] = '<p>Isso define o número de tentativas permitidas ao usuário.<br />Isso funciona apenas com pacotes SCORM1.2 e AICC. SCORM2004 tem sua pŕopria definição do número máximo de tentativas</p>';
$string['maximumattemptsdesc'] = 'Esta opção define o padrão para número máximo de tentativas';
$string['maximumgradedesc'] = 'Esta opção define o padrão para o cálculo da pontuação máxima';
$string['menubar'] = 'Mostrar a barra de menu';
$string['min'] = 'Pontuação mínima';
$string['missing_attribute'] = 'Falta o atributo {$a->attr} na tag {$a->tag}';
$string['missing_tag'] = 'Falta tag {$a->tag}';
$string['missingparam'] = 'Um requisito está faltando ou está errado';
$string['mode'] = 'Modalidade';
$string['modulename'] = 'Pacote SCORM';
$string['modulename_help'] = 'SCORM e AICC são coleções de especificações que habilitam interoperabilidade, acessibilidade e reusabilidade de conteúdo baseado na WEB. O módulo SCORM/AICC permite que pacotes SCORM/AICC sejam incluídos no curso.';
$string['modulenameplural'] = 'SCORMs';
$string['navigation'] = 'Navegação';
$string['newattempt'] = 'Começar uma nova tentativa';
$string['next'] = 'Próxima';
$string['no_attributes'] = 'Tag {$a->tag} deve ter atributos';
$string['no_children'] = 'Tag {$a->tag} deve ter filhos';
$string['noactivity'] = 'Nenhum registro';
$string['noattemptsallowed'] = 'Número de tentativas permitidas';
$string['noattemptsmade'] = 'Número de tentativas feitas';
$string['nolimit'] = 'Tentativas ilimitadas';
$string['nomanifest'] = 'O manifesto não foi encontrado';
$string['noprerequisites'] = 'Infelizmente você ainda não alcançou o nível de requisitos necessário para acessar este recurso de aprendizagem';
$string['noreports'] = 'Nenhum relatório disponível';
$string['normal'] = 'Normal';
$string['noscriptnoscorm'] = 'O seu navegador não é compatível com javascript ou o javascript não está habilitado. Este pacote SCORM pode não executar ou salvar dados corretamente.';
$string['not_corr_type'] = 'Erro de associação de tipos no tag {$a->tag}';
$string['notattempted'] = 'Nenhuma tentativa';
$string['notopenyet'] = 'Desculpe, esta atividade não está disponível até {$a}';
$string['objectives'] = 'Objetivos';
$string['onchanges'] = 'Sempre que mudar';
$string['optallstudents'] = 'todos usuários';
$string['optattemptsonly'] = 'somente usuários com tentativas';
$string['options'] = 'Opções (impedidas por alguns navegadors)';
$string['optnoattemptsonly'] = 'somente usuários sem tentativas';
$string['organization'] = 'Organização';
$string['organizations'] = 'Organizações';
$string['othersettings'] = 'Parâmetros adicionais';
$string['othertracks'] = 'Outros registros';
$string['package'] = 'Arquivo do pacote';
$string['package_help'] = 'O arquivo de pacote é um zip (ou pif) que contem os arquivos de definição do curso do SCORM/AICC';
$string['packagedir'] = 'Erro no sistema de arquivos: não foi possível criar um diretório para o pacote';
$string['packagefile'] = 'Nenhum arquivo de pacote definido';
$string['packageurl'] = 'URL';
$string['packageurl_help'] = 'Essa opção permite que uma URL para o pacote SCORM seja especificada ao invés de escolher um arquivo através do "Escolher ou Enviar Arquivo"';
$string['pagesize'] = 'Tamanho da página';
$string['passed'] = 'Aprovado';
$string['php5'] = 'PHP 5 (library DOMXML nativa)';
$string['pluginadministration'] = 'Administração SCORM/AICC';
$string['pluginname'] = 'Pacote SCORM';
$string['popup'] = 'Nova janela';
$string['popupmenu'] = 'Em uma caixa de listagem';
$string['popupopen'] = 'Abrir pacote em nova janela';
$string['popupsblocked'] = 'Parece que janelas pop-up estão bloqueadas, impedindo este módulo scorm de jogar. Verifique as configurações do navegador, antes de começar novamente.';
$string['position_error'] = 'O tag {$a->tag} não pode ser filho de {$a->parent}';
$string['preferencespage'] = 'Preferências apenas para esta página';
$string['preferencesuser'] = 'Preferências para este relatório';
$string['prev'] = 'Anterior';
$string['raw'] = 'Pontuação';
$string['regular'] = 'Manifesto correto';
$string['report'] = 'Relatório';
$string['reportcountallattempts'] = '{$a->nbattempts} tentativas para usuários {$a->nbusers}, fora de resultados {$a->nbresults}';
$string['reportcountattempts'] = '{$a->nbresults} resultados ({$a->nbusers} usuários)';
$string['resizable'] = 'permitir o redimensionamento da janela';
$string['result'] = 'Resultado';
$string['results'] = 'Resultados';
$string['review'] = 'Rever';
$string['reviewmode'] = 'Modalidade de revisão';
$string['scoes'] = 'Objetos de Aprendizagem';
$string['score'] = 'Resultado';
$string['scorm:deleteresponses'] = 'Excluir tentativas SCORM';
$string['scorm:savetrack'] = 'Salvar caminhos';
$string['scorm:skipview'] = 'Pular introdução';
$string['scorm:viewreport'] = 'Ver relatórios';
$string['scorm:viewscores'] = 'Ver pontuação';
$string['scormclose'] = 'Até';
$string['scormcourse'] = 'Curso de aprendizagem';
$string['scormloggingoff'] = 'API Logging desabilitado';
$string['scormloggingon'] = 'API Logging habilitado';
$string['scormopen'] = 'Abrir';
$string['scormresponsedeleted'] = 'Excluir tentativas do usuário';
$string['scormtype'] = 'Tipo';
$string['scormtype_help'] = 'Esta configuração determina como o pacote está incluído no curso. Há até 4 opções: * Pacote Enviado - Permite que um pacote SCORM deve ser escolhido através do seletor de arquivo * manifesto SCORM externo - Permite que um URL imsmanifest.xml a ser especificado. Nota: Se o URL tem um nome de domínio diferente do seu site, em seguida, "Transferido pacote" é a melhor opção, pois caso contrário as notas não são salvos. * Pacote baixado - Permite que um URL pacote a ser especificado. O pacote será descompactado e salvo localmente, e atualizado quando o pacote SCORM externo é atualizado. * Repositório de conteúdo local IMS - Permite que um pacote a ser selecionado a partir de um repositório IMS * URL AICC externa - esta URL é o URL de lançamento para uma atividade única AICC. Um pacote de pseudo será construído em torno deste.';
$string['scrollbars'] = 'Permitir o rolamento da janela';
$string['selectall'] = 'Selecionar todos';
$string['selectnone'] = 'Desmarcar todos';
$string['show'] = 'Exibir';
$string['sided'] = 'Ao lado';
$string['skipview'] = 'O estudante salta a página de menu';
$string['skipview_help'] = '<p>Se você adicionar pacotes com apenas um Objeto de Aprendizado, você pode permitir que o Moodle salte a página de estrutura de conteúdo quando os usuários clicarem numa atividade do SCORM, na página do curso.</p>

<p>Você pode escolher:</p>

   <ul>
       <li><strong>Nunca</strong> saltar a página de estrutura do conteúdo</li>
       <li><strong>Primeiro acesso</strong> saltar a página de estrutura do conteúdo apenas na primeira vez</li>
       <li><strong>Sempre</strong> saltar a página de estrutura do conteúdo</li>
   </ul>';
$string['skipviewdesc'] = 'Esta opção define o padrão relativo a quando saltar a estrutura de conteúdos de uma página';
$string['slashargs'] = 'Atenção: slash arguments está desabilitado neste site e isto pode afetar o funcionamento dos objetos';
$string['stagesize'] = 'Tamanho da Tela/Frame';
$string['stagesize_help'] = '<p>Essas duas opções definema altura e a largura da janela/frame dos Objetos de Aprendizado.</p>';
$string['started'] = 'Iniciado em';
$string['status'] = 'Estado';
$string['statusbar'] = 'Mostrar a barra de estado';
$string['student_response'] = 'Resposta';
$string['suspended'] = 'Suspenso';
$string['syntax'] = 'Erro de sintaxe';
$string['tag_error'] = 'Tag desconhecido ({$a->tag}) com o seguinte conteúdo: {$a->value}';
$string['time'] = 'Duração';
$string['timerestrict'] = 'Restringir resposta para este período de tempo';
$string['title'] = 'Título';
$string['toc'] = 'TOC';
$string['too_many_attributes'] = 'Tag {$a->tag} tem atributos demais';
$string['too_many_children'] = 'Tag {$a->tag} tem filhos demais';
$string['toolbar'] = 'Mostrar a barra de instrumentos';
$string['totaltime'] = 'Tempo';
$string['trackingloose'] = 'Atenção: os dados relativos ao tracking deste pacote serão perdidos!';
$string['type'] = 'Tipo';
$string['typeexternal'] = 'Manifesto SCORM externo';
$string['typeimsrepository'] = 'Repositório de conteúdo IMS local';
$string['typelocal'] = 'Pacote enviado';
$string['typelocalsync'] = 'Pacote baixado';
$string['unziperror'] = 'Um erro acontece durante o unzip do pacote';
$string['updatefreq'] = 'Frequência de auto-atualização';
$string['updatefreqdesc'] = 'Esta opção define a frequência padrão de atualização automática de uma atividade';
$string['validateascorm'] = 'Convalidar pacote';
$string['validation'] = 'Resultado da convalidação';
$string['validationtype'] = 'Esta preferência define a biblioteca DOMXML usada para validar o manifesto SCORM. Se você não tem certeza sobre o que fazer, mantenha a escolha atual.';
$string['value'] = 'Valor';
$string['versionwarning'] = 'A versão do manifesto é anterior à 1.3, atenção ao tag {$a->tag}';
$string['viewallreports'] = 'Ver relatório de {$a} tentativas';
$string['viewalluserreports'] = 'Ver relatórios de {$a} usuários';
$string['whatgrade'] = 'Tentativas avaliadas';
$string['whatgrade_help'] = '<p>Quando você permitir tentativas múltipaas para os usuários, você pode escolher como usar os resultados dessas tentativas no relatório de notas.</p>';
$string['whatgradedesc'] = 'Esta opção define o padrão de avaliação das tentativas';
$string['width'] = 'Largura';
$string['window'] = 'Frame/Janela';
