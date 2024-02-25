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
 * Strings for component 'reservation', language 'pt_br', version '2.0'.
 *
 * @package     reservation
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addparticipant'] = 'Nova solicitação';
$string['after10min'] = '10 minutos após o início do evento';
$string['after12h'] = '12 horas após o início do evento';
$string['after1d'] = '1 dia após o início do evento';
$string['after1h'] = '1 hora após o início do evento';
$string['after1w'] = '1 semana após o início do evento';
$string['after2d'] = '2 dias após o início do evento';
$string['after2h'] = '2 horas após o início do evento';
$string['after2w'] = '2 semanas após o início do evento';
$string['after30min'] = '30 minutos após o início do evento';
$string['after3w'] = '3 semanas após o início do evento';
$string['after4h'] = '4 horas após o início do evento';
$string['after4w'] = '4 semanas após o início do evento';
$string['after5min'] = '5 minutos após o início do evento';
$string['after6h'] = '6 horas após o início do evento';
$string['alreadybooked'] = 'Você já reservou';
$string['atstart'] = 'No início do evento';
$string['autohide'] = 'Esconder automaticamente a lista de reserva';
$string['availablerequests'] = 'Cadeiras disponíveis';
$string['by'] = 'Por';
$string['bydate'] = 'Data do evento';
$string['byname'] = 'Nome';
$string['bysection'] = 'Tópico/Semana';
$string['cancelledon'] = 'Cancelado';
$string['checkclashes'] = 'Verifique os conflitos de locais e horáriosl';
$string['clashesreport'] = 'Relatório de conflitos';
$string['cleanview'] = 'Exibir somente as reservas atuais';
$string['close'] = 'Fechar';
$string['closed'] = 'Fechado';
$string['configautohide'] = 'Esta opção define quando as reservas devem ser ocultadas da lista de reservas (mod/reservation/index.php). Isto pode ser útil se usado com listas públicas, ordenadas para exibir uma lista limpa.';
$string['configcheckclashes'] = 'Habilite o botão "Conferir local e horário com conflitos" na página de edição de reservas';
$string['configdownload'] = 'Esta opção define o formato do arquivo de download padrão para todas as listas de solicitações e reservas.';
$string['configfields'] = 'Esta opção configuração define quais campos serão mostrados no formulário de reservas';
$string['configmanualusers'] = 'Esta opção define qual lista de usuários deve ser exibida no menu suspenso usado para selecionar usuários manualmente.';
$string['configmaxoverbook'] = 'Esta opção define a porcentagem máxima de reservas acima do permitido';
$string['configmaxrequests'] = 'Definir o limite do menu suspenso na página de edição da reserva';
$string['configminduration'] = 'Esta opção indica a duração mínima para um evento reservado. É utilizada para eventos que não foram informados data/hora finais para verificar a disponibilidade de horário e local';
$string['configoverbookstep'] = 'Esta opção define a granularidade do percentual da reserva excedente. Pode ser definidas com menor ou maior granularidade';
$string['configpubliclists'] = 'Esta opção define se as listas de reservas são públicas (podem ser visualizadas sem login) ou não.';
$string['configsortby'] = 'Esta opção define como a lista de reservas deve ser classificada classificada.';
$string['configsublimits'] = 'Esta opção defini o número de linhas de regras de sublimites apresentada na página de edição de reserva';
$string['description'] = 'Descrição';
$string['duration10h'] = '10 horas';
$string['duration10min'] = '10 minutos';
$string['duration11h'] = '11 horas';
$string['duration12h'] = '12 horas';
$string['duration15min'] = '15 minutos';
$string['duration20min'] = '20 minutos';
$string['duration2h'] = '2 horas';
$string['duration30min'] = '30 minutos';
$string['duration3h'] = '3 horas';
$string['duration45min'] = '45 minutos';
$string['duration4h'] = '4 horas';
$string['duration5h'] = '5 horas';
$string['duration5min'] = '5 minutos';
$string['duration60min'] = '60 minutos';
$string['duration6h'] = '6 horas';
$string['duration7h'] = '7 horas';
$string['duration8h'] = '8 horas';
$string['duration90min'] = '90 minutos';
$string['duration9h'] = '9 horas';
$string['enablenote'] = 'Ativar anotação de usuários';
$string['equal'] = 'igual a';
$string['err_sublimitsgreater'] = 'A soma dos sublimites é maior que o pedido permitido máximo';
$string['err_timeendlower'] = 'A data final definida para o evento é anterior a data de início';
$string['err_timeopengreater'] = 'A data definida para início da reserva é posterior a data de término';
$string['eventsettings'] = 'Configurações do evento';
$string['explainconfig'] = 'Os administradores podem definir aqui as configurações globais do módulo de reserva';
$string['fields'] = 'Campos exibidos';
$string['fullview'] = 'Exibir também as reservas excluídas';
$string['gradedmail'] = '{$a->teacher} postou algum comentário sobre a sua
reserva \'{$a->reservation}\'

Você pode visualizá-los aqui:

     {$a->url}';
$string['gradedmailhtml'] = '{$a->teacher} postou algum comentário sobre a sua reserva \'<i>{$a->reservation}</i>\'<br /><br />
Você pode verificar <a href=\\"{$a->url}\\">aqui</a>.';
$string['location'] = 'Local';
$string['locations'] = 'Gerenciar locais';
$string['locationslist'] = 'Lista de locais';
$string['mail'] = 'A reserva \'{$a->reservation}\' foi fechada.

Você pode baixar lista de reservas de:

     {$a->url}';
$string['mailhtml'] = 'A reserva <em>{$a->reservation}</em> foi encerrada.<br /><br />
Você pode baixar a lista de reservas neste endereço <a href="{$a->url}"></a>.';
$string['manualusers'] = 'Para reservas manuais exibir usuários do';
$string['maxoverbook'] = 'Porcentagem máxima de reservas excedentes';
$string['maxrequest'] = 'Máximo de reservas';
$string['minduration'] = 'Duração mínima do evento';
$string['modulename'] = 'Reservas';
$string['modulenameplural'] = 'Reservas';
$string['noclashes'] = 'Não foram encontrados conflitos de local e horário';
$string['nolimit'] = 'Limite de reservas esgotado';
$string['nomorerequest'] = 'Não há mais lugares disponíveis';
$string['nooverbook'] = 'Não há reservas excedentes';
$string['note'] = 'Nota';
$string['noteachers'] = 'Não há professores disponíveis';
$string['notequal'] = 'não é igual a';
$string['notopened'] = 'Fechado';
$string['novalues'] = 'Campo não preenchido';
$string['number'] = 'Número da reserva';
$string['otherlocation'] = 'Outro local especifico';
$string['overbook'] = 'Reservas excedentes';
$string['overbookonly'] = 'Lugares disponíveis apenas para reservas excedentes';
$string['overbookstep'] = 'Restam apenas reservas excedentes';
$string['pluginadministration'] = 'Administrar reservas';
$string['pluginname'] = 'Reservas';
$string['publiclists'] = 'Lista pública das reservas';
$string['requestoverview'] = 'Visão geral de solicitações';
$string['requests'] = 'Solicitações';
$string['reservation:downloadrequests'] = 'Lista de solicitações disponíveis para baixar';
$string['reservation:grade'] = 'Disponível  para atribuição de nota';
$string['reservation:manualdelete'] = 'Permitir exclusão de solicitações de outros usuários';
$string['reservation:manualreserve'] = 'Permitir envio de solicitações para outros usuários';
$string['reservation:reserve'] = 'Permitir envio somente de solicitações do próprio usuário';
$string['reservation:viewnote'] = 'Permitir visualizar anotações das solicitações';
$string['reservation:viewrequest'] = 'Permitir visualizar a lista de solicitações';
$string['reservationcancelled'] = 'Reserva cancelada';
$string['reservationclosed'] = 'Reserva fechada';
$string['reservationnotopened'] = 'Reservas ainda não abertas';
$string['reservations'] = 'Reservas';
$string['reservationsettings'] = 'Configurações das reservas';
$string['reserve'] = 'Reserva';
$string['reservecancel'] = 'Cancelar reserva';
$string['reserved'] = 'Reservado';
$string['reservedon'] = 'Reservado em';
$string['resetreservation'] = 'Remover todas as reservas';
$string['save'] = 'Salvar nota';
$string['selectvalue'] = 'Selecione um dos valores disponíveis';
$string['showrequest'] = 'Permitir aos usuários visualizarem a lista de solicitações';
$string['sortby'] = 'Ordenar lista de reservas por';
$string['sublimit'] = 'Sublimite {$a}';
$string['sublimitrules'] = 'Regras para sublimites de reservas';
$string['sublimits'] = 'Sublimites para reservas';
$string['timeclose'] = 'Reserva finalizada em';
$string['timeend'] = 'Data final';
$string['timeopen'] = 'Reserva iniciada em';
$string['timestart'] = 'Data de início';
$string['with'] = 'com';
$string['withselected'] = 'Com selecionado...';
$string['yourscale'] = 'Sua nota referente a essa reserva é: {$a}';
