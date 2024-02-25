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
 * Strings for component 'quiz_grading', language 'pt_br', version '2.0'.
 *
 * @package     quiz_grading
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotloadquestioninfo'] = 'Não é possível carregar informações específicas do tipo de pergunta';
$string['essayonly'] = 'As seguintes questões precisam ser classificadas manualmente';
$string['gradeall'] = 'Avaliar todas as {$a} tentativas';
$string['graded'] = '(avaliados)';
$string['gradenextungraded'] = 'Avaliar as próximas {$a} tentativas';
$string['gradeungraded'] = 'Avaliar todas as {$a} tentativas';
$string['grading'] = 'Avaliação manual';
$string['gradingall'] = 'Todas as {$a} tentativas desta questão.';
$string['gradingattempt'] = 'Tentativa número {$a->attempt} de {$a->fullname}.';
$string['gradingnextungraded'] = 'Próximas {$a} tentativas';
$string['gradingnotallowed'] = 'Você não tem permissão para avaliar manualmente este questionário.';
$string['gradingreport'] = 'Relatório de avaliação manual';
$string['gradingungraded'] = '{$a} tentativas não avaliadas';
$string['gradinguser'] = 'Tentativas de {$a}';
$string['invalidattemptid'] = 'Não existe ID dessa tentativa';
$string['invalidquestionid'] = 'Pergunta avaliaável com identidade {$a} não encontrada';
$string['questiontitle'] = 'Questão {$a->number} : "{$a->name}" ({$a->openspan}{$a->gradedattempts}{$a->closespan} / {$a->totalattempts} tentativas {$a->openspan}avaliadas{$a->closespan}).';
