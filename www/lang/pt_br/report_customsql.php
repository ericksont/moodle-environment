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
 * Strings for component 'report_customsql', language 'pt_br', version '2.0'.
 *
 * @package     report_customsql
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addreport'] = 'Adicionar uma nova consulta';
$string['anyonewhocanveiwthisreport'] = 'Qualquer um que possa ver este relatório (report/customsql:view)';
$string['archivedversions'] = 'Versões arquivadas desta consulta';
$string['automaticallymonthly'] = 'Programado, no primeiro dia de cada mês';
$string['automaticallyweekly'] = 'Programado, no primeiro dia de cada semana';
$string['availablereports'] = 'Consultas sob demanda';
$string['availableto'] = 'Disponível para {$a}.';
$string['backtoreportlist'] = 'Voltar à lista de consultas';
$string['changetheparameters'] = 'Alterar os parâmetros';
$string['customsql:definequeries'] = 'Definir consultas personalizadas';
$string['customsql:view'] = 'Visualizar relatório de consulta personalizada';
$string['deleteareyousure'] = 'Tem certeza de que deseja excluir esta consulta?';
$string['deletethisreport'] = 'Apagar esta consulta';
$string['description'] = 'Descrição';
$string['displayname'] = 'Nome de consulta';
$string['displaynamerequired'] = 'Você deve digitar um nome de consulta';
$string['displaynamex'] = 'Nome da consulta: {$a}';
$string['downloadthisreportascsv'] = 'Baixe estes resultados como CSV';
$string['editingareport'] = 'Edição de uma consulta de banco de dados ad-hoc';
$string['editthisreport'] = 'Editar esta consulta';
$string['enterparameters'] = 'Digite parâmetros para consulta de banco de dados ad-hoc';
$string['errordeletingreport'] = 'Erro ao excluir uma consulta.';
$string['errorinsertingreport'] = 'Erro ao inserir uma consulta.';
$string['errorupdatingreport'] = 'Erro ao atualizar uma consulta.';
$string['invalidreportid'] = 'ID de consulta inválido {$a}';
$string['lastexecuted'] = 'Esta consulta foi executada pela última vez em {$a->lastrun}. Demorou {$a->lastexecutiontime}s para ser executada.';
$string['manually'] = 'Sob demanda';
$string['manualnote'] = 'Estas consultas são executadas sob demanda, quando você clicar no link para ver os resultados.';
$string['morethanonerowreturned'] = 'Mais do que uma linha foi retornada. Esta consulta deve retornar uma linha.';
$string['nodatareturned'] = 'Esta consulta não retornou nenhum dado.';
$string['noexplicitprefix'] = 'Por favor, para incluir o nome da tabela <tt>{$a}</tt> prefixo no SQL. Em vez disso, colocar o nome da tabela como prefixo-un dentro <tt>{}</tt> caracteres.';
$string['noreportsavailable'] = 'Não há consultas disponíveis';
$string['norowsreturned'] = 'Nenhuma linha foi retornado. Esta consulta deve retornar uma linha.';
$string['nosemicolon'] = 'Não é permitido utilizar o caractere ; na consulta SQL';
$string['notallowedwords'] = 'Você não tem permissão para usar as palavras <tt>{$a}</tt> no SQL.';
$string['note'] = 'Notas';
$string['notrunyet'] = 'Esta consulta ainda não foi executado.';
$string['onerow'] = 'A consulta retorna uma linha, acumular os resultados uma linha de cada vez';
$string['parametervalue'] = '{$a->name}: {$a->value}';
$string['pluginname'] = 'Consultas Ad-hoc à base de dados';
$string['queryfailed'] = 'Erro ao executar a consulta: {$a}';
$string['queryparameters'] = 'Os parâmetros de consulta';
$string['queryparams'] = 'Por favor insira os valores padrão para os parâmetros de consulta.';
$string['queryparamschanged'] = 'Os espaços reservados na consulta mudaram.';
$string['queryrundate'] = 'data de execução de consulta';
$string['querysql'] = 'Consulta SQL';
$string['querysqlrequried'] = 'Você deve digitar algum SQL.';
$string['recordlimitreached'] = 'Esta consulta atingiu o limite de linhas {$a}. Algumas linhas podem ter sido omitidos a partir do final.';
$string['reportfor'] = 'Consulta executada em {$a}';
$string['runable'] = 'Executar';
$string['runablex'] = 'Execute: {$a}';
$string['schedulednote'] = 'Essas consultas são executadas automaticamente no primeiro dia de cada semana ou mês, para informar sobre a semana ou mês anterior. Esses links permitem que você visualize os resultados que já foram acumulados.';
$string['scheduledqueries'] = 'Consultas agendadas';
$string['typeofresult'] = 'Tipo de resultado';
$string['unknowndownloadfile'] = 'Arquivo de download desconhecido.';
$string['userswhocanconfig'] = 'Apenas os administradores (moodle/site:config)';
$string['userswhocanviewsitereports'] = 'Os usuários que podem ver os relatórios do sistema (moodle / local: viewreports)';
$string['whocanaccess'] = 'Quem pode acessar esta consulta';
