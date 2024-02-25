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
 * Strings for component 'block_configurable_reports', language 'pt_br', version '2.0'.
 *
 * @package     block_configurable_reports
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitypost'] = 'Mensagens da Atividade';
$string['activityview'] = 'Visualizações da Atividade';
$string['addreport'] = 'Adicionar relatório';
$string['anyone'] = 'Qualquer pessoa';
$string['anyone_summary'] = 'Qualquer usuário no Campus será capaz de ver este relatório';
$string['availablemarks'] = 'Marcas disponíveis';
$string['average'] = 'Média';
$string['badconditionexpr'] = 'Expressão de condição incorreta';
$string['badsize'] = 'Tamanho incorreto, ele deve estar em % ou px';
$string['badtablewidth'] = 'Largura incorreta, ele deve estar em % ou valor absoluto';
$string['blockname'] = 'Relatórios configuráveis';
$string['calcs'] = 'Cálculos';
$string['categories'] = 'Categorias';
$string['categoryfield'] = 'Campos das Categorias';
$string['categoryfieldorder'] = 'Ordenar Campos das Categorias';
$string['ccoursefield'] = 'Condição do campo Curso';
$string['cellalign'] = 'Alinhamento da célula';
$string['cellsize'] = 'Tamanho da célula';
$string['cellwrap'] = 'Moldura da célula';
$string['column'] = 'Coluna';
$string['columnandcellproperties'] = 'Propriedades das colunas e das células';
$string['columncalculations'] = 'Cálculos da coluna';
$string['columns'] = 'Colunas';
$string['comp_calcs'] = 'Cálculos';
$string['comp_calcs_help'] = '<p>Aqui você pode adicionar cálculos de colunas, exemplo: média de usuários inscritos em um cursos</p>

<p>Ajuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Documentação do plugin</a></p>';
$string['comp_calculations'] = 'Cálculos';
$string['comp_calculations_help'] = '<p>Aqui você pode adicionar cálculos para as colunas, i.e: média de usuários inscritos em cursos</p>';
$string['comp_columns'] = 'Colunas';
$string['comp_conditions'] = 'Condições';
$string['comp_conditions_help'] = '<p>Aqui você pode definir as condições (exemplo: apenas cursos desta categoria, apenas usuários da Espanha, etc.. </p>

<p>Você pode adicionar expressões lógicas caso use mais de uma condição.</p>

<p>Ajuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Documentação do plugin</a></p>';
$string['comp_customsql'] = 'Personalizar SQL';
$string['comp_customsql_help'] = '<p>Adicione uma consulta SQL. Não use o prefixo do banco do moodle $CFG->prefix no lugar use "prefix_" sem aspas</p>
<p>Exemplo: SELECT * FROM prefix_course</p>

<p>Você encontra vários Relatórios SQL aqui: <a href="http://docs.moodle.org/en/ad-hoc_contributed_reports" target="_blank">relatórios ad-hoc contribuídos</a></p>

<p>Este bloco suporta Tim Hunt\'s CustomSQL Queries Reports, você pode usar qualquer consulta.</p>

<p>Lembre-se de adicionar um "Filtro de tempo" Caso você esteja usando um relatório com time tokens. </p>

<p>Para uso de filtros, veja: <a href="http://docs.moodle.org/en/blocks/configurable_reports/#Creating_a_SQL_Report" target="_blank">Tutorial de Como Criar um Relatório SQL</a></p>';
$string['comp_filters'] = 'Filtros';
$string['comp_filters_help'] = '<p>Aqui você pode escolher quais filtros serão exibidos</p>

<p>Um filtro permite o usuário escolher colunas do relatório para filtrar os resultados</p>

<p>Para uso de filtros caso seu relatório seja SQL, veja: <a href="http://docs.moodle.org/en/blocks/configurable_reports/#Creating_a_SQL_Report" target="_blank">Tutorial de Como Criar um Relatório SQL</a></p>

<p>Ajuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Documentação do plugin</a></p>';
$string['comp_ordering'] = 'Ordenação';
$string['comp_ordering_help'] = '<p>Aqui você pode escolher como ordenar os resultados do relatório usando campos e direções</p>

<p>Ajuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Documentação do plugin</a></p>';
$string['comp_permissions'] = 'Permissões';
$string['comp_permissions_help'] = '<p>Aqui você pode escolher quem pode visualizar um relatório.</p>

<p>Você pode adicionar uma expressão lógica para calcular a permissão final caso você esteja usando mais de uma condição.</p>

<p>Ajuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Documentação do plugin</a></p>';
$string['comp_plot'] = 'Plotar';
$string['comp_plot_help'] = '<p>Aqui você pode adicionar gráficos ao seu relatório baseado nas colunas e valores do relatório</p>

<p>Ajuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Documentação do plugin</a></p>';
$string['comp_template'] = 'Modelo';
$string['comp_template_help'] = '<p>Você pode modificar o layout do relatório criando um template</p>

<p>Sobre criação de templates, veja os marcadores de substituição que você pode usar no cabeçalho, rodapé e para cada registro do relatório usando os botões de ajuda ou a informação disponível na página.</p>

<p>Ajuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Documentação do plugin</a></p>';
$string['componenthelp'] = 'Ajuda do componente';
$string['conditionexpr'] = 'Condição';
$string['conditionexpr_conditions'] = 'Condição';
$string['conditionexpr_permissions'] = 'Condição';
$string['conditionexpr_permissions_help'] = '<p>Você pode combinar condições usando expressões lógicas</p>

<p>Insira uma expressão lógica válida com estes operadores: and, or.</p>';
$string['conditionexprhelp'] = 'Insira uma condição válida exemplo: (c1 and c2) or (c4 and c3)';
$string['conditions'] = 'Condições';
$string['configurable_reports:addinstance'] = 'Adicionar um novo bloco de relatórios configuráveis';
$string['configurable_reports:manageownreports'] = 'Gerenciar seus próprios relatórios';
$string['configurable_reports:managesqlreports'] = 'Gerenciar relatórios SQL';
$string['configurable_reports:viewreports'] = 'Visualizar relatórios';
$string['confirmdeletereport'] = 'Tem certeza de que deseja excluir esta mensagem?';
$string['coursecategory'] = 'Curso na categoria';
$string['coursechild'] = 'Cursos que são filhos de';
$string['coursededicationtime'] = 'Tempo de dedicação ao curso';
$string['coursefield'] = 'Campo Curso';
$string['coursefieldorder'] = 'Ordenar Campo Curso';
$string['courseparent'] = 'Cursos cujo pai é';
$string['courses'] = 'Cursos';
$string['coursestats'] = 'Estatísticas de Curso';
$string['currentreportcourse'] = 'Curso do relatório atual';
$string['currentreportcourse_summary'] = 'O curso no qual o relatório foi criado';
$string['currentuser'] = 'Usuário atual';
$string['currentuser_summary'] = 'O usuário que está visualizando o relatório';
$string['currentusercourses'] = 'Cursos inscritos do usuário atual';
$string['currentusercourses_summary'] = 'Lista dos cursos de usuários atuais (apenas cursos visíveis)';
$string['currentuserfinalgrade'] = 'Nota final do usuário atual no curso';
$string['currentuserfinalgrade_summary'] = 'Esta coluna mostra a nota final do usuário atual';
$string['cuserfield'] = 'Condição do campo usuário';
$string['custom'] = 'Personalizado';
$string['customdateformat'] = 'Formato de data personalizado';
$string['customsql'] = 'SQL personalizado';
$string['date'] = 'Data';
$string['dateformat'] = 'Formato de data';
$string['direction'] = 'Direção';
$string['disabled'] = 'Desabilitado';
$string['donotshowtime'] = 'Não mostrar informação de data';
$string['download'] = 'Baixar';
$string['downloadreport'] = 'Baixar relatório';
$string['enabled'] = 'Habilitado';
$string['enablejsordering'] = 'Ativar ordenação por JavaScript';
$string['enablejspagination'] = 'Ativar paginação por JavaScript';
$string['endtime'] = 'Data final';
$string['error_field'] = 'Campo não permitido';
$string['error_operator'] = 'Operador não permitido';
$string['error_value_expected_integer'] = 'Valor inteiro esperado';
$string['export_ods'] = 'Exportar em formato ODS';
$string['export_xls'] = 'Exportar em formato XLS';
$string['exportoptions'] = 'Opções de exportação';
$string['exportreport'] = 'Exportar relatório';
$string['fcoursefield'] = 'Filtrar Campo Curso';
$string['field'] = 'Campo';
$string['filter'] = 'Filtrar';
$string['filter_all'] = 'Todos';
$string['filter_apply'] = 'Aplicar';
$string['filtercategories'] = 'Filtrar categorias';
$string['filtercategories_summary'] = 'Filtrar por categoria';
$string['filtercourses'] = 'Cursos';
$string['filtercourses_summary'] = 'Este filtro mostra uma lista de cursos . Apenas um curso pode ser selecionado de cada vez';
$string['filters'] = 'Filtros';
$string['filterstartendtime_summary'] = 'Filtrar data de início / fim';
$string['fixeddate'] = 'Data fixa';
$string['footer'] = 'Rodapé';
$string['forcemidnight'] = 'Forçar meia noite';
$string['fsearchuserfield'] = 'Caixa de busca do campo Usuário';
$string['fuserfield'] = 'Filtrar campo de perfil de usuário';
$string['globalstatsshouldbeenabled'] = 'Estatísticas do site deve estar habilitada. Vá para Administração -> Servidor -> Estatísticas';
$string['groupseries'] = 'Séries de grupo';
$string['groupvalues'] = 'Agrupar valores iguais (soma)';
$string['header'] = 'Cabeçalho';
$string['importreport'] = 'Importar relatório';
$string['includesubcats'] = 'incluir sub-categorias';
$string['jsordering'] = 'Ordenação por JavaScript';
$string['jsordering_help'] = 'Ordenação por JavaScript permite ordenar as tabelas do relatório sem recarregar a página';
$string['line'] = 'Gráfico de linha';
$string['linesummary'] = 'Um gráfico de linha com várias séries de dados';
$string['managereports'] = 'Gerenciar relatórios';
$string['max'] = 'Máximo';
$string['min'] = 'Mínimo';
$string['missingcolumn'] = 'Uma coluna é necessária';
$string['module'] = 'Módulo';
$string['newreport'] = 'Novo relatório';
$string['nocalcsyet'] = 'Ainda não há cálculos';
$string['nocolumnsyet'] = 'Ainda não há colunas';
$string['noconditionsyet'] = 'Ainda não há condições';
$string['noexplicitprefix'] = 'Sem prefixo explícito';
$string['nofiltersyet'] = 'Ainda não há filtros';
$string['nofilteryet'] = 'Ainda não há filtros';
$string['noorderingyet'] = 'Sem ordenação até agora';
$string['nopermissionsyet'] = 'Ainda não há permissões';
$string['noplotyet'] = 'Sem gráficos até agora';
$string['norecordsfound'] = 'Nenhum registro foi encontrado';
$string['noreportsavailable'] = 'Não há relatórios disponíveis';
$string['norowsreturned'] = 'Não há linhas retornadas';
$string['nosemicolon'] = 'Nenhuma vírgula';
$string['notallowedwords'] = 'Palavras não permitidas';
$string['operator'] = 'Operador';
$string['ordering'] = 'Ordenação';
$string['pagination'] = 'Paginação';
$string['pagination_help'] = 'Número de registros mostrados em cada página. Zero significa que não há número de páginas';
$string['parentcategory'] = 'Categoria pai';
$string['permissions'] = 'Permissões';
$string['pie'] = 'Pizza';
$string['pieareaname'] = 'Nome';
$string['pieareavalue'] = 'Valor';
$string['piesummary'] = 'Um gráfico de pizza';
$string['plot'] = 'Plotar - Gráficos';
$string['pluginname'] = 'Configurable  Reports';
$string['previousdays'] = 'Dias anteriores';
$string['previousend'] = 'Final anterior';
$string['previousstart'] = 'Início anterior';
$string['printreport'] = 'Imprimir relatório';
$string['puserfield'] = 'Valor do campo Usuário';
$string['puserfield_summary'] = 'Usuário com o valor selecionado no campo selecionado';
$string['querysql'] = 'Consulta SQL';
$string['report'] = 'Relatório';
$string['report_categories'] = 'Relatório de categorias';
$string['report_courses'] = 'Relatório de cursos';
$string['report_sql'] = 'Relatório SQL';
$string['report_timeline'] = 'Relatório de timeline';
$string['report_users'] = 'Relatório de Usuário';
$string['reportcolumn'] = 'Outra coluna do relatório';
$string['reports'] = 'Relatórios';
$string['reportscapabilities'] = 'Permissões do relatório';
$string['reportscapabilities_summary'] = 'Usuários com a permissão moodle/site:viewreports ativa';
$string['reporttable'] = 'Tabela do relatório';
$string['reporttable_help'] = '<p>Esta é a largura da tabela que vai mostrar os resultados.</p>

<p>Se você usar um template esta opção não possui efeito</p>';
$string['roleincourse'] = 'Usuário com o papel selecionado no curso do relatório atual';
$string['roleusersn'] = 'Número de usuários com o papel...';
$string['serieid'] = 'Coluna da série';
$string['startendtime'] = 'Filtro de data inicial/final';
$string['starttime'] = 'Data inicial';
$string['stat'] = 'Estatísticas';
$string['statsactiveenrolments'] = 'Inscrições ativas (Na ultima semana)';
$string['statslogins'] = 'Logins na plataforma';
$string['statstotalenrolments'] = 'Total de inscrições';
$string['sum'] = 'Soma';
$string['tablealign'] = 'Alinhamento de tabela';
$string['tablecellpadding'] = 'Preenchimento entre células da tabela';
$string['tablecellspacing'] = 'Espaçamento entre células da tabela';
$string['tableclass'] = 'Classe da tabela';
$string['tablewidth'] = 'Largura da tabela';
$string['template'] = 'Template';
$string['template_marks'] = 'Marcadores de template';
$string['template_marks_help'] = '<p>Você pode usar qualquer um dos marcadores de substituição abaixo :</p>

<ul>
<li>##reportname## - Para incluir o nome do relatório</li>
<li>##reportsummary## - Para incluir o sumário do relatório</li>
<li>##graphs## - Para incluir os gráficos</li>
<li>##exportoptions## - Para incluir as opções de importação</li>
<li>##calculationstable## - Para incluir a tabela de cálculos</li>
<li>##pagination## - Para incluir a paginação</li>

</ul>';
$string['templaterecord'] = 'Template do registro';
$string['timeinterval'] = 'Intervalo de tempo';
$string['timeline'] = 'Linha do tempo';
$string['timemode'] = 'Modo tempo';
$string['type'] = 'Tipo do Relatório';
$string['typeofreport'] = 'Tipo do Relatório';
$string['typeofreport_help'] = 'Escolha o tipo do relatório que você quer criar. Por questões de segurança, Relatórios SQL requerem uma capacidade adicional';
$string['userfield'] = 'Campo do perfil de usuário';
$string['userfieldorder'] = 'Ordenação do campo Usuário';
$string['usermodactions'] = 'Ações do modulo do usuário';
$string['usermodoutline'] = 'Estatísticas gerais do modulo do usuário';
$string['usersincoursereport'] = 'Qualquer usuário no curso do relatório atual';
$string['usersincoursereport_summary'] = 'Qualquer usuário no curso do relatório atual';
$string['usersincurrentcourse'] = 'Usuários no curso do relatório atual';
$string['usersincurrentcourse_summary'] = 'Usuários com o(s) papel(papéis) selecionado(s) no curso do relatório';
$string['userstats'] = 'Estatísticas de Usuários';
$string['value'] = 'Valor';
$string['viewreport'] = 'Ver relatório';
$string['xaxis'] = 'Eixo X';
$string['yaxis'] = 'Eixo Y';
$string['youmustselectarole'] = 'É obrigatório selecionar um papel';
