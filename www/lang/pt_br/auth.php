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
 * Strings for component 'auth', language 'pt_br', version '2.0'.
 *
 * @package     auth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'Plugins de autenticação disponíveis';
$string['alternatelogin'] = 'Para substituir a página padrão de login é necessário indicar aqui uma outra URL. Esta deve conter um formulário que contenha a propriedade de ação configurada <strong>\'{$a}\'</strong> e retornar os campos <strong>username</strong> e <strong>password</strong>.<br />Atenção, com uma URL errada você pode ficar bloqueado sem acesso a este site.<br />Deixe este ajuste em branco para usar a página login padrão.';
$string['alternateloginurl'] = 'URL alternativa para login';
$string['auth_changepasswordhelp'] = 'Ajuda para mudança de senha';
$string['auth_changepasswordhelp_expl'] = 'Mostrar ajuda para recuperação de senhas {$a} perdidas. Isto será mostrado junto ou em alternativa à <strong>URL  mudança de senha</strong> ou ao sistema de mudanças de senha interno de Moodle.';
$string['auth_changepasswordurl'] = 'URL para mudança de senha';
$string['auth_changepasswordurl_expl'] = 'Indicar a URL a ser enviada aos usuários que perderem a senha {$a} . Configure a opção <strong>Usar página padrão para mudança de senha</strong> como <strong>Não</strong>.';
$string['auth_changingemailaddress'] = 'Você pediu a mudança do email de {$a->oldemail} para {$a->newemail}. Por motivos de segurança, estamos enviando a você uma mensagem no novo endereço de email para confirmar que ele pertence a você. Seu endereço de email será atualizado assim que você abrir o URL enviado nessa mensagem.';
$string['auth_common_settings'] = 'Configurações comuns';
$string['auth_data_mapping'] = 'Mapeamento dos dados';
$string['auth_fieldlock'] = 'Bloquear valor';
$string['auth_fieldlock_expl'] = '<p><b>Bloquear valor:</b> Quando ativado, impede que usuários e administradores modifiquem o campo diretamente. usar esta opção quando os dados são mantidos em sistemas de autenticação externos. </p>';
$string['auth_fieldlocks'] = 'Bloquear campos de usuário';
$string['auth_fieldlocks_help'] = '<p>Você pode bloquear campos de dados de usuários. Isto é útil em sites mantidos pelo administrador manualmente, editando os registros dos usuários ou usando a função \'Upload de usuários\'. Se você bloquear campos exigidos pelo Moodle, forneça estes dados quando criar as contas de usuários &emdash; ou as contas não serão utilizáveis.</p><p>Considere a possibilidade de configurar o bloqueio como \'Desbloqueado se vazio\' para evitar este problema.</p>';
$string['auth_invalidnewemailkey'] = 'Erro: se você está tentando confirmar uma mudança de email, provavelmente copiou o URL incompleto. Por favor, copie o endereço e tente novamente.';
$string['auth_multiplehosts'] = 'Hosts múltiplos podem ser definidos, por exemplo: host1.com;host2.com;host3.com';
$string['auth_outofnewemailupdateattempts'] = 'Você superou o número máximo de tentativas para atualizar seu endereço de email. O seu pedido de atualização foi cancelado.';
$string['auth_passwordisexpired'] = 'A sua senha expirou. Você quer mudar a sua senha agora?';
$string['auth_passwordwillexpire'] = 'A sua senha vai expirar em {$a} dias. Você quer mudar a sua senha agora?';
$string['auth_remove_delete'] = 'Excluir interno completamente';
$string['auth_remove_keep'] = 'Manter interno';
$string['auth_remove_suspend'] = 'Suspender interno';
$string['auth_remove_user'] = 'Especifique o que fazer com as contas internas de usuário durante uma sincronização em massa quando o usuário for removido de uma fonte externa. Apenas os usuários suspensos são reativados automaticamente quando reaparecem na fonte externa.';
$string['auth_remove_user_key'] = 'Usuário externo removido';
$string['auth_sync_script'] = 'Script de sincronização de cron';
$string['auth_updatelocal'] = 'Atualizar local';
$string['auth_updatelocal_expl'] = '<p><b>Atualizar local data:</b> Se estiver ativado, o campo será atualizado (por auth externo) toda vez que o usuário fizer o login ou houver uma sincronização de usuários. Os campos configurados para serem atualizados localmente devem ser bloqueados.</p>';
$string['auth_updateremote'] = 'Atualizar dados externos';
$string['auth_updateremote_expl'] = '<p><b>Atualizar dados externos:</b> Se estiver ativado, o sistema de autenticação externo será atualizado quando o registro do usuário for atualizado. Os campos devem ser desbloqueados para permitir a edição.</p>';
$string['auth_updateremote_ldap'] = '<p><b>Atenção:</b> A atualização de dados LDAP externos requer a configuração de binddn e bindpw para um bind-user com direitos de edição de todos os records dos usuários. Atualmente não são conservados atributos multi-valores, os valores extra serão removidos durante a atualização. </p>';
$string['auth_user_create'] = 'Permitir criação de usuário';
$string['auth_user_creation'] = 'Novos usuários (anônimos) podem criar contas de usuários no código de origem externa confirmados via Email. Se você ativar esta permissão lembre-se de configurar também as opções específicas dos módulos para a criação de usuários.';
$string['auth_usernameexists'] = 'O identificador de usuário escolhido já existe. Por favor, escolha outro.';
$string['authenticationoptions'] = 'Opções de autenticação';
$string['authinstructions'] = 'Aqui você pode incluir instruções para os seus usuários, para que saibam qual usuário e senha devem usar. Este texto vai aparecer na página de login. Se deixar este campo em branco, nenhuma instrução será mostrada.';
$string['auto_add_remote_users'] = 'Adicionar usuários remotos automaticamente';
$string['changepassword'] = 'URL para mudança de senha';
$string['changepasswordhelp'] = 'Aqui você pode especificar um endereço onde os usuários podem recuperar ou modificar a senha e o "username" esquecidos. Este será publicado como um botão na página de login e na página do usuário. Se deixar este espaço em branco o botão não aparecerá.';
$string['chooseauthmethod'] = 'Escolha um método de autenticação';
$string['chooseauthmethod_help'] = '<p>Esse menu permite que você mude o método de autenticação para um usuário específico.</p>

<p>Por favor, esteja ciente que isso depende de quais métodos de autenticação você especificou para o site, e quais configurações eles estejam usando.</p>

<p>Uma mudança errada aqui pode impedir a autenticação de um usuário ou até mesmo excluir completamente sua conta de acesso, então pense bem antes de fazer isto.</p>';
$string['createpasswordifneeded'] = 'Criar senha se necessário';
$string['enterthenumbersyouhear'] = 'Digite os números que você ouvir';
$string['enterthewordsabove'] = 'Digite as palavras acima';
$string['errormaxconsecutiveidentchars'] = 'As senhas devem ter no máximo {$a} caracteres consecutivos idênticos.';
$string['errorminpassworddigits'] = 'Senhas devem ter no mínimo {$a} digito(s)';
$string['errorminpasswordlength'] = 'Senhas tem que ter no mínimo {$a} caracteres.';
$string['errorminpasswordlower'] = 'Senhas precisam ter no mínimo {$a} letra(s) minúscula(s).';
$string['errorminpasswordnonalphanum'] = 'Senhas precisam ter no mínimo {$a} caractere(s) não-alfanúmerico(s).';
$string['errorminpasswordupper'] = 'Senhas precisam ter no mínimo {$a} letra(s) maiúscula(s).';
$string['errorpasswordupdate'] = 'Erro ao atualizar senha. Não houve modificação.';
$string['forcechangepassword'] = 'Forçar mudança de senha';
$string['forcechangepassword_help'] = 'Forçar usuários a mudar de senha na próxima vez que fizerem o login';
$string['forcechangepasswordfirst_help'] = 'Forçar usuários a mudar de senha no primeiro login';
$string['forgottenpassword'] = 'Se você colocar uma URL aqui, ela será usada como a página de recuperação de senha desse site. Isso é necessário para senhas que são administradas totalmente fora do Moodle. Deixe em branco para usar a página padrão do Moodle.';
$string['forgottenpasswordurl'] = 'URL para \'Esqueci minha senha\'';
$string['getanaudiocaptcha'] = 'Confirmação por áudio';
$string['getanimagecaptcha'] = 'Confirmação por imagem';
$string['getanothercaptcha'] = 'Mudar imagem';
$string['guestloginbutton'] = 'Botão de entrada como visitante';
$string['incorrectpleasetryagain'] = 'Incorreto. Por favor, tente novamente.';
$string['infilefield'] = 'Campos obrigatórios no arquivo';
$string['informminpassworddigits'] = 'ao menos {$a} dígito(s)';
$string['informminpasswordlength'] = 'ao menos {$a} caracteres';
$string['informminpasswordlower'] = 'ao menos {$a} letra(s) minúscula(s)';
$string['informminpasswordnonalphanum'] = 'ao menos {$a} caracater(es) não alfanumérico';
$string['informminpasswordupper'] = 'ao menos {$a} letra(s) maiúscula(s)';
$string['informpasswordpolicy'] = 'A senha deve ter {$a}';
$string['instructions'] = 'Instruções';
$string['internal'] = 'Interno';
$string['locked'] = 'Bloqueado';
$string['md5'] = 'MD5 hash';
$string['nopasswordchange'] = 'Senha não pode ser mudada.';
$string['nopasswordchangeforced'] = 'Você não pode continuar sem mudar sua senha. Mas infelizmente não existe uma página para esse propósito.
Por favor contate o Administrador Moodle.';
$string['noprofileedit'] = 'Perfil não pode ser editado';
$string['ntlmsso_attempting'] = 'Tentando Single Sign On via NTLM...';
$string['ntlmsso_failed'] = 'O login automático falhou, tente pela página normal...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO está desabilitado.';
$string['passwordhandling'] = 'Gestão do campo Senha';
$string['plaintext'] = 'Texto simples';
$string['pluginnotenabled'] = 'Plugin de autenticação \'{$a}\' não está ativado.';
$string['pluginnotinstalled'] = 'Plugin de autenticação \'{$a}\' não está instalado.';
$string['potentialidps'] = 'Autenticar usando sua conta em:';
$string['recaptcha'] = 'reCAPTCHA';
$string['recaptcha_help'] = '<h2>Descrição</h2>
<p>CAPTCHA é um programa que verifica se seu usuário é um humano ou um computador. CAPTCHAs são usados por muitos sites na web para combater invasões de "bots" ou programas automáticos escritos para gerar spam. Nenhum programa de computador pode ler texto retorcido tão bem quanto as pessoas.</p>

<h2>Instruções</h2>
<p>Digite os caracteres que você vê desenhados na mesma ordem e separadas por um espaço branco. Fazendo isto você nos ajuda a evitar que programas mal intencionados prejudiquem o serviço.</p>

<p>Se você não tem certeza de quais são os caracteres siga o link "Obter outro CAPTCHA". </p>

<p>Usuários com deficiências visuais podem seguir o link "Obter um CAPTCHA em audio" para ouvir um conjunto de caracteres ao invés do desafio visual.</p>';
$string['recaptcha_link'] = 'auth/email';
$string['selfregistration'] = 'Auto-cadastro';
$string['selfregistration_help'] = 'Se um plugin de autenticação, como o auto-inscrição por e-mail, é selecionado, existe a possibilidade de potenciais usuários registrarem-se e criarem contas. Isto resulta na possibilidade de criação de contas por spammers para enviar mensagens a foruns, entradas em blogs, etc. Para evitar esse risco, a auto-inscrição deve ser desativada ou limitada pela configuração <em>Domínios de e-mail permitidos</em>.
';
$string['sha1'] = 'Hash SHA-1';
$string['showguestlogin'] = 'Você pode esconder ou mostrar o botão de entrada para visitantes na página de ingresso.';
$string['stdchangepassword'] = 'Usar página padrão para mudança de senha';
$string['stdchangepassword_expl'] = 'Se o sistema de autenticação externa permitir mudanças de senha usando o Moodle, escolha SIM. Esta configuração ignora a \'URL para mudança de senha\'.';
$string['stdchangepassword_explldap'] = 'ATENÇÃO: É recomendável o uso de LDAP em um túnel cifrado SSL (ldaps://) se o servidor LDAP for remoto.';
$string['unlocked'] = 'Desbloqueado';
$string['unlockedifempty'] = 'Desbloqueado se vazio';
$string['update_never'] = 'Nunca';
$string['update_oncreate'] = 'Quando for criado';
$string['update_onlogin'] = 'Em cada login';
$string['update_onupdate'] = 'Quando for atualizado';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate () não suporta o tipo de usuário (usertype) selecionado: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() não suporta o tipo de usuário (usertype) selecionado (.. até o momento)';
