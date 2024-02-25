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
 * Strings for component 'question', language 'pt_br', version '2.0'.
 *
 * @package     question
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminreport'] = 'Reportar possíveis problemas no banco de questões.';
$string['availableq'] = 'Disponível?';
$string['badbase'] = 'Base errada antes de **: {$a}**';
$string['broken'] = 'Este é um "link quebrado", ele aponta para um arquivo inexistente.';
$string['byandon'] = 'por <em>{$a->user}</em> em <em>{$a->time}</em>';
$string['cannotcopybackup'] = 'Não foi possível copiar o arquivo de backup';
$string['cannotcreate'] = 'Não foi possível criar uma nova entrada na tabela question_attempts';
$string['cannotcreatepath'] = 'Não se pode criar o caminho: {$a}';
$string['cannotdeletecate'] = 'Você não pode excluir essa categoria, ela é a categoria padrão para este contexto.';
$string['cannotenable'] = 'O tipo de questão {$a} não pode ser criado diretamente.';
$string['cannotfindcate'] = 'Não foi possível encontrar o registro da categoria.';
$string['cannotfindquestionfile'] = 'Não foi possível encontrar o arquivo de perguntas no zip';
$string['cannotgetdsfordependent'] = 'Não foi possível obter o conjunto de dados especificado para uma pergunta dependente de conjunto de dados! (pergunta: {$a->id}, datasetitem: {$a->item})';
$string['cannotgetdsforquestion'] = 'Não foi possível obter o conjunto de dados para uma questão calculada! (questão: {$a})';
$string['cannothidequestion'] = 'Não foi capaz de esconder a pergunta';
$string['cannotimportformat'] = 'Desculpe, a importação deste formato ainda não foi desenvolvida!';
$string['cannotinsertquestion'] = 'Não foi possível inserir nova questão!';
$string['cannotinsertquestioncatecontext'] = 'Não foi possível inserir a nova categoría de perguntas {$a->cat} contextid ilegal {$a->ctx}';
$string['cannotloadquestion'] = 'Não foi possível carregar questão';
$string['cannotmovequestion'] = 'Você não pode utilizar este script para mover questões que têm arquivos associados de diferentes áreas.';
$string['cannotopenforwriting'] = 'Impossível abrir para escrever: {$a}';
$string['cannotpreview'] = 'Você não pode pré-visualizar estas questões!';
$string['cannotretrieveqcat'] = 'Não foi possível recuperar a categoria de pergunta';
$string['cannotunhidequestion'] = 'Falha ao exibir a pergunta.';
$string['cannotunzip'] = 'Não foi possível descompactar o arquivo.';
$string['cannotwriteto'] = 'Não foi possível escrever questões exportadas para {$a}';
$string['categorycurrent'] = 'Categoria atual';
$string['categorycurrentuse'] = 'Usar esta categoria';
$string['categorydoesnotexist'] = 'Esta categoria não existe';
$string['categorymoveto'] = 'Gravar na categoria';
$string['changepublishstatuscat'] = '<a href="{$a->caturl}">A categoria "{$a->name}"</a> no curso "{$a->coursename}" terá seu status de compartilhamento trocado de <strong>{$a->changefrom} para {$a->changeto}</strong>.';
$string['chooseqtypetoadd'] = 'Escolha um tipo de questão para adicionar';
$string['clicktoflag'] = 'Clique para marcar esta pergunta';
$string['clicktounflag'] = 'Clique para desmarcar esta pergunta';
$string['contexterror'] = 'Você não deveria estar aqui se você não está movendo uma categoria para outro contexto.';
$string['copy'] = 'Copiar de {$a} e mudar links.';
$string['created'] = 'Criado';
$string['createdby'] = 'Criado por';
$string['createdmodifiedheader'] = 'Criado/Salvo pela última vez';
$string['createnewquestion'] = 'Criar uma nova questão ...';
$string['cwrqpfs'] = 'Questões aleatórias selecionando questões de subcategorias.';
$string['cwrqpfsinfo'] = '<p>Durante a migração para o Moodle 1.9 iremos separar categorias de questões em diferentes contextos. Algumas categorias de questões e algumas questões terão seu status de compartilhamento alterado. Isto é necessário em um caso raro quando uma ou mais questões \'aleatória\' em um questionário são configuradas para selecionar de uma mistura de categorias compartilhadas e não compartilhadas(como é o caso neste site).Isto acontece quando uma questão \'aleatória\' é configurada para selecionar de subcategorias e uma ou mais subcategorias tem status diferentes de compartilhamento com a categoria ascendente na qual a questão \'aleatória\' é criada.</p><p>As categorias de questões seguintes, das quais as questões \'aleatórias\' em categorias ascendentes são selecionadas, terão o seu status de compartilhamento alterado para o mesmo status de compartilhamento da categoria que contém a questão \'aleatória\' quando da migração para o Moodle 1.9. As categorias seguintes terão seus status de compartilhamento alterado. Questões que são afetadas continuarão a funcionar em todos os questionários até que você as remova destes questionários.</p>';
$string['cwrqpfsnoprob'] = 'Nenhuma categoria de questões no seu site é afetada pelo problema de \'Selecionar questões aleatórias de subcategorias\'.';
$string['defaultfor'] = 'Padrão para {$a}';
$string['defaultinfofor'] = 'A categoria padrão para as questões compartilhadas no contexto \'{$a}\'.';
$string['deletecoursecategorywithquestions'] = 'Existem questões deste banco associadas a esta categoria de curso. Se você continuar, serão excluídas. Use a interface de administração do banco de questões para transferir as questões.';
$string['disabled'] = 'Desativado';
$string['disterror'] = 'A distribuição {$a} causou problemas';
$string['donothing'] = 'Não copie, mova arquivos ou mude os links.';
$string['editcategories'] = 'Editar categorias';
$string['editcategories_help'] = 'Em vez de manter todas as questões em uma lista grande, você pode criar categorias e sub-categorias.

Cada categoria possui um contexto que determina onde a questão pode ser usada:

*Contexto da atividade - Questões somente disponíveis no módulo da atividade
*Contexto do curso - Questões disponíveis em todos os módulos de atividade daquele curso
*Contexto da categoria de curso - Questões disponíveis em todos os módulos de atividade de todos os cursos daquela categoria

Categorias também são utilizadas em questionários com questões aleatórias que são selecionadas de uma categoria particular.';
$string['editcategories_link'] = 'question/category';
$string['editingcategory'] = 'Editando a categoria';
$string['editingquestion'] = 'Editando uma questão';
$string['editthiscategory'] = 'Editar esta categoria';
$string['emptyxml'] = 'Erro desconhecido - imsmanifest.xm vazio';
$string['enabled'] = 'Ativado';
$string['erroraccessingcontext'] = 'Não pode acessar o contexto';
$string['errordeletingquestionsfromcategory'] = 'Erro excluindo questões da categoria {$a}.';
$string['errorduringpost'] = 'Erro ocorreu durante o pós-processamento!';
$string['errorduringpre'] = 'Erro ocorreu durante o pré-processamento!';
$string['errorduringproc'] = 'Erro ocorreu durante o processamento!';
$string['errorduringregrade'] = 'Não foi possível reavaliar a questão {$a->qid}, indo para o estado {$a->stateid}.';
$string['errorfilecannotbecopied'] = 'Erro: impossível copiar arquivo {$a}.';
$string['errorfilecannotbemoved'] = 'Erro: impossível mover arquivo {$a}.';
$string['errorfileschanged'] = 'Erro: os arquivos ligados às questões foram mudados depois que o formulário foi mostrado.';
$string['errormanualgradeoutofrange'] = 'A nota {$a->grade} não está entre 0 e {$a->maxgrade} na questão {$a->name}. A pontuação e o comentário não foram salvos.';
$string['errormovingquestions'] = 'Erro movendo as questões com id {$a}.';
$string['errorpostprocess'] = 'Erro ocorreu durante o pós-processamento!';
$string['errorpreprocess'] = 'Erro ocorreu durante o pré-processamento!';
$string['errorprocess'] = 'Erro ocorreu durante o processamento!';
$string['errorprocessingresponses'] = 'Erro durante o processamento das respostas.';
$string['errorsavingcomment'] = 'Erro salvando o comentário da questão {$a->name}.';
$string['errorupdatingattempt'] = 'Erro atualizando a tentativa {$a->id}.';
$string['exportcategory'] = 'Exportar categoria';
$string['exportcategory_help'] = '<h2>Categoria de Exportação</h2>

<p>A lista <b>Categoria:</b> que se abre é usada para selocionar a categoria da qual as questões para exportação serão tiradas.</p>

<p>Alguns formatos de importação (GIFT e Formato XML) permitem a categoria ser incluída no arquivo gravado, possibilitando que as categorias (opcionalmente) sejam recriadas na importação. Para que esta informação seja incluída a caixa <b>para o arquivo</b> deve ser marcada.</p>';
$string['exporterror'] = 'Erros ocorreram durante a exportação!';
$string['exportfilename'] = 'questões';
$string['exportnameformat'] = '%Y%m%d-%H%M';
$string['exportquestions'] = 'Exportar questões para arquivo';
$string['exportquestions_help'] = 'Esta função permite exportar completamente uma categoria (e quaisquer subcategorias) de questões para um arquivo. Por favor, note que, dependendo do tipo de arquivo selecionado, alguns tipos de questões e alguns dados das questões podem não ser exportados.';
$string['exportquestions_link'] = 'question/export';
$string['filecantmovefrom'] = 'Os arquivos de questões não podem ser movidos porque você não tem permissão para remover arquivos do local do qual você está tentando mover questões.';
$string['filecantmoveto'] = 'Os arquivos de questões não podem ser movidos ou copiados porque você não tem permissão para adicionar arquivos no local para onde está tentando mover questões.';
$string['filesareacourse'] = 'a área de arquivos do curso';
$string['filesareasite'] = 'a área de arquivos do site';
$string['filestomove'] = 'Mover / copiar arquivos para {$a}?';
$string['flagged'] = 'Marcada';
$string['flagthisquestion'] = 'Marcar esta pergunta';
$string['formquestionnotinids'] = 'O formulário continha questões que não estavam entre os questionids';
$string['fractionsnomax'] = 'Uma das respostas deve ter valor de 100% para que seja possível obter a nota total.';
$string['getcategoryfromfile'] = 'Obter categoria do arquivo';
$string['getcontextfromfile'] = 'Obter contexto do arquivo';
$string['ignorebroken'] = 'Ignorar links quebrados';
$string['importcategory'] = 'Importar categoria';
$string['importcategory_help'] = '<p>A lista <b>Categoria:</b> que se abre é usada para selecionar a categoria na qual as questões da Importação serão colocadas.</p>

<p>Alguns formatos de importação (GIFT e Formato XML) permitem que a categoria seja específicada no arquivo de importação. Para que isto aconteça a caixa <b>vindo do arquivo</b> deve ser marcada. Se não for, as questões irão para as categorias selecionadas independente de qualquer instrução dentro do arquivo.</p>

<p>Quando categorias são especificadas dentro do arquivo de importação e não existem, elas são criadas automáticamente.</p>';
$string['importquestions'] = 'Importar questões do arquivo';
$string['importquestions_help'] = 'Esta função possibilita a importação de perguntas em distintos formatos por meio de um arquivo de texto. Observe que o arquivo deve ter a codificação UTF-8.';
$string['importquestions_link'] = 'question/import';
$string['impossiblechar'] = 'Detectado o caractere impossível {$a} como parênteses';
$string['invalidarg'] = 'Nenhum argumento válido fornecido ou configuração incorreta do servidor';
$string['invalidcategoryidforparent'] = 'Id inválido para categoria pai!';
$string['invalidcategoryidtomove'] = 'Id inválido da categoria a mover!';
$string['invalidconfirm'] = 'String de confirmação estava incorreta';
$string['invalidcontextinhasanyquestions'] = 'Contexto inválido para question_context_has_any_questions.';
$string['invalidwizardpage'] = 'A página de ajuda é incorreta ou não está especificada!';
$string['lastmodifiedby'] = 'Última modificação por';
$string['linkedfiledoesntexist'] = 'Arquivo associado {$a} não existe';
$string['makechildof'] = 'Criar descendente de \'{$a}\'';
$string['maketoplevelitem'] = 'Mover para o nível mais alto';
$string['matchgrades'] = 'Avaliações associadas';
$string['matchgrades_help'] = '<p>As notas importadas <b>devem</b> coincidir com uma das notas
válidas da lista predeterminada, como abaixo...</p>

<ul>
  <li>100%</li>
  <li>90%</li>
  <li>80%</li>
  <li>75%</li>
  <li>70%</li>
  <li>66.666%</li>
  <li>60%</li>
  <li>50%</li>
  <li>40%</li>
  <li>33.333</li>
  <li>30%</li>
  <li>25%</li>
  <li>20%</li>
  <li>16.666%</li>
  <li>14.2857</li>
  <li>12.5%</li>
  <li>11.111%</li>
  <li>10%</li>
  <li>5%</li>
  <li>0%</li>
</ul>

<p>Valores negativos da lista também são
permitidos.</p>

<p>Há duas configurações para esta chave. Elas afetam como
a rotina de importação trata os valores que não coincidem <strong>exatamente</strong>
com um dos valores da lista acima.</p>

<ul>
  <li><strong>Erro se a nota não está na lista</strong><br />
  Se a pergunta contem qualquer nota não encontrada na lista um erro é mostrado
  e a pergunta não será importada.</li>
  <li><strong>Nota mais próxima se não está na lista</strong><br />

  Se a nota não coincide com um valor da lista, a nota é alterada
  para o valor mais próximo da lista.</li>
</ul>

<p><i>Nota: alguns formatos customizados de importação escrevem diretamente no banco de dados e podem ignorar esta checagem.</i></p>';
$string['missingcourseorcmid'] = 'É necessário fornecer o courseid ou cmid para print_question.';
$string['missingcourseorcmidtolink'] = 'É necessário fornecer o courseid ou cmid para get_question_edit_link.';
$string['missingimportantcode'] = 'Neste tipo de questão falta um código importante: {$a}.';
$string['missingoption'] = 'A questão cloze {$a} está sem opções';
$string['modified'] = 'Salvo pela última vez';
$string['move'] = 'Mover de {$a} e mudar links.';
$string['movecategory'] = 'Mover categoria';
$string['movedquestionsandcategories'] = 'Questões e categorias de questões movidas de {$a->oldplace} para {$a->newplace}.';
$string['movelinksonly'] = 'Apenas mudar para onde os links apontam, não mover ou copiar arquivos.';
$string['moveq'] = 'Mover questões(s)';
$string['moveqtoanothercontext'] = 'Mover questão para outro contexto.';
$string['movingcategory'] = 'Movendo categoria';
$string['movingcategoryandfiles'] = 'Você tem certeza que deseja mover a categoria {$a->name} e todas as categorias descendentes para o contexto "{$a->contextto}"?<br /> Foram detectados {$a->urlcount} arquivos ligados a questões em {$a->fromareaname}, você gostaria de copiar ou mover isto para {$a->toareaname}?';
$string['movingcategorynofiles'] = 'Você tem certeza que deseja mover a categoria "{$a->name}" e todas as categorias descendentes para o contexto "{$a->contextto}"?';
$string['movingquestions'] = 'Movendo questões e quaisquer arquivos';
$string['movingquestionsandfiles'] = 'Você tem certeza que deseja mover a(s) questõe(s) {$a->questions} para o contexto de <strong>"{$a->tocontext}"</strong>?<br /> Foram detectados <strong>{$a->urlcount} arquivos</strong> ligados a esta(s) questão(s) em {$a->fromareaname}, você quer copiar ou mover isto para {$a->toareaname}?';
$string['movingquestionsnofiles'] = 'Você tem certeza que deseja mudar as questões {$a->questions} para o contexto <strong>"{$a->tocontext}"</strong>?<br />  <strong>Não existem arquivos</strong> ligados a estas questões em {$a->fromareaname}.';
$string['needtochoosecat'] = 'Você precisa escolher uma categoria para mover as questões, ou então clicar em \'cancelar\'.';
$string['nocate'] = 'Categoría {$a} inexistente!';
$string['nopermissionadd'] = 'Você não tem permissão para adicionar questões aqui.';
$string['nopermissionmove'] = 'Você não tem permissão para remover estas questões. Você pode salvar a questão nesta categoria ou salvá-la como nova questão.';
$string['noprobs'] = 'Nenhum problema encontrado no seu banco de dados de questões.';
$string['notenoughdatatoeditaquestion'] = 'Não foram especificados: id da questão, id da categoria e tipo de questão.';
$string['notenoughdatatomovequestions'] = 'Você precisa fornecer os ids das questões que você quer mover.';
$string['notflagged'] = 'Não marcada';
$string['novirtualquestiontype'] = 'Nenhum tipo de questão virtual para o tipo de questão {$a}';
$string['parentcategory'] = 'Categoria mãe';
$string['parentcategory_help'] = 'A categoria mãe é aquela na qual a nova categoria será colocada. "Início" significa qua categoria não está contida por nenhuma outra categoria. Contextos de categorias são mostrados em negrito. Deve existir pelo menos uma categoria em cada contexto.';
$string['parentcategory_link'] = 'question/category';
$string['parenthesisinproperclose'] = 'Os parênteses antes de ** não foram fechados corretamente em {$a}**';
$string['parenthesisinproperstart'] = 'Os parênteses antes de ** não foram abertos corretamente em {$a}**';
$string['penaltyfactor'] = 'Fator de penalidade';
$string['penaltyfactor_help'] = '<P>Pode-se especificar qual a fração da nota obtida deverá ser subtraída para
cada resposta errada. Isto somente é relevante se o questionário estiver rodando no modo adaptativo
onde o estudante pode fazer repetidas respostas à pergunta. O fator de
penalidade deverá ser um número entre 0 e 1. Um fator de penalidade de 1 significa
que o estudante tem que conseguir a resposta correta na primeira resposta para obter qualquer
crédito por isso no total. Um fator de penalidade de 0 significa que o estudante pode tentar tantas vezes quantas desejar e ainda obter as marcas totais.</P>';
$string['permissionedit'] = 'Editar essa questão';
$string['permissionmove'] = 'Mover essa questão';
$string['permissionsaveasnew'] = 'Salvar essa como uma nova questão';
$string['permissionto'] = 'Você tem permissão para:';
$string['published'] = 'compartilhado';
$string['qtypeveryshort'] = 'T';
$string['questionaffected'] = '<a href="{$a->qurl}">Questão "{$a->name}" ({$a->qtype})</a> está nesta categoria de questão mas também está na <a href="{$a->qurl}">questão "{$a->quizname}"</a> no curso "{$a->coursename}".';
$string['questionbank'] = 'Banco de questões';
$string['questioncategory'] = 'Categoria de questões';
$string['questioncatsfor'] = 'Categorias de questão para \'{$a}\'';
$string['questiondoesnotexist'] = 'Esta questão não existe';
$string['questionname'] = 'Nome da questão';
$string['questionsaveerror'] = 'Ocorrerem erros durante salvar questão - ({$a})';
$string['questionsmovedto'] = 'Questões ainda utilizadas movidas para "{$a}" na categoria de curso correspondente.';
$string['questionsrescuedfrom'] = 'Questões copiadas do contexto {$a}.';
$string['questionsrescuedfrominfo'] = 'Estas questões (algumas podem estar escondidas) foram salvas quando o contexto {$a} foi excluído, porque ainda são utilizadas por alguns questionários ou outras atividades.';
$string['questiontype'] = 'Tipo de questão';
$string['questionuse'] = 'Usar questão nessa atividade';
$string['saveflags'] = 'Gravar o estado das marcas';
$string['selectacategory'] = 'Selecione uma categoria:';
$string['selectaqtypefordescription'] = 'Selecione um tipo de questão para ver a sua descrição.';
$string['selectquestionsforbulk'] = 'Selecionar perguntas para ações em massa';
$string['shareincontext'] = 'Compartilhar o contexto com {$a}';
$string['stoponerror'] = 'Parar se houver erro';
$string['stoponerror_help'] = 'Esta opção determina se o processo de importação deve parar quando um erro é detectado, resultando em nenhuma questão importada, ou se quaisquer perguntas que contenham erros sejam ignoradas e somente perguntas válidas sejam importadas.';
$string['tofilecategory'] = 'Escrever categoria em arquivo';
$string['tofilecontext'] = 'Escrever contexto em arquivo';
$string['unknown'] = 'Desconhecido';
$string['unknownquestiontype'] = 'Tipo de questão desconhecido: {$a}.';
$string['unknowntolerance'] = 'Tipo de tolerância desconhecido {$a}';
$string['unpublished'] = 'Não-compartilhado';
$string['upgradeproblemcategoryloop'] = 'Problema atualizando categorias de questões. Loop na árvore de categorias. O id da categoria com problemas é {$a}.';
$string['upgradeproblemcouldnotupdatecategory'] = 'Não foi possível modificar a categoria {$a->name} ({$a->id}).';
$string['upgradeproblemunknowncategory'] = 'Problema atualizando categorias de questões. A categoria {$a->id} aponta para {$a->parent},que não existe. O problema foi resolvido apontando para uma categoria existente.';
$string['wrongprefix'] = 'Erroneamente formatado nameprefix {$a}';
$string['youmustselectaqtype'] = 'Você deve selecionar um tipo de questão.';
$string['yourfileshoulddownload'] = 'O download do seu arquivo deve começar automaticamente, caso contrário <a href="{$a}">clique aqui</a>.';
