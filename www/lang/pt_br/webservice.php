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
 * Strings for component 'webservice', language 'pt_br', version '2.0'.
 *
 * @package     webservice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessexception'] = 'Exceção de controle de acesso';
$string['accessnotallowed'] = 'Acesso ao web service não permitido';
$string['actwebserviceshhdr'] = 'Protocolos ativos para web services';
$string['addaservice'] = 'Adicionar serviço';
$string['addcapabilitytousers'] = 'Verificar capacidades do usuário';
$string['addcapabilitytousersdescription'] = 'Usuários devem possuir duas capacidades - webservice:createtoken e uma capacidade englobando os protocolos utilizados, por exemplo webservice/rest:use, webservice/soap:use. Para alcançar isto, crie um papel web services com as capacidades permitidas e associe ao usuário com papel web services como um papel de sistema';
$string['addfunction'] = 'Adicionar função';
$string['addfunctionhelp'] = 'Selecione a função para adicionar ao serviço';
$string['addfunctions'] = 'Adicionar funções';
$string['addfunctionsdescription'] = 'Selecionar funções necessárias para o novo serviço criado';
$string['addrequiredcapability'] = 'Associar/desassociar a capacidade requerida';
$string['addservice'] = 'Adicionar um novo serviço: {$a->name} (id: {$a->id})';
$string['addservicefunction'] = 'Adicione funções ao serviço "{$a}"';
$string['allusers'] = 'Todos usuários';
$string['amftestclient'] = 'Cliente de teste AMF';
$string['apiexplorer'] = 'Explorador da API';
$string['apiexplorernotavalaible'] = 'API explorador ainda não disponível.';
$string['arguments'] = 'Argumentos';
$string['authmethod'] = 'Método de autenticação';
$string['checkusercapability'] = 'Verificar capacidade do usuário';
$string['checkusercapabilitydescription'] = 'O usuário precisa ter as permissões apropriadas de acordo com os protocolos usados, por exemplo, webservice/rest:use, webservice/soap:use. Para conseguir isto, cria um papel para o web service com permissões sobre o protocolo e atribua-o  para o web service no nível do site.';
$string['configwebserviceplugins'] = 'Por questões de segurança, apenas protocolos que estão em uso devem ser habilitados';
$string['context'] = 'Contexto';
$string['createservicedescription'] = 'Um serviço é um conjunto de funções web service. Você irá permitir a usuários acessar o novo serviço. Na página <strong>Adicionar serviço</strong> marque \'Habilitar\' e \'Usuários autorizados\'. Selecione \'Não exigir permissão\'.';
$string['createserviceforusersdescription'] = 'Um serviço é um conjunto de funções web service. Você irá permitir a usuários acessar o novo serviço. Na página <strong>Adicionar serviço</strong> marque \'Habilitar\' e \'Usuários autorizados\'. Selecione \'Não exigir permissão\'.';
$string['createtoken'] = 'Criar token';
$string['createtokenforuser'] = 'Criar um token para um usuário';
$string['createtokenforuserdescription'] = 'Criar um token para o usuário do web service';
$string['createuser'] = 'Crie um usuário específico';
$string['createuserdescription'] = 'Um usuário Web Services é necessário para representar o sistema controlando o Moodle';
$string['default'] = 'Padrão para "{$a}"';
$string['deleteaservice'] = 'Excluir serviço';
$string['deleteservice'] = 'Excluir o serviço: {$a->name} (id: {$a->id})';
$string['deleteserviceconfirm'] = 'Apagar um serviço irá também apagar os tokes relacionados a este serviço. Você realmente quer apagar o serviço externo "{$a}"?';
$string['deletetokenconfirm'] = 'Você realmente quer apagar este token do web service <strong>{$a->user}</strong> no serviço <strong>{$a->service}</strong>?';
$string['disabledwarning'] = 'Todos os protocolos para web service estão desabilitados. A configuração "Habilitar web services" pode ser encontrada em Características avançadas';
$string['doc'] = 'Documentação';
$string['docaccessrefused'] = 'Você não tem permissão para visualizar a documentação para este token';
$string['documentation'] = 'documentação do web service';
$string['editaservice'] = 'Editar serviço';
$string['editservice'] = 'Editar o serviço: {$a->name} (id: {$a->id})';
$string['enabled'] = 'Ativado';
$string['enabledocumentation'] = 'Ativar documentação do desenvolvedor';
$string['enabledocumentationdescription'] = 'Documentação detalhada dos web services está disponível para protocolos habilitados.';
$string['enableprotocols'] = 'Ativar protocolos';
$string['enableprotocolsdescription'] = 'Ao menos um protocolo deve estar habilitado. Por razões de segurança, apenas protocolos utilizados devem estar habilitados.';
$string['enablews'] = 'Habilitar web services';
$string['enablewsdescription'] = 'Web services devem ser habilitados em Características avançadas';
$string['entertoken'] = 'Digite uma chave de segurança / token:';
$string['error'] = 'Erro: {$a}';
$string['errorcatcontextnotvalid'] = 'Você não pode executar funções no contexto da categoria (Id da categoria: {$a->catid}). O erro de contexto foi: {$a->message}';
$string['errorcodes'] = 'Mensagem de erro';
$string['errorcoursecontextnotvalid'] = 'Você não pode executar funções no contexto do curso (Id do curso: {$a->courseid}). O erro de contexto foi: {$a->message}';
$string['errorinvalidparam'] = 'O parâmetro "{$a}" é inválido.';
$string['errorinvalidparamsapi'] = 'Parâmetro externo da api inválido';
$string['errorinvalidparamsdesc'] = 'Descrição externa da api inválida';
$string['errorinvalidresponseapi'] = 'Resposta externa da api inválida';
$string['errorinvalidresponsedesc'] = 'Descrição de resposta externa da api inválida';
$string['errornotemptydefaultparamarray'] = 'O parâmetro de descrição do web service chamado \'{$a}\' é uma estrutura singular ou múltipla. O padrão só pode ser um vetor vazio. Verifique a descrição do web service.';
$string['erroronlyarray'] = 'Somente vetores são aceitos';
$string['erroroptionalparamarray'] = 'O parâmetro de descrição do web service chamado \'{$a}\' é uma estrutura singular ou múltipla. Este não pode ser declarado com VALUE_OPTIONAL. Verifique a descrição do web service.';
$string['execute'] = 'Executar';
$string['executewarnign'] = 'Aviso: Caso pressionar executar sua base de dados será modificada e mudanças não poderão ser revertidas automaticamente! Se não tem certeza não faça.';
$string['externalservice'] = 'Serviço externo';
$string['externalservicefunctions'] = 'Funções de serviço externo';
$string['externalservices'] = 'Serviços externos';
$string['externalserviceusers'] = 'Usuários de serviço externo';
$string['failedtolog'] = 'Falhou ao logar';
$string['forbiddenwsuser'] = 'Não é possível criar token para usuários não confirmados, excluídos, suspensos ou visitantes.';
$string['function'] = 'Função';
$string['functions'] = 'Funções';
$string['generalstructure'] = 'Estrutura geral';
$string['information'] = 'Informação';
$string['invalidextparam'] = 'Parâmetro inválido api externa:{$a}';
$string['invalidextresponse'] = 'Resposta externa da api inválida : {$a}';
$string['invalidiptoken'] = 'Token inválido - seu IP não é suportado';
$string['invalidtimedtoken'] = 'Token inválido - token expirado';
$string['invalidtoken'] = 'Token inválido - token não encontrado';
$string['invalidtokensession'] = 'Sessão baseada em token inválida - sessão não encontrada ou expirada';
$string['iprestriction'] = 'Restrição de IP';
$string['iprestriction_help'] = 'O usuário terá que chamar o web service a partir dos IPs listados.
';
$string['key'] = 'Chave';
$string['keyshelp'] = 'As chaves são usadas para acessar sua conta Moodle a partir de aplicações externas.';
$string['manageprotocols'] = 'Gerenciar protocolos';
$string['managetokens'] = 'Gerenciar tokens';
$string['missingcaps'] = 'Faltando capacidades';
$string['missingcaps_help'] = 'Lista das permissões obrigatória para o serviço que cada um dos usuários selecionados não tem. As permissões faltantes devem ser adicionadas aos papeis dos usuários para que estes possam usar o serviço.';
$string['missingpassword'] = 'Faltando senha';
$string['missingusername'] = 'Faltando identificação de usuário';
$string['nofunctions'] = 'Não há funções para esse serviço';
$string['norequiredcapability'] = 'Capacidade não exigida';
$string['notoken'] = 'O token está vazio';
$string['onesystemcontrolling'] = 'Um sistema controlando Moodle com um token';
$string['onesystemcontrollingdescription'] = 'Os passos a seguir o ajudarão a configurar o web service para que seu sistema controle o Moodle. Estes passos também ajudarão a configurar um método de autenticação com token recomendado (chave de segurança)';
$string['operation'] = 'Operação';
$string['optional'] = 'Opcional';
$string['phpparam'] = 'XML-RPC (Estrutura PHP)';
$string['phpresponse'] = 'XML-RPC (Estrutura PHP)';
$string['postrestparam'] = 'Código PHP para REST (Requisição POST)';
$string['potusers'] = 'Usuários não autorizados';
$string['potusersmatching'] = 'Não há usuários autorizados conferindo';
$string['print'] = 'Imprimir todos';
$string['protocol'] = 'Protocolo';
$string['removefunction'] = 'Remover';
$string['removefunctionconfirm'] = 'Você deseja remover a função "{$a->function}" do serviço "{$a->service}"?';
$string['requireauthentication'] = 'Este método requer autenticação com permissão xxx.';
$string['required'] = 'Obrigatório';
$string['requiredcapability'] = 'Capacidade exigida';
$string['requiredcapability_help'] = 'Se definido, somente usuários com a capability exigida poderá acessar o serviço.';
$string['requiredcaps'] = 'Capacidades exigidas';
$string['resettokenconfirm'] = 'Você realmente quer reiniciar esta chave do web service para  <strong>{$a->user}</strong> no serviço <strong>{$a->service}</strong>?';
$string['resettokenconfirmsimple'] = 'Você realmente que reiniciar esta chave? Qualquer links salvos contendo a chave antiga não funcionarão mais.';
$string['response'] = 'Resposta';
$string['restcode'] = 'REST';
$string['restexception'] = 'REST';
$string['restparam'] = 'REST (parâmetros POST)';
$string['restrictedusers'] = 'Apenas usuários autorizados';
$string['restrictedusers_help'] = 'Esta configuração determina se todos os usuários com permissões para criar token para "web services" podem gerar um token para este serviço através das suas páginas de chaves de segurança ou se apenas usuários autorizados podem realizar esta ação.';
$string['securitykey'] = 'Chave de segurança (token)';
$string['securitykeys'] = 'Chaves de segurança';
$string['selectauthorisedusers'] = 'Selecione usuários autorizados';
$string['selectedcapability'] = 'Selecionado';
$string['selectedcapabilitydoesntexit'] = 'A configuração atual exige a permissão ({$a}) não existe mais. Por favor altere-a e salve as alterações.';
$string['selectservice'] = 'Selecione um serviço';
$string['selectspecificuser'] = 'Selecione um usuário específico';
$string['selectspecificuserdescription'] = 'Adicionar o usuário do web services como um usuário autorizado';
$string['service'] = 'Serviço';
$string['servicehelpexplanation'] = 'Um serviço é um conjunto de funções. Um serviço pode ser acessado por todos os usuários ou apenas usuários específicos';
$string['servicename'] = 'Nome do serviço';
$string['servicesbuiltin'] = 'Serviços construídos';
$string['servicescustom'] = 'Serviços personalizados';
$string['serviceusers'] = 'Usuários autorizados';
$string['serviceusersettings'] = 'Configurações de usuário';
$string['serviceusersmatching'] = 'Usuários autorizados que conferem';
$string['serviceuserssettings'] = 'Alterar configurações para os usuários autorizados';
$string['simpleauthlog'] = 'Login de autenticação simples';
$string['step'] = 'Etapa';
$string['testauserwithtestclientdescription'] = 'Simula acesso externo ao usando o cliente de teste do web service. Antes de fazer isso, faça login com o um usuário que possua a permissão moodle/webservice:createtoken e obtenha uma chave de segurança (token) via configurações de perfil. No cliente de teste, escolha e habilite o protocolo com autenticação via token.<strong>AVISO: As funções testadas SERÃO EXECUTADAS para esse usuário, portanto seja cuidadoso ao escolher o que testar!</strong>';
$string['testclient'] = 'Cliente de testes do web service';
$string['testclientdescription'] = '* O cliente de teste para web services <strong>executa</strong> a função <strong>REALMENTE</strong>. Não teste funções que você não conhece. <br/>* Todas as funções  web service existentes  não são ainda implementadas no cliente de teste. <br/>* Para verificar se um usuário não pode acessar algumas, funções, você pode testar algumas funções não permitidas.<br/>* Para ver mensagens de erro mais significativas configure o debug para <strong>{$a->mode}</strong> em {$a->atag}<br/>* Acesso a {$a->amfatag}.';
$string['testwithtestclient'] = 'Teste o serviço';
$string['testwithtestclientdescription'] = 'Simula acesso externo ao usando o cliente de teste do web service. Use um protocolo habilitado com autenticação via token.<strong>AVISO: As funções testadas SERÃO EXECUTADAS para esse usuário, portanto seja cuidadoso ao escolher o que testar!</strong>';
$string['token'] = 'Token';
$string['tokenauthlog'] = 'Autenticação com token';
$string['tokencreatedbyadmin'] = 'Só pode ser reajustado pelo administrador (*)';
$string['tokencreator'] = 'Criador';
$string['updateusersettings'] = 'Atualizar';
$string['userasclients'] = 'Usuários como clientes com tokens';
$string['userasclientsdescription'] = 'Os passos a seguir ajudam você a configurar o web serviced o Moodle para usuários como clientes. Estes passos também ajudam a configurar o método de autenticação recomendado, token (chaves seguras). Neste caso, o usuário gerará seu token a partir da página de chaves seguras via "Minhas configurações de perfil"';
$string['usermissingcaps'] = 'Faltando capacidades: {$a}';
$string['usernotallowed'] = 'O usuário não tem permissão para este serviço. Primeiro você necessita permitir este usuário na página de administração de usuários {$a}';
$string['usersettingssaved'] = 'As configurações do usuário salvas';
$string['validuntil'] = 'Válido até';
$string['validuntil_help'] = 'Se definido, o serviço será inativado após esta data para este usuário.';
$string['webservice'] = 'Web services';
$string['webservices'] = 'Web services';
$string['webservicesoverview'] = 'Resumo';
$string['webservicetokens'] = 'Tokens para web service';
$string['wrongusernamepassword'] = 'Identificação de usuário ou senha incorretos';
$string['wsaccessuserdeleted'] = 'Acesso recusado ao web service para usuário excluído: {$a}';
$string['wsaccessuserexpired'] = 'Acesso ao web service recusado pela senha expirada para o para o username: {$a}';
$string['wsaccessusernologin'] = 'Acesso recusado ao web service para usuário com autenticação "nenhum login": {$a}';
$string['wsaccessusersuspended'] = 'Acesso recusado ao web service para usuário suspenso: {$a}';
$string['wsaccessuserunconfirmed'] = 'Acesso recusado ao web service para usuário não confirmado: {$a}';
$string['wsauthmissing'] = 'Plugin de autenticação web service não encontrado.';
$string['wsauthnotenabled'] = 'Plugin de autenticação web service está desativado.';
$string['wsclientdoc'] = 'Documentação do cliente de web service do Moodle';
$string['wsdocapi'] = 'Documentação da API';
$string['wsdocumentation'] = 'Web documentação de serviço';
$string['wsdocumentationdisable'] = 'Documentação do web service desativada.';
$string['wsdocumentationintro'] = 'Para criar um cliente sugerimos que você leia o {$a->doclink}';
$string['wsdocumentationlogin'] = 'ou insira seu usuário e senha do web service:';
$string['wspassword'] = 'Senha do web service';
$string['wsusername'] = 'Identificação de usuário do web service';
