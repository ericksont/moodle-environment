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
 * Strings for component 'simpletest', language 'pt_br', version '2.0'.
 *
 * @package     simpletest
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['all'] = 'TUDO';
$string['codecoverageanalysis'] = 'Realizar análise de cobertura de código.';
$string['codecoveragecompletereport'] = '(ver relatório de cobertura de código completo)';
$string['codecoveragedisabled'] = 'Não é possível permitir a cobertura de código neste servidor (falta a extensão xdebug)';
$string['codecoveragelatestreport'] = 'Exibir último relatório de cobertura de código completo';
$string['confignonwritable'] = 'O arquivo config.php não pôde ser escrito pelo servidor web. Altere suas permissões, ou edite este arquivo com uma conta de usuário apropriada e adicione a seguinte linha antes da tag de fechamento php: <br />
$CFG->unittestprefix = \'tst_\' ; // Altere tst_ por um prefixo de sua escolha, diferente de $CFG->prefix';
$string['coveredlines'] = 'Linhas cobertas';
$string['exception'] = 'Exceção';
$string['executablelines'] = 'Linhas executáveis';
$string['fail'] = 'Falhou';
$string['ignorefile'] = 'Ignorar testes no arquivo';
$string['ignorethisfile'] = 'Refazer os testes ignorando esse arquivo.';
$string['moodleunittests'] = 'Testes de unidade do moodle: {$a}';
$string['notice'] = 'Aviso';
$string['onlytest'] = 'Somente rodar testes em';
$string['pass'] = 'Passou';
$string['pathdoesnotexist'] = 'O caminho \'{$a}\' não foi encontrado.';
$string['retest'] = 'Fazer os testes novamente';
$string['retestonlythisfile'] = 'Refazer somente esse arquivo de teste.';
$string['runall'] = 'Rodar os testes de todos os arquivos.';
$string['runat'] = 'Rodar em {$a}.';
$string['runonlyfile'] = 'Rodar somente os testes desse arquivo';
$string['runonlyfolder'] = 'Rodar somente os testes dessa pasta';
$string['runtests'] = 'Rodar testes';
$string['rununittests'] = 'Fazer os testes de unidade';
$string['showpasses'] = 'Mostrar sucessos e falhas.';
$string['showsearch'] = 'Mostrar pesquisa por arquivos de teste.';
$string['skip'] = 'Avançar';
$string['stacktrace'] = 'Levantamento das pilhas de execução (Stack Trace):';
$string['summary'] = '{$a->run}/{$a->total} testes completados:
<strong>{$a->passes}</strong> com sucesso, <strong>{$a->fails}</strong> falhas e <strong>{$a->exceptions}</strong> exceções.';
$string['thorough'] = 'Fazer um teste completo (pode ser lento).';
$string['totallines'] = 'Total de linhas';
$string['uncaughtexception'] = 'Exceção desconhecida não capturada [{$a->getMessage()}] no [{$a->getFile()}:{$a->getLine()}] .
TESTES CANCELADOS.';
$string['unittests'] = 'Testes de unidade';
$string['version'] = 'Usando <a href="http://sourceforge.net/projects/simpletest/">SimpleTest</a> versão {$a}.';
