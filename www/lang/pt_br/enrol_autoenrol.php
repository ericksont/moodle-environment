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
 * Strings for component 'enrol_autoenrol', language 'pt_br', version '2.0'.
 *
 * @package     enrol_autoenrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alwaysenrol'] = 'Sempre Inscrever';
$string['alwaysenrol_help'] = 'Quando definido como Sim, o plugin sempre inscreve os usuários, mesmo que eles já tenham acesso ao curso por outro método.';
$string['auto'] = 'Automático';
$string['auto_desc'] = 'Este grupo foi criado automaticamente pelo plugin de inscrição automática. Ele será excluído se você remover o plugin de inscrição automática do curso.';
$string['autoenrol:config'] = 'Configurar inscrições automáticas';
$string['autoenrol:method'] = 'O usuário pode inscrever usuários em um curso no login';
$string['autoenrol:unenrol'] = 'O usuário pode cancelar a inscrição de usuários inscritos automaticamente';
$string['autoenrol:unenrolself'] = 'O usuário pode cancelar a inscrição se estiver sendo inscrito ao acessar';
$string['config'] = 'Configuração';
$string['countlimit'] = 'Limite';
$string['countlimit_help'] = 'Essa instância contará o número de inscrições que ele faz em um curso e pode parar de inscrever usuários quando atingir um determinado valor. A configuração padrão de 0 significa ilimitado.';
$string['defaultrole'] = 'Atribuição de papel padrão';
$string['defaultrole_desc'] = 'Selecione o papel que deve ser atribuído aos usuários durante as inscrições automáticas';
$string['filter'] = 'Permitir somente';
$string['filter_help'] = 'Quando um grupo é selecionado, você pode usar este campo para filtrar o tipo de usuário que você deseja inscrever no curso. Por exemplo, se você agrupar por tipo de autenticação e filtrasse com "manual", apenas os usuários que se registrassem diretamente no seu site seriam inscritos.';
$string['filtering'] = 'Filtrar usuáro';
$string['g_auth'] = 'Método de autenticação';
$string['g_dept'] = 'Departamento';
$string['g_email'] = 'Email';
$string['g_inst'] = 'Instituição';
$string['g_lang'] = 'Idioma';
$string['g_none'] = 'Selecionar ...';
$string['general'] = 'Geral';
$string['groupon'] = 'Agrupar por';
$string['groupon_help'] = 'O plugin "Inscrição Automática" pode adicionar automaticamente usuários a um grupo quando eles são registrados com base em um desses campos de usuário.';
$string['instancename'] = 'Nome personalizado';
$string['instancename_help'] = 'Você pode adicionar um nome personalizado para deixar claro o que esse método de inscrição faz. Essa opção é mais útil quando há várias instâncias do plugin "Inscrição Automática" em um curso.';
$string['m_course'] = 'Carregando o Curso';
$string['m_site'] = 'Fazendo login no site';
$string['method'] = 'Inscrever quando';
$string['method_help'] = 'Usuários avançados podem usar essa configuração para alterar o comportamento do plugin, de modo que os usuários sejam inscritos no curso após o login, em vez de aguardar que eles acessem ao curso. Isso é útil para cursos que devem estar visíveis na lista "meus cursos" dos usuários por padrão.';
$string['pluginname'] = 'Inscrição Automática';
$string['pluginname_desc'] = 'O módulo "Inscrição automática" é permite que os usuários conectados tenham permissão de acesso em um curso e se inscrevam automaticamente. Isso é semelhante a permitir o acesso de visitantes, mas os estudantes serão permanentemente inscritos e, portanto, poderão participar de fóruns e atividades.';
$string['role'] = 'Papel';
$string['role_help'] = 'Usuários avançados podem usar essa configuração para alterar o nível de permissão no qual os usuários estão inscritos.';
$string['softmatch'] = 'Correspondência leve';
$string['softmatch_help'] = 'Quando habilitado, o "Inscrições Automáticas" inscreverá um usuário quando corresponder parcialmente ao valor "Permitir somente" em vez de exigir uma correspondência exata. Correspondências leves também não diferenciam maiúsculas de minúsculas. O valor de "Filtrar por" será usado para o nome do grupo.';
$string['unenrolselfconfirm'] = 'Deseja realmente cancelar a inscrição no curso "{$a}"? Você pode revisitar o curso para se inscrever novamente, mas informações como notas e envios de tarefas podem ser perdidas.';
$string['warning'] = 'Cuidado!';
$string['warning_message'] = 'Adicionar este plugin ao seu curso permitirá que qualquer usuário registrado do Moodle acesse o seu curso. Instale este plugin apenas se desejar permitir acesso aberto ao seu curso para usuários que fizeram login.';
