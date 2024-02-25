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
 * Strings for component 'backup', language 'pt_br', version '2.0'.
 *
 * @package     backup
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoactivedescription'] = 'Escolha se deseja ou não fazer backups automatizados. Se o backup manual for selecionado, os backups automatizados somente serão possíveis através de scripts de console (CLI). Estes scripts podem ser disparados manualmente no prompt de comandos ou através do agendador de tarefas (cron).';
$string['autoactivedisabled'] = 'Desabilitado';
$string['autoactiveenabled'] = 'Habilitado';
$string['autoactivemanual'] = 'Manual';
$string['automatedbackupschedule'] = 'Programação';
$string['automatedbackupschedulehelp'] = 'Decida em quais dias da semana devem ser feitos os backups';
$string['automatedbackupsinactive'] = 'Este site não está habilitado para backups programados';
$string['automatedbackupstatus'] = 'Estado dos backups programados';
$string['automatedsettings'] = 'Configurações do backup automático';
$string['automatedsetup'] = 'Configurar o backup automático';
$string['automatedstorage'] = 'Armazenamento do backup automático';
$string['automatedstoragehelp'] = 'Escolha o local onde você deseja que os backups automáticos sejam armazenados.';
$string['backupactivity'] = 'Backup da atividade: {$a}';
$string['backupcourse'] = 'Backup do curso: {$a}';
$string['backupcoursedetails'] = 'Detalhes do curso';
$string['backupcoursesection'] = 'Seção: {$a}';
$string['backupcoursesections'] = 'Seções do curso';
$string['backupdate'] = 'Data da criação';
$string['backupdetails'] = 'Detalhes do Backup';
$string['backupformat'] = 'Formato';
$string['backupformatmoodle2'] = 'Moodle 2';
$string['backupmode'] = 'Modo';
$string['backupmode10'] = 'Geral';
$string['backupmode30'] = 'Hub';
$string['backupsection'] = 'Backup da seção do curso: {$a}';
$string['backupsettings'] = 'Configurações do backup';
$string['backupsitedetails'] = 'Detalhes do site';
$string['backupstage16action'] = 'Continuar';
$string['backupstage1action'] = 'Próximo';
$string['backupstage2action'] = 'Próximo';
$string['backupstage4action'] = 'Executar o backup';
$string['backupstage8action'] = 'Continuar';
$string['backuptype'] = 'Tipo';
$string['backuptypeactivity'] = 'Atividade';
$string['backuptypecourse'] = 'Curso';
$string['backupversion'] = 'Versão do backup';
$string['cannotfindassignablerole'] = 'O papel {$a} no arquivo de backup não pôde ser mapeado para nenhum dos papéis que você possui permissão para atribuir.';
$string['choosefilefromactivitybackup'] = 'Área de backup da atividade';
$string['choosefilefromactivitybackup_help'] = 'Quando se faz backup de atividades usando as configurações padrão, os arquivos de backup são armazenados aqui';
$string['choosefilefromautomatedbackup'] = 'Backups automáticos';
$string['choosefilefromautomatedbackup_help'] = 'Contém backups gerados automaticamente.';
$string['choosefilefromcoursebackup'] = 'Área de backup do curso';
$string['choosefilefromcoursebackup_help'] = 'Quando se faz backup de cursos usando as configurações padrão, os arquivos de backup serão armazenados aqui';
$string['choosefilefromuserbackup'] = 'Área de backup de arquivos privados do usuário';
$string['choosefilefromuserbackup_help'] = 'Quando se faz backup de cursos com a opção "Anonymize user information" (despersonalizar as informações de usuários) assinalada, os arquivos de backup serão armazenados aqui';
$string['configgeneralactivities'] = 'Define o padrão para inclusão das atividades no backup.';
$string['configgeneralanonymize'] = 'Se habilitado, todas as informações pertencentes aos usuários serão transformadas em anônimas, por padrão.';
$string['configgeneralblocks'] = 'Define o padrão para a inclusão dos blocos no backup.';
$string['configgeneralcomments'] = 'Define o padrão para a inclusão dos comentários no backup.';
$string['configgeneralfilters'] = 'Define o padrão para a inclusão dos filtros no backup.';
$string['configgeneralhistories'] = 'Define o padrão para a inclusão do histórico do usuário no backup.';
$string['configgenerallogs'] = 'Se habilitado, os logs serão incluídos no backup, por padrão.';
$string['configgeneralroleassignments'] = 'Se habilitado, por padrão as atribuições dos papéis serão incluídas no backup.';
$string['configgeneralusers'] = 'Define o padrão para a inclusão dos usuários no backup.';
$string['configgeneraluserscompletion'] = 'Se habilitado, as informações de andamento dos usuários serão incluídas no backup, por padrão.';
$string['confirmcancel'] = 'Cancelar o backup';
$string['confirmcancelno'] = 'Continuar';
$string['confirmcancelquestion'] = 'Você tem certeza que deseja cancelar? Qualquer informação que você digitou será perdida.';
$string['confirmcancelyes'] = 'Cancelar';
$string['coursecategory'] = 'Categoria em que o curso será restaurado';
$string['courseid'] = 'ID original';
$string['coursesettings'] = 'Configurações do curso';
$string['coursetitle'] = 'Título';
$string['currentstage1'] = 'Configurações iniciais';
$string['currentstage16'] = 'Concluir';
$string['currentstage2'] = 'Configurações do esquema';
$string['currentstage4'] = 'Confirmação e revisão';
$string['currentstage8'] = 'Executar o backup';
$string['dependenciesenforced'] = 'Suas configurações foram alteradas devido a dependências não satisfeitas';
$string['enterasearch'] = 'Digite um termo a pesquisar';
$string['errorfilenamemustbezip'] = 'O nome digitado deve ser um arquivo ZIP e ter a extensão .mbz';
$string['errorfilenamerequired'] = 'Você precisa informar um nome válido para este backup';
$string['errorinvalidformat'] = 'Formato de backup inválido.';
$string['errorinvalidformatdesc'] = 'O arquivo enviado não é um backup válido do Moodle e não pôde ser restaurado.';
$string['errorminbackup20version'] = 'Este arquivo de backup foi criado em uma versão de desenvolvimento do backup do Moodle ({$a->backup}). No mínimo, você precisa da versão {$a->min}. Não pôde ser restaurado.';
$string['errormoodle1format'] = 'Restaurando backups do Moodle 1.9';
$string['errormoodle1format_help'] = 'O Moodle 2 atualmente não suporta a restauração de backups do Moodle 1.x. Uma solução temporária para esse problema é restaurar o backup do Moodle 1.x em um ambiente Moodle 1.9, e depois atualizá-lo para o Moodle 2. Quando a atualização estiver concluída, você poderá criar novos backups que podem ser restaurados nos ambientes Moodle 2.0.';
$string['errormoodle1formatdesc'] = 'O arquivo de backup foi criado com o Moodle 1.x e, atualmente, não pode ser restaurado no Moodle 2. Uma futura atualização trará esta funcionalidade.';
$string['errorrestorefrontpage'] = 'A restauração da página principal não é permitida.';
$string['executionsuccess'] = 'O arquivo de backup foi criado com sucesso.';
$string['filename'] = 'Nome do arquivo';
$string['generalactivities'] = 'Incluir atividades';
$string['generalanonymize'] = 'Tornar as informações anônimas';
$string['generalbackdefaults'] = 'Padrões gerais do backup';
$string['generalblocks'] = 'Incluir blocos';
$string['generalcomments'] = 'Incluir comentários';
$string['generalfilters'] = 'Incluir filtros';
$string['generalgradehistories'] = 'Incluir históricos';
$string['generalhistories'] = 'Incluir históricos';
$string['generallogs'] = 'Incluir logs';
$string['generalroleassignments'] = 'Incluir atribuições de papéis';
$string['generalusers'] = 'Incluir usuários';
$string['generaluserscompletion'] = 'Incluir informações de andamento do usuário';
$string['importbackupstage16action'] = 'Continuar';
$string['importbackupstage1action'] = 'Próximo';
$string['importbackupstage2action'] = 'Próximo';
$string['importbackupstage4action'] = 'Executar a importação';
$string['importbackupstage8action'] = 'Continuar';
$string['importcurrentstage0'] = 'Selecionar o curso';
$string['importcurrentstage1'] = 'Configurações iniciais';
$string['importcurrentstage16'] = 'Concluir';
$string['importcurrentstage2'] = 'Configurações do esquema';
$string['importcurrentstage4'] = 'Confirmação e revisão';
$string['importcurrentstage8'] = 'Executar a importação';
$string['importfile'] = 'Importar um arquivo de backup';
$string['importsuccess'] = 'Importação concluída. Clique em Continuar para retornar ao curso.';
$string['includeactivities'] = 'Incluir:';
$string['includeditems'] = 'Ítens incluídos:';
$string['includesection'] = 'Seção {$a}';
$string['includeuserinfo'] = 'Dados do usuário';
$string['locked'] = 'Bloqueado';
$string['lockedbyconfig'] = 'Esta configuração foi bloqueada pelas configurações padrões do backup';
$string['lockedbyhierarchy'] = 'Bloqueado pelas dependências';
$string['lockedbypermission'] = 'Você não possui permissões suficientes para alterar esta configuração';
$string['managefiles'] = 'Gerenciar os arquivos de backup';
$string['moodleversion'] = 'Versão do Moodle';
$string['moreresults'] = 'Existem muitos resultados, digite um termo de pesquisa mais específico.';
$string['nomatchingcourses'] = 'Não existem cursos a exibir';
$string['norestoreoptions'] = 'Não existem categorias ou cursos existentes nos quais você possa restaurar.';
$string['originalwwwroot'] = 'URL do backup';
$string['previousstage'] = 'Voltar';
$string['qcategory2coursefallback'] = 'A categoria de questões "{$a->name}", originalmente no contexto de sistema/curso no arquivo de backup, será criada no contexto de curso pela restauração';
$string['qcategorycannotberestored'] = 'A categoria de questões "{$a->name}" não pôde ser criada pela restauração';
$string['question2coursefallback'] = 'A categoria de questões "{$a->name}", originalmente no contexto de sistema/curso no arquivo de backup, será criada no contexto de curso pela restauração';
$string['questionegorycannotberestored'] = 'As questões "{$a->name}" não puderam ser criadas pela restauração';
$string['restoreactivity'] = 'Restaurar atividade';
$string['restorecourse'] = 'Restaurar curso';
$string['restorecoursesettings'] = 'Configurações do curso';
$string['restoreexecutionsuccess'] = 'O curso foi restaurado com sucesso, clique no botão continuar abaixo para visualizar o curso que você restaurou.';
$string['restorenewcoursefullname'] = 'Novo nome de curso';
$string['restorenewcourseshortname'] = 'Novo nome curto do curso';
$string['restorenewcoursestartdate'] = 'Nova data de início do curso';
$string['restorerolemappings'] = 'Restaurar o mapeamento de papéis';
$string['restorerootsettings'] = 'Restaurar configurações';
$string['restoresection'] = 'Restaurar seção';
$string['restorestage1'] = 'Confirmar';
$string['restorestage16'] = 'Revisar';
$string['restorestage16action'] = 'Executar a restauração';
$string['restorestage1action'] = 'Próximo';
$string['restorestage2'] = 'Destino';
$string['restorestage2action'] = 'Próximo';
$string['restorestage32'] = 'Processar';
$string['restorestage32action'] = 'Continuar';
$string['restorestage4'] = 'Configurações';
$string['restorestage4action'] = 'Próximo';
$string['restorestage64'] = 'Concluir';
$string['restorestage64action'] = 'Continuar';
$string['restorestage8'] = 'Esquema';
$string['restorestage8action'] = 'Próximo';
$string['restoretarget'] = 'Destino da restauração';
$string['restoretocourse'] = 'Restauração para o curso:&nbsp;';
$string['restoretocurrentcourse'] = 'Restaurar neste curso';
$string['restoretocurrentcourseadding'] = 'Mesclar o conteúdo do backup com este curso';
$string['restoretocurrentcoursedeleting'] = 'Excluir o conteúdo deste curso e restaurar o backup';
$string['restoretoexistingcourse'] = 'Restaurar em um curso existente';
$string['restoretoexistingcourseadding'] = 'Mesclar o conteúdo do backup em um curso existente';
$string['restoretoexistingcoursedeleting'] = 'Excluir o conteúdo de um curso existente e restaurar o backup';
$string['restoretonewcourse'] = 'Restaurar como um novo curso';
$string['restoringcourse'] = 'Restauração do curso em progresso';
$string['restoringcourseshortname'] = 'restaurando';
$string['rootsettingactivities'] = 'Incluir atividades';
$string['rootsettinganonymize'] = 'Tornar as informações de usuário anônimas';
$string['rootsettingblocks'] = 'Incluir blocos';
$string['rootsettingcomments'] = 'Incluir comentários';
$string['rootsettingfilters'] = 'Incluir filtros';
$string['rootsettinggradehistories'] = 'Incluir o histórico de notas';
$string['rootsettinglogs'] = 'Incluir os logs do curso';
$string['rootsettingroleassignments'] = 'Incluir as atribuições de papéis';
$string['rootsettings'] = 'Configurações do backup';
$string['rootsettingusers'] = 'Incluir os usuários inscritos';
$string['rootsettinguserscompletion'] = 'Incluir os detalhes de andamento do usuário';
$string['sectionactivities'] = 'Atividades';
$string['sectioninc'] = 'Incluído no backup (sem informações do usuário)';
$string['sectionincanduser'] = 'Incluído no backup com informações do usuário';
$string['selectacategory'] = 'Selecione uma categoria';
$string['selectacourse'] = 'Selecione um curso';
$string['setting_course_fullname'] = 'Nome do curso';
$string['setting_course_shortname'] = 'Nome curto do curso';
$string['setting_course_startdate'] = 'Data de início do curso';
$string['setting_overwriteconf'] = 'Sobrescrever as configurações do curso';
$string['storagecourseandexternal'] = 'Área de arquivos de backup e o diretório especificado';
$string['storagecourseonly'] = 'Área de arquivos de backup';
$string['storageexternalonly'] = 'Diretório especificado para backups automáticos';
$string['totalcategorysearchresults'] = 'Total de categorias: {$a}';
$string['totalcoursesearchresults'] = 'Total de cursos: {$a}';
